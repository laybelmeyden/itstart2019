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
    <img src="assets/img/Banner_na_glavnuyu.png" class="banner_main">
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
      <div class="col l2 s6 bonus_img_col">
        <img src="assets/img/b1.png" class="bonus_img"></img>
        <p class="p_bonus">Лучшие тренеры</p>
        </div>
        <div class="col l2 s6 bonus_img_col">
        <img src="assets/img/b2.png" class="bonus_img"></img>
        <p class="p_bonus">Нетворкинг</p>
        </div>
        <div class="col l2 s6 bonus_img_col">
        <img src="assets/img/b3.png" class="bonus_img"></img>
        <p class="p_bonus">Работа с IT проектами</p>
        </div>
        <div class="col l2 s6 bonus_img_col">
        <img src="assets/img/b4.png" class="bonus_img"></img>
        <p class="p_bonus">Мастер классы</p>
        </div> 
        <div class="col l2 s6 bonus_img_col">
        <img src="assets/img/b5.png" class="bonus_img"></img>
        <p class="p_bonus">Презентационная сессия</p>
        </div>
        <div class="col l2 s6 bonus_img_col">
        <img src="assets/img/b6.png" class="bonus_img"></img>
        <p class="p_bonus">Международные стажировки</p>
        </div>
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
    <div id="test3" class="col s12 tabs_1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
    <div id="test4" class="col s12 tabs_1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
</div>
</section>
<section id="project">
  <div class="parallax-container para_cont_2">
      <div class="parallax para__"><img src="http://experimarketing.com/wp-content/uploads/2014/10/main5ok.jpg"></div>
      <div class="content-section">
  <div class="content-wrapper w-container">
  <div class="section bottom-border">
  <div class="col s12 center" style="padding-left: 0%;">
  <div>
  <h3 class="h2-large">IT-START</h3>
  <p class="subtitle subtitle_1">Это постоянно действующая программа поддержки молодых программистов и молодежных проектов в сфере информационных технологий. <br>
В 2019 году программа реализуется за счет средств гранта Президента Российской Федерации на развитие гражданского общества, предоставленного Фондом президентских грантов, партнерской поддержки компании ПАО «МТС» и региональных представителей.</p>
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
  <div id="russian-map"></div>
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
      <img src="assets/img/sp1.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 80px;">
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
      <img src="assets/img/sp2.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 80px;">
    </div>
     <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4">Матвей Бебенин</h4>
      <p class="paragraph">Руководитель бэк-энд разработки в креативном агентстве SVMD</p>
    </div>
      <img src="assets/img/sp3.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 80px;">
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
<h2 data-ix="move-up-on-scroll" class="maps_h1 spik_h">ОРГАНИЗАТОРЫ</h2>
</div>
<div data-ix="move-up-on-scroll" class="w-dyn-list">
    <div class="flex-wrapper w-dyn-items center">
     <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4">Владимир Шульгин</h4>
      <p class="paragraph ">Руководитель проектов <br>АНО "АИР"</p>
    </div>
      <img src="assets/img/sp4.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 80px;">
    </div>
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4 ">Сергеев Никита</h4>
      <p class="paragraph ">Руководитель проектов <br>АНО "АИР"</p>
    </div>
      <img src="assets/img/sp6.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 80px;">
    </div>
    </div>
</div>
</div>
</div>
</section>
<section id="contacts">
  <div class="parallax-container para_cont">
      <div class="parallax"><img src="http://continentaleletrica.com.br/wp-content/uploads/2017/05/bg-contato-2.jpg"></div>
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
                <div class="col s12 m4"><div class="call_center ln_white">Call-центр IT-START</div></div>
                <div class="col s12 m4"><div class="phone ln_white">Звони <br> +7 (499) 753 01 25</div></div>
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
            <form action="/footerform" method="POST">
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
                    <h4 class="heading-4 white-no-border">8 округов</h4>
                    </div>
                    <div data-ix="move-up-on-load-2" class="cta-bottom-flex-2">
                      <i class="far fa-calendar-alt marker_f"></i>
                      <h4 class="heading-4 white-no-border">с 1 марта по 30 мая, 2019</h4>
                      </div>
                      <div data-ix="move-up-on-scroll-3" class="cta-bottom-flex-3 w-inline-block">
                        <i class="far fa-user marker_f"></i>
                        <h4 class="heading-4 white-no-border">Успей зарегистрироваться!</h4>
                        </div>
                        </div>
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
                            // document.location.href = "/sibirkiy";
                            document.location.href = "/center";
                          }
                          if (this.region.name == "Уральский федеральный округ") {
                            // document.location.href = "/uraliskiy";
                            document.location.href = "/center";
                          }
                          if (this.region.name == "Северо-Западный федеральный округ") {
                            // document.location.href = "/severo-zapad";
                            document.location.href = "/center";
                          }
                          if (this.region.name == "Центральный федеральный округ") {
                            document.location.href = "/center";
                          }
                          if (this.region.name == "Приволжский федеральный округ") {
                            // document.location.href = "/privoljsk";
                            document.location.href = "/center";
                          }
                          if (this.region.name == "Южный федеральный округ") {
                            // document.location.href = "/yg";
                            document.location.href = "/center";
                          }
                          if (this.region.name == "Северо-Кавказский федеральный округ") {
                            // document.location.href = "/severo-kavkaz";
                            document.location.href = "/center";
                          }
                          if (this.region.name == "Дальневосточный федеральный округ") {
                            // document.location.href = "/daliniyvostok";
                            document.location.href = "/center";
                          }
                        }
                    }, data.regions);
                });
            });
        };
</script>
@endsection
