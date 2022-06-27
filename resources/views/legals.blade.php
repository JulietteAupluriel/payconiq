@extends('layouts.main')

@section('content')
    
<!--<ul class="socials">
                    <li><a href="#"><img src="{{ asset('img/instagram.svg') }}"/></a></li>
                    <li><a href="#"><img src="{{ asset('img/facebook.svg') }}"/></a></li>
                </ul>-->

                <ul class="lang">
                    <li><a href="{{ url()->current() . '?locale=FR' }}" class="{{ app()->isLocale('FR') ? 'active' : '' }}" >FR</a></li>
                    <li><a href="{{ url()->current() . '?locale=NL' }}" class="{{ app()->isLocale('NL') ? 'active' : '' }}" >NL</a></li>
                </ul>


            </div>


        <section id="sect-legals">
         <div class="wrapper"> <h1>Mentions legales</h1>
		<div class="contentText">
                <p>La présente politique en matière de gestion des cookies décrit les différents types de cookies qui peuvent être utilisés sur le site www.gordonknight.be (ci-après, le "Site Web") et la manière dont vous pouvez gérer ces cookies.
</p>
<p>john Martin S.A. s'engage à être transparent vis-à-vis des technologies utilisées sur le Site Web.</p>

<h4>Qu’est-ce qu’un cookie ?</h4>

<p>Les cookies sont des petits fichiers texte (ou témoins de connexion) déposés sur votre ordinateur lors de votre visite sur le Site Web. 
</p>

<h4>Quels sont les cookies utilisés sur le Site Web&nbsp;?</h4>

<p>Le Site Web utilise différents cookies&nbsp;: </p>

<ul>
    <li>XSRF-TOKEN&nbsp;: permet d’enregistrer les données de session permettant le passage d’une page à l’autre sans perte d’information. Ce cookie est indispensable pour le bon fonctionnement et affichage du Site Web&nbsp;;</li>

    <li>gordon_session&nbsp;: permet de conserver le choix de la langue choisie par l’utilisateur.</li>
</ul>

<p>Pour ce type de cookies, seule une obligation d’information s’applique, et ces cookies sont placés dès que vous accédez au Site Web. 
</p>
<p>
Ces cookies sont effacés lorsque vous fermez le navigateur.</p>

<p>Vous pouvez également supprimer les cookies placés sur votre navigateur (voyez ci-dessous). 
</p>
<p>
La suppression de ces cookies peut toutefois entraîner des problèmes de navigation et certains dysfonctionnements. Elle est donc fortement déconseillée.
</p>

<h4>Comment configurer les cookies&nbsp;?</h4>

<p>Vous pouvez supprimer ou désactiver les cookies du Site Web en configurant les paramètres de votre navigateur.
</p>
<p>Les paramètres de cookies peuvent varier d’un navigateur à l’autre. Consultez le menu «&nbsp;Aide&nbsp;» de votre navigateur pour savoir comment modifier vos préférences de cookies.
</p>
<p>Alternativement, les informations sur la façon de gérer les cookies pour chaque navigateur sont disponibles en cliquant ci-dessous sur le navigateur concerné :
&nbsp;</p>
<ul>
    <li><a href="https://support.microsoft.com/en-us/windows/delete-and-manage-cookies-168dab11-0753-043d-7c16-ede5947fc64d" target="_blank">Internet Explorer</a></li>

    <li><a href="https://support.google.com/chrome/answer/95647?hl=fr" target="_blank">Google Chrome</a></li>

    <li><a href="https://support.mozilla.org/fr/kb/empecher-sites-web-stocker-cookies-donnees-site-firefox?redirectslug=empecher-sites-enregistrer-preferences&amp;redirectlocale=fr" target="_blank">Mozilla Firefox</a></li>

    <li><a href="https://support.apple.com/fr-be/guide/safari/sfri11471/mac" target="_blank">Safari</a></li>

    <li><a href="http://www.macromedia.com/support/documentation/fr/flashplayer/help/settings_manager06.html" target="_blank">Adobe Flash Player&nbsp;&nbsp;</a></li>
</ul>
&nbsp;

<h4>autre question&nbsp;?</h4>

<p>Pour toute information au sujet de l’utilisation des cookies sur notre Site Web, vous pouvez nous contacter par courriel à <a href="mailto:info@sweetglobe.be">info@sweetglobe.be</a> ou par courrier à l’adresse suivante&nbsp;: Chau. de Charleroi 591, 1410 Waterloo </p>
            

            </div></div>
</section>



@endsection