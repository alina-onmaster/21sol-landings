new Swiper('.swiper.reviews__list-wrap',{
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
    },

    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },

    1440: {
      slidesPerView: 3,
      spaceBetween: 35,
    },
  },
});

new Swiper('.swiper.article__slider-wrap--1',{
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  slidesPerView: 1,
});

new Swiper('.swiper.article__slider-wrap--2',{
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  slidesPerView: 1,
});

new Swiper('.swiper.article__slider-wrap--3',{
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  slidesPerView: 1,
});

new Swiper('.swiper.article__slider-wrap--4',{
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  slidesPerView: 1,
});

new Swiper('.swiper.article__slider-wrap--5',{
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  slidesPerView: 1,
});

new Swiper('.swiper.article__slider-wrap--6',{
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  slidesPerView: 1,
});



wow = new WOW({
  boxClass: 'wow',
  animateClass: 'animate__animated',
  offset: 0,
  mobile: true,
  live: true
})
wow.init();

var date = new Date();
var lastDayDate = new Date(date.getFullYear(), date.getMonth() + 1, 0);
var lastDay = lastDayDate.toLocaleString('ru', {day: 'numeric'});
var monthеs = ['ЯНВАРЯ','ФЕВРАЛЯ','МАРТА', 'АПРЕЛЯ','МАЯ','ИЮНЯ','ИЮЛЯ', 'АВГУСТА', 'СЕНТЯБРЯ', 'ОКТЯБРЯ', 'НОЯБРЯ', 'ДЕКАБРЯ'];

var resultDate = lastDay+' '+monthеs[date.getMonth()]+' '+date.getFullYear();
var resultDay = lastDay+' '+monthеs[date.getMonth()];
var resultMounth = monthеs[date.getMonth()];

var elDay =document.getElementsByClassName("lastday");  // Find the elements
var elMounth =document.getElementsByClassName("lastmounth");
var elDate =document.getElementsByClassName("lastdate");

for(var i = 0; i < elDay.length; i++){
  elDay[i].innerText=resultDay;
}

for(var i = 0; i < elMounth.length; i++){
  elMounth[i].innerText=resultMounth;
}

for(var i = 0; i < elDate.length; i++){
  elDate[i].innerText=resultDate;
}
