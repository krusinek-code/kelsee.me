(()=>{'use strict';const reduce=window.matchMedia('(prefers-reduced-motion: reduce)');const els=document.querySelectorAll('.reveal');if(!('IntersectionObserver'in window)||reduce.matches){els.forEach(e=>e.classList.add('visible'));}else{document.documentElement.classList.add('motion-ready');const observer=new IntersectionObserver(entries=>{entries.forEach(entry=>{if(entry.isIntersecting){entry.target.classList.add('visible');observer.unobserve(entry.target);}})},{threshold:.1,rootMargin:'0px 0px -25px 0px'});els.forEach(e=>observer.observe(e));}const progress=document.querySelector('.progress');const hero=document.querySelector('.hero');let scheduled=false;function update(){const max=Math.max(1,document.documentElement.scrollHeight-innerHeight);progress.style.transform=`scaleX(${Math.min(1,scrollY/max)})`;if(!reduce.matches&&hero){hero.style.setProperty('--hero-shift',`${Math.min(130,scrollY*.16)}px`);}scheduled=false;}function schedule(){if(!scheduled){requestAnimationFrame(update);scheduled=true;}}addEventListener('scroll',schedule,{passive:true});addEventListener('resize',schedule);update();
const chapterLinks=[...document.querySelectorAll('.chapter-links a')];
const targets=chapterLinks.map(link=>document.getElementById(link.hash.slice(1)));
if(chapterLinks.length&&targets.every(Boolean)){
  function markChapter(){
    let active=-1;
    const threshold=window.innerHeight*.4;
    targets.forEach((target,i)=>{if(target.getBoundingClientRect().top<=threshold)active=i;});
    chapterLinks.forEach((link,i)=>{if(i===active)link.setAttribute('aria-current','location');else link.removeAttribute('aria-current');});
  }
  addEventListener('scroll',markChapter,{passive:true});
  addEventListener('resize',markChapter);
  markChapter();
}
})();
