
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


// gallery slider

let nextBtn=document.getElementById('next');
let prevBtn=document.getElementById('prev');
let galleryCotainer=document.querySelector('.gallery');
let images =document.querySelectorAll('.gallery-image')

nextBtn.addEventListener('click',()=>{
  galleryCotainer.scrollLeft +=400;

});

prevBtn.addEventListener('click',()=>{
  galleryCotainer.scrollLeft -=400;
});

setInterval(()=>{
  galleryCotainer.scrollLeft+=400;
},3000);

