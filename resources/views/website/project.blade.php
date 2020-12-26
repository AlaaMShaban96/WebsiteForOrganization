@extends('website.layout.master')

@include('website.layout.component.header')
 @section('content')

      <h2 class="primary-heading u-centered u-margin-top-medium" data-aos="fade-left">مشاريعنا</h2>
      <section class="our-projects container--row u-margin-top-big" data-aos="fade-right">
      
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
        <!--./project -->
        <!--./project -->
      </section>
      <!--./our-projects-->
  @endsection     
     
