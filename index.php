<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>HomePage</title>

  <link rel="stylesheet" href="css/styles.css">
<meta content="width=device-width, initial-scale=1" name="viewport" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    
<div class="homepage">
    <div class="nav">
        <div class="logo">
            <img src="img/curio-02-wit-logo-rgb.png" alt="Curio_Logo">
        </div>
        <div class="ankers">
            <a href="#Tjeerd">Tjeerd Kootwijk</a>
            <a href="#SSD2E">SSD2E</a>
        </div>
    </div>
    <div class="banner">
        <div class="bannerInfo">
            <div class="infoFiler">
            </div>
            <div class="infoAnkers">        
                <a href="#Vakken" class="NavItem" id="Test">Vakken</a>
                <a href="#Rooster" class="NavItem" id="Test">Rooster</a>
                <a href="#Blokken" class="NavItem" id="Test">Blokken</a>
                <a href="#Versnellen" class="NavItem" id="Test">Versnellen</a>
                <a href="#Docenten" class="NavItem" id="Test">Docenten</a>
                <a href="#Kosten" class="NavItem" id="Test">Kosten</a>
            </div>
        </div>
    </div>
    <section class="Information">
        <div class="Vakken">
            <button class="accordion"><a name="Vakken"></a> Vakken</button>
            <div class="panel">
            <?php
                $Vakken = ['Nederlands', 'Engels', 'Rekenen', 'Webdevelopment', 'Native', 'Praktijk', 'Praktijk ondersteuning'];
                foreach ($Vakken as $Vak) {
                    //list-group-item
                    echo "<h3>$Vak</h3>";
                }
            ?>   
            <p>Het rooster zal in het eerste jaar in iederegeval deze vakken bevatten. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, eaque debitis eos porro fuga doloribus, explicabo at modi dolorum facere animi cum error velit facilis reiciendis ex maiores odio exercitationem? Quae id sint accusamus iste ratione magnam, recusandae officiis sunt. Exercitationem, sint non? Sapiente minima numquam, suscipit deserunt distinctio reprehenderit.</p>
            </div>         
        </div>
        <!-- Kopje over Roosters -->
        <div class="Rooster">
            <button class="accordion"><a name="Rooster"></a> Rooster</button>
            <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ut autem vel minus odio, facere debitis ab blanditiis nulla sapiente mollitia expedita optio omnis impedit perferendis animi reiciendis labore fuga eum voluptatibus deleniti aperiam obcaecati pariatur fugit? Et nisi ducimus, autem odit iusto deserunt tempora quas inventore quibusdam distinctio illo fugiat nesciunt labore tempore? Quos iure dolore, necessitatibus unde in dicta est voluptate quia fuga alias voluptates dolor optio vitae? Modi iure harum commodi? Ullam repellat quam, quaerat accusantium adipisci ratione maxime. Dolorum magni, sequi nam doloribus tenetur doloremque cupiditate quam ullam, adipisci veritatis, consequuntur beatae asperiores porro unde omnis!</p>
            </div>
        </div>
        <!-- Kopje over Blokken -->
        <div class="Blokken">
            <button class="accordion"><a name="Blokken"></a> Blokken</button>
            <div class="panel">
            <p>Bij ons op de opleiding software developer hebben wij een blokken systeem. Elk blok is een half jaar waar je de stof in leert. De opleiding heeft dus acht blokken in totaal, maar als je de opleiding versnelt doet heb je maar zes blokken omdat de opleiding dan maar 3 jaar duurt. Het is heel fijn om met dit systeem te werken want als je bijvoorbeeld een keer de doelen niet haalt die je af moest hebben en onder de knie hoef je niet het hele jaar overnieuw te doen maar hoef je alleen dat blok die je niet hebt gehaald overnieuw doen. Dat scheelt heel veel tijd en is het makkelijker om weer verder te gaan met waar je eigenlijk zou moeten zijn. Elk blok bestaat uit 16 weken. Aan het einde van de 16 weken krijg je meestal een toets om te kijken of je alles onder de knie hebt en alles hebt begrepen. Ook heb je dan twee weken om alle opdrachten die je nog niet af had of nog opnieuw moet doen in te leveren zodat je het blok misschien nog net haalt. In die twee weken worden meestal ook de toetsen van Web development en Native gehouden. Dat zijn een van de twee belangrijkste vakken dus hebben ze daar voor een grootte toets. Voor de andere vakken krijg je een toets die je in de les moet maken.</p>
            </div>

        </div>
        <!-- Kopje over Versnellen -->
        <div class="versnellen">
            <button class="accordion"><a name="Versnellen"></a> Versnellen</button>
            <div class="panel">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam, rerum omnis, consequatur sed nihil eum corrupti nesciunt sit iure dicta voluptate eligendi fugit velit quo, mollitia ducimus. Exercitationem totam fuga inventore numquam? Blanditiis, tenetur quae! Quod iure dolores enim voluptates eveniet nihil dolor veritatis delectus vero blanditiis natus voluptatem, soluta eius vel sunt ullam laborum perferendis quis deserunt magni quidem debitis? Hic rerum neque odio? Quis corrupti cumque deleniti odit illum dolore ducimus dicta placeat ut nostrum voluptatem incidunt saepe, temporibus perferendis! Amet ullam nostrum, ea itaque nihil voluptates minima consectetur est commodi, voluptate dolores ab aspernatur harum aperiam vero.</p>
            </div>
        </div>
        <!-- Kopje over Docenten -->
        <div class="Docenten">
            <button class="accordion"><a name="Docenten"></a> Docenten</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet eum, doloribus dolorum vitae exercitationem debitis eaque fugit ex. Ea quis dolor rem voluptate sapiente temporibus tempore repellat nihil. Fuga possimus, dolorem minima amet hic perspiciatis fugiat qui? Debitis, illo veritatis. Asperiores cupiditate doloremque sit, incidunt beatae et voluptatibus corrupti enim.</p>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" >
                            <img class="d-block docenten_img" src="img/docenten/corne.png" alt="Second slide">
                        </div>
                            <?php
                            $files = glob('img/docenten/*.{jpg,png,gif}', GLOB_BRACE);
                            foreach($files as $file) {
                            echo "<div class='carousel-item '>";
                            echo  "<img class='d-block docenten_img' src='$file' alt='First slide'>";
                            echo "</div>";
                            } ?>   
                    </div> 
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Kopje over Kosten -->
        <div class="Kosten">
            <button class="accordion"><a name="Kosten"></a> Kosten</button>
            <div class="panel">
            <p>Voor deze opleiding heb je niet al te veel nodig maar een aantal dingen zijn wel cruciaal om te hebben. Zoals een laptop met specifieke eisen die er in zitten. Denk daarbij aan ram geheugen, hoeveelheid opslag en CPU. Ook heb je voor sommige vakken zoals Nederlands Engels en rekenen licenties nodig om de online programma’s te gebruiken om die vakken te beoefenen. Het is ook handig om bepaalde programma’s alvast te downloaden. Die programma’s zijn helemaal gratis en heb je nodig om in te werken. Visual studio is een programma waar je in gaat werken in blok C om c# code te schrijven. Ook heb je Visual studio code dat is een programma van de zelfde makers en dat kan je al gebruiken in het eerste blok voor je websites die je gaat maken. Ook ga je python schrijven in Visual studio code. Je begint het jaar door een micro bit te programmeren. Die moet je ook aanschaffen.</p>
            </div>

    </section>
</div>
<script src="js/scripts.js"></script>
</body>

</html>
