<!DOCTYPE html>
<html>
<head>
    <title>onglet jquery</title>
    <script src="js/jQuery.js"></script>
    <script>
        $(document).ready(function(){
            $("#accu").click(function(){
                $("#panel1").slideToggle("slow");
            });
        });
        $(document).ready(function(){
            $("#inf").click(function(){
                $("#panel2").slideToggle("slow");
            });
        });
    </script>

    <style>
        #panel1, #accu {
            width: 200px;
            padding: 50px;
            text-align: center;
            background-color: #e5eecc;
            border: solid 1px #c3c3c3;
        }

        #panel1 {
            padding: 50px;
            display: none;
            background-color: #b9def0;
        }
        #panel2, #inf {
            width: 200px;
            padding: 50px;
            text-align: center;
            background-color: #e5eecc;
            border: solid 1px #c3c3c3;
        }

        #panel2 {
            padding: 50px;
            display: none;
            background-color: #b9def0;
        }
    </style>
</head>
<body>

<div id="accu">Accueil</div>
<div id="panel1">Bonjour Accueil</div>

<div id="inf">Info</div>
<div id="panel2">Bonjour Info</div>

</body>
</html>
