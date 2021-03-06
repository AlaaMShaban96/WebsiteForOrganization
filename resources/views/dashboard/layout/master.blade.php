<!doctype html>
<html lang="ar" dir="rtl">

<head>
  <title>لوحة التحكم</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    @include('dashboard.layout.include.style.style')
    @yield('style')
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag-->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          لوحة تحكم من  
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Nano Tech 
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{ (\Request::route()->getName() == 'dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('dashboard/')}}">
              <i class="material-icons">dashboard</i>
              <p>لوحة تحكم</p>
            </a>
          </li>
          <li class="nav-item {{ (\Request::route()->getName() == 'team') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('dashboard/team')}}">
                 <p><span class="material-icons">engineering</span>
                             فريق العمل</p>
            </a> 
          </li>
          <li class="nav-item {{ (\Request::route()->getName() == 'project') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('dashboard/project')}}">
              <p><span class="material-icons">
                handyman
                </span>
                  المشاريع</p>
            </a>
          </li>
          <li class="nav-item {{ (\Request::route()->getName() == 'aboutUs') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('dashboard/aboutUs')}}">
              <p><span class="material-icons">
                folder_shared
                </span>
                  حول النشاط</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
         
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="btn btn-fab btn-round btn-danger" title="تسجيل الخروج" href="{{url('/logout')}}">
                  <i class="material-icons">logout</i> 
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          @yield('content')
        </div>
      </div>
      <footer class="footer">

          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
  @include('dashboard.layout.include.script.script')
  @yield('script')
 
</body>

</html>