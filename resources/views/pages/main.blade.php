@extends('layouts.master')

@section('content')
<section id="nav">
    <nav class="nav-extended">
    <div class="nav-wrapper container">
      <a href="/" class="brand-logo"><img src="assets/img/Iogo.png" width="130.5" alt=""></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#news" class="nav__item">Новости</a></li>
          <li><a href="#role" class="nav__item">Участникам</a></li>
          <li><a href="#project" class="nav__item">О проекте</a></li>
          <li><a href="#contacts" class="nav__item">Контакты</a></li>
          <li class="item_reg"><a href="#maps" class="nav__item nav__item__reg nav__item__reg___1">Регистрация</a></li>
      </ul>
    </div>
  </nav>

    <ul class="sidenav" id="mobile-demo">
          <li><a href="#news" class="nav__item">Новости</a></li>
          <li><a href="#role" class="nav__item">Участникам</a></li>
          <li><a href="#project" class="nav__item">О проекте</a></li>
          <li><a href="#contacts" class="nav__item">Контакты</a></li>
          <li><a href="#maps" class="nav__item nav__item__reg">Регистрация</a></li>
    </ul>
</section>
<section id="header">
    <div class="down_paralax">
    <div class=" container center">
    <img src="assets/img/Banner.png" class="banner_main">
  </div>
  <div class="down_paralax_part">
    <div class="container center">
    <div class="row">
      <div class="col l4 s4"><a href="https://xn--80afcdbalict6afooklqi5o.xn--p1ai/"><img src="assets/img/Fond_logo.png" class="part__logo__item"></a></div>
      <div class="col l4 s4"><a href="http://rusinnovations.com/"><img src="assets/img/AIR1.png" class="part__logo__item"></a></div>
      <div class="col l4 s4"><a href="https://moskva.mts.ru/"><img src="assets/img/MTS.png" class="part__logo__item"></a></div>
    </div>
  </div>
  </div>
  </div>
</section>
<section class="carier" id="carier">
  <div class="row">
    <div class="col l9 s7 non">
      <div class="col l3 center">
        <div class="col l12"><p class="carier_1">ТЫ</p></div>
        <div class="col l12 col_span_2"><p class="carier_2">16-30</p></div>
        <div class="col l12"><p class="carier_3">ЛЕТ</p></div>
        </div>
      <div class="col l9 s5">
        <p class="p_carier animated  fadeInLeftBig sl dl" id="el1"><i class="fas fa-arrow-right f__r"></i>молодой изобретатель</p>
        <p class="p_carier animated  fadeInLeftBig sl dl1" id="el2"><i class="fas fa-arrow-right f__r"></i>студент профильного ВУЗа или ССУЗа</p>
        <p class="p_carier animated  fadeInLeftBig sl dl2" id="el3"><i class="fas fa-arrow-right f__r"></i>программист</p>
        <p class="p_carier animated fadeInLeftBig sl dl3" id="el4"><i class="fas fa-arrow-right f__r"></i>социальный предприниматель</p>
      </div>
    </div>
    <div class="col l3 right col_btn_carier s12">
      <button class="carier_btn" id="btn_car">Начни карьеру в IT <br> ПРЯМО СЕЙЧАС</button>
    </div>
  </div>
</section>
<secction class="news" id="news">
<div class="container">
  <div class="row">
    <h1 class="news_h1">НОВОСТИ</h1>
    <div class="col l12 s12">
      <div class="owl-carousel owl-theme owl-loaded" id="slider">
    <div class="owl-stage-outer">
        <div class="owl-stage">
          @foreach ( $trynews as $trynew)
            <div class="owl-item">
              <div class="col l12 s12">
              <a href="/solonews{{ $trynew->id }}" class="news_link">
              <div class="img_news"><img src="storage/{{ $trynew->try_img }}" class="img__newss"></img></div>
              <div class="news_date"><p class="news__date">{{ $trynew->try_date }}</p></div>
              <div class="news_title"><h1 class="news__title">{{ $trynew->try_title }}</h1></div>
              </a>
              </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="owl-nav">
        <div class="prvBtn"><i class="fas fa-angle-left arrow_news"></i></div>
        <div class="nxtBtn"><i class="fas fa-angle-right arrow_news"></i></div>
    </div>
</div>
    </div>
    <div class="col l12 s12 center">
      <button class="carier_btn" id="btn_news">Все новости</button>
    </div>
  </div>
</div>
</secction>
<section id="role">
<div class="container">
   <div class="row">
     <h1 class="h1_tabs center">Участникам</h1>
     <p class="tbs">Все возмножности на одной площадке</p>
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col l3 s12 ser_1"><a class="active" href="#test1">Что ждет участников</a></li>
        <li class="tab col l3 s12 ser_3"><a href="#test2">Правила участия</a></li>
        <li class="tab col l3 s12 ser_4"><a href="#test4">Медиа</a></li>
        <li class="tab col l3 s12 ser_2"><a href="#test3">Полезная информация</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="row">
  <div id="test1" class="col s12 tabs_1 center">
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
      <img src="assets/img/Podgotovka_zayavok.png" class="ojid__item"></img>
        <div class="pop">Подготовка заявок на получение проектного финансирования </div>
    </div>
    <div class="col s12 m6 l2">
      <img src="assets/img/Instrumenty.png" class="ojid__item"></img>
        <div class="pop">Инструменты для развития социальных проектов </div>
    </div>
    <div class="col s12 m6 l2">
      <img src="assets/img/Stazhirovki.png" class="ojid__item"></img>
        <div class="pop">Стажировки в подразделениях компании МТС</div>
    </div>
    <div class="col s12 m12 l1"></div>
    </div>
    <div id="test2" class="col s12 tabs_1">
      <section id="players">
  <div id="Date" data-ix="move-up-on-scroll">
    <div class="content-wrapper w-container">
          <div class="grid_container_2_col">
            <div class="grud_1">
              <div class="number_1">
                <div class="number_1_1">1</div>
                <span class="players_span">Все участники мероприятия должны зарегистрироваться на официальной интернет странице Программы или на иных сайтах, указанных организатором.</span>
              </div>
              <div class="number_1">
                <div class="number_1_1">2</div>
                <span class="players_span">Участники, не вовлеченные в команду по итогу второго дня IT-школы, к участию не допускаются.</span>
              </div>
              <div class="number_1">
                <div class="number_1_1">3</div>
                <span class="players_span">Все команды получают кейс (описание современной технологии или инновационного продукта), на основании которого необходимо придумать свой проект, продукт или решение. Участники так же могут работать со своим проектом.</span>
              </div>
              <div class="number_1">
                <div class="number_1_1">4</div>
                <span class="players_span">Участники могут использовать для решения кейса любые технические средства в необходимом количестве.</span>
              </div>
              <div class="number_1">
                <div class="number_1_1">5</div>
                <span class="players_span">Участники сами выбирают способ демонстрации решения: презентация, видеоролик, прототип и т.д.</span>
              </div>
              <div class="number_1">
                <div class="number_1_1">6</div>
                <span class="players_span">Проекты оцениваются по следующим критериям:<br>
 актуальность;<br>
 реализуемость проекта;<br>
 соответствие проекта кейсу;<br>
 предлагаемое решение;<br>
 перспективы монетизации;<br>
 презентация и ответы на вопросы.</span>
              </div>
            </div>
            <div class="grid_2">
              <div class="number_1">
                <div class="number_2">7</div>
                <span class="players_span">Все участники делятся на команды от 3 до 6 человек.</span>
              </div>
              <div class="number_1">
                <div class="number_2">8</div>
                <span class="players_span">Все участники в обязательном порядке являются слушателями образовательной программы.</span>
              </div>
              <div class="number_1">
                <div class="number_2">9</div>
                <span class="players_span">Для демонстрации проекта участники используют утвержденный Оператором Программы шаблон презентации.</span>
              </div>
              <div class="number_1">
                <div class="number_2 number_2_2">10</div>
                <span class="players_span">Участники не могут привлекать для решения кейса третьих лиц.</span>
              </div>
              <div class="number_1">
                <div class="number_2 number_2_2">11</div>
                <span class="players_span">Решения участников оценивает жюри, в состав которого входят эксперты Программы, представители местного инновационного, научного и предпринимательского сообщества.</span>
              </div>
              <div class="number_1">
                <div class="number_2 number_2_2">12</div>
                <span class="players_span">Участники награждаются сертификатами, победители получают дипломы, памятные награды. Победитель IT-школы за 1-е место получает образовательный тревел-грант в Израиль.</span>
              </div>
            </div>
          </div>
          <div class="center-buttons">
            </div>
            </div>
                        </div>
</section>
    </div>
    <div id="test4" class="col s12 tabs_1">
      <a href="/photoall"><div class="col l12">
        <div class="col l4"><img src="assets/img/Snimok_ekrana_2019-02-13_v_17_17_19.png" class="responsive-img"></img></div>
        <div class="col l4"><img src="assets/img/Snimok_ekrana_2019-02-13_v_17_18_02.png" class="responsive-img"></img></div>
        <div class="col l4"><img src="assets/img/Snimok_ekrana_2019-02-13_v_17_18_44.png" class="responsive-img"></img></div>
      </div>
      <div class="col l2"></div>
      <div class="col l8 s12 pht_btn_item"><a href="/photoall" class="button-3 w-button">Все фото</a></div>
      <div class="col l2"></div>
      </a>
      <div class="col l12"></div>
      <a href="/photoall"><div class="col l12">
        <div class="col l12 center"><iframe class="propert" src="https://www.youtube.com/embed/lhALjJCVirM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
      </div>
      <div class="col l2"></div>
      <div class="col l8 s12 pht_btn_item"><a href="/videoall" class="button-3 w-button">Все видео</a></div>
      <div class="col l2"></div>
      </a>
      <div class="col l12"></div>
    </div>
    <div id="test3" class="col s12 tabs_1"></div>
</div>
</section>
<section id="project">
  <div class="parallax-container para_cont_2">
      <div class="parallax para__"><img src="assets/img/main5ok.jpg" class="img__item__992"></div>
      <div class="content-section">
  <div class="content-wrapper w-container">
  <div class="section bottom-border">
  <div class="col s12 center" style="padding-left: 0%;">
  <div>
  <h3 class="h2-large item__text__992">IT-START</h3>
  <p class="item__text__992 subtitle subtitle_1">Это постоянно действующая программа поддержки молодых программистов и молодежных проектов в сфере информационных технологий. <br>
С 2018 года программа реализуется за счет средств гранта Президента Российской Федерации на развитие гражданского общества, предоставленного Фондом президентских грантов, при партнерской поддержки компании ПАО «МТС» и региональных Соорганизаторов.</p>
  <a href="https://vk.com/doc95748576_489254865?hash=6cb329883dd97bc8b0&amp;dl=503922a459fc3765e2" class="button w-button">Скачать положение</a></div>
  </div>
  </div>
  </div>
  </div>
    </div>
</section>

<section id="maps">
  <div class="content-wrapper w-container">
  <h1 class="maps_h1">География проекта</h1>
  <div class="maps_hr"></div>
  <p class="maps_p">выбери свой округ на карте и зарегистрируйся</p>
  </div>
  <div class="row">
    <div class="col l12 s12">
        <ul class="collapsible">
    <li>
      <div class="collapsible-header center">Города проведения</div>
      <div class="collapsible-body">
        <a href="/yg"><p>1.Южный федеральный округ - г.Краснодар - 19-21 апреля</p></a>
        <a href="/privoljsk"><p>2.Приволжский федеральный округ - г.Тольятти - 26-28 апреля</p></a>
        <a href="/center"><p>3.Центральный федеральный округ - г.Рязань - 29-31 мая</p></a>
        <a href="/severo-zapad"><p>4.Северо-Западный федеральный округ - г.Архангельск - 29-31 марта</p></a>
        <a href="/uraliskiy"><p>5.Уральский федеральный округ - г.Челябинск - 17-19 мая</p></a>
        <a href="/sibirkiy"><p>6.Сибирский федеральный округ - г.Новосибирск - 12-14 апреля</p></a>
        <a href="/daliniyvostok1"><p>7.Дальневосточный федеральный округ - г.Владивосток - 5-7 апреля</p></a>
        <a href="/daliniyvostok2"><p>8.Дальневосточный федеральный округ - г.Улан-Удэ - 24-26 мая</p></a>
      </div>
    </li>
  </ul>
    </div>
  </div>
  <div id="russian-map"></div>
  <div id="dali">
    <div class="row">
      <span class="close__maps__item">×</span>
      <p class="maps__text__item">Выберите Ваш город в Дальневосточном федеральном округе</p>
      <div class="col s12 l6"><div class="maps_modal_confirm_item">
        <a href="/daliniyvostok1" class="href__maps__item">Владивосток</a>
      </div></div>
      <div class="col s12 l6"><div class="maps_modal_confirm_item">
        <a href="/daliniyvostok2" class="href__maps__item">Улан Удэ</a>
      </div></div>
    </div>
  </div>
</section>
<section id="speakers">
<div class="content-section">
<div class="content-wrapper w-container">
<div class="header-centered">
<h2 data-ix="move-up-on-scroll" class="maps_h1 spik_h">РУКОВОДИТЕЛЬ ПРОГРАММЫ</h2>
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
    </div>
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
      <h4 class="heading-4">Андрей Поскряков</h4>
      <p class="paragraph">Специалист по клиентоориентированности</p>
    </div>
      <img src="assets/img/sp2.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 130px;">
    </div>
     <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4">Матвей Бебенин</h4>
      <p class="paragraph">Руководитель бэк-энд разработки в креативном агентстве SVMD</p>
    </div>
      <img src="assets/img/sp3.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 130px;">
    </div>
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4">Шариф Кармо</h4>
      <p class="paragraph">Сооснователь и операционный директор GetShop.TV</p>
    </div>
      <img src="assets/img/WhatsApp_Image_2019-02-07_at_17_50_55.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 130px;">
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
      <h4 class="heading-4">Кудрин Антон</h4>
      <p class="paragraph">Старший менеджер Академии PwC</p>
    </div>
      <img src="assets/img/Anton-e1472741963931.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 130px;">
    </div>
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4">Артем Крицын</h4>
      <p class="paragraph">менеджер проектов АО "РВК"</p>
    </div>
      <img src="assets/img/krit.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 130px;">
    </div>
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4">Даниил Ханин</h4>
      <p class="paragraph">основатель UECalc</p>
    </div>
      <img src="assets/img/15400563_1308521232547773_4635382360933874651_n.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 130px;">
    </div>
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4">Владислав Губин</h4>
      <p class="paragraph">Владелец продукта в Admitad</p>
    </div>
      <img src="assets/img/13094394_10209148080608923_1322764487236222237_n.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 130px;">
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
      <h4 class="heading-4">Владимир Шульгин</h4>
      <p class="paragraph ">Руководитель проектов <br>АНО "АИР"</p>
    </div>
      <img src="assets/img/sp4.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 130px;">
    </div>
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4 ">Сергеев Никита</h4>
      <p class="paragraph ">Руководитель проектов <br>АНО "АИР"</p>
    </div>
      <img src="assets/img/Nikita4.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 130px;">
    </div>
    </div>
</div>
</div>
</div>
</section>
<section id="contacts">
  <div class="parallax-container para_cont">
      <div class="parallax"><img src="assets/img/bg-contato-2.jpg"></div>
        <div id="Date" data-ix="move-up-on-scroll" class="cta-section">
    <div class="content-wrapper w-container">
      <div class="header-centered">
        <h2 data-ix="move-up-on-load-2" class="h2-large">Возникли вопросы ?</h2>
        </div>
        <div class="subtitle-centered-box less-border">
          </div>
            <div class="container">
              <div class="row">
                <div class="col s12 m4"><a class="button-3 w-button" id="myBtn">Написать нам</a></div>
                <div class="col s12 m8"><div class="call_center ln_white">Call-центр IT-START<br> Звони <br> +7 (499) 753 01 25</div></div>
              </div>
            </div>
            </div>
            </div>
    </div>
            <!--модал-->
            <div id="myModal" class="modal">
            <div class="modal-content">
            <div class="modal-header">
              <span class="close">&times;</span>
            </div>
            <div class="modal-body grid_form">
              <p class="p_form">Форма обратной связи</p>
            <form action="/footerform" method="POST" id="mainform">
              {{ csrf_field() }} 
              <div class="grid_form">Введите Вашу почту<input name="email" type="email" class="inp_text" required/></div>
              <div class="grid_form">Введите Ваше имя<input type="text" name="u_name"  class="inp_text" required/></div>
              <div class="grid_form">Введите текст обращения<textarea name="u_text"  class="inp_text" required></textarea></div>
              <div class="grid_form"><button type="submit" class="btn_form">ОТПРАВИТЬ</button></div>
            </form>
            </div>
            </div>
            </div>
            <!--конецмодалки-->
            <!--send form method-->
            @if(session('message'))
            <div id="formsuccess">
              <p class="success__item">{{ session('message') }}</p>
            </div>
            @endif
            <!--end-->
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
        <img src="assets/img/pgrants_logo.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" >
        </a>
    </div>
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
      <a href="http://rusinnovations.com/" class="oart"><img src="assets/img/AIR.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" ></a>
    </div>
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
      <a href="https://moskva.mts.ru/personal" class="oart"><img src="assets/img/14587389102mts.jpeg" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" ></a>
    </div>
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
      <a href="http://itpark74.ru/" class="oart"><img src="assets/img/logotexpark.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" ></a>
    </div>
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
      <a href="https://narfu.ru/" class="oart"><img src="assets/img/logo_normal_normal.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" ></a>
    </div>
    </div>
</div>
</div>
</div>  
</section>

<section class="footer">
    <div data-ix="move-up-on-scroll" class="cta-bottom">
    <div class="content-wrapper w-container">
    <div class="cta-box">
    <div data-ix="move-up-on-load-2" class="cta-bottom-flex">
    <i class="fas fa-map-marked-alt marker_f"></i>
    <h4 class="heading-4 white-no-border">7 округов</h4>
    </div>
    <div data-ix="move-up-on-load-2" class="cta-bottom-flex-2">
    <i class="far fa-calendar-alt marker_f"></i>
    <h4 class="heading-4 white-no-border">с 29 марта по 31 мая, 2019</h4>
    </div>
    <div data-ix="move-up-on-scroll-3" class="cta-bottom-flex-3 w-inline-block">
    <i class="far fa-user marker_f"></i>
    <h4 class="heading-4 white-no-border">Успей зарегистрироваться!</h4>
    </div>
    </div>
    <div class="col l12 center white-text" style="padding:30px;">Наши соц. сети</div>
    <div class="col l12 center"><a target="_blank" href="https://vk.com/aidrussia"><i class="fab fa-vk"></i></a></div>
    </div>
    </div>
    </div>
</section>
<script type="text/javascript">
  window.onload = function() {
            fetch('assets/js/with-districts.json').then(function(response) {
                response.json().then(function(data) {
                    new RussianMap({
                        viewPort: data.viewPort,
                        mapId: 'russian-map',
                        width: "100%",
                        height: 497,
                        // дефолтовые атрибуты для контуров регионов
                        defaultAttr: {
                            fill: '#d8d8d8', // цвет которым закрашивать
                            stroke: 'rgb(64, 192, 203)', // цвет границы
                            'stroke-width': 1, // ширина границы
                            'stroke-linejoin': 'round' // скруглять углы
                        },
                        mouseMoveAttr: {
                            fill: '#f79f68'
                        },
                        onMouseMove: function(event) {
                            console.log('mouse on ' + this.region.name);
                        },
                        onMouseOut: function(event) {
                           
                        },
                        onMouseClick: function(event) {
                          if (this.region.name == "Сибирский федеральный округ") {
                            document.location.href = "/sibirkiy";
                          }
                          if (this.region.name == "Уральский федеральный округ") {
                            document.location.href = "/uraliskiy";
                          }
                          if (this.region.name == "Северо-Западный федеральный округ") {
                            document.location.href = "/severo-zapad";
                          }
                          if (this.region.name == "Центральный федеральный округ") {
                            document.location.href = "/center";
                          }
                          if (this.region.name == "Приволжский федеральный округ") {
                            document.location.href = "/privoljsk";
                          }
                          if (this.region.name == "Южный федеральный округ") {
                            document.location.href = "/yg";
                          }
                          if (this.region.name == "Северо-Кавказский федеральный округ") {
                            // document.location.href = "/severo-kavkaz";
                            
                          }
                          if (this.region.name == "Дальневосточный федеральный округ") {
                            
                              const a_modal = document.querySelector("#dali").style.display = "block";
                              const a_modal_close = document.querySelector(".close__maps__item");
                              a_modal_close.onclick = function() {
                              const a_modal = document.querySelector("#dali").style.display = "none";
                              }
                              
                          }
                        }
                    }, data.regions);
                });
            });
        };
        
</script>
@endsection
