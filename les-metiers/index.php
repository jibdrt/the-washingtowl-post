<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les métiers du Web</title>
</head>
<body>
    
</html>

<link rel="stylesheet" href="les-metiers.css">

<body>
<?php include "../header/header.php";?>  
    <div class="container bg-white>
     

    <div class="row ">
        <div class="col-sm-12 col-md-5 h2 mt-3">
        <h1 class="titre__h1--metier">Les Métiers du Web</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-10 m-auto mt-4 ">
        <h3 class="titre__h3">Les différences entre les métiers du web</h3>
        </div>
    </div>
        <div class="container ">
            <div class="row mt-5 bg-dark ">
                    <div class="col-sm-12 col-md-5 pt-3"><p class="paragraphe__top"> A propos : L’Univers du web regorge de subtilités. A l’instar d’une toile d’araignée numérique et bien que différents, des connecteurs logiques se font entre les différentes visions de ces professions. 
                    Cependant, il est intéressant de noter que chez certains professionnels du web les missions peuvent être divergentes selon les points de vue. </p>
                    </div>  
                    
                    <div class="col-sm-12 col-md-7 mt-3" id="image__top--position"><img src="../assets/design.jpg" class="image__top--size" >
                    </div>
                    </div>
                    <div class="row pt-5 ms-0 line__blue"></div>             
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4"></div>
                <div class="col-sm-12 col-md-4 mt-5 mb-5">
                    <div class="row flip-card__opacity">
                    <?php include "flip-card-metiers/flip-card.php";?>
                    </div>
                 <div class="col-sm-12 col-md-4"></div>
                </div> 
            </div> 
            
    <div class="container">
    <div class="row line__blue pt-5 ms-0"></div>
        <div class="row">
            
            <div class="col-sm-12 col-md-6 mt-5">
            <img src="../assets/webdev-work.jpg" class="image__bottom--size-webdev-work" >
            </div>
            <div class="col-sm-12 col-md-6  ">
                <div class="row"><h3 class="titre__h3">Pourquoi et ou se former aux métier du Web ?</h3></div>
                <div class="row"> <p class="paragraphe__middle"> La crise sanitaire est une période propice pour envisager une reconversion professionnelle. Il convient  de se poser les bonnes questions et de faire les bons choix pour mener à bien son projet.Le rapport au travail a quelque peu été bousculé pendant ces périodes de confinement. Avec l’absence d’interactions sociales et professionnelles, sauf par écrans interposés, le confinement a permis de se recentrer sur soi, repenser à son avenir.Et pour effectuer un nouveau départ il convient de choisir les formations les plus pertinents selons les projets envisagés.</p>
                <div class="row mb-5 mt-5 flip-card__opacity"><?php include "flip-card-metiers-2/flip-card-3.php";?></div>
                </div>  
               
            </div> 
        </div>
        
    </div>


</div>  
<?php include "../footer/footer.php";?>
</body>
