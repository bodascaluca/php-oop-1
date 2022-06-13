
    <!-- 
    - è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
     -->

<?php
    class Movie 
    {
        public $name;
        public $genere;
        public $voti = [];

        function __construct($_name, $_genere)
        {
          $this->name = $_name;
          $this->genere = $_genere;
        }

        public function insertVoto($voto)
        {
            $this->voti[] = $voto;
        }

        public function mediaVoto()
        {
            $sum = array_sum($this->voti);

            return $sum / count($this->voti);
        }

        public function getFullName(){
            return "Il nome del film è" . $this->name . "il genere è" . $this->genere . "<br>" . "Il voto medio è " . $this->mediaVoto() . "su 5, è un film";
        }
    }

    $film_1 = new Movie ("Jurasic World:Il Dominio", "Aventuroso");
    $film_2 = new Movie ("Top Gun: Maverick", "Azione");
    $film_3 = new Movie ("Nostalgia", "Amoroso");

    $film_1->insertVoto(4);
    $film_1->insertVoto(5);
    $film_1->insertVoto(4);

    $film_2->insertVoto(2);
    $film_2->insertVoto(3);
    $film_2->insertVoto(3);


    $film_3->insertVoto(4);
    $film_3->insertVoto(4);
    $film_3->insertVoto(4);

    $selectionFilms = [];
    $selectionFilms[] = $film_1;
    $selectionFilms[] = $film_2;
    $selectionFilms[] = $film_3;
?>

<ul>
    <?php 
        foreach ($selectionFilms as $film){ ?>
            <li>
                <?php echo $film->getFullName(); ?>
            </li>
        <?php  }?>
</ul>