<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>منظمة مبادرة</title>
    @include('website.layout.include.style.style')
  </head>
  <body>
    <main>
      @yield('content')
    </main>
      @include('website.layout.component.footer')
    @include('website.layout.include.script.script')
  </body>
</html>
