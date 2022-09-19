const menuOpt = document.querySelector('#menuOptions');
const menuList = document.querySelector('#menuLists');
const modal = document.querySelector('#modal');
const body = document.querySelectorAll('#body');
const modalShow = document.querySelector('#showModal');
const modalLoginClose = document.querySelector('#close-modal-login');
const modalRegisterClose = document.querySelector('#close-modal-register');
const registerBtn = document.querySelector('#registerBtn');
const signBtn = document.querySelector('#signBtn');
const loginModal = document.querySelector('.loginModal');
const registerModal = document.querySelector('.registerModal');

registerBtn.addEventListener('click', () =>{
  if(!loginModal.classList.contains('hidden')){
    loginModal.classList.add('hidden');
    registerModal.classList.remove('hidden');
  }
});

signBtn.addEventListener('click', () =>{
  if(!registerModal.classList.contains('hidden')){
    loginModal.classList.remove('hidden');
    registerModal.classList.add('hidden');
  }
});

modalShow.addEventListener('click', () => {
  if(loginModal.classList.contains('hidden')){
    loginModal.classList.remove('hidden');
    menuList.classList.add('hidden');
  }else{
    loginModal.classList.add('hidden');
  }
});

modalLoginClose.addEventListener('click', () => {
  if(!loginModal.classList.contains('hidden')){
    loginModal.classList.add('hidden');
  }
})

modalRegisterClose.addEventListener('click', () => {
  if(!registerModal.classList.contains('hidden')){
    registerModal.classList.add('hidden');
  }
})

menuOpt.addEventListener('click', () => {
  if(menuList.classList.contains('hidden')){
      menuList.classList.remove('hidden');
      modal.classList.add('hidden');
  }else{
      menuList.classList.add('hidden');
  }
});

$('#petList').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: true,
    autoplaySpeed: 3000,
    prevArrow: null,
    nextArrow: null,
    pauseOnHover:false,
    responsive: [
        {
          breakpoint: 800,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
            breakpoint: 816,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          }
      ]
  });

  $('#header').slick({
    dots: false,
    infinite: true,
    speed: 1000,
    fade: true,
    autoplay: true,
    autoplaySpeed: 3000,
    prevArrow: null,
    nextArrow: null,
    cssEase: 'linear',
    pauseOnHover:false
  });