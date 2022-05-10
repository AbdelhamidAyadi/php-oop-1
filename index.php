<?php

class Movie {
    public $title;
    public $date;
    public $director;
    public $rating;
    public $recommended;

    public function __construct($_title , $_date , $_director , $_rating){
        $this -> title = $_title;
        $this -> date = $_date;
        $this -> director = $_director;
        $this -> rating = $_rating;
    }
    public function SetRecommendation($rating){
        if ($rating > 5) {
            $this -> recommended = "Recommended";
        }else{
            $this -> recommended = "Not Recommended";
        }
    }
    public function getRecommendation(){
        return $this-> recommended;
    }
}

$Interstellar = new Movie("Interstellar" ,2014 ,"Christopher Nolan" , 8.6);
$Inception = new Movie("Inception" ,2010 ,"Christopher Nolan" , 7.6 );
$ThePrestige = new Movie("The Prestige" ,2006 ,"Christopher Nolan", 8.5);



echo "<p>" . $Interstellar -> title . "</p>";
echo "<p>" . $Interstellar -> date . "</p>";
echo "<p>" . $Interstellar -> director . "</p>";
echo "<hr/>";
echo "<p>" . $Inception -> title . "</p>";
echo "<p>" . $Inception -> date . "</p>";
echo "<p>" . $Inception -> director . "</p>";




?>
