<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu burger js</title>
    <style>
        #menu {
            width: 100%;
            height:40px;
            background-color: black;
            color:white;
        }

        #menu ul {
            display: flex;
            list-style-type: none;
            padding:0;
            width:100%;
            align-items: center;
            justify-content: center;
        }

        #menu ul li {
            width:20%;
            box-sizing: border-box;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
        }

        #burger {
            cursor: pointer;
            border:1px solid black;
            width:35px;
            text-align: center;
            min-height: 25px;
            display: none;
            position: absolute;
            top:5px;
            right:5px;
        }

        @media all and (max-width: 768px) {

            #burger.visible {
                display: block;
            }
            #menu.visible {
                height:210px;
            }
            #burger.invisible{
                display: none;
            }
            #menu.invisible {
                height:0;
            }
            #menu {
                height:0;
                overflow: hidden;
                transition: height 0.8s;
            }

            #menu ul {
                flex-direction: column;
            }

            #menu ul li {
                width: 80%;
            }

            #burger {
                display: block;
            }

            #burger.close {
                color:white;
            }
        }
    </style>
</head>
<body>
<div id="burger" class="burger"> &#9776; </div>
<nav id="menu">
    <ul id="liste-menu">
        <li class="menu-element"> élement 1 </li>
        <li class="menu-element"> élement 2 </li>
        <li class="menu-element"> élement 3 </li>
        <li class="menu-element"> élement 4 </li>
        <li class="menu-element"> élement 5 </li>
    </ul>
</nav>

<script>
    var burger = document.getElementById("burger");
    var menu = document.getElementById("menu");
    var withoutClassTextClose = burger.className;	// Cette variable va contenir toutes les classes de #burger telles qu'elles sont au début, avant que le JS agisse. C'est pour pouvoir les remettre plus tard.

    function hasClass(classToFind,elem) {
        var classText = elem.className; //On stock tout le texte contenu dans class="".
        var classArray = classText.split(" "); //Cette fonction permet de permet de scinder une chaîne de caractère et de retourner les résultats dans un tableau, grâce à un caractère défini comme séparateur. Ici, le séparateur est espace (" ")
        var hasClassClose = false; //De base, la classe "close" n'existe pas, donc le booleen hasClassClose est faux.
        for (var i = 0; i<classArray.length ; i++) { //On fait une boucle pour parcourir le tableau
            if(classArray[i] === classToFind) { //Pour chaque case du tableau, on vérifie si la classe est "close"
                hasClassClose = true; // Si la classe "close" est trouvée, on passe le booléen à true
            }
        }
        if(hasClassClose === true) {
            return true;
        } else {
            return false;
        }
    }

    burger.onclick = function(e){ //au clic sur le bouton burger
        var classText = burger.className; //même code que dans la fonction hasClass
        var classArray = classText.split(" ");
        console.log(classArray); //On affiche dans la console la variable classArray qui contient un tableau avec une classe dans chaque case du tableau. Ici, la console va afficher ["burger"]
        var hasClassClose = false; //Même logique que dans la fonction hasClass
        for (var i = 0; i<classArray.length ; i++) {
            if(classArray[i] === "close") {
                hasClassClose = true;
            }
        }
        if(!hasClass("close",burger)) { //Si on a pas trouvé la classe "close", alors le menu est en mode "burger"
            menu.className = "visible"; //On affiche le menu en lui donnant la classe "visible"
            this.innerHTML = "X"; //On change le burger en croix
            this.className += " close"; //On rajoute la classe "close"
        }
        else { //Sinon, la classe "close" a été trouvée donc le menu est en mode "croix"
            menu.className = "invisible"; //On cache le menu
            this.innerHTML = "&#9776;"; //On change la croix en charactère "burger"
            this.className = withoutClassTextClose; //On remet les classes de départ (déclarées ligne 3) au burger
        }

    }
</script>
</body>
</html>