<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'Alfredo Linguini',
            'image'=>'../img/Funko Pop/AlfredoFunkoPop.jpg',
            'description'=>'
            ALFREDO LINGUINI UIT DISNEY RATATOUILLE ALS FUNKO POP FIGUUR.
            GROOTTE CA. 10 CM
            MATERIAAL: KUNSTSTOF
            NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
            'price'=>40.00,
            'category_id'=>1
        ]);
        Product::create([
             'name'=>'Spiderman Homemade Suit',
             'image'=>'../img/Funko Pop/SpiderFunkoPop.jpg',
             'description'=>'
             SPIDERMAN UIT SPIDERMAN HOME COMING ALS FUNKO POP FIGUUR.
             GROOTTE CA. 10 CM
             MATERIAAL: KUNSTSTOF
             NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
             'price'=>20.00,
             'category_id'=>1
        ]);     
        Product::create([
            'name'=>'Elton John',
            'image'=>'../img/Funko Pop/EltonFunkoPop.jpg',
            'description'=>'
            ELTON JOHN DE GROOTSTE POP EN ROCK STAR ALS FUNKO POP FIGUUR.
            GROOTTE CA. 10 CM
            MATERIAAL: KUNSTSTOF
            NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
            'price'=>20.00,
            'category_id'=>1
       ]);     
       Product::create([
            'name'=>'Gloria Delgado-Pritchett',
            'image'=>'../img/Funko Pop/GloriaFunkoPop.jpg',
            'description'=>'
            GLORIA DELGADO-PRITCHETT UIT MODERN FAMILY ALS FUNKO POP FIGUUR.
            GROOTTE CA. 10 CM
            MATERIAAL: KUNSTSTOF
            NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
            'price'=>10.00,
            'category_id'=>1
       ]);  
       Product::create([
            'name'=>'Octo Tentakel',
            'image'=>'../img/Funko Pop/OctoFunkoPop.jpg',
            'description'=>'
            OCTO TENTAKEL UIT SPONGEBOB SQUAREPANTS ALS FUNKO POP FIGUUR.
            GROOTTE CA. 10 CM
            MATERIAAL: KUNSTSTOF
            NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
            'price'=>30.00,
            'category_id'=>1
       ]);        
       Product::create([
            'name'=>'Peter Pettigrew',
            'image'=>'../img/Funko Pop/PeterFunkoPop.jpg',
            'description'=>'
            PETER PETTIGREW UIT HARRY POTTER ALS FUNKO POP FIGUUR.
            GROOTTE CA. 10 CM
            MATERIAAL: KUNSTSTOF
            NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
            'price'=>10.00,
            'category_id'=>1
       ]);     
       Product::create([
            'name'=>'Wreck It Ralph',
            'image'=>'../img/Funko Pop/RalfFunkoPop.jpg',
            'description'=>'
            WRECK IT RALPH UIT WRECK IT RALPH ALS FUNKO POP FIGUUR.
            GROOTTE CA. 10 CM
            MATERIAAL: KUNSTSTOF
            NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
            'price'=>20.00,
            'category_id'=>1
        ]);     
        Product::create([
            'name'=>'Rey',
            'image'=>'../img/Funko Pop/ReyFunkoPop.jpg',
            'description'=>'
            REY UIT STAR WARS ALS FUNKO POP FIGUUR.
            GROOTTE CA. 10 CM
            MATERIAAL: KUNSTSTOF
            NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
            'price'=>20.00,
            'category_id'=>1
        ]);   
        Product::create([
            'name'=>'Thanos',
            'image'=>'../img/Funko Pop/ThanosFunkoPop.jpg',
            'description'=>'
            THANOS UIT DE MARVEL FILMS ALS FUNKO POP FIGUUR.
            GROOTTE CA. 10 CM
            MATERIAAL: KUNSTSTOF
            NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
            'price'=>20.00,
            'category_id'=>1
        ]);   
        Product::create([
            'name'=>'The Child',
            'image'=>'../img/Funko Pop/YodaFunkoPop.jpg',
            'description'=>'
            THE CHILD UIT THE MANDALORIAN ALS FUNKO POP FIGUUR.
            GROOTTE CA. 10 CM
            MATERIAAL: KUNSTSTOF
            NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
            'price'=>100.00,
            'category_id'=>1
        ]);   
        Product::create([
            'name'=>'Cyberpunk',
            'image'=>'../img/Games/Cyberpunk.jpg',
            'description'=>'
            Cyberpunk 2077 is een computerrollenspel in ontwikkeling bij CD Projekt RED. Het spel wordt uitgegeven door CD Projekt en zal uitkomen voor de PlayStation 4, Windows, Xbox One en Google Stadia. Het spel is gebaseerd op het rollenspel Cyberpunk 2020',
            'price'=>60.00,
            'category_id'=>2
        ]);       
        Product::create([
            'name'=>'Death Stranding',
            'image'=>'../img/Games/Deathstranding.jpg',
            'description'=>'
            De legendarische gamemaker Hideo Kojima presenteert een baanbrekend actie-avontuur. Norman Reedus, Mads Mikkelsen, Léa Seydoux en Lindsay Wagner spelen de hoofdrollen in deze nieuwe open wereld-game voor PS4. In de nabije toekomst wordt de hele wereld geteisterd door mysterieuze explosies en bovennatuurlijke gebeurtenissen die de Doodstranding worden genoemd. Overal verschijnen vreemde, dodelijke wezens en de mensheid staat op het punt van uitsterven. Sam Porter Bridges reist door het verwoeste niemandsland om de toekomst van de mensheid veilig te stellen.',
            'price'=>60.00,
            'category_id'=>2
        ]);
        Product::create([
            'name'=>'Jumanji',
            'image'=>'../img/Games/Jumanji.jpg',
            'description'=>'
            Voor de meesten is Jumanji pure nostalgie. In deze versie komen dezelfe personages terug als de film remake van 2017. Speel met Dr. Smolder Bravestone, Ruby Roundhouse, Franklin Mouse Finbar of Professor Shelly Oberon. Elk personage heeft zijn eigen special skill set die je team meerwaarde geeft. Ga samen op avontuur en verken de jungle, bergen,... op zoek naar de juwelen van Jumanji. Overleef vallen en vijanden die niet kunnen wachten om je het leven zuur te maken. Je kan deze game met vier co-op spelen, zowel lokaal als online.',
            'price'=>20.00,
            'category_id'=>2
        ]);       
        Product::create([
            'name'=>'Red Dead Redemption 2',
            'image'=>'../img/Games/Reddead.jpg',
            'description'=>'
            Amerika, 1899. Wetshandhavers hebben het gemunt op de laatste outlaw-bendes. Wie zich niet wil overgeven, wordt genadeloos afgemaakt. Arthur Morgan en de Van der Linde-bende slaan op de vlucht nadat in het plaatsje Blackwater een overval slecht afloopt. Met federale agenten en de beste premiejagers van het Westen op de hielen, trekken ze door het ruige hart van Amerika, een spoor van overvallen en vuurgevechten achter zich latend. Als door interne strubbelingen de bende uiteen dreigt te vallen, wordt Arthur gedwongen een keuze te maken. Kiest hij voor zijn idealen of voor de bende waar hij alles aan te danken heeft? Red Dead Redemption 2, van de makers van Grand Theft Auto V en Red Dead Redemption, is een episch verhaal over het einde van het Wilde Westen en het begin van een nieuw tijdperk.',
            'price'=>50.00,
            'category_id'=>2
        ]);
        Product::create([
            'name'=>'Uncharted 4 A Thiefs End',
            'image'=>'../img/Games/uncharted.jpg',
            'description'=>'
            PlayStations meest beruchte schatzoeker is terug! Nathan Drake beleeft zijn laatste avontuur in Uncharted 4 - A Thiefs End. Na het roekeloze leven als schattenjager achter zich te hebben gelaten, gooit de onverwachte terugkeer van broer Sam roet in het eten. In zijn afwezige jaren heeft Sam geen vrienden gemaakt, sterker nog; hij zit bij de verkeerde mensen flink in de problemen. Om zijn broer te redden, zit er maar één ding voor Nathan op... Het team voor een laatste keer bij elkaar brengen en een nieuw avontuur aan gaan. Kruip in de huid van Nathan Drake en ga op zoek naar de verloren schat van kapitein Henry Avery. Het verhaal speelt zich drie jaar na de gebeurtenissen van Uncharted 3 af. Nathan dacht jarenlang dat hij Sam verloren had, tot hij ineens weer voor zijn neus stond. Samen waren ze hard op weg om succesvolle schatzoekers te worden, maar toen sloeg het noodlot toe. Een aanwijzing naar een mogelijke schat laat het bloed kruipen waar het niet gaan kan. Het piratenparadijs Libertalia is volgens legendes diep in de bossen van Madagaskar verborgen.',
            'price'=>30.00,
            'category_id'=>2
        ]);  
        Product::create([
            'name'=>'Playstation 4',
            'image'=>'../img/Consoles/Ps4.jpg',
            'description'=>'
            Dezelfde prestaties en mogelijkheden in een kleinere uitvoeringVerbruikt minder stroom dan zijn voorgangerOndersteunt HDR voor de ultieme gamebelevingBeschikt over 500GB HDD en wordt standaard geleverd met de vernieuwde Dualshock 4-controlle',
            'price'=>300.00,
            'category_id'=>3
        ]);   
        Product::create([
            'name'=>'Playstation 2',
            'image'=>'../img/Consoles/Ps2.jpg',
            'description'=>'
            PlayStation2 is de populairste console ter wereld. PlayStation 2 is veel meer dan alleen maar een console. Het is een entertainmentcentrum waarop je games kunt spelen, films kunt kijken en muziek kunt beluisteren. Dus waarvoor je ook in de stemming bent, PS2 maakt het mogelijk.',
            'price'=>50.00,
            'category_id'=>3
        ]);
        Product::create([
            'name'=>'Sonny Psp',
            'image'=>'../img/Consoles/Sonypsp.jpg',
            'description'=>'
            Dankzij PSP kun je wanneer je wilt games, videos muziek en fotos bekijken of beluisteren en deze met je vrienden delen. Het stijlvolle, PSP-systeem beschikt bovendien over een TV-out (tv-out) poort zodat je content op je tv kunt weergeven.',
            'price'=>90.00,
            'category_id'=>3
        ]);   
        Product::create([
            'name'=>'Nitendo Switch',
            'image'=>'../img/Consoles/Switch.jpg',
            'description'=>'
            De Nintendo Switch kun je in alle situaties gebruiken, zodat je altijd gemakkelijk tussendoor de games kunt spelen die je wilt. Dit systeem luidt een nieuw tijdperk in waarin je je leven niet hoeft aan te passen om games te spelen. In plaats daarvan past het systeem zich aan aan je leven. Speel je favoriete games altijd, overal en met iedereen, dankzij de vrijheid en flexibiliteit die de diverse speelstijlen bieden,',
            'price'=>320.00,
            'category_id'=>3
        ]);    
        Product::create([
            'name'=>'Wii',
            'image'=>'../img/Consoles/Wij.jpg',
            'description'=>'
            Wii, Nintendos spelsysteem voor thuis, vertegenwoordigt een radicale stap voorwaarts en markeert een nieuw entertainmenttijdperk. Jarenlang groeiden videospellen in populariteit, maar ook in complexiteit. Met Wii verandert Nintendo de manier waarop je speelt door het plezier te maximaliseren en de problemen te minimaliseren. In de loop der tijd zijn videospellen voor veel mensen te overweldigend geworden.',
            'price'=>70.00,
            'category_id'=>3
        ]);    
        Product::create([
            'name'=>'Xbox One',
            'image'=>'../img/Consoles/Xboxone.jpg',
            'description'=>'
            Onlangs de Xbox in huis gehaald en sindsdien niet meer achter de console weg te krijgen. Super beeld en geluid, snel switchen tussen games en apps zoals Netflix en YouTube. Perfect in te zetten als allround mediaspeler (ook door de ingebouwde 4K HDR Blu-ray-speler. Prima line-up van games.',
            'price'=>280.00,
            'category_id'=>3
        ]);         
        Product::create([
            'name'=>'Flight Joystick',
            'image'=>'../img/Accessoires/Flightjoystick.jpg',
            'description'=>'eze flightstick van Logitech is jouw partner in de heftigste dog-fights. Hij is stabiel en precies, heeft 12 programmeerbare knoppen en een 8-wegs schakelaar onder je duim. Comfortabel vast te houden en verzwaard, zodat de Extreme 3D Joystick niet wegglijdt tijdens gevechten.',
            'price'=>40.00,
            'category_id'=>4
        ]);
        Product::create([
             'name'=>'Ps4 Controller',
             'image'=>'../img/Accessoires/Ps4controller.jpg',
             'description'=>'Je hebt volledige controle in je games met deze vernieuwde Dualshock 4 draadloze controller. Het vernieuwde touchpad beschikt nu over een lichtbalk die licht geeft in verschillende kleuren op basis van wat er in de game gebeurt. Bovendien is de controller nu ook via USB te verbinden met de PlayStation 4 waardoor de controller minder last heeft van input lag. De vernieuwde Dualshock 4-controller beschikt verder over dezelfde opties als voorheen zoals de Share-toets, bewegingssensoren, Stereoheadset-aansluiting en ingebouwde luidspreker.',
             'price'=>60.00,
             'category_id'=>4
        ]);     
        Product::create([
            'name'=>'Race Wheel',
            'image'=>'../img/Accessoires/Racewheel.jpg',
            'description'=>'Racen op de PlayStation 4 doe je natuurlijk met een racestuur voor de meest realistische ervaring. Dit Hori racestuur biedt je alle knoppen die je ook op een normale controller mag verwachten plus twee schakelflippers. Het stuurwiel kan tot 270 graden draaien en is te bevestigen doormiddel van zuignappen. De pedalen bieden genoeg grip zodat je voeten er niet vanaf glijden en zijn bovendien in te stellen op de gewenste gevoeligheid. Bovendien is het racestuur niet alleen te gebruiken op de PS4, maar ook op de PS3 en PC.',
            'price'=>80.00,
            'category_id'=>4
        ]);     
        Product::create([
            'name'=>'Xbox One Controller',
            'image'=>'../img/Accessoires/Xboxcontroller.jpg',
            'description'=>'Met de witte draadloze controller van Xbox ben je goed voorbereid op de actievolle momenten tijdens het gamen. De controller heeft namelijk een griptextuur voor extra comfort, waardoor je alle actie onder controle hebt. Daarbij heb je de knoptoewijzingen zelf in de hand, zodat je kunt spelen zoals jij dat wilt. Deze knoptoewijzingen kun je eenvoudig aanpassen met de Xbox Accessoires-app voor Xbox One en Windows 10. Het is ook mogelijk om je eigen compatibele headset aan te sluiten op de 3,5 mm stereoheadset-aansluiting. Verder speel je, door de controller via bluetooth te verbinden, ook games op Windows 10-pc’s, laptops en mobiele apparaten.',
            'price'=>60.00,
            'category_id'=>4
        ]);
        Product::create([
            'name'=>'Playstation Card',
            'image'=>'../img/Digital Content/Playstationcard.jpg',
            'description'=>'Playstation store tegoed kaart.',
            'price'=>60.00,
            'category_id'=>5
        ]);     
        Product::create([
            'name'=>'Vbucks',
            'image'=>'../img/Digital Content/Vbucks.jpg',
            'description'=>'Beter dan echt geld.',
            'price'=>1000.00,
            'category_id'=>5
        ]);     
        Product::create([
            'name'=>'Xbox Card',
            'image'=>'../img/Digital Content/Xboxcard.jpg',
            'description'=>'Xbox store tegoed kaart',
            'price'=>60.00,
            'category_id'=>5
        ]);         
     }
}
