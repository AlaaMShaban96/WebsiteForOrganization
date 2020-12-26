@extends('website.layout.master')
<header class="navi-color">
  @include('website.layout.component.navbar')

  <!--./container-->
</header>
 @section('content')
      <section class="section-members u-padding-bottom-big" >
        <div class="u-center-text">  
            <h2 class="secondary-heading u-margin-bottom-big">
              الاعضاء 
            </h2>
        </div><!--./u-center-text-->
        
        <div class="section-members__content " data-aos="fade-up">
            @foreach ($teams as $team)
            <div class="card" >

              <div class="card__side card__side--front">
                  <div class="card__picture ">
                    <img src="{{asset("$team->image")}}" alt="Jessi">
                  </div>
    
                  <h4 class="card__heading">
                     <span class="card__heading-span card__heading-span--1 member__title">{{$team->titel}}</span>
                  </h4>
                  <h3 class="card__title member__name">{{$team->name}}</h3>
                  <div class="card__details member__bio">
                    {{$team->description}}
                  </div>
    
              </div>
    
              <div class="card__side card__side--back card__side--back-1">
                 <h2 class="secondary-heading u-color-white u-margin-zero u-padding-top-bottom-medium">مواقع التواصل</h2>
                 <div class="social-media">
                  <a href="{{$team->facebook}}" class="social-media__link">
                  <img
                    src="website/img/svg/facebook-circle.svg"
                    alt=""
                    class="social-media__icon"
                  >
                  </a>
                  <a href="{{$team->twitter}}" class="social-media__link u-margin-left-right">
                    <img
                      src="website/img/svg/twitter-circle.svg"
                      alt=""
                      class="social-media__icon"
                    >
                    </a>
                    <a href="{{$team->linkedin}}" class="social-media__link">
                      <img
                        src="website/img/svg/linkedin-circle.svg"
                        alt=""
                        class="social-media__icon"
                      >
                      </a>
                </div>
              </div>
          </div> 
            @endforeach              
     
      <!--./card-->

      {{-- <div class="card" >

        <div class="card__side card__side--front">
            <div class="card__picture ">
              <img src="img/Breaking-bad-gus-2.jpg" alt="member-3">
            </div>

            <h4 class="card__heading">
               <span class="card__heading-span card__heading-span--1 member__title">الرئيس</span>
            </h4>
            <h3 class="card__title member__name">جوستافو فرينغ</h3>
            <div class="card__details member__bio">
              هذا النص هو مثال لنص اخر هذا النص هو مثال لنص اخر هذا النص هو مثال
              لنص اخر هذا النص هو مثال لشنص اخر هذا النص هذا النص هو مثال لنص اخر
              
            </div>

        </div>

        <div class="card__side card__side--back card__side--back-1">
           <h2 class="secondary-heading u-color-white u-margin-zero u-padding-top-bottom-medium">مواقع التواصل</h2>
           <div class="social-media">
            <a href="#" class="social-media__link">
            <img
              src="img/svg/facebook-circle.svg"
              alt=""
              class="social-media__icon"
            >
            </a>
            <a href="#" class="social-media__link u-margin-left-right">
              <img
                src="img/svg/twitter-circle.svg"
                alt=""
                class="social-media__icon"
              >
              </a>
              <a href="#" class="social-media__link">
                <img
                  src="img/svg/linkedin-circle.svg"
                  alt=""
                  class="social-media__icon"
                >
                </a>
          </div>
        </div>
    </div><!--./card-->


    <div class="card" >

      <div class="card__side card__side--front">
          <div class="card__picture ">
            <img src="img/Breaking-bad-WW.jpg" alt="Walter White WW">
          </div>

          <h4 class="card__heading">
             <span class="card__heading-span card__heading-span--1 member__title">الطباخ</span>
          </h4>
          <h3 class="card__title member__name">والتر وايت</h3>
          <div class="card__details member__bio">
            هذا النص هو مثال لنص اخر هذا النص هو مثال لنص اخر هذا النص هو مثال
            لنص اخر هذا النص هو مثال لشنص اخر هذا النص هذا النص هو مثال لنص اخر
            
          </div>

      </div>

      <div class="card__side card__side--back card__side--back-1">
         <h2 class="secondary-heading u-color-white u-margin-zero u-padding-top-bottom-medium">مواقع التواصل</h2>
         <div class="social-media">
          <a href="#" class="social-media__link">
          <img
            src="img/svg/facebook-circle.svg"
            alt=""
            class="social-media__icon"
          >
          </a>
          <a href="#" class="social-media__link u-margin-left-right">
            <img
              src="img/svg/twitter-circle.svg"
              alt=""
              class="social-media__icon"
            >
            </a>
            <a href="#" class="social-media__link">
              <img
                src="img/svg/linkedin-circle.svg"
                alt=""
                class="social-media__icon"
              >
              </a>
        </div>
      </div>
  </div><!--./card--> --}}


             
      
            
        </div><!--./section-tours-content-->
    </section>
    @endsection   
