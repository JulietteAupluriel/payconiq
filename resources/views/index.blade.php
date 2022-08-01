@extends('layouts.main')

@section('content')



<a href="#" class="scrollBottom"></a>

<section id="sect-1" class="sect-hero link-image scrollme" >

    <div class="sect-bg">
        <div class="bigTitleTop">
          <div class="table"><div class="cell">
            <h1>
            <img class="theQR" src="{{ asset('img/theQR.png') }}" /></h1>
          </div></div>
       </div>
            <ul class="socials">
                    <li><a href="https://www.instagram.com/payconiqbybancontact/" target="_blank"><img src="{{ asset('img/instagram.svg') }}"/></a></li>
                    <li><a href="https://www.facebook.com/PayconiqbyBancontact/" target="_blank"><img src="{{ asset('img/facebook.svg') }}"/></a></li>
                </ul>

                <ul class="lang">
                    <li><a href="{{ url()->current() . '?locale=FR' }}" class="{{ app()->isLocale('FR') ? 'active' : '' }}" >FR</a></li>
                    <li><a href="{{ url()->current() . '?locale=NL' }}" class="{{ app()->isLocale('NL') ? 'active' : '' }}" >NL</a></li>
                </ul>


            </div>

    <div class="bgForAnim">



    <svg width='0' height='0'>
      <defs>
        <clipPath id="cp3" clipPathUnits="objectBoundingBox">
      <!--  <path class="class1" d="M0.6671348314606742,0.4585365853658537  h0.2   q0.03,0 0.03,0.03 v0.2 q0,0.03 -0.03,0.03 h-0.2  q-0.03,0 -0.03,-0.03 v-0.2 q0,-0.03 0.03,-0.03 Z"  />-->
        <path d="M0.3,0.4  h0.1   q0.02,0 0.02,0.02 v0.1 q0,0.02 -0.02,0.02 h-0.1  q-0.02,0 -0.02,-0.02 v-0.1 q0,-0.02 0.02,-0.02 Z" />
 
       <path d="M0.31,0.4  h0.1   q0.02,0 0.02,0.02 v0.1 q0,0.02 -0.02,0.02 h-0.1  q-0.02,0 -0.02,-0.02 v-0.1 q0,-0.02 0.02,-0.02 Z" />
       <path d="M.71,.25s0,.03,0,.05c0,.02-.01,.03-.03,.03-.03,0-.06,0-.09,0-.02,0-.03-.01-.03-.03,0-.03,0-.07,0-.1,0-.02,.01-.03,.03-.03,.03,0,.06,0,.09,0,.02,0,.03,.01,.03,.03,0,.02,0,.03,0,.05Z"/>

        <path d="M.41,.10h-.39s-.02,0-.02,.02v.24s0,.02,.02,.02h.1s.02,0,.02-.02v-.1s0-.02,.02-.02h.25s.02,0,.02-.02v-.1s0-.02-.02-.02Z"/>
        <path d="M1,.37h-.25s-.02,0-.02,.02v.11s0,.02-.02,.02h-.25s-.02,0-.02,.02v.1h0s0,.02-.02,.02h-.11s-.02,0-.02-.02v-.1s0-.02-.02-.02h-.1s-.02,0-.02,.02v.1s0,.02-.02,.02h-.11s-.02,0-.02,.02v.1h0v.14s0,.02,.02,.02h.1s.02,0,.02-.02v-.1s0-.02,.02-.02h.11s.02,0,.02,.02v.1s0,.02,.02,.02h.1s.02,0,.02-.02v-.1s0-.02,.02-.02h.11s.02,0,.02-.02v-.1h0s0-.02,.01-.02h.1s.02,0,.02,.02v.11s0,.02-.02,.02h-.1s-.02,0-.02,.02v.1s0,.02,.02,.02h.39s.02,0,.02-.02v-.54s0-.02-.02-.02Z"/>
    
    </clipPath>
      </defs>
    </svg>

  


 

</div>
     
  
      

</section>


<section id="sect-2" class="sect-aboutContest scrollme">
<div class="pinkShape"></div>
  <div class="positiveSentences">


@if(app()->isLocale('FR'))

    <h1 id="sentence1" class="">Le code QR<br/> qui vous fait <span>sourire</span> !</h1>
    <h1 id="sentence2">Restez <span>vous-même </span>!</h1>
    <h1 id="sentence3"><span>Souriez</span>,<br/> vous êtes<br/>magnifique !</h1>
    <h1 id="sentence4"><span>Vos rêves</span><br/> vous attendent !</h1>
    <h1 id="sentence5">Vous rayonnez<br/> <span>comme un soleil</span> !</h1>
    <h1 id="sentence6"><span>Rien</span><br/> n’est impossible !</h1>

    
@else
<h1 id="sentence1" class=""> De QR-code<br/> die je doet <span>glimlachen!</span> </h1>
    <h1 id="sentence2">Blijf gewoon <br/> <span>jezelf</span>!</h1>
    <h1 id="sentence3"><span>Die glimlach</span><br/>staat je goed!</h1>
    <h1 id="sentence4">Ga je dromen  <br/><span>achterna!</span></h1>
    <h1 id="sentence5">Hé jij daar,<br/> <span>je stráált</span>!</h1>
    <h1 id="sentence6"> <span>Geniet</span><br/>  van elke dag!</h1>
   
@endif





  </div>

  <div class="aboutContest">
   
    <div class="wrapBox">
      <img class="theQR" src="{{ asset('img/QOEUR.png') }}" />
    
      @if(app()->isLocale('FR'))
      <h4>Sortez, Profitez<br/>Hop, <span>c'est gagné</span> !</h4>
     
      <div class="intro"><p>Cet été, ouvrez grand les yeux, repérez le code QR qui circule à Bruxelles, Liège et Anvers et dégainez votre téléphone pour le scanner. Vous l’avez ? Alors jouez et hop, tentez de gagner !</p></div>

      @else
      <h4>Samen volop genieten,<br/>  <span>zo verdiend! </span></h4>
      <div class="intro"><p> Hou deze zomer je ogen goed open en ga opzoek naar de gigantische QR-code die rondrijdt in Brussel, Antwerpen en Luik. Haal je smartphone boven en scan de QR-code. Gelukt? Speel dan mee en maak kans op leuke prijzen!

     </p></div>
     
   
      @endif



    </div>

  </div>
</section>


<section id="sect-3"  class="scrollme sect-chooseAGift">
<div class="pinkShape"></div>
  <div class="table"><div class="cell">
    <div class="wrapper">
   <h2 class="soon">
   
	

   @if(app()->isLocale('FR')) Le concours est à présent terminé, merci à celles et ceux qui y ont participé ! Les gagnants seront contactés par e-mail. @else
   De wedstrijd is nu afgelopen, bedankt aan alle deelnemers! De winnaars worden via e-mail gecontacteerd. @endif
</h2>

    </div>   </div>   </div>
</section>

<section id="sect-4"  class="scrollme sect-diaporama">
  <div class="slider" >
      <div><img src="{{ asset('img/slide1.jpg') }}"></div>
      <div><img src="{{ asset('img/slide2.jpg') }}"></div>
      <div><img src="{{ asset('img/slide3.jpg') }}"></div>
      @if(app()->isLocale('FR'))  <div><img src="{{ asset('img/slide4.jpg') }}"></div>@endif
      @if(app()->isLocale('NL'))  <div><img src="{{ asset('img/slide5.jpg') }}"></div>@endif
  </div>
  <div class="sliderNav">
    <div class="prev"></div>
    <div class="dots"></div>
    <div class="next"></div>
  </div>
</section>

<section id="sect-5"  class="scrollme  sect-onTheRoad">
<div id="byDay" class="day14">
<div class="pinkShape"></div>
  <div class="table"><div class="cell">

  <div class="wrapper">
    
    <div class="cities">
      <div class="city active" data-rel="day14">
        <div class="square" style="background-image:url({{ asset('img/bxl.jpg') }})">
          <div class="table"><div class="cell"><b>14.06</b></div></div>
        </div>
        <div class="info">
          <span class="date">14.07</span>
          <h5>{{ __('text.bruxelles') }}</h5>
          <h6>Mont des arts</h6>
      </div>
      </div>
      <div class="city" data-rel="day15">
        <div class="square" style="background-image:url({{ asset('img/anvers.jpg') }})">
        <div class="table"><div class="cell"><b>15.07</b></div></div>
        </div>
        <div class="info"> 
            <span class="date">15.07</span>
          <h5>{{ __('text.anvers') }}</h5>
          <h6>Mont des arts</h6>
        </div>
      </div>
      <div class="city" data-rel="day16">
        <div class="square" style="background-image:url({{ asset('img/liege.jpg') }})">
        <div class="table"><div class="cell"><b>16.07</b></div></div>
        </div>
        <div class="info"> 
            <span class="date">16.07</span>
           <h5>{{ __('text.liege') }}</h5>
           <h6>Mont des arts</h6>
        </div>
      </div></div>
    </div>

  </div> </div>
  <div class="car"><img src="{{ asset('img/voiture.png') }}" /></div>
  <div id="dwdApp">
    <div class="about">
      @if(app()->isLocale('FR'))<h4>Payez mobile. Sûr et facile. </h4><p>Vous voulez en savoir plus sur l’appli Payconiq by Bancontact et les paiements mobiles ?<br/> Rendez-vous sur <a href="https://www.payconiq.be/fr" target="_blank">Payconiq.be</a> !</p> @else
      <h4>Betaal gerust mobiel. </h4> <p> Meer te weten komen over de Payconiq by Bancontact-app en mobiele betalingen?<br/> Ga naar  <a href="https://www.payconiq.be/nl" target="_blank">Payconiq.be</a> !</p> @endif</div>
      
        <strong> {{ __('text.downloadApp') }}</strong>
      <a href="https://apps.apple.com/be/app/payconiq-by-bancontact/id858371800" target="_blank">  <img src="{{ asset('img/appstore.png') }}" /></a>


      <a href="@if(app()->isLocale('FR'))  https://play.google.com/store/apps/details?id=mobi.inthepocket.bcmc.bancontact&hl=fr @else  https://play.google.com/store/apps/details?id=mobi.inthepocket.bcmc.bancontact&hl=nl @endif" target="_blank">  <img src="{{ asset('img/googlePlay.png') }}" /></a>


     

    </div>
  </div>
</section>
<section id="sect-video" >
  <div class="video-container">

  <iframe width="560" height="315" src="https://www.youtube.com/embed/wQHz2n8EDw8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
  </div>
</section>
<section id="sect-partners"   class="scrollme">
  <div class="wrapper">

    <h4>{{ __('text.partner') }}</h4>

    <ul>
      <li><a href="https://jmmartin.bmw.be/" target="_blank"><img src="{{ asset('img/partner.png') }}" /></a></li>
    </ul>
      
  </div>
</section>


</div>


</div></div>
</section>



@endsection