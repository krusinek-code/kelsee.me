// Optional author prompts can be hidden to read the finished composition.
(() => {
  const toggle = document.getElementById('artifact-toggle');
  if (!toggle) return;
  toggle.hidden = false;
  toggle.addEventListener('click', () => {
    const hidden = document.body.classList.toggle('hide-artifacts');
    toggle.setAttribute('aria-pressed', String(!hidden));
    toggle.textContent = hidden ? 'Show artifact prompts' : 'Hide artifact prompts';
  });
})();
