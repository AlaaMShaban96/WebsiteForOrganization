<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="website/css/main.css" />
    <link rel="shortcut icon" type="image/png" href="website/img/favicon.png" />
  </head>
  <body>
    <section class="section-login">
      @if ($errors->any())
        @foreach ($errors->all() as $error)
          <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                <i class="feather icon-info mr-1 align-middle"></i>
                <span>{{ $error }}</span>
            </div>
          @endforeach
      @endif
      <form action="{{url('/login')}}" method="POST" class="form-login" data-aos="fade-up">
        @csrf  
        @method('POST')
        <img src="website/img/logo-white.png" alt="" class="form-login__img" />
        <input type="email" / placeholder="إسم المستخدم" name="email" class="form-login__input">
        <input type="password" name="password" placeholder="كلمة المرور" class="form-login__input"/>
        <button type="submit" class="form-login__input btn">
          تسجيل الدخول
        </button>
      </form>
    </section>
   

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({});
    </script>
  </body>
</html>
