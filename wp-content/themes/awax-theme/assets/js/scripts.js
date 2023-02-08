jQuery(document).ready(function($)  {
    $('.burger').click(function(event){
      $('.header,.burger,.navbar-nav,.header__contacts,.navigation').toggleClass('active')
   }),

   $('.hero-slider').slick({
    arrows: false,
    dots: true,
    fade: true,
    cssEase: 'linear',
    autoplay:true,
    autoplaySpeed:2500,
    //setting-name: setting-value
  });
   
  })
