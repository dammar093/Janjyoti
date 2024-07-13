
// humburger mene show and hide

let menu=document.getElementById('menu-bar');

menu.addEventListener('click',(e)=>{
  e.stopPropagation();
  let menuBox=document.querySelector('.mobile-menu');
  menuBox.classList.toggle('mobile-menu-display');
  let atr  = menu.getAttribute('class');
  if(atr === 'ri-menu-line menu-bar'){
    menu.setAttribute('class','ri-close-line menu-bar');
  }
  else{
    menu.setAttribute('class','ri-menu-line menu-bar');
  }
});
