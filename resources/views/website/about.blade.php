@extends('website.layout.master')
<header class="navi-color">
  @include('website.layout.component.navbar')

  <!--./container-->
</header>
 @section('content')
       <section class="about container--row--1">
         <img src="{{asset("$aboutUs->image")}}" alt="project-image" class="about__img" data-aos="fade-up">
          <h2 class="secondary-heading about__title" data-aos="fade-left">{{$aboutUs->titel}}</h2>

          <p class="about__paragraph" data-aos="fade-right">{!! $aboutUs->details  !!}</p>
       </section>
@endsection 

