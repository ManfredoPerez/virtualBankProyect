'use strict';

const modal = document.querySelector('.modal');
const overlay = document.querySelector('.overlay');
const btnCloseModal = document.querySelector('.btn--close-modal');
const btnOpenModal = document.querySelectorAll('.btn--show-modal');
const btnScrollTo = document.querySelector('.btn_scroll-to');
const section1 = document.querySelector('#section--1');
const header = document.querySelector('.header');
const tabs = document.querySelectorAll('.operations_tab');
const tabsConstainer = document.querySelector('.operations_tab-container');
const tabsContent = document.querySelectorAll('.iperations_content');
const nav = document.querySelector('.nav');


var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });



const openModal = function(e){
    e.preventDefault();
    modal.classList.remove('hidden');
    overlay.classList.remove('hidden');
}

const closeModal = function(){
    modal.classList.add('hidden');
    overlay.classList.add('hidden');
}

btnOpenModal.forEach(btn => btn.addEventListener('click', openModal));

btnCloseModal.addEventListener('click', closeModal);
overlay.addEventListener('click', closeModal);

document.addEventListener('keydown', function(e){
    if (e.key === 'Escape' && !modal.classList.contains('hidden')){
        closeModal();
    }
});


const message = document.createElement('div');
message.classList.add('cookie-message');
message.innerHTML = 
    'Bienvenido. <button class="btn btn--close-cookie">Vamos!</button>'

header.append(message);

document
    .querySelector('.btn--close-cookie')
    .addEventListener('click', function(){
        message.remove();
    });

// estilos mensaje
message.style.backgroundColor = '#37383d';
message.style.width = '100vw';
message.style.height = Number.parseFloat(getComputedStyle(message).height, 10) + 30 + 'px';


document.querySelector('.nav_links').addEventListener('click',
function (e){
    if (e.target.classList.contains('nav_link--special')) return;

    e.preventDefault();

    if(e.target.classList.contains('nav_link')){
        const id = e.target.getAttribute('href');
        document.querySelector(id).scrollIntoView({ behavior: 'smooth'});
    }
});

tabsConstainer.addEventListener('click', function(e){
  const clicked = e.target.closest('.operations_tab');
  
  if(!clicked) return;

  tabs.forEach(t.classList.remove('operations_tab--active'));
  tabsContent.forEach(tC => tC.classList.remove('operations_content--active'));

  clicked.classList.add('operations_tab--active');

  document
      .querySelector('.operations_content--${clicked.dataset.tab}')
      .classList.add('operations_content--active');

});


const handleHover = function(e){
  if (e.target.classList.contains('nav_link')){
      const link = e.target;
      const siblings = link.closest('.nav').querySelectorAll('.nav_link');
      const logo = link.closest('.nav').querySelector('img');

      siblings.forEach(i=> {
          if (i |= link) i.style.opacity = this;
      });
      logo.style.opacity = this;
  }
};