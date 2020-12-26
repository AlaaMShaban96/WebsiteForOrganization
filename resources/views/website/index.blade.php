@extends('website.layout.master')
@include('website.layout.component.header')

 @section('content')
 {{-- <section class="who-we-are container--row u-margin-top-big" data-aos="fade-left" >
  <div class="who-we-are__image" >
    <img src="{{asset("$aboutUs->image")}}" alt="" />

 
  </div>
  <div class="who-we-are__text" >
    <h2 class="secondary-heading">{{$aboutUs->titel}}</h2>
    <p class="who-we-are__paragraph">
     {{$aboutUs->description}}
    </p>
  </div>
 </section> --}}

<section class="container--row u-margin-top-big" data-aos="fade-left">
  <h2 class="primary-heading u-centered ">مشاريعنا</h2>  
  <div class="our-projects">
    @foreach ($projects as $project)
    <div class="project">
      <img src='{{asset("$project->image")}}' alt="" class="project__image" />
      <h5 class="project__title">{{$project->name}}</h5>
      <p class="project__paragraph">
        {{$project->description}}
      </p>
      <a href='{{url("/project/$project->id")}}' class="btn project__btn">إطلع على المزيد</a>
    </div>
    @endforeach

</div>
<!--./our-projects-->
</section>
<section class="our-team u-margin-top-big" data-aos="fade-up">
  <div class="container--row our-team__content">
   
    @foreach ($teams as $boss)
      <div class="team-member card-info">
        <div class="team-member__image card-info__img">
          <img src='{{asset("$boss->image")}}'/>
        </div>
        <div class="card-info__text">
        <h2 class="team-member__name card-info__name">{{$boss->name}}</h2>
        <span class="team-member__title card-info__title">{{$boss->titel}}</span>
        <div class="card-info__social-media social-media">
          <a href="#" class="card-info__link social-media__link">
            <img  src="{{asset('website/img/svg/facebook-circle.svg')}}" alt=""class="social-media__icon card-info__icon">
          </a>
          <a href="#" class="social-media__link card-info__link u-margin-left-right">
            <img  src="{{asset('website/img/svg/twitter-circle.svg')}}" alt=""class="social-media__icon card-info__icon">
            </a>
            <a href="#" class="social-media__link card-info__link">
              <img src="{{asset('website/img/svg/linkedin-circle.svg')}}" alt=""class="social-media__icon card-info__icon">
              </a>
        </div>
          <!--./card-info__social-media-->
        </div>
        <!--./card-info__text-->
      </div>
      <!--./team-member-->
    @endforeach
  

<!--./our-team__content-->
  </div>
</section>

<section class="contact-us container--row u-margin-top-big" data-aos="fade-down">
  <div>
    <h2 class="secondary-heading grid-cell">تواصل معنا</h2>
    <form action="" class="form">
      <input type="text" placeholder="الإسم" class="form__input" />
      <input
        type="email"
        placeholder="البريد الإلكتروني"
        class="form__input"
      />
      <textarea
        class="form__text-area"
        cols="30"
        rows="20"
        placeholder="أكتب رسالتك هنا"
      ></textarea>
      <button type="submit"  class="btn btn--submit">إرسال</button>
      <!-- <input type="submit" class="btn btn--submit" value="إرسال" /> -->
    </form>
  </div>
  <img src="{{asset('website/img/form-1.jpg')}}" alt="" class="contact-us__img">
</section>

 @endsection     
     
 