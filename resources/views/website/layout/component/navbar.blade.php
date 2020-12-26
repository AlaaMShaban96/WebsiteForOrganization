<div class="container--row">
    <nav class="navigation--disktop">
      <!--Navigation-->
      <img src="{{asset('website/img/logo-white.png')}}" alt="Organization Logo" class="logo" />
      <div class="navigation">
        <input
          id="navi-toggle"
          type="checkbox"
          class="navigation__checkbox"
        />
        <label for="navi-toggle" class="navigation__button">
          <span class="navigation__icon">&nbsp;</span>
        </label>
        <div class="navigation__background">&nbsp;</div>
        <nav class="navigation__nav">
          <ul class="navigation__list">
            <li class="navigation__item">
              <a href="{{url('/')}}" class="navigation__link">الصفحة الرئيسية</a>
            </li>
            <li class="navigation__item">
              <a href="{{url('/projects')}}" class="navigation__link">مشاريع</a>
            </li>
            <li class="navigation__item">
              <a href="{{url('/members')}}" class="navigation__link">الأعضاء</a>
            </li>
            <li class="navigation__item">
              <a href="{{url('/about')}}" class="navigation__link">حول</a>
            </li>
            
            </li>
          </ul>
        </nav>
      </div>
      <ul class="list">
        <li class="list__item">
          <a href="{{url('/about')}}" class="list__link">حول</a>
        </li>
        <li class="list__item">
          <a href="{{url('/members')}}" class="list__link">الأعضاء</a>
        </li>
        <li class="list__item">
          <a href="{{url('/project')}}" class="list__link">مشاريع</a>
        </li>
        <li class="list__item">
          <a href="{{url('/')}}" class="list__link">الصفحة الرئيسية</a>
        </li>
      </ul>
    </nav>
    <div class="section-hero">

@if ((\Request::route()->getName() == 'index'))
<section class="who-we-are container--row u-margin-top-big" data-aos="fade-left" >
    <div class="who-we-are__image" >
      <img src="{{asset("$aboutUs->image")}}" alt="" />
  
   
    </div>
    <div class="who-we-are__text" >
      <h2 class="secondary-heading">{{$aboutUs->titel}}</h2>
      <p class="who-we-are__paragraph">
       {{$aboutUs->description}}
      </p>
    </div>
</section>
    
@endif
        

    </div>
    <!--./section__hero-->
  </div>