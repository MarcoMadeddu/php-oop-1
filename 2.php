<?php
class Movies{
    public $title;
    public $releaseYear;
    public $filmDirector;
    public $average;

    public function __construct($_title , $_releaseYear , $_filmDirector , $_average){
        $this->title = $_title;
        $this->releaseYear = $_releaseYear;
        $this->filmDirector = $_filmDirector;
        $this->average = $_average;
        
    }
    public function TotYears($CurrentYear){
        return $CurrentYear - $this->releaseYear;
    }
}

$film1 = new Movies('Parasite' , 2019 , 'Bong Joon-ho' , 5);
$film2 = new Movies('Interstellar' , 2014 , 'Cristopher Nolan' , 5);

$film3 = new Movies('Dunkirk' , 2017 , 'Cristopher Nolan' , 5);

$film4 = new Movies('Il ritorno del cavaliere oscuro' , 2012 , 'Cristopher Nolan' , 5);

$film5 = new Movies('Inception' , 2010 , 'Cristopher Nolan' , 5);


$year = $film1->TotYears(2020);
var_dump($film1 , $film2 ,$film3 ,$film4 ,$film5 ,);
echo " $film1->title Rilasciato " . $film1->TotYears(2020) . " anni fa <br>" ;
echo " $film2->title Rilasciato " . $film2->TotYears(2020) . " anni fa <br>";
echo " $film3->title Rilasciato " . $film3->TotYears(2020) . " anni fa <br>";
echo " $film4->title Rilasciato " . $film4->TotYears(2020) . " anni fa <br>";
echo " $film5->title Rilasciato " . $film5->TotYears(2020) . " anni fa <br>";
?>