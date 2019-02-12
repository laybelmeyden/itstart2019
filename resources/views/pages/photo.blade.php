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

<div class="container">
    <div class="row">
    <div class="m-p-g">
	<div class="m-p-g__thumbs" data-google-image-layout data-max-height="350">
	  @if(!empty($data) && $data->count())

     @foreach ($data as $tabimgs)
     <?php $count = 0; ?>
		@foreach (json_decode($tabimgs->img_tab, true) as $img_tabs)
		<?php if($count == 500) break; ?>
		<div class="col l4">
		<div class="photos">
		    <img src="{{ URL::to('/storage/'.$img_tabs)}}" data-full="{{ URL::to('/storage/'.$img_tabs)}}" class="m-p-g__thumbs-img item__img" />
		</div>
		</div>
		<?php $count++; ?>
		@endforeach
		@endforeach
    @else
		<div class="col l12 center"> Нет фото</div>
		@endif
	</div>

	<div class="m-p-g__fullscreen"></div>
</div>
    </div>
</div>


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
        <h4 class="heading-4 white-no-border">с 29 марта по 31 мая, 2019</h4>
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
<script>
    const elem = document.querySelector('.m-p-g');

document.addEventListener('DOMContentLoaded', function() {
const gallery = new MaterialPhotoGallery(elem);
});
</script>
@endsection
