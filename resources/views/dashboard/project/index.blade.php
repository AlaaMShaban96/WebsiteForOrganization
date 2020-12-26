@extends('dashboard.layout.master')


@section('style')
<link rel="stylesheet" href="{{ asset('assets/summernote/summernote-bs4.css') }}">
<style>
  .add-project{
    display: block;
  }
  .project{
    display: none;
  }
  .image{
    text-align: justify;
    width: 349px;
  }
</style>
@endsection
@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
      <i class="feather icon-info mr-1 align-middle"></i>
      <span>{{ $error }}</span>
  </div>
@endforeach
@endif
@if(Session::has('message'))

 <p class="alert alert-success">{{ Session::get('message') }}</p>
@endif
<button   class="btn btn-success pull-right " onclick="showAddProject()">اضافة مشروع</button>

<div class="content">
 
    <div class="container-fluid">
      <div class="row" style="text-align: right;">
        <div class="col-md-12 project" id="addProject" >
          <div class="card">
            <div class="card-header card-header-success" id="card-header">
              <h4 class="card-title" id="card-title">اضافة مشروع</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                
                <div class="card-body">
                    <form id="card-form" id="" action="{{url('dashboard/project')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('POST')
                      <div class="row">
                        <div class="col">
                            <div class="form-group form-file-upload form-file-multiple bmd-form-group">
                                <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-fab btn-round btn-success check">
                                      <i class="material-icons">account_circle</i>
                                    </button>
                                  </span>
                                  <input type="text" name="name" id="name" class="form-control inputFileVisible" placeholder="اسم المشروع">

                                </div>
                              </div>
                          {{-- <input type="text" name="name" id="name" class="form-control" placeholder="اسم الموظف"> --}}
                          
                        </div>
                        <div class="col">
                            <div class="form-group form-file-upload form-file-multiple bmd-form-group">
                                <input type="file" name="file" id="file-input" style="display: none;" >
                                <div class="input-group">
                                  <input type="text"  onclick="document.getElementById('file-input').click(); document.getElementById('file').value='تم التحميل'" id="file" class="form-control inputFileVisible" placeholder="تحميل صورة للمشروع">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-fab btn-round btn-success check">
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
                                  <h4><span class="tim-note">وصف  المشروع : </h4>
                                    <br>
                                    <textarea name="description" id="description" class="form-control" rows="3" maxlength="150" ></textarea>
                                    <span class="input-group-btn">
                                    <button type="button" class="btn btn-fab btn-round btn-success check">
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
                                  <h4><span class="tim-note">عن  المشروع</h4>
                                    <textarea name="details" id="details" class="form-control" rows="3" maxlength="150"></textarea>
                                </div>
                              </div>
                        </div>
                      </div>  
                      <button type="submit" id="submit-button" class="btn btn-success pull-right check">اضافة مشروع</button>
                    </form>
                  </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card card-plain">
            <div class="card-header card-header-primary">
              <h4 class="card-title mt-0"> المشاريع</h4>
              <p class="card-category">قائمة بكل المشاريع المنجزة</p>
            </div>
            <div class="card-body" style="text-align: right;">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead class="">
                    <tr>
                      <th>
                      رقم
                    </th>
                    <th>
                      صورة
                    </th>
                    <th>
                      وصف
                    </th>
                    <th>
                      
                    </th>
                  </tr>
                </thead>
                  <tbody>
                    @foreach ($projects as $key=> $project)
                    <tr>
                      <td>{{$project->id}}</td>
                      <td>
                        <div class="image">
                          <img width="40%" src="{{asset("$project->image")}}" alt="" srcset="">
                        </div>
                      </td>
                      <td style="text-align: initial;">{{$project->description}}</td>
                      <td class="td-actions text-right">
                        <a href="#" onclick="showProject({{$key}});" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" >
                          <i class="material-icons">edit</i>
                        </a>
                        <a href="#" onclick="deletee({{$project->id}})" rel="tooltip"  class="btn btn-danger btn-link btn-sm" >
                          <i class="material-icons">close</i>
                        </a>
                        <form style="display: none" id="delete{{$project->id}}" action="{{url('dashboard/project/'.$project->id)}}" method="post">
                          @method('delete')
                          @csrf
                        {{-- <button  type="submit"></button> --}}
                      
                      </form>
                      </td>
                    </tr>
                   
                        
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
  
</script>


@endsection
@section('script')
<script src="{{asset('assets/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('assets/summernote/initiate-summernote.js')}}"></script>
<script src="{{asset('/js/dashboard/project/index.js')}}"></script>

<script>
  function showProject(index) {

   var app= @json($projects ,JSON_PRETTY_PRINT);
   show(app,index);

  }
</script>
    
@endsection