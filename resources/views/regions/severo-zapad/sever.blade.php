@extends('layouts.master')

@section('content')
<header>
    <section id="navbar">
  <div data-collapse="medium" data-animation="default" data-duration="400" id="Top" class="navbar w-nav">
    <div class="content-wrapper w-container">
      <a href="/" class="brand w-nav-brand w--current">
        <img src="assets/img/Iogo.png" width="130.5" alt="">
        </a>
        <nav role="navigation" class="nav-menu w-nav-menu">
          <a href="#about" class="nav-link w-nav-link" style="max-width: 1260px;">О проекте</a>
          <a href="#rules" class="nav-link w-nav-link" style="max-width: 1260px;">5 Причин</a>
          <a href="#speakers" class="nav-link w-nav-link" style="max-width: 1260px;">Спикеры</a>
          <a href="#register" class="nav-link w-nav-link" style="max-width: 1260px;">Регистрация</a>
          <a href="#contacts" class="nav-link w-nav-link" style="max-width: 1260px;">Контакты</a>
              </nav>
              <div class="menu-button w-nav-button" id="chop_btn">
                <div class="icon w-icon-nav-menu">
                  <img src="assets/img/burger-menu.png" style="width: 40px;"></img>
                </div>
                </div>
                </div>
                <div class="w-nav-overlay" id="chop_nav">
                  <nav role="navigation" class="nav-menu w-nav-menu w--nav-menu-open">
                    <a href="#about" class="nav-link w-nav-link" style="max-width: 1260px;">О проекте</a>
          <a href="#rules" class="nav-link w-nav-link" style="max-width: 1260px;">5 Причин</a>
          <a href="#speakers" class="nav-link w-nav-link" style="max-width: 1260px;">Спикеры</a>
          <a href="#register" class="nav-link w-nav-link" style="max-width: 1260px;">Регистрация</a>
          <a href="#contacts" class="nav-link w-nav-link" style="max-width: 1260px;">Контакты</a>
                    </nav>
                    </div>
                </div>
</section>
    </header>

    <div class="content-wrapper w-container">
        <div class="row" id="banner">
            <div class="col-md-12">
                <img src="assets/img/it_start_logo.png" style="max-width:275px" />
                <h1 class="region_h1">Молодежная IT-школа «IT-Start» <br> <span style="font-size:40px;">SEVERК</span></h1>


            </div><p id="date">ЦЕНТР 21-23 декабря 2018<br> SEVER АО</p>
        </div>


        <div class="row" id="about">
            <h1 class="h1_region">О проекте</h1>
            <br />
            <div class="col-md-12">
                <p class="p_regions">
                    <strong>Молодежная  IT-школа</strong>
                     - это 3-х-дневный форум для молодых изобретателей и программистов, который проводится в городе Глазов. На протяжении 3-х дней с участниками будут работать специалисты и эксперты IT-компаний, представители инновационной инфраструктуры и потенциальные инвесторы в StartUp проекты. Помимо лекционной части предусматривается практическая работа с проектами участников. Финальным мероприятием IT-школы является презентационная сессия, в рамках которой участники представляют свои проработанные проекты на суд жюри.
                </p>

            </div>
            <br />
            <div class="col-md-6">
                <a class="link-button" href="https://vk.com/doc50857215_484294399?hash=c564e2ebf446865475&dl=9ae04cd1fe1d21480a">Скачать программу</a>
            </div>
            <div class="col-md-6">
                <a class="link-button" href="https://vk.com/doc95748576_476648349?hash=a479cbbcaa8419dc5b&dl=44b2cf060e476c9a4f" style="background-color: rgb(200,66,63);">Скачать положение</a>
            </div>
        </div>
  <div class="" id="rules">
                <div class="col-md-12" style="background-color: rgb(200,66,63);">
                <br />
                <h2 style="color:white !important; text-align:center;">5 причин прийти на IT-школу</h2>
                <br />
            </div>
        </div>
     <section id="players">
  <div id="Date" data-ix="move-up-on-scroll" class="cta-section">
    <div class="content-wrapper w-container">
          <div class="grid_container_2_col">
            <div class="grud_1">
              <div class="number_1">
                <div class="number_1_1">1</div>
                <span class="players_span">Лучшие эксперты из Москвы и никаких скучных лекций! Только практические мастер-классы и работа в малых группах</span>
              </div>
              <div class="number_1">
                <div class="number_1_1">2</div>
                <span class="players_span">Возможность прокачать свой проект или придумать классную IT-идею;</span>
              </div>
              <div class="number_1">
                <div class="number_1_1">3</div>
                <span class="players_span">Победители конкурса IT- проектов получают ценные призы и доступ к различным формам поддержки: акселерационные программы, стажировки в крупных IT-компаниях и т.д.;</span>
              </div>
            </div>
            <div class="grid_2">
              <div class="number_1">
                <div class="number_2">4</div>
                <span class="players_span">Деловой нетворкинг. Именно на таких мероприятиях Вы сможете найти партнеров и единомышленников;</span>
              </div>
              <div class="number_1">
                <div class="number_2">5</div>
                <span class="players_span">Если ты не из Анадыри - welcome! Мы обеспечиваем всех участников проживанием в отеле, трансфером по городу и питанием на время проведения IT-школы!</span>
              </div>
            </div>
          </div>
          <div class="center-buttons">
            </div>
            </div>
                        </div>
</section>
<section id="speakers">
     <div class="col-md-12" style="background-color: rgb(200,66,63); margin-bottom: 40px;">
                <br />
                <h2 style="color:white !important; text-align:center;">НАШИ СПИКЕРЫ</h2>
                <br />
            </div>
<div class="content-section">
<div class="content-wrapper w-container">
<div data-ix="move-up-on-scroll" class="w-dyn-list">
    <div class="flex-wrapper w-dyn-items">
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4 white">Станислав Сахаров</h4>
      <p class="paragraph white">Руководитель программы <br> IT-Start</p>
    </div>
      <img src="assets/img/sp1.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 80px;">
    </div>
     <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4 white">Андрей Поскряков</h4>
      <p class="paragraph white">Специалист по клиентоориентированности</p>
    </div>
      <img src="assets/img/sp2.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 80px;">
    </div>
     <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4 white">Матвей Бебенин</h4>
      <p class="paragraph white">Руководитель бэк-энд разработки в креативном агентстве SVMD</p>
    </div>
      <img src="assets/img/sp3.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 80px;">
    </div>
     <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4 white">Владимир Шульгин</h4>
      <p class="paragraph white">Директор проектного офиса АНО "АИР"</p>
    </div>
      <img src="assets/img/sp4.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 80px;">
    </div>
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4 white">Артём Попов</h4>
      <p class="paragraph white">Специалист <br>EduTech-направления</p>
    </div>
      <img src="assets/img/sp5.jpg" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 80px;">
    </div>
    <div data-ix="move-to-origin" class="team-member w-dyn-item">
    <div class="team-member-description">
      <h4 class="heading-4 white">Сергеев Никита</h4>
      <p class="paragraph white">Директор проектного офиса  <br>АНО "АИР"</p>
    </div>
      <img src="assets/img/sp6.png" alt="" sizes="(max-width: 479px) 100vw, (max-width: 767px) 43vw, 28vw" style="padding-bottom: 80px;">
    </div>
    </div>
</div>
</div>
</div>
</section>
      
      
      
        <div class="row" id="register">
            <div class="col-md-12" style="background-color:  rgb(46,99,92)">
                <br />
                <h2 style="color:white !important">Регистрация</h2>
                <br />
            </div>

            <div class="col-md-12" id="reg-info">
              <br>
                <p class="p_regions">Место проведения: Дальневосточный федеральный округ, Чукотский АО, г. Анадырь, Арктический инновационный центр ФГАОУ ВПО "Северо-Восточный федеральный университет имени М.К. Аммосова"</p>   
                </div>
          <div class="col-md-12" id="reg-info">
                <h3 class="p_regions">Перед регистрацией</h3> 
            	<p class="p_regions">1. Зарегистрируйтесь в системе <a href="https://ais.fadm.gov.ru/">https://ais.fadm.gov.ru/</a> <br>
2. Зарегистрируйтесь на мероприятие</p>
                </div>

             <div class="col-md-6">
                <a class="link-button" href="https://vk.com/doc50857215_484294399?hash=c564e2ebf446865475&dl=9ae04cd1fe1d21480a">Регистрация на АИС молодежь</a>
            </div>
            <div class="col-md-6">
                <a class="link-button" href="https://vk.com/doc95748576_476648349?hash=a479cbbcaa8419dc5b&dl=44b2cf060e476c9a4f" style="background-color: rgb(200,66,63);">Регистрация на мероприятие</a>
            </div>

        

        <div class="row" id="contacts">
            <h2 class="h1_region">Контакты</h2>
            <br />
            <div class="col-md-12" id="contacts">
                <div id="address">
                <div class="contact-info" style="text-align: right; height: 185px; padding-right: 70px">
                        <p class="paragraph white">Контактное лицо в Москве:</p>
                        <p class="paragraph white">Шульгин Владимир Алексеевич </p>
                        <p class="paragraph white">+7 (499) 753 01 25</p>
                  		<p class="paragraph white">vs@rusinnovations.com</p>
                    </div> 
                    <div class="contact-info" style="text-align: left; height: 115px">
                    </div>
                </div>
                <div id="map">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A762688ec59991fb5e3f623c146dbf9746d3880a40c923e4c35c1fd8f56ae85e3&amp;source=constructor" width="100%" height="300" frameborder="0"></iframe>
                </div>
            </div>
        </div>
@endsection