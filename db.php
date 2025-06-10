<?php 

    // creo il genere fantasy
    $fantasy_genre = new Genre("Fantastico", "Il genere fantastico è un genere narrativo che introduce elementi soprannaturali o non spiegabili razionalmente nella realtà, spesso con la presenza di magia, creature leggendarie e mondi immaginari.");

    // creo l'array di film
    $movies = [
        new Movie("Avatar", "images/avatar_cover.jpg", 2009, 9.3, $fantasy_genre),
        new Movie("Spider-Man", "images/interstellar_cover.jpg", 2002, 9.8, new Genre("Azione", "Il film d'azione è un genere cinematografico caratterizzato da una trama che si sviluppa principalmente attraverso sequenze di azione, dove uno o più protagonisti affrontano sfide che richiedono coraggio e prodezza fisica.")),
        new Movie("Interstellar", "images/spiderman_cover.jpg", 2014, 9.9, new Genre("Avventura", "Un film d'avventura è un genere cinematografico che racconta storie di imprese rischiose e piene di imprevisti, solitamente ambientate in luoghi misteriosi e pericolosi."))
    ];

    // aggiungo la descrizione all'array di film
    $movies[0]->description = "Avatar è un film del 2009 scritto, diretto, co-prodotto e co-montato da James Cameron. È un colossal di fantascienza, realizzato totalmente in tre dimensioni, ha visto un'ampia diffusione in 3D e in 3D IMAX, venendo comunque distribuito anche nel classico formato 2D.";
    $movies[1]->description = "Spider-Man è un film del 2002 diretto da Sam Raimi. Basato sull'omonimo personaggio di Marvel Comics, è il primo capitolo della trilogia di Spider-Man di Raimi. La storia segue un timido adolescente di nome Peter Parker che acquisisce abilità sovrumane dopo essere stato morso da un ragno geneticamente modificato. Adotta l'identità del vigilante mascherato Spider-Man e inizia a combattere il crimine a New York City, affrontando nel frattempo il malvagio Green Goblin.";
    $movies[2]->description = "Interstellar è un film del 2014 diretto da Christopher Nolan. In un futuro non precisato, un drastico cambiamento climatico colpisce duramente l'agricoltura. Il granturco è l'unica coltivazione ancora in grado di crescere ed un gruppo di scienziati è intenzionato ad attraversare lo spazio per trovare nuovi luoghi adatti a coltivarlo.";

    // aggiungo il regista all'array di film
    $movies[0]->setDirector("James Cameron");
    $movies[1]->setDirector("Sam Raimi");
    $movies[2]->setDirector("Christopher Nolan");

?>