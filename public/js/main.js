const menuOpt = document.querySelector('#menuOptions');
const menuList = document.querySelector('#menuLists');

menuOpt.addEventListener('click', () => {
    if(menuList.classList.contains('hidden')){
        menuList.classList.remove('hidden');
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