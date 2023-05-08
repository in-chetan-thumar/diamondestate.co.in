<!DOCTYPE html>
<html lang="en">

  <head>
  <meta charset="UTF-8" >
  <meta http-equiv="X-UA-Compatible" content="IE=edge" >
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Diamond Estate - Affordable Luxurious Properties</title>
  <meta name="description" content=" A Nagpur based construction company, Diamond Estate, that builds affordable and luxurious residential as well as commercial properties.">
  <meta name="csrf-token" content="{{ csrf_token() }}"/>
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/frontend/favicon_io/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/frontend/favicon_io/favicon-32x32.png')}}/">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/frontend/favicon_io/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/frontend/favicon_io/site.webmanifest')}}">
  @yield('css')
  @include('frontend.layouts.header-css')
  @toastr_css
</head>

<body>
  @include('frontend.layouts.navbar')

  @yield('section')

  
  @include('frontend.layouts.footer')
  @include('frontend.layouts.footer-js')
  @yield('js')
  @yield('script')
  @toastr_js
  @toastr_render
</body>

</html>