
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
        public $voto;
        public $maggiorrenni;

        function __construct($_name, $_genere, $_voto = [], $_maggiorenni)
        {
          $this->name = $_name;
          $this->genere = $_genere;
          $this->voto = $_voto;
          $this->maggiorenni = $_maggiorenni;  
        }

        public function getFullName(){
            return "Il nome del film è" . $this->name . "il genere è" . $this->genere . "<br>" . "Il voto medio è " . $this->voto . "su 5, è un film";
        }

    } 

    $film_1 = new Movie ("Jurasic World:Il Dominio", "Aventuroso", 3, 17);
    $film_2 = new Movie ("Top Gun: Maverick", "Azione", 4, 17);
    $film_3 = new Movie ("Nostalgia", "Amoroso", 5, 18);

    $selectionFilms =[];
    $selectionFilms = $film_1;
    $selectionFilms = $film_2;
    $selectionFilms = $film_3;
?>

<ul>
    <?php 
        foreach ($selectionFilms as $film){ ?>
            <li>
                <?php echo $film->getFullName(); ?>
            </li>
        <?php  }?>
</ul>