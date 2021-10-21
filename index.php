
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<?php 

class Movie {
    public $title;
    public $genre;
    public $language;
    public $country;
    public $cover;

    function __construct($_title, $_genre, $_language, $_country , $_cover)
    {
        $this->title = $_title ;
        $this->genre = $_genre ;
        $this->language = $_language ;
        $this->country = $_country ;
        $this->cover = $_cover ;        
    }

    public function setCover($_link) {
        $this->cover = $_link;
    }
    
    
}

$cowboy = new Movie('Cowboy bebop the movie', 'anime', 'japanese', 'japan', '/Cowboy_Bebop_film.jpg');
$hangover = new Movie('Una notte da leoni', 'commedia', 'italiano', 'USA', '/locandina.jpg');
?>

<div class="wrapper">
    <div class="card">
                <img class="cover" src="<?php echo 'img' . $cowboy->cover ?>" alt="">
                <h2><?php echo $cowboy->title ?></h2>
                <h3><?php echo $cowboy->genre ?></h3>
                <h3><?php echo $cowboy->language ?></h3>
                <img class="flag"  src="./img/<?php echo $cowboy->country ?>.png" alt="">
    </div>
    <div class="card">
                <img class="cover" src="<?php echo 'img' . $hangover->cover ?>" alt="">
                <h2><?php echo $hangover->title ?></h2>
                <h3><?php echo $hangover->genre ?></h3>
                <h3><?php echo $hangover->language ?></h3>
                <img class="flag"  src="./img/<?php echo $hangover->country ?>.png" alt="">
    </div>
</div>

<?php

$cowboy->setCover('/cowboy-bebop-il-film.jpg');
$hangover->setCover('/unnamed.jpg'); 

?> 
<h1>
    richiamo il mio metodo set cover per cambiare la mia immagine di copertina
</h1>
<div class="wrapper">
    <div class="card">
                <img class="cover" src="<?php echo 'img' . $cowboy->cover ?>" alt="">
                <h2><?php echo $cowboy->title ?></h2>
                <h3><?php echo $cowboy->genre ?></h3>
                <h3><?php echo $cowboy->language ?></h3>
                <img class="flag"  src="./img/<?php echo $cowboy->country ?>.png" alt="">
    </div>
    <div class="card">
                <img class="cover" src="<?php echo 'img' . $hangover->cover ?>" alt="">
                <h2><?php echo $hangover->title ?></h2>
                <h3><?php echo $hangover->genre ?></h3>
                <h3><?php echo $hangover->language ?></h3>
                <img class="flag"  src="./img/<?php echo $hangover->country ?>.png" alt="">
    </div>
</div>
</body>
</html>