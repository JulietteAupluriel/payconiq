<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="skrollr skrollr-desktop">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payconiq | The QR on tour</title>
    <link rel="stylesheet" href="https://use.typekit.net/ncf0qmi.css">

    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}"/>






    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">


    <meta name="description" content="Betaal gerust mobiel">
	<meta property="twitter:card" content="summary">
	<meta property="og:title" content="Payconiq by Bancontact | The QR on tour">
	<meta property="twitter:title" content="Payconiq by Bancontact | The QR on tour">
	<meta property="og:description" content="Betaal gerust mobiel">
	<meta property="twitter:description" content="Betaal gerust mobiel">
	
	<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
	<link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">

  
</head>



<body>
  <header>

  <a href="{{ route('/') }}"  class="logo">
    <img src="{{ asset('img/logo.svg') }}">
    </a>


  </header>


    <main>
        @yield('content')
    </main>
  <footer>
    <div class="wrapper">
    <div id="dwdApp">
      <strong> {{ __('text.downloadApp') }}</strong>
      <a href="https://apps.apple.com/be/app/payconiq-by-bancontact/id858371800" target="_blank">  <img src="{{ asset('img/appstore.png') }}" /></a>
      <a href="#" target="_blank">  <img src="{{ asset('img/googlePlay.png') }}" /></a>
    </div>
    <div class="footerBottom"><p>Powered by <a href="http://www.digizik.com" target="_blank">digizik</a></p>
   
    @if(app()->isLocale('FR'))
     <p>Politique de protection des <a href="{{ route('legals') }}">données</a></p>
    <p><a href="https://www.payconiq.be/fr/declaration-de-confidentialite-et-conditions-generales">Déclarations de Confidentialité et Conditions générales</a> 
@else
<p><a href="{{ route('legals') }}">Gegevensbeschermingsbeleid</a></p>
    <p><a href="https://www.payconiq.be/nl/privacyverklaring-en-algemene-voorwaarden">Privacyverklaring en Algemene voorwaarden </a> 
@endif



</div>

</div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>
     <!--  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.2/jquery.scrollify.js"></script>-->
    <script src="{{ asset('js/global.js') }}"></script>

</body>
</html>


