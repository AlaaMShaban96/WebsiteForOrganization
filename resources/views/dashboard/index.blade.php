@extends('dashboard.layout.master')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="material-icons">engineering</i>
            </div>
            <p class="card-category">فريق العمل</p>
            <h3 class="card-title">{{$teams->count()}}
              <small>موظف</small>
            </h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <a href="{{url('dashboard/team')}}">
                <i class="material-icons">local_offer</i> عرض 
              </a>
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
              <i class="material-icons">handyman</i>
            </div>
            <p class="card-category">المشاريع</p>
            <h3 class="card-title">{{$projects->count()}} 
              <small>مشروع</small>
            </h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <a href="{{url('dashboard/project')}}">
                <i class="material-icons">local_offer</i> عرض 
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-danger card-header-icon">
            <div class="card-icon">
              <i class="material-icons">folder_shared</i>
            </div>
            <p class="card-category"> صفحة حول</p>
            <h3 class="card-title">يمكن التعديل علي بيانات</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <a href="{{url('dashboard/aboutUs')}}">
                <i class="material-icons">local_offer</i> عرض 
              </a> 
            </div>
          </div>
        </div>
      </div>
   
    </div>
    <div style="text-align: center;">
      <img src="{{asset('website/img/logo.png')}}" alt="" srcset="">

    </div>
    
  </div>
</div>
@endsection