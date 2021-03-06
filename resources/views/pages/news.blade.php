@extends('layouts.master')

@section('content')

<section id="nav">
    <nav class="nav-extended">
    <div class="nav-wrapper container">
      <a href="/" class="brand-logo"><img src="assets/img/Iogo.png" width="130.5" alt=""></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/#news" class="nav__item">Новости</a></li>
          <li><a href="/#role" class="nav__item">Участникам</a></li>
          <li><a href="/#project" class="nav__item">О проекте</a></li>
          <li><a href="/#contacts" class="nav__item">Контакты</a></li>
          <li class="item_reg"><a href="/#maps" class="nav__item nav__item__reg nav__item__reg___1">Регистрация</a></li>
      </ul>
    </div>
  </nav>

    <ul class="sidenav" id="mobile-demo">
          <li><a href="/#news" class="nav__item">Новости</a></li>
          <li><a href="/#role" class="nav__item">Участникам</a></li>
          <li><a href="/#project" class="nav__item">О проекте</a></li>
          <li><a href="/#contacts" class="nav__item">Контакты</a></li>
          <li><a href="/#maps" class="nav__item nav__item__reg">Регистрация</a></li>
    </ul>
</section>
<secction class="news">
<div class="container">
  <div class="row">
    <h1 class="news_h1">НОВОСТИ</h1>
    <div class="col l12">
          @foreach ( $trynews as $trynew)
              <div class="col l4 s12">
              <a href="/solonews{{ $trynew->id }}" class="news_link">
              <div class="img_news"><img src="storage/{{ $trynew->try_img }}"></img></div>
              <div class="news_date"><p class="ews__date">{{ $trynew->try_date }}</p></div>
              <div class="news_title"><h1 class="news__title">{{ $trynew->try_title }}</h1></div>
              </a>
              </div>
            @endforeach
    </div>
    
  </div>
</div>
</secction>
@endsection