/* One shared header, two page-level presentation modes. */
(() => {
  'use strict';
  // Articles start compact in the server-rendered HTML; no jumping on load.
  if (document.body.dataset.headerMode === 'compact') return;
  let pending = false;
  function update() {
    document.body.classList.toggle('header-compact', window.scrollY > 90);
    pending = false;
  }
  window.addEventListener('scroll', () => {
    if (!pending) { pending = true; window.requestAnimationFrame(update); }
  }, { passive: true });
  update();
})();
