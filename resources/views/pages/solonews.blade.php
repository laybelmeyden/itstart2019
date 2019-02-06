@extends('layouts.master')

@section('content')
<section id="nav">
    <nav class="nav-extended">
    <div class="nav-wrapper container">
      <a href="/" class="brand-logo"><img src="assets/img/Iogo.png" width="130.5" alt=""></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/#news" class="nav__item">Новости</a></li>
          <li><a href="/#role" class="nav__item">Участники</a></li>
          <li><a href="/#project" class="nav__item">О проекте</a></li>
          <li><a href="/#speakers" class="nav__item">Спикеры</a></li>
          <li><a href="/#contacts" class="nav__item">Контакты</a></li>
          <li class="item_reg"><a href="#maps" class="nav__item nav__item__reg nav__item__reg___1">Регистрация</a></li>
      </ul>
    </div>
  </nav>

    <ul class="sidenav" id="mobile-demo">
          <li><a href="/#news" class="nav__item">Новости</a></li>
          <li><a href="/#role" class="nav__item">Участники</a></li>
          <li><a href="/#project" class="nav__item">О проекте</a></li>
          <li><a href="/#speakers" class="nav__item">Спикеры</a></li>
          <li><a href="/#contacts" class="nav__item">Контакты</a></li>
          <li><a href="/#maps" class="nav__item nav__item__reg">Регистрация</a></li>
    </ul>
</section>
<div style="background-image:url(&quot;https://daks2k3a4ib2z.cloudfront.net/59b184f1d2e65000019d20ea/59b8206d5c790e0001cadfc9_olu-eletu-242903.jpg&quot;)" class="hero-section post">
    <div class="content-wrapper w-container">
            <div class="heading-box">
                <div class="container">
                  <div class="row">
                    <div class="col l12">
                      <h1 data-ix="move-up-on-load-2" class="heading-1">{{ $solo -> try_title}}</h1>
                    </div>
                  </div>
                </div>
                </div><div data-ix="move-up-on-scroll-3">
                </div>
                <a href="#Intro" class="scroll-down w-inline-block"></a>
                </div>
                <div class="overlay"></div>
                </div>

<div id="Intro" class="content-section-7">
    <div class="content-wrapper narrow w-container">
    <div data-ix="move-up-on-scroll" class="rich-text-block w-richtext">
       <div class="row">
         <div class="col l12">
            <p data-new-link="true">{!! $solo -> try_body !!}</p>
         </div>
       </div>
                <div style="text-align:center;">
                    <div class="row">
                      <div class="col l12">
                        <img src="storage/{{ $solo->try_img }}">
                      </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>

@endsection