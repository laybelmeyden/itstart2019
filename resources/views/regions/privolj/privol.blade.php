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
          <li class="nav_solo__1"><a href="#register" class="nav__item nav__item__reg nav__item__1 nav__item__reg__1">РЕГИСТРАЦИЯ</a></li>
      </ul>
    </div>
  </nav>

    <ul class="sidenav" id="mobile-demo">
          <li><a href="#about__1" class="nav__item">О проекте</a></li>
          <li><a href="#mesto" class="nav__item">Контакты</a></li>
          <li><a href="#register" class="nav__item nav__item__reg">Регистрация</a></li>
    </ul>
</section>
<section>
  <div class="parallax-container para_solo_plo_2">
      <div class="parallax"><img src="assets/img/Tolyatti.png"></div>
    <div class="row">
      <h1 class="solo__h1 solo__h1_2">Окружная стартап-школа<br> «IT-START»</h1>
      <p class="solo__p">Приволжский федеральный округ <br>Тольятти 26-28 апреля 2019<br></p>
     </div>
    </div>
</section>
<section class="rega">
  <div class="container">
    <div class="row">
      <div class="col s3"></div>
      <div class="col s6 center">
        <a href="#register" class="waves-effect waves-light btn btn__solo">СТАНЬ УЧАСТНИКОМ ПРЯМО СЕЙЧАС</a>
      </div>
      <div class="col s3"></div>
    </div>
  </div>
</section>
<div class="fon__solo">
<section id="bonus">
    <div class="row">
      <div class="col s12"><h1 class="bonus_ponus">Стартуй вместе с «IT-Start»</h1></div>
      <div class="col s12 center">
    <div class="col s12 m6 l3">
        <img src="assets/img/Trekery.png" class="ojid__item"></img>
        <div class="pop">Лучшие трекеры</div>
    </div>
    <div class="col s12 m6 l3">
        <img src="assets/img/Netvorking.png" class="ojid__item"></img>
        <div class="pop">Нетворкинг</div>
    </div>
    <div class="col s12 m6 l3">
      <img src="assets/img/Mezhdunarodnye_stazhirovki.png" class="ojid__item"></img>
        <div class="pop">Международные стажировки</div>
    </div>
    <div class="col s12 m6 l3">
      <img src="assets/img/Tsennye_prizy_i_podarki.png" class="ojid__item"></img>
        <div class="pop">Ценные призы и подарки для победителей </div>
    </div>
    <div class="col s12 m12 l1"></div>
     <div class="col s12 m6 l2">
       <img src="assets/img/Prozhivanie.png" class="ojid__item"></img>
        <div class="pop">Проживание для иногородних</div>
    </div>
    <div class="col s12 m6 l2">
      <img src="assets/img/Audit.png" class="ojid__item"></img>
        <div class="pop">Аудит технологических проектов </div>
    </div>
    <div class="col s12 m6 l2">
      <img src="assets/img/Instrumenty.png" class="ojid__item"></img>
        <div class="pop">Инструменты для развития социальных проектов </div>
    </div>
    <div class="col s12 m6 l2">
      <img src="assets/img/Podgotovka_zayavok.png" class="ojid__item"></img>
        <div class="pop">Подготовка заявок на получение проектного финансирования </div>
    </div>
    <div class="col s12 m6 l2">
      <img src="assets/img/Stazhirovki.png" class="ojid__item"></img>
        <div class="pop">Стажировки в подразделениях компании МТС</div>
    </div>
    <div class="col s12 m12 l1"></div>
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
                    <strong style="color:black;">Окружная стартап-школа</strong>
                     - это 3-х-дневный форум для молодых изобретателей и программистов, который проводится в городе Тольятти. На протяжении 3-х дней с участниками будут работать специалисты и эксперты IT-компаний, представители инновационной инфраструктуры и потенциальные инвесторы в StartUp проекты. Помимо лекционной части предусматривается практическая работа с проектами участников. Финальным мероприятием IT-школы является презентационная сессия, в рамках которой участники представляют свои проработанные проекты на суд жюри.
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
        <div class="col s12 m6">
          <a class="link-button" href="https://rusinnovations.timepad.ru/event/926464/">Регистрация с проживанием</a>
        </div>
        <div class="col s12 m6">
          <a class="link-button" href="https://rusinnovations.timepad.ru/event/926460/">Регистрация без проживания</a>
        </div>
    </div>
  </div>
</section>
<section id="polojen">
  <div class="container">
    <div class="row">
      <div class="col s12 center">
        <h1 class="registr_solo">ПРОГРАММА</h1>
      </div>
      <div class="col s2"></div>
        <div class="col s12 m8 center">
          <!--<a class="link-button" href="https://vk.com/doc95748576_492910896?hash=4badcbb4f5faa3a5ce&dl=7bb20338855997eb56" target="_blank">Скачать программу</a>-->
        <a style="color:white;">Здесь скоро появится Программа стартап-школы</a>
        </div>
        <div class="col s2"></div>
    </div>
  </div>
</section>
<section id="register_22">
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
</section>
<section id="mesto">
  <div class="container">
    <div class="row">
      <div class="col s12 center">
        <h1 class="registr_solo">МЕСТО ПРОВЕДЕНИЯ</h1>
      </div>
        <div class="">
          <div class="col s12 m4 line__red ln__1" style="height:580px;">
          <p class="contact_face">
            Контактное лицо в Тольятти:<br>
Попова Анжелика Миралиевна<br>
89272144599<br>
Белорусская ул., 14, Тольятти, Самарская обл., 445020<br>
Адрес проживание для иногородних, Тольятти, ул. Мира, д. 77 
          </p>
          <img src="assets/img/TGU_round1.jpg" class="ln_img"></img>
        </div>
        <div class="col s12 m8 line__red ln__2" style="height:580px;">
          <div id="map">
          <iframe src="https://yandex.ru/map-widget/v1/?l=map&ll=49.397908%2C53.500665&mode=search&sll=49.397908%2C53.500665&source=wizgeo&text=Россия%2C%20Самарская%20область%2C%20Тольятти%2C%20Белорусская%20улица%2C%2014&utm_medium=maps-desktop&utm_source=serp&z=16&amp;source=constructor" width="100%" height="560" frameborder="0"></iframe>
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
        <iframe width="100%" height="550" src="https://www.youtube.com/embed/tkwZ7xnOZ-0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
      <h4 class="heading-4">Анна Брусницына</h4>
      <p class="paragraph">Специалист по социальному предпринимательству</p>
    </div>
      <img src="assets/img/c6kLtSyu5Ns.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 130px;">
    </div>
     <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4">Артем Крицын</h4>
      <p class="paragraph">менеджер проектов АО "РВК"</p>
    </div>
      <img src="assets/img/krit.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 130px;">
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
<h2 data-ix="move-up-on-scroll" class="maps_h1 spik_h">Кураторы стартап-школ</h2>
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
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4 ">Попова Анжелика Миралиевна</h4>
      <p class="paragraph ">Контактное лицо в Тольятти <br>
      <i class="fab fa-whatsapp"></i>89272144599 <br>ru@tltsu.ru</p>
    </div>
      <img src="assets/img/Foto_Popova_A_M.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 130px;">
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
      <a href="https://xn--80afcdbalict6afooklqi5o.xn--p1ai/">
        <img src="assets/img/pgrants_logo.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 100px;">
        </a>
    </div>
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
      <a href="http://rusinnovations.com/" class="oart"><img src="assets/img/AIR.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 100px;"></a>
    </div>
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
      <a href="https://moskva.mts.ru/personal" class="oart"><img src="assets/img/14587389102mts.jpeg" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 100px;"></a>
    </div>
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
      <a href="https://tltsu.ru/" class="oart"><img src="assets/img/TGU_round.jpg" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 100px;"></a>
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
                    <h4 class="heading-4 white-no-border">ПФО</h4>
                    </div>
                    <div data-ix="move-up-on-load-2" class="cta-bottom-flex-2">
                      <i class="far fa-calendar-alt marker_f"></i>
                      <h4 class="heading-4 white-no-border">26-28 апреля, 2019</h4>
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