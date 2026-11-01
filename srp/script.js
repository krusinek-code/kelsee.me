const audio = document.querySelector('#audio');
const audioFile = document.querySelector('#audioFile');
const playButton = document.querySelector('#playButton');
const seek = document.querySelector('#seek');
const timeDisplay = document.querySelector('#timeDisplay');
const trackName = document.querySelector('#trackName');
const playerNote = document.querySelector('#playerNote');
const canvas = document.querySelector('#visualizer');
const ctx = canvas.getContext('2d');
const audioGate = document.querySelector('#audioGate');
const enterWithAudio = document.querySelector('#enterWithAudio');
const enterSilently = document.querySelector('#enterSilently');

let audioContext;
let analyser;
let source;
let objectUrl;
let animationFrame;

const formatTime = (seconds) => {
  if (!Number.isFinite(seconds)) return '--:--';
  const minutes = Math.floor(seconds / 60);
  const remainder = Math.floor(seconds % 60);
  return `${String(minutes).padStart(2, '0')}:${String(remainder).padStart(2, '0')}`;
};

function drawIdle() {
  const width = canvas.width;
  const height = canvas.height;
  ctx.clearRect(0, 0, width, height);
  const gradient = ctx.createLinearGradient(0, 0, width, 0);
  gradient.addColorStop(0, '#64f6ff');
  gradient.addColorStop(.6, '#a78bfa');
  gradient.addColorStop(1, '#ff4da6');
  ctx.strokeStyle = gradient;
  ctx.lineWidth = 2;
  ctx.beginPath();
  for (let x = 0; x <= width; x += 8) {
    const y = height / 2 + Math.sin((x / width) * Math.PI * 8) * 7 * Math.sin(x / 83);
    if (x === 0) ctx.moveTo(x, y); else ctx.lineTo(x, y);
  }
  ctx.stroke();
}

function initializeAudioGraph() {
  if (audioContext) return;
  audioContext = new AudioContext();
  analyser = audioContext.createAnalyser();
  analyser.fftSize = 256;
  source = audioContext.createMediaElementSource(audio);
  source.connect(analyser);
  analyser.connect(audioContext.destination);
}

function drawAudio() {
  const data = new Uint8Array(analyser.frequencyBinCount);
  analyser.getByteFrequencyData(data);
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  const barWidth = canvas.width / data.length;
  data.forEach((value, index) => {
    const barHeight = (value / 255) * canvas.height * .86;
    const hue = 184 + (index / data.length) * 130;
    ctx.fillStyle = `hsla(${hue}, 94%, 68%, .85)`;
    ctx.fillRect(index * barWidth, (canvas.height - barHeight) / 2, Math.max(1, barWidth - 2), barHeight);
  });
  animationFrame = requestAnimationFrame(drawAudio);
}

function closeAudioGate() {
  audioGate.classList.add('is-closing');
  document.body.classList.remove('gate-open');
  window.setTimeout(() => audioGate.remove(), 260);
}

enterWithAudio.addEventListener('click', async () => {
  initializeAudioGraph();
  if (audioContext.state === 'suspended') await audioContext.resume();
  try {
    await audio.play();
    playButton.textContent = 'Ⅱ';
    playButton.setAttribute('aria-label', 'Pause audio');
    cancelAnimationFrame(animationFrame);
    drawAudio();
  } catch {
    playerNote.textContent = 'Autoplay was blocked. Use the play button to begin.';
  }
  closeAudioGate();
});

enterSilently.addEventListener('click', () => {
  audio.pause();
  closeAudioGate();
  playButton.focus();
});

audioFile.addEventListener('change', (event) => {
  const file = event.target.files?.[0];
  if (!file) return;
  if (objectUrl) URL.revokeObjectURL(objectUrl);
  objectUrl = URL.createObjectURL(file);
  audio.src = objectUrl;
  trackName.textContent = file.name.replace(/\.[^.]+$/, '');
  playerNote.textContent = 'Local signal loaded. Nothing was uploaded.';
  playButton.disabled = false;
  seek.disabled = false;
});

playButton.addEventListener('click', async () => {
  initializeAudioGraph();
  if (audioContext.state === 'suspended') await audioContext.resume();
  if (audio.paused) {
    await audio.play();
    playButton.textContent = 'Ⅱ';
    playButton.setAttribute('aria-label', 'Pause audio');
    cancelAnimationFrame(animationFrame);
    drawAudio();
  } else {
    audio.pause();
    playButton.textContent = '▶';
    playButton.setAttribute('aria-label', 'Play audio');
    cancelAnimationFrame(animationFrame);
    drawIdle();
  }
});

audio.addEventListener('loadedmetadata', () => {
  timeDisplay.textContent = `00:00 / ${formatTime(audio.duration)}`;
});

audio.addEventListener('timeupdate', () => {
  if (audio.duration) seek.value = (audio.currentTime / audio.duration) * 100;
  timeDisplay.textContent = `${formatTime(audio.currentTime)} / ${formatTime(audio.duration)}`;
});

audio.addEventListener('ended', () => {
  playButton.textContent = '▶';
  playButton.setAttribute('aria-label', 'Play audio');
  cancelAnimationFrame(animationFrame);
  drawIdle();
});

seek.addEventListener('input', () => {
  if (audio.duration) audio.currentTime = (Number(seek.value) / 100) * audio.duration;
});

drawIdle();
