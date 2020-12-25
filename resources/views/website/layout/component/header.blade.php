<header class="header">
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
                <a href="{{url('index')}}" class="navigation__link">الصفحة الرئيسية</a>
              </li>
              <li class="navigation__item">
                <a href="{{url('projects')}}" class="navigation__link">مشاريع</a>
              </li>
              <li class="navigation__item">
                <a href="{{url('members')}}" class="navigation__link">الأعضاء</a>
              </li>
              <li class="navigation__item">
                <a href="{{url('about')}}" class="navigation__link">حول</a>
              </li>
              
              </li>
            </ul>
          </nav>
        </div>
        <ul class="list">
          <li class="list__item">
            <a href="about.html" class="list__link">حول</a>
          </li>
          <li class="list__item">
            <a href="members.html" class="list__link">الأعضاء</a>
          </li>
          <li class="list__item">
            <a href="projects.html" class="list__link">مشاريع</a>
          </li>
          <li class="list__item">
            <a href="index.html" class="list__link">الصفحة الرئيسية</a>
          </li>
        </ul>
      </nav>
      {{-- <div class="section-hero">
        <h1 class="primary-heading">يوجد نص هنا</h1>
        <p class="section__hero__paragraph">
          و مثال لنص اخر هذا النص هو مثال
          لنص اخر هذا النص هو مثال لشنص اخر هذا النص هذا النص هو مثال لنص اخر
          هذا النص هو مثال
        </p>
      </div> --}}
      <!--./section__hero-->
    </div>
    <!--./container-->
  </header>