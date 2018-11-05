<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>parralax jquery</title>
    <style>
        .parallax-slide {
            height: 100vh;
        }
        .content-slide {
            height: 100vh;
            background: #fff;
            text-align: center;
        }
        h1 {
            padding-top: 10%;
        }
        #parallax1 {
            background: url('images/djouma4.jpg') no-repeat center;
            background-attachment: fixed;
        }

    </style>
</head>
<body>
<body>
<div id="parallax1" class="parallax-slide"></div>
<div id="content1" class="content-slide">
    <h1>ACS Keloumak</h1>
</div>
<script>
    $(document).ready(function() {
        var initScrollTop = $(window).scrollTop();
        $(parallax1).css({'background-position-y' : (initScrollTop/75)+'%'});
        $(window).scroll(function() {
            var scrollTop = $(window).scrollTop();
            $(parallax1).css({'background-position-y' : (scrollTop/75)+'%'});

        });

    });
</script>
</body>
</body>
</html>