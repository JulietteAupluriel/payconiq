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
      <h2>{{ __('text.giftQuestion') }}</h2>
      <div id="gifts">
        <article data-rel="Le cadeau numero 1" class="gift">
            <div class="pict"><img src="{{ asset('img/gift1.jpg') }}" /></div>
            <div class="label">{{ __('text.gift1') }}</div>
        </article>
        <article data-rel="Le cadeau numero 2" class="gift">
        <div class="pict"><img src="{{ asset('img/gift2.jpg') }}" /></div>
            <div class="label">{{ __('text.gift2') }}</div>
        </article>
        <article data-rel="Le cadeau numero 3" class="gift">
        <div class="pict"><img src="{{ asset('img/gift3.jpg') }}" /></div>
            <div class="label">{{ __('text.gift3') }}</div>
        </article>
     </div>

    </div>   </div>   </div>
</section>

<section id="sect-4"  class="scrollme sect-diaporama">
  <div class="slider" >
      <div><img src="{{ asset('img/slide1.jpg') }}"></div>
      <div><img src="{{ asset('img/slide2.jpg') }}"></div>
      <div><img src="{{ asset('img/slide3.jpg') }}"></div>
      <div><img src="{{ asset('img/slide4.jpg') }}"></div>
      <div><img src="{{ asset('img/slide5.jpg') }}"></div>
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

<section id="sect-partners"   class="scrollme">
  <div class="wrapper">

    <h4>{{ __('text.partner') }}</h4>

    <ul>
      <li><a href="https://jmmartin.bmw.be/" target="_blank"><img src="{{ asset('img/partner.png') }}" /></a></li>
    </ul>
      
  </div>
</section>

@if (session('status'))
       <div id="popup" class="confirm" style="">
            <div class="close2">x</div>
            <div class="table">
              <div class="cell">
          
               <p>  @if(app()->isLocale('FR')) {!! 'Merci d’avoir participé à notre concours THE QR ON TOUR !<br/> Les gagnants seront contactés par e-mail  le 05/08/2022 . <br/>Bonne chance ! ' !!} @else {!! 'Bedankt om deel te nemen aan onze THE QR ON TOUR-wedstrijd! <br/>De winnaars worden op 5 augustus 2022 gecontacteerd via e-mail.<br/> Veel succes!' !!} @endif</p>
            </div>  </div>  </div>
      @endif


  <div id="section_form"  @if ( $errors->any()) class="active" @endif>
  <a href="@if(app()->isLocale('FR')) https://www.payconiq.be/fr @else https://www.payconiq.be/fr @endif" target="_blank"  class="logo">
    <img src="{{ asset('img/logo.svg') }}">
    </a>
<div class="close">x</div>
  <div class="table"><div class="cell">



    
  
        <form action="{{ route('participate') }}" method="post" enctype="multipart/form-data">
      
      <div class="wrapForm">
        @csrf


     


        <div class="wrapSentences"><div class="line">
       
            <span>{{ __('text.Hello') }}</span>
                <input type="text" name="firstname" id="firstname" required value="{{ old('firstname') }}" placeholder="{{ __('text.prénom') }}">
              
              <input type="text" name="name" id="name" required value="{{ old('name') }}"  placeholder="{{ __('text.nom') }}">
            
      </div>

      <div class="line">
       
       <span>{{ __('text.jeviensde') }}</span>
       <input type="text" name="city" id="city" required value="{{ old('city') }}"  placeholder="{{ __('text.ville') }}">
      </div>

      <div class="line">
            <span>{{ __('text.etmonadresse') }}</span>
            <input type="email" name="email" id="email" required value=""  placeholder="{{ __('text.email') }}" >
            </div>

      
</div>

        <fieldset style="display:none">
            <label>Gift</label>
            <input type="text" name="gift" id="gift" value="{{ old('gift') }}" >
        </fieldset>


     <div class="wrapMoreQuestions">

      <h5>{{ __('text.repondez') }}</h5>      
      
      <fieldset>
            <div class="label">{{ __('text.question1') }}
</div>
          
           

           <ul class="radio" required>
            <li>
            <input type="radio" value="reponse1" id="question1" name="question1"  {{ (old('question1') == 'reponse1') ? 'checked' : ''}}>
              <label for="question1">{{ __('text.rep1') }}</label>
              <div class="check"></div>
            </li>
            
            <li>
            <input type="radio" value="reponse2" id="question2" name="question1"  {{ (old('question2') == 'reponse2') ? 'checked' : '' }}>
              <label for="question2">{{ __('text.rep2') }}</label>
              
              <div class="check"><div class="inside"></div></div>
            </li>
            
            <li>
              <input type="radio" value="reponse3" id="question3" name="question1"  {{ (old('question3') == 'reponse3') ? 'checked' : '' }}>
              <label for="question3">{{ __('text.rep3') }}</label>
              
              <div class="check"><div class="inside"></div></div>
            </li>
          </ul>
           
        </fieldset>

        <fieldset class="subsidiary">
            <label><strong>{{ __('text.question2-lab') }}</strong></label>
            <p>{{ __('text.question2') }} </p>
            <input type="number" inputmode="numeric" name="question2" id="question2" required value="" >
        </fieldset>

      </div>




       <div class="wrapSubmit" >
        <div>  <div class="mandatory">
              <input type="checkbox" value="yes" name="mandat1" id="mandat1" required>
              <label for="mandat1">
                
           
              
                @if(app()->isLocale('FR'))
                J’ai compris et j’accepte les 
                <a href="{{ route('legals') }}?locale=FR" target="_blank">
                conditions de participation</a>
                @else
                Ik heb de wedstrijdvoorwaarden gelezen en  <a href="{{ route('legals') }}?locale=NL" target="_blank">aanvaard ze</a>
                @endif
              </label>
              <div class="check"><div class="inside"></div></div>
          </div></div>
          <input type="submit" value="{{ __('text.envoyer') }}">
      </div>
</div>
    </form>

    @if ( $errors->any()) <div id="popuperror">

    <div class="close2">x</div>
              <div class="table"><div class="cell">

              @if ($errors->any())
        @foreach ($errors->all() as $error)
        <p>  
             @error('email')   @if(app()->isLocale('FR')) {!! 'Désolé, tu ne peux participer qu’une seule fois au concours THE QR ON TOUR. <br/>Encore un peu de patience, les gagnants seront contactés par e-mail le 05/08/2022 !<br/> Bonne chance !'!!} @else {!! 'Het spijt ons, je kan maar één keer deelnemen aan de THE QR ON TOUR-wedstrijd. <br/>Nog even geduld, de winnaars worden op 5 augustus 2022 gecontacteerd via e-mail.<br/> Veel succes! ' !!} @endif @enderror </p>

          @endforeach
          @endif

              
            </div>  </div> 

       </div> @endif

</div>


</div></div>
</section>



@endsection