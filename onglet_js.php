<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Onglet en js</title>
    <script type="text/javascript">
        function change_onglet(name)
        {
            document.getElementById('onglet_'+anc_onglet).className = 'onglet_0 onglet';
            document.getElementById('onglet_'+name).className = 'onglet_1 onglet';
            document.getElementById('contenu_onglet_'+anc_onglet).style.display = 'none';
            document.getElementById('contenu_onglet_'+name).style.display = 'block';
            anc_onglet = name;
        }
    </script>
    <style type="text/css">
        .onglet
        {
            display:inline-block;
            margin-left:3px;
            margin-right:3px;
            padding:3px;
            border:1px solid black;
            cursor:pointer;
        }
        .onglet_0
        {
            background:#bbbbbb;
            border-bottom:1px solid black;
        }
        .contenu_onglet
        {
            background-color:gainsboro;
            border:1px solid black;
            margin-top:-1px;
            padding:5px;
            display:none;
            width: 400px;
        }
        ul
        {
            margin-top:0px;
            margin-bottom:0px;
            margin-left:-10px
        }
        h1
        {
            margin:0px;
            padding:0px;
        }
    </style>
</head>
<body>
<div class="systeme_onglets">
    <div class="onglets">
        <span class="onglet_0 onglet" id="onglet_quoi" onclick="change_onglet('quoi');">Accueil</span>
        <span class="onglet_0 onglet" id="onglet_qui" onclick="change_onglet('qui');">Info</span>
    </div>

    <div class="contenu_onglets">
        <div class="contenu_onglet" id="contenu_onglet_quoi">
            <h1>Bonjour accueil</h1>
        </div>
        <div class="contenu_onglet" id="contenu_onglet_qui">
            <h1>Bonjour Info </h1>
        </div>

    </div>
</div>
<script type="text/javascript">
    var anc_onglet = 'quoi';
    change_onglet(anc_onglet);
</script>
</body>
</html>