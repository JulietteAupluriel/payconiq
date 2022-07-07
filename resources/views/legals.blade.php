@extends('layouts.main')

@section('content')
    

                <ul class="lang">
                    <li><a href="{{ url()->current() . '?locale=FR' }}" class="{{ app()->isLocale('FR') ? 'active' : '' }}" >FR</a></li>
                    <li><a href="{{ url()->current() . '?locale=NL' }}" class="{{ app()->isLocale('NL') ? 'active' : '' }}" >NL</a></li>
                </ul>


            </div>


        <section id="sect-legals">


        @if(app()->isLocale('FR'))
               
              
         <div class="wrapper"> 
            <h1>RÈGLEMENT DU CONCOURS THE QR ON TOUR<br/>Payconiq by Bancontact</h1>
		<div class="contentText">
        <h3>Généralités</h3>

<p>Le présent concours est organisé par <strong>Bancontact Payconiq Company SA</strong>, portant le numéro d'entreprise 0675.984.882 et ayant son siège social établi à Bruxelles, rue d'Arlon 82 (dénommée ci-après : “<strong>BPC</strong>”). <br/>
Ce règlement de concours fixe les modalités et les conditions de participation applicables au concours Instagram pour le premier anniversaire de Payconiq by Bancontact. 
</p>
<p>
Le concours se déroule du <strong>14/07/2022 (00h01) jusqu’au 31/07/2022 (23h59) inclus</strong> et concerne exclusivement les personnes qui participent au concours sur la plateforme theqr.payconiq.be et qui effectuent correctement toutes les étapes demandées. 
</p>
<h3>Participation</h3>
<p>
Toute personne physique, domiciliée en Belgique et majeure peut participer au concours en son nom propre (dénommée ci-après le '<strong>participant</strong>'). <br/>
La participation doit toujours se faire à titre personnel et ne peut en aucun cas résulter d’une collaboration entre plusieurs personnes qui participent en concertation organisée ou non, ou dans le cadre d’une association juridique ou de fait, ou qui collaborent de toute autre manière dans le but d’augmenter leurs chances de gagner. <br/>
La participation au concours est gratuite. <br/>
En participant à ce concours, le participant accepte de manière inconditionnelle toutes les dispositions du règlement régissant ce concours, ainsi que toute décision prise par BPC en lien avec celui-ci. <br/>
BPC se réserve à tout moment le droit d’exclure du concours, et par là même de priver d’un éventuel prix, les participants qui trichent, se rendent coupables d'abus, de mensonges ou duperies ou qui sont soupçonnés de commettre un des actes susmentionnés ou qui, de toute (autre) manière, enfreignent (une des dispositions de) ce règlement ou toute disposition légale applicable. BPC ne peut en aucun cas en être tenue pour responsable. BPC se réserve en plus le droit d'entreprendre éventuellement des cdémarches judiciaires. <br/>
</p>
<h3>Conditions du concours</h3>
<p>
Pour pouvoir participer, le participant doit remplir de manière cumulative les conditions suivantes : 
<ul>
    <li>Accepter le présent règlement du concours.</li>
    <li>Avoir minimum 18 ans.</li>
    <li>Être domicilié en Belgique.</li>
    <li>Répondre aux questions du concours, la question subsidiaire et remplir le formulaire de participation :
        <ul>
            <li>Quelle est la dernière fonctionnalité qui a été lancée dans l’application Payconiq by Bancontact ?
                <ul>
                    <li>Diviser l’addition entre vos amis ?</li>
                    <li>Envoyer une demande de paiement ?</li>
                    <li>Payer avec vos chèques-repas via votre smartphone ?</li>
                </ul>
    </li>
            <li>Question subsidiaire : combien de personnes participeront au concours THE QR ON TOUR avant le 31 juillet 2022 à 23h59 ?</li>
        </ul>
    </li>
    <li>Choisir un des prix proposés par BPC</li>
    <li>Respecter le règlement du concours. </li>
</ul>   
</p>




<h3>Déroulement du concours</h3>

<p>
Le concours prend fin le 31/07/2022 à 23h59.<br/>
A l’issue du concours, 3 gagnants sont désignés. Il s'agit des 3 participants qui (i) ont respecté toutes les conditions du concours et (ii) ont la réponse correcte à la question du concours et classées selon la réponse correcte à la question subsidiaire. <br/>
En cas d'ex aequo, est désigné comme gagnant, le 1er joueur qui a répondu correctement à la question ordinaire et sera le plus proche de la question subsidiaire (il n'y aura donc en aucun cas plus de 3 gagnants). <br/>
Une même personne ne peut gagner qu'une seule fois. <br/>
Les décisions de désignation du gagnant sont définitives. Le résultat d'un concours est impératif et irrévocable. Il ne peut être contesté. <br/>
Les 3 prix, un par gagnant, sont les suivants : <br/>
<ul>
<li>Un BONGO “Sport et nature ”, d’une valeur de 59,90 euros</li>
<li>Un BONGO “Aventures sans Limite - Balade en Vespa”, d’une valeur de 59,90 euros</li>
<li>Un accès “Golf et détente” au Domaine de Naxhelet, d’une valeur de  410 euros</li>

    </ul>
Le prix ne peut pas être échangé ou obtenu en espèces. 
</p>
<p>
Les gagnants sont contactés personnellement par BPC à partir du 05/08/2022 par e-mail. Si un gagnant ne transmet pas à BPC ses coordonnées correctes dans les 5 jours, pour l'envoi du prix, il sera irrévocablement réputé renoncer à son prix et un nouveau gagnant sera désigné selon les mêmes règles.
</p>
<h3>Correspondance</h3>
<p>
Sauf stipulation contraire dans ce règlement, aucune correspondance (lettres, mails et/ou contact téléphonique) ne sera échangée à propos du règlement du concours, de l'organisation et/ou des résultats du concours, ni pendant ni après celui-ci. 
</p>
<h3>Responsabilité</h3>
<p>
Si un cas de force majeure ou toute autre circonstance indépendante de la volonté de BPC l’exigent, BPC se réserve le droit de modifier, reporter, raccourcir ou mettre fin au concours ou à une partie de celui-ci ainsi que de modifier les règles et le prix à remporter. Toute adaptation sera signalée via le site web. BPC ne peut en être tenue responsable. <br/>
Les erreurs d’impression, d’orthographe, de composition ou autres erreurs, les problèmes techniques ou autres problèmes affectant ce concours ne peuvent être invoqués comme générant une quelconque obligation ou responsabilité dans le chef de BPC et BPC ne peut être tenue responsable d’un problème technique empêchant la participation au concours ou de problèmes techniques susceptibles de faire obstacle au bon déroulement du concours. <br/>
Il en va de la responsabilité de chaque participant de veiller à ce que les moyens techniques avec lesquels il participe au concours fonctionnent correctement. <br/>
BPC ne peut pas non plus être tenue responsable de tout dommage découlant de la participation au concours, à moins qu'il soit imputable à un acte délibéré de BPC.<br/>
Pour plus de clarté, nous tenons à souligner que ce concours est une initiative de Bancontact Payconiq Company.
</p>
<h3>Traitement des données à caractère personnel</h3>
<p>
Le responsable du traitement des données à caractère personnel des participants est BPC. <br/>
Les données qui sont traitées sont des données d'identification et de contact ainsi que les réponses aux questions du concours.<br/>
Vos données à caractère personnel sont traitées dans le but de pouvoir assurer l'enregistrement correct des participants et le bon déroulement du concours, de déterminer les gagnants, d'avoir la possibilité d'entrer en contact avec les participants au sujet de leur participation et/ou de leur gain et pour pouvoir remettre efficacement le prix éventuellement remporté. <br/>
La base légale de ce traitement des données est son caractère indispensable pour la réalisation de votre participation à ce concours, suivant les conditions du règlement de ce concours.<br/>
Les données à caractère personnel sont détruites après communication du nom des gagnants.<br/>
La protection de vos données à caractère personnel revêt pour nous une importance capitale. Nous prenons les mesures techniques et organisationnelles qui s'imposent pour protéger au mieux vos données à caractère personnel contre tout accès illicite, la perte, la destruction ou le vol de celles-ci. <br/>
Nous partageons vos données à caractère personnel uniquement avec nos collaborateurs ou fournisseurs et avec le Commerçant participant.
</p>
<p>
Les participants disposent d'un certain nombre de droits individuels en vertu du Règlement général de protection des données et de la loi belge du 30 juillet 2018 relative à la protection des données à caractère personnel, tels que du droit :<br/>

<ul>
    <li>de prendre contact avec nous pour demander des informations sur les données que nous possédons à votre sujet,</li>
    <li>de corriger d'éventuelles données à caractère personnel erronées que vous avez (peut-être) fournies, </li>
    <li>de transférer vos données à caractère personnel vers un tiers de votre choix,</li>
    <li>de bloquer ou de limiter le traitement de vos données à caractère personnel dans certaines circonstances,</li>
    <li>de faire supprimer vos données à caractère personnel, pour autant que cette suppression soit autorisée par la législation applicable.</li>

    </ul>
Si vous souhaitez exercer un de ces droits, vous pouvez le faire en introduisant une requête par e-mail auprès de notre délégué à la protection des données (dpo@bancontactpayconiq.be). Lorsque vous prenez contact avec nos services, veuillez mentionner spécifiquement l'information dont vous avez besoin ou le droit que vous souhaitez exercer. Pour éviter tout abus ou une fraude à l'identité, nous pouvons vous demander des informations complémentaires et/ou une pièce d'identité valable (telle qu'une copie de votre carte d'identité ou de votre passeport). Une réponse sera donnée à votre requête dans le délai imparti par le droit applicable.<br/>
Si vous pensez que vos droits relatifs à la protection de vos données à caractère personnel ne sont pas respectés, vous pouvez déposer une plainte auprès de notre délégué à la protection des données ou choisir d'introduire votre plainte auprès de l'autorité belge de protection des données.<br/>
Si un participant réclame avant la fin du concours la suppression totale ou partielle de ses données à caractère personnel qu'il a transmises, sa participation sera annulée et ce participant ne pourra par conséquent prétendre à un prix. 
</p>
<h3>Dispositions finales</h3>
<p>
En participant à ce concours, le participant marque son accord avec les dispositions susmentionnées. En cas de désaccord du participant avec les dispositions du concours, la participation n'est pas autorisée. <br/>
Le présent concours est régi par le droit belge. Tous les litiges éventuels qui en découlent ou qui ont un lien avec le concours et/ou l'application sont soumis au tribunal habilité en la matière à Bruxelles qui en a la compétence exclusive. <br/>
Les parties tenteront néanmoins de régler à l'amiable l'éventuel litige avant de le soumettre à la juridiction compétente. 
</p>
            </div></div>

            @else


            <div class="wrapper"> 
                <h1>    WEDSTRIJDREGLEMENT <br/>Wedstrijd THE QR ON TOUR</h1>
                <div class="contentText">
        
<h3>Algemeen</h3>

<p>Deze wedstrijd wordt georganiseerd door <strong>Bancontact Payconiq Company NV</strong>, met ondernemingsnummer 0675.984.882 en maatschappelijke zetel te Brussel, Aarlenstraat 82 (hierna: “<strong>BPC</strong>”). <br/>
Dit wedstrijdreglement legt de modaliteiten en deelnamevoorwaarden vast, die van toepassing zijn op de Instagram wedstrijd voor de 1ste verjaardag van de Payconiq by Bancontact-app. 
    </p>
    <p>
De wedstrijd loopt <strong>van 14/07/2022 (00u01) tot 31/07/2022 (23u59) inbegrepen</strong>. </p>

<h3>Deelname</h3>

<p>Elke meerderjarige, natuurlijke en in België gedomicilieerde persoon, mag in eigen naam aan de wedstrijd deelnemen (hierna ‘deelnemer’). <br/>
Deelname dient steeds ten persoonlijke titel te gebeuren en kan in geen geval uitgaan van meerdere personen die al dan niet in georganiseerd verband deelnemen, of in het kader van enige juridische of feitelijke vereniging, of op enige andere wijze samenwerken met het oog op verhoging van winstkansen. <br/>
Deelname aan de wedstrijd is gratis. <br/>
Door aan deze wedstrijd deel te nemen, aanvaardt de deelnemer onvoorwaardelijk alle bepalingen van dit wedstrijdreglement, evenals elke beslissing die BPC in dit verband neemt. <br/>
BPC behoudt zich te allen tijde het recht voor om deelnemers die misbruik, fraude en/of bedrog plegen of misleiden, of waarvan het vermoeden bestaat dat zij zich schuldig maken aan één van hiervoor vermelde handelingen, of die op enige (andere) wijze (één van de bepalingen van) dit reglement of enige wettelijke toepasselijke bepaling schenden, van deelname uit te sluiten en derhalve ook van de mogelijkheid tot het winnen van een prijs. BPC kan hiervoor onder geen enkel beding aansprakelijk worden gesteld. BPC behoudt zich daarenboven het recht voor eventueel gerechtelijke stappen te ondernemen. 
    </p>
<h3>Wedstrijdvoorwaarden</h3>

<p>Om te kunnen deelnemen moet de deelnemer cumulatief voldoen aan de volgende voorwaarden: 
    <ul>
   <li> Dit wedstrijdreglement aanvaarden</li>
    <li>De volgende wedstrijvraag en de schiftingsvraag beantwoorden via het invulformulier:
        <ul>
            <li>Wat is de laatste nieuwe functionaliteit die werd gelanceerd in de Payconiq by Bancontact-app?<
                <ul>
                    <li>De rekening delen onder je vrienden</li>
                    <li>Een betaalverzoek versturen</li>
                    <li>Met je maaltijdcheques betalen via de app</li>
                </ul>
            </li>
<li>Schiftingsvraag: Hoeveel personen zullen aan de THE QR ON TOUR-wedstrijd hebben deelgenomen voor 31 juli 2022?</li>
    </ul></li>
    <li>
Een van de door BPC aangeboden prijzen kiezen: </li>
<li>Het wedstrijdreglement respecteren</li>
</ul>
</p>

<h3>Wedstrijdverloop</h3>

<p>De wedstrijd eindigt op <strong>31/07/2022</strong> om 23.59 uur.
Na afloop van de wedstrijd worden de 3 winnende deelnemers aangeduid, dit zijn de drie deelnemers die (i) voldeden aan alle wedstrijdvoorwaarden en (ii)  <strong>juiste antwoorden hebben gegeven op de wedstrijdvraag en het correcte antwoord op de schiftingsvraag het dichtst benaderden. Bij een gelijke stand wordt de speler die als eerste de gewone vraag en de schiftingsvraag het meest correct beantwoordt, tot winnaar uitgeroepen (in geen geval zullen er meer dan drie winnaars zijn)</strong>.
</p>
<p>
Een winnaar kan slechts éénmaal verkozen worden. Per naam en per e-mail adres er slechts één winnaar verkozen worden. 
De beslissingen tot aanduiding van de winnaar is definitief. De uitslag van de wedstrijd is bindend en onherroepelijk, en kan niet worden aangevochten. 
</p>
<p>
De 3 prijzen, één per winnaar, zijn:
<ul>
    <li>Een BONGO "Sport en natuur", ter waarde van 59,90 euro</li>
    <li>Een BONGO "Avonturen zonder Grenzen - Vespa rijden", ter waarde van 59,90 euro</li>
    <li>Een "Golf en ontspanning" toegang tot het Domaine de Naxhelet, ter waarde van 410 euro</li>
    </ul>
De prijs kan niet worden omgeruild of verkregen in geld. 
Voor de 3 prijzen wordt de winnaar bepaald op basis van het antwoord op de schiftingsvraag. 
</p>
<p>
De winnaars worden ten laatste op 05/08/2022 persoonlijk gecontacteerd door BPC met een e-mail. Indien een winnaar niet binnen een termijn van 5 dagen haar of zijn adresgegevens aan BPC bezorgt voor het opsturen van de prijs, wordt hij of zij onherroepelijk geacht afstand te doen van zijn of haar prijs en zal er een nieuwe winnaar aangeduid worden volgens dezelfde regels.
</p>
<h3>Correspondentie</h3>
<p>
Behoudens anders gesteld in dit reglement wordt over het wedstrijdreglement, de organisatie en/of de uitslag van de wedstrijd géén correspondentie gevoerd (briefwisseling, mails en/of telefonisch contact), niet tijdens de wedstrijd, noch erna. 
</p>
<h3>Aansprakelijkheid</h3>
<p>
Indien overmacht of om het even welke andere omstandigheden buiten de wil van BPC dit vereisen, behoudt BPC zich het recht voor om de wedstrijd of een deel ervan te wijzigen, uit te stellen, in te korten of te beëindigen alsook om de regels en de te winnen prijs te wijzigen. <strong>Alle wijzigingen zullen via de website worden gemeld</strong>. BPC kan hiervoor niet aansprakelijk gesteld worden. </br>
Druk-, spel-, zet- of andere fouten, technische of andere problemen met deze wedstrijd, kunnen niet ingeroepen worden als grond voor om het even welke verplichting of aansprakelijkheid vanwege BPC, noch kan BPC aansprakelijk gesteld worden voor een technisch probleem waardoor niet aan de wedstrijd kan worden deelgenomen of voor technische problemen die het goede verloop van de wedstrijd kunnen verhinderen.  </br>
Het is de verantwoordelijkheid van elke deelnemer om te zorgen dat de technische middelen waarmee zij/hij deelneemt aan de wedstrijd goed functioneren.  </br>
BPC kan evenmin aansprakelijk gesteld worden voor enige schade die voortvloeit uit de deelname aan de wedstrijd, tenzij deze te wijten is aan opzet in hoofde van BPC. </br>
De winnaar die een prijs in ontvangst neemt knoopt een rechstreekse contractuele relatie aan met de leverancier van de prijs. BPC biedt geen enkele garantie m.b.t. de prijs of de leverancier, en komt niet tussen in voornoemde contractuele relatie. In geval van klachten i.v.m. bijvoorbeeld de kwaliteit van de prijs-heeft de winnaar enkel verhaal tegen de leverancier. 
</p>
<h3>Verwerking persoonsgegevens</h3>
<p>
De verantwoordelijke voor de verwerking van de persoonsgegevens van de deelnemers is BPC.  </br>
De gegevens die worden verwerkt betreffen identificatie-en contactgegevens en de antwoorden op de wedstrijdvragen. </br>
Uw persoonsgegevens worden verwerkt met als doel de juiste registratie van de deelnemers en het goede verloop van de wedstrijd te kunnen verzekeren, de winnaars te bepalen, de mogelijkheid om met de deelnemers in contact te treden met betrekking tot hun deelname en/of winst, en om de eventueel gewonnen prijs op een efficiënte wijze te kunnen overhandigen.  </br>
De wettelijke basis van deze verwerking is dat ze noodzakelijk is voor het realiseren van uw deelname tot deze wedstrijd volgens de voorwaarden van dit wedstrijdreglement. </br>
Na het bekend maken van de winnaars worden de persoonsgegevens vernietigd. </br>
De bescherming van uw persoonsgegevens is voor ons belangrijk. Wij nemen naar best vermogen gepaste technische en organisatorische maatregelen om uw persoonsgegevens te beveiligen tegen ongeoorloofde toegang, verlies, vernietiging of diefstal.  </br>
Wij delen uw persoonsgegevens enkel met onze medewerkers of leveranciers en met de deelnemende handelaar.
</p>
<p>
Deelnemers hebben een aantal individuele rechten onder de Algemene Verordening Persoonsgegevens en de Belgische wet van 30 juli 2018 inzake bescherming van persoonsgegevens, zoals het recht om:
<ul>
    <li>contact met ons op te nemen om informatie te vragen over welke gegevens wij over u hebben, </li>
    <li>eventuele foutieve persoonsgegevens die u (mogelijk) hebt verstrekt, te corrigeren,  </li>
    <li>uw persoonsgegevens te exporteren naar een derde partij van uw keuze,  </li>
    <li>de verwerking van uw persoonsgegevens onder bepaalde omstandigheden te blokkeren of te beperken,  </li>
    <li>uw persoonsgegevens te laten verwijderen, voor zover deze verwijdering is toegestaan onder de toepasselijke wetgeving. </li>
    </ul>
Indien u een van deze rechten wenst uit te oefenen, kunt u dit doen door per e-mail een verzoek in te dienen bij onze DPO (dpo@bancontactpayconiq.be). Wanneer u contact met ons opneemt, gelieve dan specifiek te vermelden welke informatie u nodig heeft of welk recht u wenst uit te oefenen. Om misbruik of identiteitsfraude te voorkomen, kunnen wij u vragen om aanvullende informatie en/of een geldig identiteitsbewijs (zoals een kopie van uw identiteitskaart of paspoort). Een antwoord op uw verzoek wordt gegeven binnen de vastgestelde termijn bepaald door het toepasselijke recht. </br>
Als u van mening bent dat uw rechten met betrekking tot de bescherming van uw persoonsgegevens niet worden gerespecteerd, kunt u een klacht indienen bij onze DPO of kunt u er ook voor kiezen om uw klacht in te dienen bij de <a href="https://www.dataprotectionauthority.be/citizen" target="_blank">Belgische gegevensbeschermingsautoriteit</a>. </br>
Indien een deelnemer om gehele of gedeeltelijke verwijdering van zijn/haar verstrekte persoonsgegevens verzoekt voor het einde van de wedstrijd, zal zijn deelname ongeldig worden verklaard en kan deze deelnemer dienvolgens niet in aanmerking komen voor een prijs. 
</p>
<h3>Slotbepalingen</h3>
<p>
Door deelname aan de wedstrijd, stemt de deelnemer in met bovenstaande bepalingen. Indien de deelnemer zich niet akkoord verklaart met de wedstrijdbepalingen, is deelname niet toegestaan.  </br>
Op deze wedstrijd is het Belgisch recht van toepassing. Alle eventuele geschillen die hieruit voortvloeien of enigszins verband houden met de wedstrijd en/of de applicatie worden voorgelegd aan de daartoe bevoegde rechter te Brussel die exclusief bevoegd is.  </br>
De partijen zullen niettemin proberen het eventuele geschil in der minne te regelen alvorens het te onderwerpen aan de bevoegde rechter.  </br>
</p>
                </div>
            </div>


                @endif

</section>



@endsection