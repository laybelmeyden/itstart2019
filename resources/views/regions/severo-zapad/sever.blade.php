@extends('layouts.master')

@section('content')
  <section id="nav">
    <nav class="nav-extended">
    <div class="nav-wrapper nav_back">
      <a href="/" class="brand-logo nav_solo_logo"><img src="assets/img/Iogo.png" width="130.5" alt=""></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
      <ul id="nav-mobile" class="hide-on-med-and-down">
          <li class="nav_solo"><a href="#about__1" class="nav__item nav__item__1">О ПРОЕКТЕ</a></li>
          <li class="nav_solo__1"><a href="#mesto" class="nav__item nav__item__1">КОНТАКТЫ</a></li>
          <li class="nav_solo__1"><a href="https://rusinnovations.timepad.ru/event/907102/" class="nav__item nav__item__reg nav__item__1 nav__item__reg__1">РЕГИСТРАЦИЯ</a></li>
      </ul>
    </div>
  </nav>

    <ul class="sidenav" id="mobile-demo">
          <li><a href="#about__1" class="nav__item">О проекте</a></li>
          <li><a href="#mesto" class="nav__item">Контакты</a></li>
          <li><a href="https://rusinnovations.timepad.ru/event/907102/" class="nav__item nav__item__reg">Регистрация</a></li>
    </ul>
</section>
<section>
  <div class="parallax-container para_solo_plo">
      <div class="parallax"><img src="assets/img/Arkhangelsk.png"></div>
    <div class="row">
      <h1 class="solo__h1">Окружная стартап-школа<br> «IT-START»</h1>
      <p class="solo__p">Северо-Западный федеральный округ <br>г. Калининград 17-19 апреля 2020<br></p>
     </div>
    </div>
</section>
<section class="rega">
  <div class="container">
    <div class="row">
      <div class="col s3"></div>
      <div class="col s6 center">
        <a href="https://rusinnovations.timepad.ru/event/1271391/" class="waves-effect waves-light btn btn__solo">СТАНЬ УЧАСТНИКОМ ПРЯМО СЕЙЧАС</a>
      </div>
      <div class="col s3"></div>
    </div>
  </div>
</section>
<div class="fon__solo">
<section id="bonus">
    <div class="row">
      <div class="col s12"><h1 class="bonus_ponus">Стартуй вместе с «IT-Start»</h1></div>
      <div id="test1" class="col s12 tabs_1 center grid_tabs_1">
    <div >
        <img src="assets/img/Trekery.png" class="ojid__item"></img>
        <div class="pop">Лучшие трекеры</div>
    </div>
    <div >
        <img src="assets/img/Netvorking.png" class="ojid__item"></img>
        <div class="pop">Нетворкинг</div>
    </div>
    <div >
      <img src="assets/img/Tsennye_prizy_i_podarki.png" class="ojid__item"></img>
        <div class="pop">Ценные призы и подарки для победителей </div>
    </div>
    <div >
      <img src="assets/img/Audit.png" class="ojid__item"></img>
        <div class="pop">Аудит технологических проектов </div>
    </div>
    <div >
      <img src="assets/img/Podgotovka_zayavok.png" class="ojid__item"></img>
        <div class="pop">Подготовка заявок на получение проектного финансирования </div>
    </div>
    <div >
      <img src="assets/img/Instrumenty.png" class="ojid__item"></img>
        <div class="pop">Инструменты для развития IT-проектов </div>
    </div>
    <div >
      <img src="assets/img/Stazhirovki.png" class="ojid__item"></img>
        <div class="pop">Стажировки в подразделениях компании МТС</div>
    </div>
    </div>
    </div>
</section>
<section id="about__1">
  <div class="container">
    <div class="row">
      <div class="col l12">
        <h1 class="h1_region">О проекте</h1>
      </div>
      <div class="col s12">
      <p class="p_regions">
          <strong style="color:black;">Окружная IT-школа</strong>
          - это 3-х-дневный форум для молодых изобретателей и программистов, который проводится в Краснодаре. На протяжении 3-х дней с участниками будут работать специалисты и эксперты IT-компаний, представители инновационной инфраструктуры и потенциальные инвесторы в StartUp проекты. Помимо лекционной части предусматривается практическая работа с проектами участников. Финальным мероприятием IT-школы является презентационная сессия, в рамках которой участники представляют свои проработанные проекты на суд жюри. В этом году финальная питч-сессия (11 апреля) пройдет в рамках Всероссийского Проекта «ДОБРОПОЕЗД-2020», направленный на улучшение условий жизнедеятельности и жизнеобеспечения людей с особенностями физического и интеллектуального развития.
        </p>
      </div>
      <div class="col s3 center"></div>
      <div class="col s12 m6 center">
      </div>
      <div class="col s3 center"></div>
    </div>
  </div>
</section>
<section id="register">
  <div class="container">
    <div class="row">
      <div class="col s12 center">
        <h1 class="registr_solo">РЕГИСТРАЦИЯ</h1>
      </div>
      <div class="col s2"></div>
        <div class="col s12 m8 center">
          <a class="link-button" href="https://rusinnovations.timepad.ru/event/1271391/">Регистрация на мероприятие</a>
        </div>
        <div class="col s2"></div>
    </div>
  </div>
</section>
<!-- <section id="polojen">
  <div class="container">
    <div class="row">
      <div class="col s12 center">
        <h1 class="registr_solo">ПРОГРАММА</h1>
      </div>
      <div class="col s2"></div>
        <div class="col s12 m8">
          <a class="link-button" href="https://vk.com/doc95748576_496026173?hash=4d2bb2622aefa8f6e2&dl=0c5e5868a3aa07c3d7" target="_blank">Скачать программу</a>
        </div>
        <div class="col s2"></div>
    </div>
  </div>
</section> -->
<!-- <section id="register_22">
  <div class="container">
    <div class="row">
      <div class="col s12 center">
        <h1 class="registr_solo">СЕРТИФИКАТ</h1>
      </div>
        <div class="col s12 m12">
          <a class="link-button" href="https://rusinnovations.com/shop">Получить сертификат о прохождении курса обучения</a>
        </div>
    </div>
  </div>
</section> -->
<section id="mesto">
  <div class="container">
    <div class="row">
      <div class="col s12 center">
        <h1 class="registr_solo">МЕСТО ПРОВЕДЕНИЯ</h1>
      </div>
        <div class="">
          <div class="col s12 m4 line__red ln__1" style="height: 420px;">
          <p class="contact_face">
          г. Калининград 17-19 апреля 2020 <br>
          ул. Александра Невского д. 14. Балтийский федеральный университет им. И.Канта.
          </p>
         <a href="https://www.kantiana.ru/"><img src="assets/img/124124.png" class="ln_img"></img></a>
        </div>
        <div class="col s12 m8 line__red ln__2" style="height: 420px;">
          <div id="map">
          <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af2a9a46522a1566dbd1f49de173d28e78ea3648d6adef6d540b5211058620fb9&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
          </div>
        </div>
        </div>
    </div>
  </div>
</section>
<section id="invate__speacers">
  <div class="container">
    <div class="row">
      <div class="col s12 center">
        <h1 class="registr_solo">ПРИГЛАШЕНИЕ ОТ СПИКЕРОВ</h1>
      </div>
        <div class="col s12 m12">
        <iframe width="100%" height="550" src="https://www.youtube.com/embed/bDapCeyFYFk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
  </div>
</section>
<section id="speakers">
<div class="content-section">
<div class="content-wrapper w-container">
<div class="header-centered">
<h2 data-ix="move-up-on-scroll" class="maps_h1 spik_h">СПИКЕРЫ</h2>
</div>
<div data-ix="move-up-on-scroll" class="w-dyn-list">
    <div class="flex-wrapper w-dyn-items center">
       <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4">Станислав Сахаров</h4>
      <p class="paragraph">Руководитель программы <br> IT-Start</p>
    </div>
      <img src="assets/img/sp1.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 130px;">
    </div>
     <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4">Андрей Поскряков</h4>
      <p class="paragraph">Специалист по клиентоориентированности</p>
    </div>
      <img src="assets/img/sp2.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 130px;">
    </div>
     <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4">Матвей Бебенин</h4>
      <p class="paragraph">Product Manager в Medpoint24</p>
    </div>
      <img src="assets/img/sp3.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 130px;">
    </div>
    </div>
</div>
</div>
</div>
</section>
<section id="speakers">
<div class="content-section">
<div class="content-wrapper w-container">
<div class="header-centered">
<h2 data-ix="move-up-on-scroll" class="maps_h1 spik_h">Куратор стартап-школ</h2>
</div>
<div data-ix="move-up-on-scroll" class="w-dyn-list">
    <div class="flex-wrapper w-dyn-items center">
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4">Сергеев Никита</h4>
      <p class="paragraph ">Контактное лицо в Москве <br><i class="fab fa-whatsapp"></i>8 915 310 34 47  <br> sales@rusinnovations.com</p>
    </div>
      <img src="assets/img/Nikita4.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 130px;">
    </div>
    </div>
</div>
</div>
</div>
</section>
<section class="partners">
<div class="content-section">
<div class="content-wrapper w-container">
<div class="header-centered">
<h2 data-ix="move-up-on-scroll" class="maps_h1 part_h">НАШИ ПАРТНЕРЫ</h2>
</div>
<div data-ix="move-up-on-scroll" class="w-dyn-list">
    <div class="flex-wrapper w-dyn-items">
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
      <a href="https://moskva.mts.ru/personal">
        <img src="assets/img/MTS_Logo_rus_r.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" >
        </a>
    </div>
    <div data-ix="move-to-origin" class="team-member w-dyn-item align_item_part">
      <a href="http://rusinnovations.com/" class="oart"><img src="assets/img/AIR.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="height:90px;"></a>
    </div>
    <div data-ix="move-to-origin" class="team-member w-dyn-item align_item_part">
      <a href="https://minsvyazcc.ru/" class="oart"><img src="assets/img/Ig7b7ABMrEY.jpg" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" ></a>
    </div>
    <div data-ix="move-to-origin" class="team-member w-dyn-item align_item_part">
      <a href="https://www.kantiana.ru/" class="oart"><img src="assets/img/124124.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" ></a>
    </div>
    </div>
</div>
</div>
</div>  
</section>
</div>
<section class="footer">
    <div data-ix="move-up-on-scroll" class="cta-bottom">
              <div class="content-wrapper w-container">
                <div class="cta-box">
                  <div data-ix="move-up-on-load-2" class="cta-bottom-flex">
                    <i class="fas fa-map-marked-alt marker_f"></i>
                    <h4 class="heading-4 white-no-border">СЗФО</h4>
                    </div>
                    <div data-ix="move-up-on-load-2" class="cta-bottom-flex-2">
                      <i class="far fa-calendar-alt marker_f"></i>
                      <h4 class="heading-4 white-no-border">17-19 апреля 2020</h4>
                      </div>
                      <div data-ix="move-up-on-scroll-3" class="cta-bottom-flex-3 w-inline-block">
                        <i class="far fa-user marker_f"></i>
                        <h4 class="heading-4 white-no-border">Успей зарегистрироваться!</h4>
                        </div>
                        </div>
                        </div>
                        </div>
                        
</section>
@endsection