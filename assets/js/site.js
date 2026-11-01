/* One shared behavior for the fixed, docking identity. */
(() => {
  'use strict';
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
