<?php
    /**
     * Author : Sumatokhin "nornik" Leonid
     * Email  : web@bhead.net
     * Site   : https://bhead.net
     */

    /**
     * @var $_page Page
     */

    $menu = $_page->getMenu('top', 2);
?>

<!DOCTYPE html>
<html lang="ru" xml:lang="ru_RU" prefix="og: http://ogp.me/ns#">

  <head>
    <meta charset="windows-1251"/>

    <title><?= $_page->getTitle(); ?></title>

    <meta name='Robots' content='All' />

    <meta name="MobileOptimized" content="320" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <link rel="icon"       href="/favicon.png" type="image/x-icon" />
    <link rel="preload"    href="/css/update-2022/app.min.css?v=20220518.2" as="style" />
    <link rel="stylesheet" href="/css/update-2022/app.min.css?v=20220518.2" />
    <link rel="stylesheet" href="/css/update-2022/cust.css" />
    <!-- Global site tag (gtag.js) - Google AdWords: 955160028 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-955160028"></script>
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-955160028'); </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                                                    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-PRKGKJL');</script>
    <!-- End Google Tag Manager -->
    <meta name="yandex-verification" content="5825931139ac5ecd" />
    <script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?168",t.onload=function(){VK.Retargeting.Init("VK-RTRG-514746-hvZpI"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-514746-hvZpI" style="position:fixed; left:-999px;" alt=""/></noscript>
  </head>

  <body class="page page-inner">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRKGKJL"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- calltouch -->
    <script src="https://mod.calltouch.ru/init.js?id=v8q5ulmn"></script>
    <!-- /calltouch -->

    <!-- Yandex.Metrika counter -->
    <script>
      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
      ym(54093763, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
      });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/54093763" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <script>
      var PozvonimcomWidgetConfig = {
        ready: function(){
          this.api.on('call', function(){
            var ct_site_id = '32776';
            var phone = this.api.getPhone();
            var sub = 'Заявка с Pozvonim';
            var ct_data = { phoneNumber: phone, subject: sub, requestUrl: location.href, sessionId: window.call_value };
            var request = window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest();
            var post_data = Object.keys(ct_data).reduce(function(a, k) {if(!!ct_data[k]){a.push(k + '=' + encodeURIComponent(ct_data[k]));}return a}, []).join('&');
            var url = 'https://api.calltouch.ru/calls-service/RestAPI/'+ct_site_id+'/requests/orders/register/';
            request.open("POST", url, true); request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); request.send(post_data);
          });
        }
      };
    </script>

    <script data-skip-moving="true">
      (function(w,d,u,b){
        s=d.createElement('script');r=(Date.now()/1000|0);s.async=1;s.src=u+'?'+r;
        h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
      })(window,document,'https://cdn.bitrix24.ru/b4347333/crm/site_button/loader_2_k0pxey.js');
    </script>

    <div class="cloud cloud-1"><img src="/images/update-2022/clouds/cloud-1.png" alt=""></div>
    <div class="cloud cloud-2"><img src="/images/update-2022/clouds/cloud-2.png" alt=""></div>

    <header class="header">
      <div class="container">
        <div class="row justify-content-between flex-nowrap">
          <div class="col-auto order-1">
            <a href="/" class="logo header__logo">
              <img src="/images/update-2022/sol-logo.svg" class="logo__img header-logo__lt">
              <img src="/images/update-2022/udacha-logo.svg" class="logo__img header-logo__accent">
            </a>
          </div>

          <div class="col-auto order-2 d-none d-sm-block">
            <nav class="header__menu">
              <div class="menu d-flex flex-wrap">
                <div class="menu__item">
                  <a class="menu__link" href="/about/">О компании</a>
                  <a class="menu__link" href="/akcii/">Акции</a>
                </div>
                <div class="menu__item">
                  <a class="menu__link" href="/news/">Новости</a>
                  <a class="menu__link" href="/pozicii-v-prodazhe/">Объекты в продаже</a>
                </div>
                <div class="menu__item">
                  <a class="menu__link" href="/usloviya/">Условия покупки</a>
                  <a class="menu__link" href="/foto/">Ход строительства</a>
                </div>
                <div class="menu__item">
                  <a class="menu__link" href="/docs/">Документация</a>
                  <a class="menu__link" href="/contacts/">Контакты</a>
                </div>
              </div>
            </nav>
          </div>

          <div class="col-auto order-3 d-none d-sm-block">
            <div class="header__contacts">
              <div class="contacts">
                <div class="contacts__phone">
                  <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M24.1094 1.67188L19.2344 0.546875C18.7188 0.40625 18.1562 0.6875 17.9219 1.20312L15.6719 6.45312C15.4844 6.92188 15.625 7.4375 16 7.76562L18.8594 10.1094C17.1719 13.6719 14.2188 16.6719 10.5625 18.4062L8.21875 15.5469C7.89062 15.1719 7.375 15.0312 6.90625 15.2188L1.65625 17.4688C1.14062 17.7031 0.90625 18.2656 1 18.7812L2.125 23.6562C2.26562 24.1719 2.6875 24.5 3.25 24.5C15.25 24.5 25 14.7969 25 2.75C25 2.23438 24.625 1.8125 24.1094 1.67188Z"
                      fill="#23A4DD"/>
                  </svg>
                  <a href="tel:+78352410000" class="">(8352) 41-00-00</a>
                </div>
                <div class="contacts__description">Без обеда и выходных</div>
              </div>
            </div>
          </div>

          <div class="col-auto order-4 d-block d-sm-none">
            <button class="burger js-burger">
              <span class="burger__line"></span>
            </button>
          </div>
        </div>
      </div>

      <div class="container d-none js-mobile-menu">
        <div class="row">
          <nav class="header__menu-mobile">
            <div class="menu">
              <a class="menu__link" href="/about/">О компании</a>
              <a class="menu__link" href="/akcii/">Акции</a>
              <a class="menu__link" href="/news/">Новости</a>
              <a class="menu__link" href="/pozicii-v-prodazhe/">Объекты в продаже</a>
              <a class="menu__link" href="/kvartiry-s-remontom/">С ремонтом</a>
              <a class="menu__link" href="/akcii/trade-in-bystraya-prodazha-vashej-kvartiry-i-pokupka-novoj/">Трейд-ин</a>
              <a class="menu__link" href="/usloviya/">Условия покупки</a>
              <a class="menu__link" href="/foto/">Ход строительства</a>
              <a class="menu__link" href="/docs/">Документация</a>
              <a class="menu__link" href="/contacts/">Контакты</a>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <main>
      <div class="cloud cloud-1"><img src="/images/update-2022/clouds/cloud-1.png" alt=""></div>
      <div class="cloud cloud-2"><img src="/images/update-2022/clouds/cloud-2.png" alt=""></div>
      <div class="breadcrumbs">
        <div class="container">
          <div class="row">
            <nav class="breadcrumbs__nav">
              <a href="/" class="breadcrumbs__link">Главная</a>
              <span class="breadcrumbs__current">Акции</span>
            </nav>
          </div>
        </div>
      </div>

      <section id="banner" class="section section_act section-banner">
        <div class="banner__wrapper_action">
          <div class="container">
            <div class="row">
              <div class="banner d-flex">
                <div class="banner__left">
                  <div class="banner__title">Акции</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <section class="sect_act_block">
        <div class="container">
          <div class="action_block_items">
            <div class="action_block_item">
                <div class="descr_action"><a href="https://21sol.ru/two-room-apartments/ ">Розыгрыш кухни<br>от Borzova Mebel при покупке<br>2-комнатной квартиры!</a></div>
                <div class="img_action">
                    <img src="/images/banners/two-room-2023-02.jpg" alt="Сохрани свои деньги — купи квартиру выгодно!" />
                </div>
            </div>
        </div>
      </section>


      <section id="offices" class="section section-offices">
        <div class="offices__wrapper">
          <div class="container">
            <div class="row">
              <div class="offices">
                <div class="offices__title">Офисы продаж</div>
                <div class="offices__items d-flex">
                  <div class="offices__item">
                    <div class="office js-office">
                      <div class="office__info">
                        <div class="office__title-before">на ост. Зодчего П. Егорова</div>
                        <div class="office__title">Солнечный бульвар, д. 12, корп. 1</div>
                        <div class="office__schedule">
                          <p>График работы</p>
                          <ul>
                            <li>Пн—Пт с 9:00 до 18:00</li>
                            <li>Сб — с 9:00 до 15:00</li>
                            <li>Без обеда</li>
                              <li>Вс — выходной</li>
                          </ul>
                        </div>
                      </div>
                      <div class="office__image js-office-image active">
                        <img src="/images/main_new/1of.JPG" alt="">
                      </div>
                      <div class="office__map js-office-map">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A57eaa7836d2ed9aefe6c7e5d77f92ca447d08c8ce9afd320e23ef4dbdcebe08f&amp;source=constructor"
                                frameborder="0"
                                scrolling="no"
                        ></iframe>
                      </div>
                      <div class="office__buttons d-flex">
                        <button class="button js-office-toggle-map" data-target="map">Карта</button>
                        <button class="button js-office-toggle-map active" data-target="image">Фото</button>
                      </div>
                    </div>
                  </div>
                  <div class="offices__item">
                    <div class="office js-office">
                      <div class="office__info">
                        <div class="office__title-before">на ост. Студгородок</div>
                        <div class="office__title">Московский проспект, д.&nbsp;25,&nbsp;корп.&nbsp;1</div>
                        <div class="office__schedule">
                          <p>График работы</p>
                          <ul>
                            <li>Пн—Пт с 8:00 до 17:00</li>
                            <li>Сб, Вс — выходной</li>
                            <li>Без обеда</li>
                          </ul>
                        </div>
                      </div>
                      <div class="office__image js-office-image active">
                        <img src="/images/main_new/2of.jpg" alt="">
                      </div>
                      <div class="office__map js-office-map">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A09015f99ba240a41cf128779a11f6fb6b4894e37ecd548ce295c19c99385baa2&source=constructor"
                                frameborder="0"
                                scrolling="no"
                        ></iframe>
                      </div>
                      <div class="office__buttons d-flex">
                        <button class="button js-office-toggle-map" data-target="map">Карта</button>
                        <button class="button js-office-toggle-map active" data-target="image">Фото</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="offices__phone">
                  <small>Консультация по&nbsp;телефону</small>
                  <span>(8352) 28-54-56</span>
                  <small>с 8:00 до 21:00 <i>без выходных</i></small>
                </div>

                <div class="offices__form">
                  <form action="" class="form js-popup-form">
                    <div class="form__title">Есть вопросы?<br />Напишите нам!</div>
                    <div class="form__group d-flex">
                      <div class="form__input form__input-name">
                        <label for="name">Имя</label>
                        <input id="name" name="name" type="text" placeholder="Ваше имя" required />
                      </div>

                      <div class="form__input form__input-phone">
                        <label for="phone">Телефон</label>
                        <input id="phone" name="phone" type="tel" placeholder="+7 (___) ___-__-__" class="js-input-mask" required />
                      </div>
                    </div>

                    <div class="form__group">
                      <div class="form__input">
                        <label for="message">Ваш вопрос</label>
                        <textarea id="message" name="message" placeholder="Опишите ваш вопрос" required></textarea>
                      </div>
                    </div>

                    <div class="form__actions d-flex">
                      <div class="form__text">Нажимая на кнопку «Задать вопрос», Вы&nbsp;соглашаетесь на&nbsp;обработку персональных данных</div>
                      <button class="button">Задать вопрос</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="footer">
            <div class="footer__columns d-flex flex-wrap">
              <div class="footer__column">
                <a href="/" class="footer__logo">
                  <img src="/images/update-2022/sol-logo-white.svg" alt=""/>
                </a>
                <div class="footer__socials d-flex">
                  <a href="https://vk.com/21sol" target="_blank" class="footer__social footer__social-vkontakte">
                    <img src="/images/update-2022/icon/icon-vk.svg" alt=""/>
                  </a>
                  <a href="https://www.youtube.com/channel/UCS5O2lnetH7gphksELjk03w" target="_blank" class="footer__social footer__social-youtube">
                    <img src="/images/update-2022/icon/icon-youtube.svg" alt=""/>
                  </a>
                </div>

                <div class="footer__text d-none d-sm-block">Информация, предоставленная на сайте, не является публичной
                  офертой
                </div>
              </div>

              <div class="footer__column">
                <div class="footer__nav">
                  <nav class="nav">
                    <p class="nav__title">О компании</p>
                    <ul class="nav__items">
                      <li class="nav__item">
                        <a href="/about/" class="nav__link">О компании</a>
                      </li>
                      <li class="nav__item">
                        <a href="/akcii/" class="nav__link">Акции</a>
                      </li>
                      <li class="nav__item">
                        <a href="/pozicii-v-prodazhe/poziciya-2-new/" class="nav__link">Планировки</a>
                      </li>
                      <li class="nav__item">
                        <a href="/docs/" class="nav__link">Документы</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="footer__column">
                <div class="footer__nav">
                  <nav class="nav">
                    <p class="nav__title">Покупка</p>
                    <ul class="nav__items">
                      <li class="nav__item">
                        <a href="/pozicii-v-prodazhe/" class="nav__link">Позиции в продаже</a>
                      </li>
                      <li class="nav__item">
                        <a href="/foto/" class="nav__link">Ход строительства</a>
                      </li>
                      <li class="nav__item">
                        <a href="/contacts/" class="nav__link">Контакты</a>
                      </li>
                      <li class="nav__item">
                        <a href="/usloviya/" class="nav__link">Условия покупки</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="footer__column footer__column-contacts">
                <div class="footer__nav">
                  <nav class="nav">
                    <p class="nav__title">Наши адреса</p>
                    <ul class="nav__items">
                      <li class="nav__item nav__item-address">г. Чебоксары, Московский проспект, дом 25, корпус 1</li>
                      <li class="nav__item nav__item-address">г. Чебоксары, район Солнечный, дом 12, корпус 1</li>
                    </ul>
                  </nav>
                </div>

                <div class="footer__nav">
                  <nav class="nav">
                    <p class="nav__title">Отдел продаж</p>
                    <ul class="nav__items">
                      <li class="nav__item nav__item-phone">
                        <a href="tel:+78352410000">(8352) 41-00-00 с 9:00 до 21:00</a>
                      </li>
                      <li class="nav__item nav__item-email">
                        <a href="mailto:41-00-00@mail.ru">41-00-00@mail.ru</a>
                      </li>
                    </ul>
                  </nav>
                </div>

                <div class="footer__text d-block d-sm-none">Информация, предоставленная на сайте, не является публичной
                  офертой
                </div>
              </div>
            </div>
            <div class="footer__rights d-flex justify-content-between">
              <div class="footer__text">&copy;2014–<?= date('Y'); ?>. Все права защищены</div>
              <div class="footer__nav">
                <nav class="nav">
                  <ul class="nav__items">
                    <li class="nav__item">
                      <a href="#" class="nav__link">Политика конфиденциальности</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="footer__nav">
                <nav class="nav">
                  <ul class="nav__items">
                    <li class="nav__item">
                      Дизайн сайта —&nbsp;<a href="" class="nav__link">Indigo Amigo</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="/js/update-2022/libs.min.js?v=20220228.1"></script>
    <script src="/js/update-2022/common.js?v=20220309.1"></script>

    <div class="popup d-none js-popup" id="popup-request">
      <div class="popup__inner d-flex flex-column justify-content-start">
        <div class="popup__logo d-flex d-sm-none">
          <img src="/images/update-2022/sol-logo.svg" />
          <img src="/images/update-2022/udacha-logo.svg" />
        </div>
        <button class="popup__close js-popup-close">
          <svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.60084 0.957895C3.01505 0.372108 2.0653 0.372108 1.47952 0.957895C0.893731 1.54368 0.893731 2.49343 1.47952 3.07921L13.8788 15.4785L1.43641 27.9208C0.850624 28.5066 0.850624 29.4564 1.43641 30.0422C2.0222 30.6279 2.97194 30.6279 3.55773 30.0422L16.0001 17.5998L28.4418 30.0415C29.0276 30.6273 29.9774 30.6273 30.5632 30.0415C31.1489 29.4557 31.1489 28.506 30.5632 27.9202L18.1214 15.4785L30.5201 3.07984C31.1058 2.49405 31.1058 1.5443 30.5201 0.958518C29.9343 0.372732 28.9845 0.372732 28.3987 0.958518L16.0001 13.3572L3.60084 0.957895Z" fill="#5B5B5B"/>
          </svg>
        </button>
        <div class="popup__title">Заказать звонок</div>
        <div class="popup__text">Закажите обратный звонок и наш менеджер свяжется с Вами в ближайшее время</div>

        <div class="popup__form">
          <form class="form js-popup-form">
            <input type="hidden" name="message" value="Заказать звонок" />
            <input type="hidden" name="theme" value="Заказать звонок" />
            <div class="form__group d-flex">
              <div class="form__input form__input-name">
                <label for="name">Имя</label>
                <input id="name" name="name" type="text" placeholder="Ваше имя" required />
              </div>

              <div class="form__input form__input-phone">
                <label for="phone">Телефон</label>
                <input id="phone" name="phone" type="tel" placeholder="+7 (___) ___-__-__" required class="js-input-mask" />
              </div>
            </div>

            <div class="form__footer">
              <div class="form__privacy">
                Нажимая на кнопку «Заказать&nbsp;звонок», Вы соглашаетесь на обработку персональных данных
              </div>
              <button class="button form__button" type="submit">Отправить</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="popup d-none js-popup" id="popup-success">
      <div class="popup__inner d-flex flex-column justify-content-start">
        <div class="popup__logo d-flex d-sm-none">
          <img src="/images/update-2022/sol-logo.svg" />
          <img src="/images/update-2022/udacha-logo.svg" />
        </div>
        <button class="popup__close js-popup-close">
          <svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.60084 0.957895C3.01505 0.372108 2.0653 0.372108 1.47952 0.957895C0.893731 1.54368 0.893731 2.49343 1.47952 3.07921L13.8788 15.4785L1.43641 27.9208C0.850624 28.5066 0.850624 29.4564 1.43641 30.0422C2.0222 30.6279 2.97194 30.6279 3.55773 30.0422L16.0001 17.5998L28.4418 30.0415C29.0276 30.6273 29.9774 30.6273 30.5632 30.0415C31.1489 29.4557 31.1489 28.506 30.5632 27.9202L18.1214 15.4785L30.5201 3.07984C31.1058 2.49405 31.1058 1.5443 30.5201 0.958518C29.9343 0.372732 28.9845 0.372732 28.3987 0.958518L16.0001 13.3572L3.60084 0.957895Z" fill="#5B5B5B"/>
          </svg>
        </button>
        <div class="popup__title">Ваша заявка принята</div>
        <div class="popup__text">Наш менеджер свяжется с Вами в ближайшее время</div>

        <div class="popup__footer">
          <button class="button popup__button popup__button-success js-popup-close" type="button">Ок</button>
        </div>
      </div>
    </div>

    <!-- calltouch requests -->
    <script type="text/javascript">
      var _ctreq_b24 = function(data) {
        var sid = 32776;
        var request = window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest();
        var post_data = Object.keys(data).reduce(function(a,k){if(!!data[k]){a.push(k+'='+encodeURIComponent(data[k]));}return a},[]).join('&');
        var url = 'https://api.calltouch.ru/calls-service/RestAPI/'+sid+'/requests/orders/register/';
        request.open("POST", url, true); request.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); request.send(post_data);
      };
      window.addEventListener('b24:form:submit', function(e){
        var form = event.detail.object;
        if (form.validated){
          var fio = ''; var phone = ''; var email = ''; var comment = '';
          form.getFields().forEach(function(el){
            if(el.name=='LEAD_NAME' || el.name=='CONTACT_NAME'){ fio = el.value(); }
            if(el.name=='LEAD_PHONE' || el.name=='CONTACT_PHONE'){ phone = el.value(); }
            if(el.name=='LEAD_EMAIL' || el.name=='CONTACT_EMAIL'){ email = el.value(); }
            if(el.name=='LEAD_COMMENTS' || el.name=='DEAL_COMMENTS '){ comment = el.value(); }
          });
          var sub = 'Заявка с формы Bitrix24 ' + location.hostname;
          var ct_data = {fio: fio, phoneNumber: phone, email: email, comment: comment, subject: sub, requestUrl: location.href, sessionId: window.call_value};
          console.log(ct_data);
          if (!!phone || !!email) _ctreq_b24(ct_data);
        }
      });
    </script>

    <script>
      window.addEventListener('onBitrixLiveChat', function(event){
        var widget = event.detail.widget;
        widget.subscribe({
          type: BX.LiveChatWidget.SubscriptionType.every, callback: function(ev){
            if (ev.type == BX.LiveChatWidget.SubscriptionType.userMessage){
              if (!window.ct_snd_flag && !!window.ct){ ct('goal','b24chat'); window.ct_snd_flag = 1; }
            }
            if (ev.type == BX.LiveChatWidget.SubscriptionType.userForm){
              var sid = 32776;
              var fio = ''; var phone = ''; var email = '';
              if (!!ev.data && !!ev.data.fields && !!ev.data.fields.name){ fio = ev.data.fields.name; }
              if (!!ev.data && !!ev.data.fields && !!ev.data.fields.phone){ phone = ev.data.fields.phone; }
              if (!!ev.data && !!ev.data.fields && !!ev.data.fields.email){ email = ev.data.fields.email; }
              var ct_data = {}; ct_data.phoneNumber = phone; ct_data.fio = fio; ct_data.email = email; ct_data.requestUrl = location.href; ct_data.sessionId = window.call_value;
              ct_data.subject = 'Чат Bitrix24 посетитель оставил контакты';
              var request = window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest();
              var post_data = Object.keys(ct_data).reduce(function(a,k){if(!!ct_data[k]){a.push(k+'='+encodeURIComponent(ct_data[k]));}return a},[]).join('&');
              var url = 'https://api.calltouch.ru/calls-service/RestAPI/'+sid+'/requests/orders/register/';
              request.open("POST", url, true); request.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); request.send(post_data);
            }
          }
        });
      });
    </script>

    <script type="text/javascript">
      jQuery(document).on('click', 'form.form.js-popup-form [type="submit"]', function() {
        var m = jQuery(this).closest('form');
        var ct_name = m.find('input[name="name"]').val();
        var ct_phone = m.find('input[name="phone"]').val();
        var ct_sub = m.find('input[name="theme"]').val();
        var ct_comment = m.find('textarea[name="message"]').val();
        var ct_site_id = '32776';
        if (!ct_sub){var ct_sub = 'Заявка c ' + location.hostname;}
        var ct_data = {
            fio: ct_name,
            phoneNumber: ct_phone,
            subject: ct_sub,
            comment: ct_comment,
            requestUrl: location.href,
            sessionId: window.call_value
        };
        if (!!ct_phone && !!ct_name){
          jQuery.ajax({
            url: 'https://api.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/',
            dataType: 'json', type: 'POST', data: ct_data, async: false
          });
        }
      });
    </script>
    <!-- calltouch requests -->
  </body>
</html>


