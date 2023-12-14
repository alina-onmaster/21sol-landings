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

new Swiper('.swiper.main-slider--poz4',{
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  effect: 'fade',
  slidesPerView: 1,
  autoplay: {
    delay: 7000,
    disableOnInteraction: false,
  }
});

new Swiper('.swiper.main-slider--poz6',{
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  effect: 'fade',
  slidesPerView: 1,
  autoplay: {
    delay: 7000,
    disableOnInteraction: false,
  }
});



wow = new WOW({
  boxClass: 'wow',
  animateClass: 'animate__animated',
  offset: 0,
  mobile: true,
  live: true
})
wow.init();

(function () {
  var feedbackPopup = document.querySelector("#feedback-popup");
  var pageOverlay = document.querySelector(".page-overlay");







  if (enterLink) {
    enterLink.addEventListener("click", function(event) {
      event.preventDefault();
      enterLink.classList.toggle("user-enter-link--opened");
    });

    window.addEventListener("keydown", function(event) {
      if (event.keyCode === 27) {
        if (enterLink.classList.contains("user-enter-link--opened")) {
          enterLink.classList.remove("user-enter-link--opened");
        };
      };
    });
  };

  if (feedbackLink && feedbackPopup) {
    feedbackLink.addEventListener("click", function(event) {
      event.preventDefault();
      if (pageOverlay && pageOverlay.classList.contains("page-overlay--hide")) {
        pageOverlay.classList.remove("page-overlay--hide");
        pageOverlay.classList.add("page-overlay--show");
      };
      feedbackPopup.classList.remove("popup--closed");
      feedbackPopup.classList.add("popup--opened");
      clientName.focus();

      if (storageName && !storageEmail) {
        clientName.value = storageName;
        clientEmail.focus();
      } else if (storageName && storageEmail) {
        clientName.value = storageName;
        clientEmail.value = storageEmail;
        clientMessage.focus();
      } else {
        clientName.focus();
      };
    });

    feedbackForm.addEventListener("submit", function(event) {
      if (clientName.value && clientEmail.value && clientMessage.value) {
        localStorage.setItem('clientName', clientName.value);
        localStorage.setItem('clientEmail', clientEmail.value);
      }
    });

    feedbackClose.addEventListener("click", function(event) {
      event.preventDefault();
      feedbackPopup.classList.remove("popup--opened");
      feedbackPopup.classList.add("popup--closed");
      feedbackPopup.classList.remove("popup--error");

      if (pageOverlay && pageOverlay.classList.contains("page-overlay--show")) {
        pageOverlay.classList.remove("page-overlay--show");
        pageOverlay.classList.add("page-overlay--hide");
      };
    });

    if (pageOverlay) {
      pageOverlay.addEventListener("click", function(event) {
        event.preventDefault();
        if (feedbackPopup.classList.contains("popup--opened")) {
          feedbackPopup.classList.remove("popup--opened");
          feedbackPopup.classList.add("popup--closed");
          feedbackPopup.classList.remove("popup--error");
        };
        if (pageOverlay.classList.contains("page-overlay--show")) {
          pageOverlay.classList.remove("page-overlay--show");
          pageOverlay.classList.add("page-overlay--hide");
        };
      });
    };

    window.addEventListener("keydown", function(event) {
      if (event.keyCode === 27) {
        if (feedbackPopup.classList.contains("popup--opened")) {
          feedbackPopup.classList.remove("popup--opened");
          feedbackPopup.classList.add("popup--closed");
          feedbackPopup.classList.remove("popup--error");
        };
        if (pageOverlay.classList.contains("page-overlay--show")) {
          pageOverlay.classList.remove("page-overlay--show");
          pageOverlay.classList.add("page-overlay--hide");
        };
      };
    });
  };

  if (mapСontent) {
    ymaps.ready(function () {
      var map = new ymaps.Map('map', {
          center: [59.939390, 30.329545],
          zoom: 16,
          scrollZoom: false,//зум при скролле мышью отключен
          controls: []//элементы контролов отсутствуют (строка поиска, кнопки зума, кнопки типа карты и тд)
        }, {
          searchControlProvider: 'yandex#search'
        }),
        Placemark = new ymaps.Placemark([59.938706, 30.323149], {
          balloonContent: 'Санкт-Петербург, Большая Конюшенная улица, 19/8'
        }, {
          // Опции.
          iconLayout: 'default#image',
          // Своё изображение иконки метки.
          iconImageHref: 'img/icons/pin.svg',
          // Размеры метки.
          iconImageSize: [80, 140],
          // Смещение левого верхнего угла иконки относительно
          // её "ножки" (точки привязки).
          iconImageOffset: [-40, -140],
          // Добавляем иконку тени и задаем аналогичные параметры.
          iconShadow: true,
          iconShadowLayout: 'default#image',
          iconShadowImageHref: 'img/icons/pin-shadow.png',
          iconShadowImageSize: [182, 110],
          iconShadowImageOffset: [0, -110]
        });

      map.geoObjects.add(Placemark);
      map.behaviors.disable('scrollZoom');
      map.controls.add('zoomControl');
      var roadcontrolState = map.controls.get('zoomControl').state.get('size');
      map.controls.get('zoomControl').options.set('size', 'small');
    });
  };
})();
