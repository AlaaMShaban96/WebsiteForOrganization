@extends('dashboard.layout.master')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/summernote/summernote-bs4.css') }}">


@endsection
@section('content')
<div class="content">
  @if(Session::has('message'))
  
     <p class="alert alert-success">{{ Session::get('message') }}</p>
  @endif
  <div class="container-fluid">


<div class="content">
  <div class="container-fluid">
    <div class="row" style="text-align: right;">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-{{!isset($aboutUs)?success:'warning'}}">
            <h4 class="card-title">حول </h4>
            <p class="card-category">يتم كتابة المعلومات الاساسية عن المؤسسة</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                
              <div class="card-body">
                 
                    @if (isset($aboutUs))
                    <form id="" action='{{url("dashboard/aboutUs/$aboutUs->id")}}' method="POST" enctype="multipart/form-data">
                      @csrf  
                      @method('PUT')
 
                    @else
                    <form id="" action='{{url("dashboard/aboutUs")}}' method="POST" enctype="multipart/form-data">
                      @csrf  
                    @method('POST')

                    @endif
                    <div class="row">
                      <div class="col">
                          <div class="form-group form-file-upload form-file-multiple bmd-form-group">
                              <div class="input-group">
                                <span class="input-group-btn">
                                  <button type="button" class="btn btn-fab btn-round btn-{{!isset($aboutUs)?success:'warning'}} check">
                                    <i class="material-icons">g_translate</i>
                                  </button>
                                </span>
                                <input type="text" name="titel" id="titel" class="form-control inputFileVisible" maxlength="27" placeholder="كلمة البداية" value="{{isset($aboutUs)?$aboutUs->titel:''}}">

                              </div>
                            </div>
                        
                      </div>
                      <div class="col">
                          <div class="form-group form-file-upload form-file-multiple bmd-form-group">
                              <input type="file" name="file" id="file-input" style="display: none;" >
                              <div class="input-group">
                                <input type="text"  onclick="document.getElementById('file-input').click(); document.getElementById('file').value='تم التحميل'" id="file" class="form-control inputFileVisible" placeholder="تحميل صورة للمشروع">
                                <span class="input-group-btn">
                                  <button type="button" class="btn btn-fab btn-round btn-{{!isset($aboutUs)?success:'warning'}} check">
                                    <i class="material-icons">attach_file</i>
                                  </button>
                                </span>
                              </div>
                            </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                          <div class="form-group form-file-upload form-file-multiple bmd-form-group">
                              <div class="input-group">
                                <h4><span class="tim-note">وصف  المؤسسة  : </h4>
                                  <br>
                                  <textarea name="description" id="description" class="form-control" rows="3" maxlength="150" >{{isset($aboutUs)? $aboutUs->description:''}}</textarea>
                                  <span class="input-group-btn">
                                  <button type="button" class="btn btn-fab btn-round btn-{{!isset($aboutUs)?success:'warning'}} check">
                                    <i class="material-icons">article</i>
                                  </button>
                                </span>
                              </div>
                            </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                          <div class="form-group form-file-upload form-file-multiple bmd-form-group">
                              
                              <div class="input-group">
                                <h4><span class="tim-note">عن  المؤسسة</h4>
                                  <textarea name="details" id="details" class="form-control" rows="3" maxlength="150">{{isset($aboutUs)?$aboutUs->details:''}}</textarea>
                              </div>
                            </div>
                      </div>
                    </div>  
                    <button type="submit" id="submit-button" class="btn btn-{{!isset($aboutUs)?success:'warning'}} pull-right check">{{!isset($aboutUs)?'اضافة':'تعديل'}} </button>
                  </form>
                </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="javascript:;">
              <img class="img" src="{{asset('website/img/logo-icon.png')}}">
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">مؤسسة مجتمع مدني </h6>
            <h4 class="card-title">اسم المستخدم : admin1@nano-tech.ly</h4>
            <form id="" action='{{url("dashboard/restpassword")}}' method="POST" enctype="multipart/form-data">
              @csrf  
              @method('POST')
                <p class="card-description">
                  <div class="form-group form-file-upload form-file-multiple bmd-form-group">
                    <div class="input-group">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-fab btn-round btn-danger check">
                          <i class="material-icons">vpn_key</i>
                        </button>
                      </span>
                    
                      <input type="text" name="password" id="password" class="form-control inputFileVisible" placeholder="كلمة السر الجديدة ">

                    </div>
                  </div>
                </p>
                <input type="submit" class="btn btn-danger btn-round"value="تغير كلمة السر ">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@if ($errors->any())
@foreach ($errors->all() as $error)
 <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
      <i class="feather icon-info mr-1 align-middle"></i>
      <span>{{ $error }}</span>
  </div>
@endforeach
@endif
@endsection
@section('script')
<script src="{{asset('assets/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('assets/summernote/initiate-summernote.js')}}"></script>
    
@endsection