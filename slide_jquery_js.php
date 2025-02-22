<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        /* CSS CAROUSEL CREER AVEC JQUERY*/
      .conteneur{
            position: absolute;
            background-color: #24d3ff;
            width: auto;
            height: auto;
            top: 0px;
            left: 0px;
            border: 5px solid crimson;
        }
        img{
            position: center;
        }

     /* CSS CAROUSEL CREER AVEC JAVASCRIPT*/
     #carrousel{
         position:relative;
         height:200px;
         width:700px;
         margin:auto;

     }
     #carrousel ul li{
         position:absolute;
         top:0;
         left:400px;
     }

    </style>

</head>
<body>

<div class="conteneur">
    <img src='images/IMG_1.JPG' style="display: block; width: 400px; height: 400px;">
    <img src='images/IMG_2.JPG' style="display: none; width: 400px; height: 400px;" >
    <img src='images/IMG_3.JPG' style="display: none; width: 400px; height: 400px;" >
</div>

<script type="text/javascript">
    I = 0 ;
    Imax = document.images.length - 1 ;
    setTimeout(suivante, 2000) ;

    function suivante()
    {
        document.images[I].style.display = "none" ;
        if ( I < Imax )
            I++;
        else
            I=0;
        document.images[I].style.display = "block";
        setTimeout(suivante, 2000) ;
    }
</script>
<!-- FIN CAROUSEL JQUERY -->



<div id="carrousel">
    <ul>
        <li><img src="images/IMG_1.JPG" style="width: 400px; height: 400px;" /></li>
        <li><img src="images/IMG_2.JPG" style="width: 400px; height: 400px;" /></li>
        <li><img src="images/IMG_3.JPG" style="width: 400px; height: 400px;" /></li>
    </ul>
</div>

<script src="js/jQuery.js"></script>
<script>
    $(document).ready(function(){

        var $carrousel = $('#carrousel'), // on cible le bloc du carrousel
            $img = $('#carrousel img'), // on cible les images contenues dans le carrousel
            indexImg = $img.length - 1, // on définit l'index du dernier élément
            i = 0, // on initialise un compteur
            $currentImg = $img.eq(i); // enfin, on cible l'image courante, qui possède l'index i (0 pour l'instant)

        $img.css('display', 'none'); // on cache les images
        $currentImg.css('display', 'block'); // on affiche seulement l'image courante

       // $carrousel.append('<div class="controls"> <span class="prev">Precedent</span> <span class="next">Suivant</span> </div>');

        $('.next').click(function(){ // image suivante

            i++; // on incrémente le compteur

            if( i <= indexImg ){
                $img.css('display', 'none'); // on cache les images
                $currentImg = $img.eq(i); // on définit la nouvelle image
                $currentImg.css('display', 'block'); // puis on l'affiche
            }
            else{
                i = indexImg;
            }

        });

        $('.prev').click(function(){ // image précédente

            i--; // on décrémente le compteur, puis on réalise la même chose que pour la fonction "suivante"

            if( i >= 0 ){
                $img.css('display', 'none');
                $currentImg = $img.eq(i);
                $currentImg.css('display', 'block');
            }
            else{
                i = 0;
            }

        });

        function slideImg(){
            setTimeout(function(){ // on utilise une fonction anonyme

                if(i < indexImg){ // si le compteur est inférieur au dernier index
                    i++; // on l'incrémente
                }
                else{ // sinon, on le remet à 0 (première image)
                    i = 0;
                }

                $img.css('display', 'none');

                $currentImg = $img.eq(i);
                $currentImg.css('display', 'block');

                slideImg(); // on oublie pas de relancer la fonction à la fin

            }, 7000); // on définit l'intervalle à 7000 millisecondes (7s)
        }

        slideImg(); // enfin, on lance la fonction une première fois

    });
</script>
</body>
</html>