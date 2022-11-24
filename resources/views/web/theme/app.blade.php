<!DOCTYPE html>
<html lang="es">

 <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="description" content="">
      <meta name="author" content="ScriptsBundle">
      <title>Carspot | Car Dealership - Vehicle Marketplace And Car Services</title>
      <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
        <!-- JavaScripts -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <script src="{{ asset('assets/js/modernizr.js') }}"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        @include('web.theme.styles')
        @livewireStyles
   </head>

<body>
<!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
<div class="preloader"></div>
<!-- =-=-=-=-=-=-= Color Switcher =-=-=-=-=-=-= -->
<div class="color-switcher" id="choose_color">
   <a href="#." class="picker_close"><i class="fa fa-gear"></i></a>
   <h5>STYLE SWITCHER</h5>
   <div class="theme-colours">
      <p> Choose Colour style </p>
      <ul>
         <li>
            <a href="#." class="defualt" id="defualt"></a>
         </li>
         <li>
            <a href="#." class="green" id="green"></a>
         </li>
         <li>
            <a href="#." class="purple" id="purple"></a>
         </li>
      </ul>
   </div>
   <div class="clearfix"> </div>
</div>
<!-- =-=-=-=-=-=-= Main Header =-=-=-=-=-=-= -->
 @include('web.theme.header')
     <!-- =-=-=-=-=-=-= Buy Or Sale End =-=-=-=-=-=-= -->
     @yield('content')
    <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
    <footer class="footer-bg">
        @include('web.theme.footer')

    </footer>
    <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
    @include('web.theme.scripts')
    @livewireScripts

 </div>
</body>
</html>
