@extends('dashboard.layout.master')
@section('style')
    <style>
        .post-content-text {
            white-space: nowrap; 
            width: 100%; 
            overflow: hidden;
            text-overflow: ellipsis; 
           
        }
        .image-card-content{
            width: 77%;
            height: 245px;
        }
    </style>

@endsection
@section('content')
<div class="content">
  @if(Session::has('message'))
  
     <p class="alert alert-success">{{ Session::get('message') }}</p>
  @endif
  <div class="container-fluid">

    <div class="row" style="text-align: right;">
      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-primary">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title">: تصنيف الموظفين</span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#boos" data-toggle="tab">
                      <i class="material-icons">bug_report</i> مدير
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#employ" data-toggle="tab">
                      <i class="material-icons">cloud</i> موظف
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body" style="text-align: right;">
            <div class="tab-content">

              <div class="tab-pane active" id="boos">
                <table class="table">
                  <tbody>
                    @forelse ($bossies as $key => $boss)
                    <tr>
                      <td>{{$boss->id}}</td>
                      <td>{{$boss->name}}</td>
                      <td ><span class="d-inline-block text-truncate" style="max-width: 320px;">{{$boss->description}}</span></td>
                      <td class="td-actions text-right">
                        <button type="button" onclick="showEmploy({{$key}},'boss')" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" >
                          <i class="material-icons">edit</i>
                        </button>
                        <a href="#" onclick="deletee({{$boss->id}})" rel="tooltip"  class="btn btn-danger btn-link btn-sm" >
                          <i class="material-icons">close</i>
                        </a>
                        <form style="display: none" id="delete{{$boss->id}}" action="{{url('dashboard/team/'.$boss->id)}}" method="post">
                          @method('delete')
                          @csrf
                        {{-- <button  type="submit"></button> --}}
                      
                      </form>
                      </td>
                    </tr>
                    @empty
                        
                    @endforelse
                  
                  
                  </tbody>
                </table>
                
              </div>

              <div class="tab-pane" id="employ">
                <table class="table">
                  <tbody>
                    @forelse ($employs as $key=> $employ)
                    <tr>
                      <td>{{$employ->id}}</td>
                      <td>{{$employ->name}}</td>
                      <td><span class="d-inline-block text-truncate" style="max-width: 320px;">{{$employ->description}}</span></td>
                      <td class="td-actions text-right">
                        <button type="button" onclick="showEmploy({{$key}},'employ')" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" >
                          <i class="material-icons">edit</i>
                        </button>
                        <a href="#" onclick="deletee({{$employ->id}})" rel="tooltip"  class="btn btn-danger btn-link btn-sm" >
                          <i class="material-icons">close</i>
                        </a>
                        <form style="display: none" id="delete{{$employ->id}}" action="{{url('dashboard/team/'.$employ->id)}}" method="post">
                          @method('delete')
                          @csrf
                        {{-- <button  type="submit"></button> --}}
                      
                      </form>
                      </td>
                    </tr>
                    @empty
                        
                    @endforelse
                  </tbody>
                </table>
         
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="card" style="text-align: right;">
          <div id="card-header" class="card-header card-header-success">
            <h4 class="card-title">الموظفين</h4>
            <p class="card-category">ادراج بيانات موظف في الموقع</p>
          </div>
          <div class="card-body">
            <form id="card-form" action="{{url('dashboard/team')}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('POST')
              <div class="row">
                <div class="col">
                  <input type="text" name="name" id="name" class="form-control" placeholder="اسم الموظف">
                </div>
                <div class="col">
                  <div class="form-check form-check-radio form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="titel" id="Radio" value="مدير"> مدير
                      <span class="circle">
                          <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check form-check-radio form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="titel" checked="checked" id="Radio2" value="موظف"> موظف
                      <span class="circle">
                          <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>عن مجال عمل الموظف</label>
                    <div class="form-group bmd-form-group">
                      <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group form-file-upload form-file-multiple bmd-form-group">
                    <input type="file" name="file" id="file-input" style="display: none;" >
                    <div class="input-group">
                      <input type="text"  onclick="document.getElementById('file-input').click();" class="form-control inputFileVisible" placeholder="Single File">
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
                      <input type="text" name="facebook" id="facebook" class="form-control inputFileVisible" placeholder="Facebook">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-fab btn-round btn-success check">
                          <i class="material-icons">facebook</i>
                        </button>
                      </span>
                    </div>
                  </div>
              </div>
                <div class="col">
                  <div class="form-group form-file-upload form-file-multiple bmd-form-group">
                  
                    <div class="input-group">
                      <input type="text" name="linkedin" id="linkedin" class="form-control inputFileVisible" placeholder="Linkedin">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-fab btn-round btn-success check">
                          <i class="material-icons">link</i>
                        </button>
                      </span>
                    </div>
                  </div>
              </div>
                <div class="col">
                  <div class="form-group form-file-upload form-file-multiple bmd-form-group">
                  
                    <div class="input-group">
                      <input type="text" name="twitter" id="twitter" class="form-control inputFileVisible" placeholder="Twitter">
                      <span class="input-group-btn">
                        <button type="button" id="" class="btn btn-fab btn-round btn-success check">
                          <i class="material-icons">flutter_dash</i>
                        </button>
                      </span>
                    </div>
                  </div>
              </div>
              </div>
              
              <button type="submit" id="submit-button" class="btn btn-success pull-right check">اضافة  موظف</button>
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

<script src="{{asset('js/dashboard/team/index.js')}}"></script>


@endsection
@section('script')

<script>
  function showEmploy(index , type) {
   
    if (type=='employ') {
      var app= @json($employs ,JSON_PRETTY_PRINT);

    } else {
      var app= @json($bossies ,JSON_PRETTY_PRINT);

    }
      show(app,index);    
  }

</script>
    
@endsection