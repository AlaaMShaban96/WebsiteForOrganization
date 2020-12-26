@extends('website.layout.master')
<header class="navi-color">
  @include('website.layout.component.navbar')

  <!--./container-->
</header>
 @section('content')
       <section class="project-blog container--row--1">
         <img style="height: 41%;width: 100%;" src="{{asset("$project->image")}}" alt="project-image" class="project-blog__img" data-aos="fade-up">
          <h2 class="secondary-heading project-blog__title" data-aos="fade-left">{{$project->name}}</h2>

          <p class="project-blog__paragraph" data-aos="fade-right">{!!$project->details!!}</p>
          {{-- <p class="project-blog__paragraph" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor totam velit, maiores, neque excepturi, dolorum quaerat mollitia odio unde cumque magnam quidem tempora. Consequatur consectetur aperiam rerum nulla dolores non.</p> --}}
       </section>
@endsection 
