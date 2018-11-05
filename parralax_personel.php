<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            overflow: hidden;
            color: #666;
            background: lorem-pixel-url(1500, 1000, sports, 8);
            background-size: cover cover;
        }

        img {
            display: block;
            width: 90%;
            margin: 0 auto;
        }
        .scene {

        .layer{
        &:nth-child(1) { opacity: 0.15 }
        &:nth-child(2) { opacity: 0.30 }
        &:nth-child(3) { opacity: 0.45 }
        &:nth-child(4) { opacity: 0.60 }
        &:nth-child(5) { opacity: 0.75 }
        &:nth-child(6) { opacity: 0.90 }
        }
        } <!-- project url https://github.com/wagerfield/parallax/</br> -->
        <!-- full demo https://wagerfield.github.io/parallax/ -->

        html {
            font-family: "Roboto Slab", sans-serif;
            font-size: 12px; }

        body {
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            line-height: 1.4em;
            background-color: black;
            text-align: center;
            color: white; }


        em {
            font-style: normal;
            color: #d92400; }

        img {
            display: block;
            width: 100%; }

        ul {
            list-style: none;
            display: block;
            padding: 0;
            margin: 0;

        }
        .toggle {
            -webkit-box-shadow: 0 2px 8px rgba(0, 0, 0, 0.6);
            -moz-box-shadow: 0 2px 8px rgba(0, 0, 0, 0.6);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.6);
            margin: -24px;
            position: absolute;
            bottom: 11.6%;
            left: 50%; }
        .toggle.i .cross {
            -webkit-transform: rotateZ(0deg);
            -moz-transform: rotateZ(0deg);
            transform: rotateZ(0deg); }
        .toggle.i .cross .x {
            margin-left: -2px;
            width: 4px;
            margin-top: -12px; }
        .toggle.i .cross .y {
            margin-top: -4px;
            height: 16px; }

        .cross {
            -webkit-transform: rotateZ(45deg);
            -moz-transform: rotateZ(45deg);
            transform: rotateZ(45deg);
            position: absolute;
            left: 50%;
            top: 50%; }
        .cross .x, .cross .y {
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            -webkit-background-clip: padding-box;
            -moz-background-clip: padding-box;
            background-clip: padding-box;
            background-color: #1d1f27;
            height: 4px;
            width: 4px;
            margin: -2px;
            position: absolute;
            left: 0;
            top: 0; }
        .cross .x {
            margin-left: -12px;
            margin-top: -2px;
            width: 24px; }
        .cross .y {
            margin-top: -12px;
            height: 24px; }

        .prompt.hide {
            visibility: hidden; }
        .prompt.hide .panel {
            -webkit-transform: translate3d(0,250%,0) rotateY(360deg);
            -moz-transform: translate3d(0,250%,0) rotateY(360deg);
            transform: translate3d(0,250%,0) rotateY(360deg);
            opacity: 0; }
        .prompt .cell {
            -webkit-perspective: 1000px;
            -moz-perspective: 1000px;
            perspective: 1000px; }
        .prompt .dismiss {
            -webkit-transform: scale(0.5);
            -moz-transform: scale(0.5);
            transform: scale(0.5);
            background-color: transparent;
            position: absolute;
            right: 4px;
            top: 4px; }
        .prompt .x, .prompt .y {
            background: white; }
        .prompt .center {
            max-width: 300px;
            width: 82%; }
        .prompt .panel {
            -webkit-perspective: none;
            -moz-perspective: none;
            perspective: none;
            -webkit-transform-style: flat;
            -moz-transform-style: flat;
            transform-style: flat;
            -webkit-transition: all 1.8s cubic-bezier(0.77, 0, 0.175, 1);
            -moz-transition: all 1.8s cubic-bezier(0.77, 0, 0.175, 1);
            transition: all 1.8s cubic-bezier(0.77, 0, 0.175, 1);
            border: 1px solid rgba(255, 255, 255, 0.15);
            background-color: rgba(0, 0, 0, 0.65);
            padding: 1.2em 0 1.8em; }
        .prompt .panel img {
            margin: 0.6em auto;
            width: 100px; }
        .prompt .panel h2 {
            margin: 0 0 0.4em; }
        .prompt .panel p {
            font-size: 1.25em;
            margin: 0 10% 1.25em;
            line-height: 1.25em;
            color: #999999; }
        .prompt .tilt-scene {
            -webkit-perspective: 1000px;
            -moz-perspective: 1000px;
            perspective: 1000px;
            -webkit-transform: translate3d(0,0,100px);
            -moz-transform: translate3d(0,0,100px);
            transform: translate3d(0,0,100px);
            margin: 0 auto;
            width: 60%; }
        .prompt .tilt {
            -webkit-animation: tilt 4s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955);
            -moz-animation: tilt 4s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955);
            animation: tilt 4s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955); }

        .scene,
        .layer {
            display: block;
            height: 100%;
            width: 100%;
            padding: 0;
            margin: 0; }

        .scene {
            min-height: 460px;
            position: relative;
            overflow: hidden; }

        .layer {
            position: absolute; }
        .layer div {
            -webkit-transform: translate3d(0,0,0);
            -moz-transform: translate3d(0,0,0);
            transform: translate3d(0,0,0);
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            backface-visibility: hidden; }

        .title {
            font-size: 3em;
            text-shadow: 0 8px 6px rgba(0, 0, 0, 0.6);
            margin-top: -0.7em;
            position: absolute;
            width: 100%;
            top: 42%; }

        .background {
            background: url(https://wagerfield.github.io/parallax/assets/images/background.jpg) no-repeat 50% 100%;
            bottom: 96px;
            background-size: cover;
            position: absolute;
            width: 110%;
            left: -5%;
            top: -5%; }

        .lighthouse {
            -webkit-transform-origin: 50% 90%;
            -moz-transform-origin: 50% 90%;
            transform-origin: 50% 90%;
            -webkit-animation: lighthouse 4s 0.1s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955);
            -moz-animation: lighthouse 4s 0.1s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955);
            animation: lighthouse 4s 0.1s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955);
            margin: 0px -64px;
            background-size: 128px 224px;
            height: 224px;
            width: 128px;
            background-image: url(https://wagerfield.github.io/parallax/assets/images/lighthouse.png);
            background-repeat: no-repeat;
            bottom: 64px;
            position: absolute;
            right: 20%; }

        .wave {
            background: transparent repeat-x;
            position: absolute;
            width: 300%;
            left: -100%; }
        .wave:after {
            background-color: black;
            position: absolute;
            display: block;
            content: "";
            height: 500px;
            width: 100%;
            top: 100%;
            left: 0; }
        .wave.plain {
            background-image: url(https://wagerfield.github.io/parallax/assets/images/wave-plain.png); }
        .wave.paint {
            background-image: url(https://wagerfield.github.io/parallax/assets/images/wave-paint.png); }

        .light {
            margin: -120px -120px;
            background-size: 240px 240px;
            height: 240px;
            width: 240px;
            background-repeat: no-repeat;
            bottom: 112px;
            position: absolute;
            left: 50%; }
        .light.orange {
            background-image: url(https://wagerfield.github.io/parallax/assets/images/light-orange.png); }
        .light.purple {
            background-image: url(https://wagerfield.github.io/parallax/assets/images/light-purple.png); }
        .light.a {
            bottom: 80px;
            left: 20%; }
        .light.b {
            bottom: 80px;
            left: 30%; }
        .light.c {
            bottom: 112px;
            left: 45%; }
        .light.d {
            bottom: 96px;
            left: 60%; }
        .light.e {
            bottom: 112px;
            left: 75%; }
        .light.f {
            bottom: 64px;
            left: 80%; }
        .light.phase-1 {
            -webkit-animation: phase 20s 0.1s infinite linear;
            -moz-animation: phase 20s 0.1s infinite linear;
            animation: phase 20s 0.1s infinite linear; }
        .light.phase-2 {
            -webkit-animation: phase 18s 0.1s infinite linear;
            -moz-animation: phase 18s 0.1s infinite linear;
            animation: phase 18s 0.1s infinite linear; }
        .light.phase-3 {
            -webkit-animation: phase 16s 0.1s infinite linear;
            -moz-animation: phase 16s 0.1s infinite linear;
            animation: phase 16s 0.1s infinite linear; }
        .light.phase-4 {
            -webkit-animation: phase 14s 0.1s infinite linear;
            -moz-animation: phase 14s 0.1s infinite linear;
            animation: phase 14s 0.1s infinite linear; }
        .light.phase-5 {
            -webkit-animation: phase 12s 0.1s infinite linear;
            -moz-animation: phase 12s 0.1s infinite linear;
            animation: phase 12s 0.1s infinite linear; }
        .light.phase-6 {
            -webkit-animation: phase 10s 0.1s infinite linear;
            -moz-animation: phase 10s 0.1s infinite linear;
            animation: phase 10s 0.1s infinite linear; }

        .rope {
            width: 120%;
            position: relative;
            left: -10%;
            position: relative; }

        .hanger {
            -webkit-transform-origin: 0% 0%;
            -moz-transform-origin: 0% 0%;
            transform-origin: 0% 0%;
            position: absolute; }
        .hanger.position-1 {
            top: 28%; }
        .hanger.position-2 {
            top: 46%; }
        .hanger.position-3 {
            top: 59%; }
        .hanger.position-4 {
            top: 66.5%; }
        .hanger.position-5 {
            top: 69.5%; }
        .hanger.position-6 {
            top: 66.5%; }
        .hanger.position-7 {
            top: 59%; }
        .hanger.position-8 {
            top: 46%; }
        .hanger.position-9 {
            top: 28%; }
        .hanger.position-1 {
            left: 10%; }
        .hanger.position-2 {
            left: 20%; }
        .hanger.position-3 {
            left: 30%; }
        .hanger.position-4 {
            left: 40%; }
        .hanger.position-5 {
            left: 50%; }
        .hanger.position-6 {
            left: 60%; }
        .hanger.position-7 {
            left: 70%; }
        .hanger.position-8 {
            left: 80%; }
        .hanger.position-9 {
            left: 90%; }

        .board {
            -webkit-transform-origin: 50% 0%;
            -moz-transform-origin: 50% 0%;
            transform-origin: 50% 0%;
            margin: 0px -140px;
            background-size: 280px 280px;
            height: 280px;
            width: 280px;
            background-repeat: no-repeat;
            position: absolute;
            top: -4px;
            left: 0; }
        .board.birds {
            background-image: url(https://wagerfield.github.io/parallax/assets/images/board-birds.png); }
        .board.cloud-1 {
            background-image: url(https://wagerfield.github.io/parallax/assets/images/board-cloud-1.png); }
        .board.cloud-2 {
            background-image: url(https://wagerfield.github.io/parallax/assets/images/board-cloud-2.png); }
        .board.cloud-3 {
            background-image: url(https://wagerfield.github.io/parallax/assets//images/board-cloud-3.png); }
        .board.cloud-4 {
            background-image: url(https://wagerfield.github.io/parallax/assets//images/board-cloud-4.png); }

        .swing-1 {
            -webkit-animation: swing 4s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955);
            -moz-animation: swing 4s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955);
            animation: swing 4s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955); }

        .swing-2 {
            -webkit-animation: swing 3.5s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955);
            -moz-animation: swing 3.5s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955);
            animation: swing 3.5s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955); }

        .swing-3 {
            -webkit-animation: swing 3s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955);
            -moz-animation: swing 3s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955);
            animation: swing 3s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955); }

        .swing-4 {
            -webkit-animation: swing 2.5s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955);
            -moz-animation: swing 2.5s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955);
            animation: swing 2.5s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955); }

        .swing-5 {
            -webkit-animation: swing 2s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955);
            -moz-animation: swing 2s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955);
            animation: swing 2s infinite alternate cubic-bezier(0.455, 0.03, 0.515, 0.955); }

        .wave.depth-10 {
            -webkit-animation: wave 8s 0.1s infinite linear;
            -moz-animation: wave 8s 0.1s infinite linear;
            animation: wave 8s 0.1s infinite linear;
            bottom: 140px;
            margin: 0px 0px;
            background-size: 40px 16px;
            height: 16px; }
        .wave.depth-10:after {
            height: 144px; }

        .rope.depth-10 {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            transform: scale(1);
            top: 20%; }
        .rope.depth-10 .hanger {
            -webkit-transform: scale(0.25);
            -moz-transform: scale(0.25);
            transform: scale(0.25); }

        .wave.depth-20 {
            -webkit-animation: wave 7.55556s 0.1s infinite linear;
            -moz-animation: wave 7.55556s 0.1s infinite linear;
            animation: wave 7.55556s 0.1s infinite linear;
            bottom: 120px;
            margin: 0px 0px;
            background-size: 80px 32px;
            height: 32px; }
        .wave.depth-20:after {
            height: 128px; }

        .rope.depth-20 {
            -webkit-transform: scale(1.02778);
            -moz-transform: scale(1.02778);
            transform: scale(1.02778);
            top: 16.66667%; }
        .rope.depth-20 .hanger {
            -webkit-transform: scale(0.27778);
            -moz-transform: scale(0.27778);
            transform: scale(0.27778); }

        .wave.depth-30 {
            -webkit-animation: wave 7.11111s 0.1s infinite linear;
            -moz-animation: wave 7.11111s 0.1s infinite linear;
            animation: wave 7.11111s 0.1s infinite linear;
            bottom: 100px;
            margin: 0px 0px;
            background-size: 120px 48px;
            height: 48px; }
        .wave.depth-30:after {
            height: 112px; }

        .rope.depth-30 {
            -webkit-transform: scale(1.05556);
            -moz-transform: scale(1.05556);
            transform: scale(1.05556);
            top: 13.33333%; }
        .rope.depth-30 .hanger {
            -webkit-transform: scale(0.30556);
            -moz-transform: scale(0.30556);
            transform: scale(0.30556); }

        .wave.depth-40 {
            -webkit-animation: wave 6.66667s 0.1s infinite linear;
            -moz-animation: wave 6.66667s 0.1s infinite linear;
            animation: wave 6.66667s 0.1s infinite linear;
            bottom: 80px;
            margin: 0px 0px;
            background-size: 160px 64px;
            height: 64px; }
        .wave.depth-40:after {
            height: 96px; }

        .rope.depth-40 {
            -webkit-transform: scale(1.08333);
            -moz-transform: scale(1.08333);
            transform: scale(1.08333);
            top: 10.0%; }
        .rope.depth-40 .hanger {
            -webkit-transform: scale(0.33333);
            -moz-transform: scale(0.33333);
            transform: scale(0.33333); }

        .wave.depth-50 {
            -webkit-animation: wave 6.22222s 0.1s infinite linear;
            -moz-animation: wave 6.22222s 0.1s infinite linear;
            animation: wave 6.22222s 0.1s infinite linear;
            bottom: 60px;
            margin: 0px 0px;
            background-size: 200px 80px;
            height: 80px; }
        .wave.depth-50:after {
            height: 80px; }

        .rope.depth-50 {
            -webkit-transform: scale(1.11111);
            -moz-transform: scale(1.11111);
            transform: scale(1.11111);
            top: 6.66667%; }
        .rope.depth-50 .hanger {
            -webkit-transform: scale(0.36111);
            -moz-transform: scale(0.36111);
            transform: scale(0.36111); }

        .wave.depth-60 {
            -webkit-animation: wave 5.77778s 0.1s infinite linear;
            -moz-animation: wave 5.77778s 0.1s infinite linear;
            animation: wave 5.77778s 0.1s infinite linear;
            bottom: 40px;
            margin: 0px 0px;
            background-size: 240px 96px;
            height: 96px; }
        .wave.depth-60:after {
            height: 64px; }

        .rope.depth-60 {
            -webkit-transform: scale(1.13889);
            -moz-transform: scale(1.13889);
            transform: scale(1.13889);
            top: 3.33333%; }
        .rope.depth-60 .hanger {
            -webkit-transform: scale(0.38889);
            -moz-transform: scale(0.38889);
            transform: scale(0.38889); }

        .wave.depth-70 {
            -webkit-animation: wave 5.33333s 0.1s infinite linear;
            -moz-animation: wave 5.33333s 0.1s infinite linear;
            animation: wave 5.33333s 0.1s infinite linear;
            bottom: 20px;
            margin: 0px 0px;
            background-size: 280px 112px;
            height: 112px; }
        .wave.depth-70:after {
            height: 48px; }

        .rope.depth-70 {
            -webkit-transform: scale(1.16667);
            -moz-transform: scale(1.16667);
            transform: scale(1.16667);
            top: 0.0%; }
        .rope.depth-70 .hanger {
            -webkit-transform: scale(0.41667);
            -moz-transform: scale(0.41667);
            transform: scale(0.41667); }

        .wave.depth-80 {
            -webkit-animation: wave 4.88889s 0.1s infinite linear;
            -moz-animation: wave 4.88889s 0.1s infinite linear;
            animation: wave 4.88889s 0.1s infinite linear;
            bottom: 0px;
            margin: 0px 0px;
            background-size: 320px 128px;
            height: 128px; }
        .wave.depth-80:after {
            height: 32px; }

        .rope.depth-80 {
            -webkit-transform: scale(1.19444);
            -moz-transform: scale(1.19444);
            transform: scale(1.19444);
            top: -3.33333%; }
        .rope.depth-80 .hanger {
            -webkit-transform: scale(0.44444);
            -moz-transform: scale(0.44444);
            transform: scale(0.44444); }

        .wave.depth-90 {
            -webkit-animation: wave 4.44444s 0.1s infinite linear;
            -moz-animation: wave 4.44444s 0.1s infinite linear;
            animation: wave 4.44444s 0.1s infinite linear;
            bottom: -20px;
            margin: 0px 0px;
            background-size: 360px 144px;
            height: 144px; }
        .wave.depth-90:after {
            height: 16px; }

        .rope.depth-90 {
            -webkit-transform: scale(1.22222);
            -moz-transform: scale(1.22222);
            transform: scale(1.22222);
            top: -6.66667%; }
        .rope.depth-90 .hanger {
            -webkit-transform: scale(0.47222);
            -moz-transform: scale(0.47222);
            transform: scale(0.47222); }

        .wave.depth-100 {
            -webkit-animation: wave 4s 0.1s infinite linear;
            -moz-animation: wave 4s 0.1s infinite linear;
            animation: wave 4s 0.1s infinite linear;
            bottom: -40px;
            margin: 0px 0px;
            background-size: 400px 160px;
            height: 160px; }
        .wave.depth-100:after {
            height: 0px; }

        .rope.depth-100 {
            -webkit-transform: scale(1.25);
            -moz-transform: scale(1.25);
            transform: scale(1.25);
            top: -10%; }
        .rope.depth-100 .hanger {
            -webkit-transform: scale(0.5);
            -moz-transform: scale(0.5);
            transform: scale(0.5); }

        @media all and (min-width: 400px) {
            html {
                font-size: 12px; }

            .wrapper {
                min-height: 360px; }

            .about .panel header:before {
                background-size: 66px 90px; }

            .toggle {
                bottom: 12%; }

            .prompt .panel img {
                width: 80px; }

            .scene {
                min-height: 360px; }

            .rope.depth-10 {
                top: 10%; }
            .rope.depth-10 .hanger {
                -webkit-transform: scale(0.3);
                -moz-transform: scale(0.3);
                transform: scale(0.3); }

            .rope.depth-20 {
                top: 6.11111%; }
            .rope.depth-20 .hanger {
                -webkit-transform: scale(0.33333);
                -moz-transform: scale(0.33333);
                transform: scale(0.33333); }

            .rope.depth-30 {
                top: 2.22222%; }
            .rope.depth-30 .hanger {
                -webkit-transform: scale(0.36667);
                -moz-transform: scale(0.36667);
                transform: scale(0.36667); }

            .rope.depth-40 {
                top: -1.66667%; }
            .rope.depth-40 .hanger {
                -webkit-transform: scale(0.4);
                -moz-transform: scale(0.4);
                transform: scale(0.4); }

            .rope.depth-50 {
                top: -5.55556%; }
            .rope.depth-50 .hanger {
                -webkit-transform: scale(0.43333);
                -moz-transform: scale(0.43333);
                transform: scale(0.43333); }

            .rope.depth-60 {
                top: -9.44444%; }
            .rope.depth-60 .hanger {
                -webkit-transform: scale(0.46667);
                -moz-transform: scale(0.46667);
                transform: scale(0.46667); }

            .rope.depth-70 {
                top: -13.33333%; }
            .rope.depth-70 .hanger {
                -webkit-transform: scale(0.5);
                -moz-transform: scale(0.5);
                transform: scale(0.5); }

            .rope.depth-80 {
                top: -17.22222%; }
            .rope.depth-80 .hanger {
                -webkit-transform: scale(0.53333);
                -moz-transform: scale(0.53333);
                transform: scale(0.53333); }

            .rope.depth-90 {
                top: -21.11111%; }
            .rope.depth-90 .hanger {
                -webkit-transform: scale(0.56667);
                -moz-transform: scale(0.56667);
                transform: scale(0.56667); }

            .rope.depth-100 {
                top: -25%; }
            .rope.depth-100 .hanger {
                -webkit-transform: scale(0.6);
                -moz-transform: scale(0.6);
                transform: scale(0.6); } }
        @media all and (min-width: 600px) {
            html {
                font-size: 15px; }

            button {
                -webkit-border-radius: 28px;
                -moz-border-radius: 28px;
                border-radius: 28px;
                -webkit-background-clip: padding-box;
                -moz-background-clip: padding-box;
                background-clip: padding-box;
                height: 56px;
                width: 56px; }

            footer .fb-like {
                position: static;
                bottom: auto;
                right: auto; }

            .center {
                max-width: 440px; }

            .about .panel:after {
                background-size: 252px 252px;
                height: 180px;
                width: 140px; }
            .about .panel header:before {
                background-size: 82.5px 112.5px; }

            .prompt {
                overflow: visible;
                display: block;
                width: 0; }
            .prompt.hide .panel {
                -webkit-transform: translate3d(0,50%,400px) rotateX(90deg);
                -moz-transform: translate3d(0,50%,400px) rotateX(90deg);
                transform: translate3d(0,50%,400px) rotateX(90deg); }
            .prompt .cell {
                position: absolute;
                display: block;
                bottom: 25px;
                left: 25px; }
            .prompt .dismiss {
                right: 0px;
                top: 0px; }
            .prompt .panel {
                -webkit-transition: all 1.2s cubic-bezier(0.77, 0, 0.175, 1);
                -moz-transition: all 1.2s cubic-bezier(0.77, 0, 0.175, 1);
                transition: all 1.2s cubic-bezier(0.77, 0, 0.175, 1);
                -webkit-transform-origin: 50% 100%;
                -moz-transform-origin: 50% 100%;
                transform-origin: 50% 100%;
                padding: 1em 0 0.8em;
                width: 220px; }
            .prompt .panel img {
                margin: 0.4em auto 0.6em;
                width: 80px; }
            .prompt .panel h2 {
                font-size: 1.6em; }
            .prompt .panel p {
                font-size: 0.93333em;
                margin: 0 10% 1.3em;
                line-height: 1.3em; }

            .toggle {
                margin: -28px;
                bottom: 15%; }

            .title {
                font-size: 3.46667em; }

            .background {
                bottom: 96px; }

            .lighthouse {
                margin: 0px -96px;
                background-size: 192px 336px;
                height: 336px;
                width: 192px;
                bottom: 128px; }

            .light {
                margin: -140px -140px;
                background-size: 280px 280px;
                height: 280px;
                width: 280px; }
            .light.a {
                bottom: 144px; }
            .light.b {
                bottom: 144px; }
            .light.c {
                bottom: 192px; }
            .light.d {
                bottom: 160px; }
            .light.e {
                bottom: 192px; }
            .light.f {
                bottom: 128px; }

            .wave.depth-10 {
                bottom: 210px;
                margin: 0px 0px;
                background-size: 60px 24px;
                height: 24px; }
            .wave.depth-10:after {
                height: 216px; }

            .rope.depth-10 {
                top: 20%; }
            .rope.depth-10 .hanger {
                -webkit-transform: scale(0.5);
                -moz-transform: scale(0.5);
                transform: scale(0.5); }

            .wave.depth-20 {
                bottom: 180px;
                margin: 0px 0px;
                background-size: 120px 48px;
                height: 48px; }
            .wave.depth-20:after {
                height: 192px; }

            .rope.depth-20 {
                top: 16.66667%; }
            .rope.depth-20 .hanger {
                -webkit-transform: scale(0.55556);
                -moz-transform: scale(0.55556);
                transform: scale(0.55556); }

            .wave.depth-30 {
                bottom: 150px;
                margin: 0px 0px;
                background-size: 180px 72px;
                height: 72px; }
            .wave.depth-30:after {
                height: 168px; }

            .rope.depth-30 {
                top: 13.33333%; }
            .rope.depth-30 .hanger {
                -webkit-transform: scale(0.61111);
                -moz-transform: scale(0.61111);
                transform: scale(0.61111); }

            .wave.depth-40 {
                bottom: 120px;
                margin: 0px 0px;
                background-size: 240px 96px;
                height: 96px; }
            .wave.depth-40:after {
                height: 144px; }

            .rope.depth-40 {
                top: 10.0%; }
            .rope.depth-40 .hanger {
                -webkit-transform: scale(0.66667);
                -moz-transform: scale(0.66667);
                transform: scale(0.66667); }

            .wave.depth-50 {
                bottom: 90px;
                margin: 0px 0px;
                background-size: 300px 120px;
                height: 120px; }
            .wave.depth-50:after {
                height: 120px; }

            .rope.depth-50 {
                top: 6.66667%; }
            .rope.depth-50 .hanger {
                -webkit-transform: scale(0.72222);
                -moz-transform: scale(0.72222);
                transform: scale(0.72222); }

            .wave.depth-60 {
                bottom: 60px;
                margin: 0px 0px;
                background-size: 360px 144px;
                height: 144px; }
            .wave.depth-60:after {
                height: 96px; }

            .rope.depth-60 {
                top: 3.33333%; }
            .rope.depth-60 .hanger {
                -webkit-transform: scale(0.77778);
                -moz-transform: scale(0.77778);
                transform: scale(0.77778); }

            .wave.depth-70 {
                bottom: 30px;
                margin: 0px 0px;
                background-size: 420px 168px;
                height: 168px; }
            .wave.depth-70:after {
                height: 72px; }

            .rope.depth-70 {
                top: 0.0%; }
            .rope.depth-70 .hanger {
                -webkit-transform: scale(0.83333);
                -moz-transform: scale(0.83333);
                transform: scale(0.83333); }

            .wave.depth-80 {
                bottom: 0px;
                margin: 0px 0px;
                background-size: 480px 192px;
                height: 192px; }
            .wave.depth-80:after {
                height: 48px; }

            .rope.depth-80 {
                top: -3.33333%; }
            .rope.depth-80 .hanger {
                -webkit-transform: scale(0.88889);
                -moz-transform: scale(0.88889);
                transform: scale(0.88889); }

            .wave.depth-90 {
                bottom: -30px;
                margin: 0px 0px;
                background-size: 540px 216px;
                height: 216px; }
            .wave.depth-90:after {
                height: 24px; }

            .rope.depth-90 {
                top: -6.66667%; }
            .rope.depth-90 .hanger {
                -webkit-transform: scale(0.94444);
                -moz-transform: scale(0.94444);
                transform: scale(0.94444); }

            .wave.depth-100 {
                bottom: -60px;
                margin: 0px 0px;
                background-size: 600px 240px;
                height: 240px; }
            .wave.depth-100:after {
                height: 0px; }

            .rope.depth-100 {
                top: -10%; }
            .rope.depth-100 .hanger {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                transform: scale(1); } }
        @media all and (min-width: 900px) {
            html {
                font-size: 15px; }

            .center {
                max-width: 560px; }

            .about .panel:after {
                background-size: 280px 280px;
                height: 200px;
                width: 160px; }
            .about .panel header:before {
                background-size: 82.5px 112.5px; }
            .about .panel .links a {
                padding: 1.2em 0 1.3em; }

            .toggle {
                margin: -28px;
                bottom: 12%; }

            .title {
                font-size: 3.46667em; }

            .background {
                bottom: 160px; }

            .lighthouse {
                margin: 0px -104px;
                background-size: 208px 364px;
                height: 364px;
                width: 208px;
                bottom: 128px; }

            .light {
                margin: -160px -160px;
                background-size: 320px 320px;
                height: 320px;
                width: 320px; }
            .light.a {
                bottom: 112px;
                left: 15%; }
            .light.b {
                bottom: 160px; }
            .light.c {
                bottom: 208px; }
            .light.d {
                bottom: 176px; }
            .light.e {
                bottom: 208px; }
            .light.f {
                bottom: 128px;
                left: 85%; }

            .wave.depth-10 {
                bottom: 238px;
                margin: 0px 0px;
                background-size: 68px 27.2px;
                height: 27px; }
            .wave.depth-10:after {
                height: 244.8px; }

            .rope.depth-10 {
                top: 10%; }
            .rope.depth-10 .hanger {
                -webkit-transform: scale(0.5);
                -moz-transform: scale(0.5);
                transform: scale(0.5); }

            .wave.depth-20 {
                bottom: 204px;
                margin: 0px 0px;
                background-size: 136px 54.4px;
                height: 54px; }
            .wave.depth-20:after {
                height: 217.6px; }

            .rope.depth-20 {
                top: 6.66667%; }
            .rope.depth-20 .hanger {
                -webkit-transform: scale(0.56111);
                -moz-transform: scale(0.56111);
                transform: scale(0.56111); }

            .wave.depth-30 {
                bottom: 170px;
                margin: 0px 0px;
                background-size: 204px 81.6px;
                height: 82px; }
            .wave.depth-30:after {
                height: 190.4px; }

            .rope.depth-30 {
                top: 3.33333%; }
            .rope.depth-30 .hanger {
                -webkit-transform: scale(0.62222);
                -moz-transform: scale(0.62222);
                transform: scale(0.62222); }

            .wave.depth-40 {
                bottom: 136px;
                margin: 0px 0px;
                background-size: 272px 108.8px;
                height: 109px; }
            .wave.depth-40:after {
                height: 163.2px; }

            .rope.depth-40 {
                top: 0.0%; }
            .rope.depth-40 .hanger {
                -webkit-transform: scale(0.68333);
                -moz-transform: scale(0.68333);
                transform: scale(0.68333); }

            .wave.depth-50 {
                bottom: 102px;
                margin: 0px 0px;
                background-size: 340px 136px;
                height: 136px; }
            .wave.depth-50:after {
                height: 136px; }

            .rope.depth-50 {
                top: -3.33333%; }
            .rope.depth-50 .hanger {
                -webkit-transform: scale(0.74444);
                -moz-transform: scale(0.74444);
                transform: scale(0.74444); }

            .wave.depth-60 {
                bottom: 68px;
                margin: 0px 0px;
                background-size: 408px 163.2px;
                height: 163px; }
            .wave.depth-60:after {
                height: 108.8px; }

            .rope.depth-60 {
                top: -6.66667%; }
            .rope.depth-60 .hanger {
                -webkit-transform: scale(0.80556);
                -moz-transform: scale(0.80556);
                transform: scale(0.80556); }

            .wave.depth-70 {
                bottom: 34px;
                margin: 0px 0px;
                background-size: 476.0px 190.4px;
                height: 190px; }
            .wave.depth-70:after {
                height: 81.6px; }

            .rope.depth-70 {
                top: -10.0%; }
            .rope.depth-70 .hanger {
                -webkit-transform: scale(0.86667);
                -moz-transform: scale(0.86667);
                transform: scale(0.86667); }

            .wave.depth-80 {
                bottom: 0px;
                margin: 0px 0px;
                background-size: 544px 217.6px;
                height: 218px; }
            .wave.depth-80:after {
                height: 54.4px; }

            .rope.depth-80 {
                top: -13.33333%; }
            .rope.depth-80 .hanger {
                -webkit-transform: scale(0.92778);
                -moz-transform: scale(0.92778);
                transform: scale(0.92778); }

            .wave.depth-90 {
                bottom: -34px;
                margin: 0px 0px;
                background-size: 612px 244.8px;
                height: 245px; }
            .wave.depth-90:after {
                height: 27.2px; }

            .rope.depth-90 {
                top: -16.66667%; }
            .rope.depth-90 .hanger {
                -webkit-transform: scale(0.98889);
                -moz-transform: scale(0.98889);
                transform: scale(0.98889); }

            .wave.depth-100 {
                bottom: -68px;
                margin: 0px 0px;
                background-size: 680px 272px;
                height: 272px; }
            .wave.depth-100:after {
                height: 0px; }

            .rope.depth-100 {
                top: -20%; }
            .rope.depth-100 .hanger {
                -webkit-transform: scale(1.05);
                -moz-transform: scale(1.05);
                transform: scale(1.05); } }
        @media all and (min-width: 1200px) {
            html {
                font-size: 16px; }

            .center {
                max-width: 620px; }

            .about .panel:after {
                background-size: 280px 280px;
                height: 200px;
                width: 170px; }
            .about .panel header:before {
                background-size: 93.5px 127.5px; }

            .prompt .panel {
                width: 240px; }

            .lighthouse {
                margin: 0px -112px;
                background-size: 224px 392px;
                height: 392px;
                width: 224px; }

            .light {
                margin: -200px -200px;
                background-size: 400px 400px;
                height: 400px;
                width: 400px; }

            .wave.depth-10 {
                bottom: 252px;
                margin: 0px 0px;
                background-size: 72px 28.8px;
                height: 29px; }
            .wave.depth-10:after {
                height: 259.2px; }

            .rope.depth-10 {
                top: 5%; }
            .rope.depth-10 .hanger {
                -webkit-transform: scale(0.6);
                -moz-transform: scale(0.6);
                transform: scale(0.6); }

            .wave.depth-20 {
                bottom: 216px;
                margin: 0px 0px;
                background-size: 144px 57.6px;
                height: 58px; }
            .wave.depth-20:after {
                height: 230.4px; }

            .rope.depth-20 {
                top: 1.66667%; }
            .rope.depth-20 .hanger {
                -webkit-transform: scale(0.67778);
                -moz-transform: scale(0.67778);
                transform: scale(0.67778); }

            .wave.depth-30 {
                bottom: 180px;
                margin: 0px 0px;
                background-size: 216px 86.4px;
                height: 86px; }
            .wave.depth-30:after {
                height: 201.6px; }

            .rope.depth-30 {
                top: -1.66667%; }
            .rope.depth-30 .hanger {
                -webkit-transform: scale(0.75556);
                -moz-transform: scale(0.75556);
                transform: scale(0.75556); }

            .wave.depth-40 {
                bottom: 144px;
                margin: 0px 0px;
                background-size: 288px 115.2px;
                height: 115px; }
            .wave.depth-40:after {
                height: 172.8px; }

            .rope.depth-40 {
                top: -5.0%; }
            .rope.depth-40 .hanger {
                -webkit-transform: scale(0.83333);
                -moz-transform: scale(0.83333);
                transform: scale(0.83333); }

            .wave.depth-50 {
                bottom: 108px;
                margin: 0px 0px;
                background-size: 360px 144px;
                height: 144px; }
            .wave.depth-50:after {
                height: 144px; }

            .rope.depth-50 {
                top: -8.33333%; }
            .rope.depth-50 .hanger {
                -webkit-transform: scale(0.91111);
                -moz-transform: scale(0.91111);
                transform: scale(0.91111); }

            .wave.depth-60 {
                bottom: 72px;
                margin: 0px 0px;
                background-size: 432px 172.8px;
                height: 173px; }
            .wave.depth-60:after {
                height: 115.2px; }

            .rope.depth-60 {
                top: -11.66667%; }
            .rope.depth-60 .hanger {
                -webkit-transform: scale(0.98889);
                -moz-transform: scale(0.98889);
                transform: scale(0.98889); }

            .wave.depth-70 {
                bottom: 36px;
                margin: 0px 0px;
                background-size: 504.0px 201.6px;
                height: 202px; }
            .wave.depth-70:after {
                height: 86.4px; }

            .rope.depth-70 {
                top: -15.0%; }
            .rope.depth-70 .hanger {
                -webkit-transform: scale(1.06667);
                -moz-transform: scale(1.06667);
                transform: scale(1.06667); }

            .wave.depth-80 {
                bottom: 0px;
                margin: 0px 0px;
                background-size: 576px 230.4px;
                height: 230px; }
            .wave.depth-80:after {
                height: 57.6px; }

            .rope.depth-80 {
                top: -18.33333%; }
            .rope.depth-80 .hanger {
                -webkit-transform: scale(1.14444);
                -moz-transform: scale(1.14444);
                transform: scale(1.14444); }

            .wave.depth-90 {
                bottom: -36px;
                margin: 0px 0px;
                background-size: 648px 259.2px;
                height: 259px; }
            .wave.depth-90:after {
                height: 28.8px; }

            .rope.depth-90 {
                top: -21.66667%; }
            .rope.depth-90 .hanger {
                -webkit-transform: scale(1.22222);
                -moz-transform: scale(1.22222);
                transform: scale(1.22222); }

            .wave.depth-100 {
                bottom: -72px;
                margin: 0px 0px;
                background-size: 720px 288px;
                height: 288px; }
            .wave.depth-100:after {
                height: 0px; }

            .rope.depth-100 {
                top: -25%; }
            .rope.depth-100 .hanger {
                -webkit-transform: scale(1.3);
                -moz-transform: scale(1.3);
                transform: scale(1.3); } }
        a, button {
            -webkit-transition: color 0.6s cubic-bezier(0.165, 0.84, 0.44, 1), background-color 0.6s cubic-bezier(0.165, 0.84, 0.44, 1), opacity 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
            -moz-transition: color 0.6s cubic-bezier(0.165, 0.84, 0.44, 1), background-color 0.6s cubic-bezier(0.165, 0.84, 0.44, 1), opacity 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
            transition: color 0.6s cubic-bezier(0.165, 0.84, 0.44, 1), background-color 0.6s cubic-bezier(0.165, 0.84, 0.44, 1), opacity 0.6s cubic-bezier(0.165, 0.84, 0.44, 1); }

        .cross, .x, .y {
            -webkit-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
            -moz-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1); }

        .about .panel,
        .about .cables {
            -webkit-transition: all 0.8s cubic-bezier(0.77, 0, 0.175, 1);
            -moz-transition: all 0.8s cubic-bezier(0.77, 0, 0.175, 1);
            transition: all 0.8s cubic-bezier(0.77, 0, 0.175, 1); }

        @-webkit-keyframes phase {
            0% {
                opacity: 1; }

            25% {
                opacity: 0.4; }

            50% {
                opacity: 0.8; }

            75% {
                opacity: 0.4; }

            100% {
                opacity: 1; } }

        @-moz-keyframes phase {
            0% {
                opacity: 1; }

            25% {
                opacity: 0.4; }

            50% {
                opacity: 0.8; }

            75% {
                opacity: 0.4; }

            100% {
                opacity: 1; } }

        @-ms-keyframes phase {
            0% {
                opacity: 1; }

            25% {
                opacity: 0.4; }

            50% {
                opacity: 0.8; }

            75% {
                opacity: 0.4; }

            100% {
                opacity: 1; } }

        @keyframes phase {
            0% {
                opacity: 1; }

            25% {
                opacity: 0.4; }

            50% {
                opacity: 0.8; }

            75% {
                opacity: 0.4; }

            100% {
                opacity: 1; } }

        @-webkit-keyframes tilt {
            0% {
                -webkit-transform: rotateX(-30deg);
                -moz-transform: rotateX(-30deg);
                transform: rotateX(-30deg); }

            25% {
                -webkit-transform: rotateX( 30deg);
                -moz-transform: rotateX( 30deg);
                transform: rotateX( 30deg); }

            50% {
                -webkit-transform: rotateY(-30deg);
                -moz-transform: rotateY(-30deg);
                transform: rotateY(-30deg); }

            75% {
                -webkit-transform: rotateY( 30deg);
                -moz-transform: rotateY( 30deg);
                transform: rotateY( 30deg); }

            100% {
                -webkit-transform: rotateZ( 20deg);
                -moz-transform: rotateZ( 20deg);
                transform: rotateZ( 20deg); } }

        @-moz-keyframes tilt {
            0% {
                -webkit-transform: rotateX(-30deg);
                -moz-transform: rotateX(-30deg);
                transform: rotateX(-30deg); }

            25% {
                -webkit-transform: rotateX( 30deg);
                -moz-transform: rotateX( 30deg);
                transform: rotateX( 30deg); }

            50% {
                -webkit-transform: rotateY(-30deg);
                -moz-transform: rotateY(-30deg);
                transform: rotateY(-30deg); }

            75% {
                -webkit-transform: rotateY( 30deg);
                -moz-transform: rotateY( 30deg);
                transform: rotateY( 30deg); }

            100% {
                -webkit-transform: rotateZ( 20deg);
                -moz-transform: rotateZ( 20deg);
                transform: rotateZ( 20deg); } }

        @-ms-keyframes tilt {
            0% {
                -webkit-transform: rotateX(-30deg);
                -moz-transform: rotateX(-30deg);
                transform: rotateX(-30deg); }

            25% {
                -webkit-transform: rotateX( 30deg);
                -moz-transform: rotateX( 30deg);
                transform: rotateX( 30deg); }

            50% {
                -webkit-transform: rotateY(-30deg);
                -moz-transform: rotateY(-30deg);
                transform: rotateY(-30deg); }

            75% {
                -webkit-transform: rotateY( 30deg);
                -moz-transform: rotateY( 30deg);
                transform: rotateY( 30deg); }

            100% {
                -webkit-transform: rotateZ( 20deg);
                -moz-transform: rotateZ( 20deg);
                transform: rotateZ( 20deg); } }

        @keyframes tilt {
            0% {
                -webkit-transform: rotateX(-30deg);
                -moz-transform: rotateX(-30deg);
                transform: rotateX(-30deg); }

            25% {
                -webkit-transform: rotateX( 30deg);
                -moz-transform: rotateX( 30deg);
                transform: rotateX( 30deg); }

            50% {
                -webkit-transform: rotateY(-30deg);
                -moz-transform: rotateY(-30deg);
                transform: rotateY(-30deg); }

            75% {
                -webkit-transform: rotateY( 30deg);
                -moz-transform: rotateY( 30deg);
                transform: rotateY( 30deg); }

            100% {
                -webkit-transform: rotateZ( 20deg);
                -moz-transform: rotateZ( 20deg);
                transform: rotateZ( 20deg); } }

        @-webkit-keyframes wave {
            0% {
                -webkit-transform: rotateZ(0deg) translate3d(0,10%,0) rotateZ(0deg);
                -moz-transform: rotateZ(0deg) translate3d(0,10%,0) rotateZ(0deg);
                transform: rotateZ(0deg) translate3d(0,10%,0) rotateZ(0deg); }

            100% {
                -webkit-transform: rotateZ(360deg) translate3d(0,10%,0) rotateZ(-360deg);
                -moz-transform: rotateZ(360deg) translate3d(0,10%,0) rotateZ(-360deg);
                transform: rotateZ(360deg) translate3d(0,10%,0) rotateZ(-360deg); } }

        @-moz-keyframes wave {
            0% {
                -webkit-transform: rotateZ(0deg) translate3d(0,10%,0) rotateZ(0deg);
                -moz-transform: rotateZ(0deg) translate3d(0,10%,0) rotateZ(0deg);
                transform: rotateZ(0deg) translate3d(0,10%,0) rotateZ(0deg); }

            100% {
                -webkit-transform: rotateZ(360deg) translate3d(0,10%,0) rotateZ(-360deg);
                -moz-transform: rotateZ(360deg) translate3d(0,10%,0) rotateZ(-360deg);
                transform: rotateZ(360deg) translate3d(0,10%,0) rotateZ(-360deg); } }

        @-ms-keyframes wave {
            0% {
                -webkit-transform: rotateZ(0deg) translate3d(0,10%,0) rotateZ(0deg);
                -moz-transform: rotateZ(0deg) translate3d(0,10%,0) rotateZ(0deg);
                transform: rotateZ(0deg) translate3d(0,10%,0) rotateZ(0deg); }

            100% {
                -webkit-transform: rotateZ(360deg) translate3d(0,10%,0) rotateZ(-360deg);
                -moz-transform: rotateZ(360deg) translate3d(0,10%,0) rotateZ(-360deg);
                transform: rotateZ(360deg) translate3d(0,10%,0) rotateZ(-360deg); } }

        @keyframes wave {
            0% {
                -webkit-transform: rotateZ(0deg) translate3d(0,10%,0) rotateZ(0deg);
                -moz-transform: rotateZ(0deg) translate3d(0,10%,0) rotateZ(0deg);
                transform: rotateZ(0deg) translate3d(0,10%,0) rotateZ(0deg); }

            100% {
                -webkit-transform: rotateZ(360deg) translate3d(0,10%,0) rotateZ(-360deg);
                -moz-transform: rotateZ(360deg) translate3d(0,10%,0) rotateZ(-360deg);
                transform: rotateZ(360deg) translate3d(0,10%,0) rotateZ(-360deg); } }

        @-webkit-keyframes lighthouse {
            0% {
                -webkit-transform: translate3d(15%,0,0) rotateZ(10deg);
                -moz-transform: translate3d(15%,0,0) rotateZ(10deg);
                transform: translate3d(15%,0,0) rotateZ(10deg); }

            100% {
                -webkit-transform: translate3d(-15%,0,0) rotateZ(-10deg);
                -moz-transform: translate3d(-15%,0,0) rotateZ(-10deg);
                transform: translate3d(-15%,0,0) rotateZ(-10deg); } }

        @-moz-keyframes lighthouse {
            0% {
                -webkit-transform: translate3d(15%,0,0) rotateZ(10deg);
                -moz-transform: translate3d(15%,0,0) rotateZ(10deg);
                transform: translate3d(15%,0,0) rotateZ(10deg); }

            100% {
                -webkit-transform: translate3d(-15%,0,0) rotateZ(-10deg);
                -moz-transform: translate3d(-15%,0,0) rotateZ(-10deg);
                transform: translate3d(-15%,0,0) rotateZ(-10deg); } }

        @-ms-keyframes lighthouse {
            0% {
                -webkit-transform: translate3d(15%,0,0) rotateZ(10deg);
                -moz-transform: translate3d(15%,0,0) rotateZ(10deg);
                transform: translate3d(15%,0,0) rotateZ(10deg); }

            100% {
                -webkit-transform: translate3d(-15%,0,0) rotateZ(-10deg);
                -moz-transform: translate3d(-15%,0,0) rotateZ(-10deg);
                transform: translate3d(-15%,0,0) rotateZ(-10deg); } }

        @keyframes lighthouse {
            0% {
                -webkit-transform: translate3d(15%,0,0) rotateZ(10deg);
                -moz-transform: translate3d(15%,0,0) rotateZ(10deg);
                transform: translate3d(15%,0,0) rotateZ(10deg); }

            100% {
                -webkit-transform: translate3d(-15%,0,0) rotateZ(-10deg);
                -moz-transform: translate3d(-15%,0,0) rotateZ(-10deg);
                transform: translate3d(-15%,0,0) rotateZ(-10deg); } }

        @-webkit-keyframes swing {
            0% {
                -webkit-transform: rotateZ(10deg);
                -moz-transform: rotateZ(10deg);
                transform: rotateZ(10deg); }

            100% {
                -webkit-transform: rotateZ(-10deg);
                -moz-transform: rotateZ(-10deg);
                transform: rotateZ(-10deg); } }

        @-moz-keyframes swing {
            0% {
                -webkit-transform: rotateZ(10deg);
                -moz-transform: rotateZ(10deg);
                transform: rotateZ(10deg); }

            100% {
                -webkit-transform: rotateZ(-10deg);
                -moz-transform: rotateZ(-10deg);
                transform: rotateZ(-10deg); } }

        @-ms-keyframes swing {
            0% {
                -webkit-transform: rotateZ(10deg);
                -moz-transform: rotateZ(10deg);
                transform: rotateZ(10deg); }

            100% {
                -webkit-transform: rotateZ(-10deg);
                -moz-transform: rotateZ(-10deg);
                transform: rotateZ(-10deg); } }

        @keyframes swing {
            0% {
                -webkit-transform: rotateZ(10deg);
                -moz-transform: rotateZ(10deg);
                transform: rotateZ(10deg); }

            100% {
                -webkit-transform: rotateZ(-10deg);
                -moz-transform: rotateZ(-10deg);
                transform: rotateZ(-10deg); } }


    </style>
</head>

<body>

<!-- project url https://github.com/wagerfield/parallax/</br> -->
<!-- full demo https://wagerfield.github.io/parallax/ -->
<html class="mouse">
<body>
<div id="container" class="wrapper">
    <ul id="scene" class="scene unselectable" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15" style="width: 1680px; height: 569px; -webkit-transform: translate3d(0, 0, 0); -webkit-transform-style: preserve-3d; -webkit-backface-visibility: hidden;">
        <li class="layer" data-depth="0.00" style="position: relative; display: block; height: 100%; width: 100%; left: 0px; top: 0px; -webkit-transform: translate3d(0%, 0%, 0px); -webkit-transform-style: preserve-3d; -webkit-backface-visibility: hidden;"></li>
        <li class="layer" data-depth="0.10" style="position: absolute; display: block; height: 100%; width: 100%; left: 0px; top: 0px; -webkit-transform: translate3d(0.29761904761904784%, -1.4893992932862183%, 0px); -webkit-transform-style: preserve-3d; -webkit-backface-visibility: hidden;"><div class="background"></div></li>
        <li class="layer" data-depth="0.10" style="position: absolute; display: block; height: 100%; width: 100%; left: 0px; top: 0px; -webkit-transform: translate3d(0.29761904761904784%, -1.4893992932862183%, 0px); -webkit-transform-style: preserve-3d; -webkit-backface-visibility: hidden;"><div class="light orange b phase-4"></div></li>
        <li class="layer" data-depth="0.10" style="position: absolute; display: block; height: 100%; width: 100%; left: 0px; top: 0px; -webkit-transform: translate3d(0.29761904761904784%, -1.4893992932862183%, 0px); -webkit-transform-style: preserve-3d; -webkit-backface-visibility: hidden;"><div class="light purple c phase-5"></div></li>
        <li class="layer" data-depth="0.10" style="position: absolute; display: block; height: 100%; width: 100%; left: 0px; top: 0px; -webkit-transform: translate3d(0.29761904761904784%, -1.4893992932862183%, 0px); -webkit-transform-style: preserve-3d; -webkit-backface-visibility: hidden;"><div class="light orange d phase-3"></div></li>
        <li class="layer" data-depth="0.15" style="position: absolute; display: block; height: 100%; width: 100%; left: 0px; top: 0px; -webkit-transform: translate3d(0.4464285714285717%, -2.234098939929327%, 0px); -webkit-transform-style: preserve-3d; -webkit-backface-visibility: hidden;">
            <ul class="rope depth-10">
                <li><img src="https://wagerfield.github.io/parallax/assets/images/rope.png" alt="Rope"/></li>
                <li class="hanger position-2">
                    <div class="board cloud-2 swing-1"></div>
                </li>
                <li class="hanger position-4">
                    <div class="board cloud-1 swing-3"></div>
                </li>
                <li class="hanger position-8">
                    <div class="board birds swing-5"></div>
                </li>
            </ul>
        </li>
        <li class="layer" data-depth="0.20" style="position: absolute; display: block; height: 100%; width: 100%; left: 0px; top: 0px; -webkit-transform: translate3d(0.5952380952380957%, -2.9787985865724367%, 0px); -webkit-transform-style: preserve-3d; -webkit-backface-visibility: hidden;"><h1 class="title">parallax<em>.js</em></h1></li>
        <li class="layer" data-depth="0.30" style="position: absolute; display: block; height: 100%; width: 100%; left: 0px; top: 0px; -webkit-transform: translate3d(0.8928571428571433%, -4.468197879858654%, 0px); -webkit-transform-style: preserve-3d; -webkit-backface-visibility: hidden;">
            <ul class="rope depth-30">
                <li><img src="https://wagerfield.github.io/parallax/assets/images/rope.png" alt="Rope"/></li>
                <li class="hanger position-1">
                    <div class="board cloud-1 swing-3"></div>
                </li>
                <li class="hanger position-5">
                    <div class="board cloud-4 swing-1"></div>
                </li>
            </ul>
        </li>
        <li class="layer" data-depth="0.30" style="position: absolute; display: block; height: 100%; width: 100%; left: 0px; top: 0px; -webkit-transform: translate3d(0.8928571428571433%, -4.468197879858654%, 0px); -webkit-transform-style: preserve-3d; -webkit-backface-visibility: hidden;"><div class="wave paint depth-30"></div></li>
        <li class="layer" data-depth="0.60" style="position: absolute; display: block; height: 100%; width: 100%; left: 0px; top: 0px; -webkit-transform: translate3d(1.1904761904761914%, -5.957597173144873%, 0px); -webkit-transform-style: preserve-3d; -webkit-backface-visibility: hidden;"><div class="wave plain depth-40"></div></li>
        <li class="layer" data-depth="0.50" style="position: absolute; display: block; height: 100%; width: 100%; left: 0px; top: 0px; -webkit-transform: translate3d(1.488095238095239%, -7.4469964664310915%, 0px); -webkit-transform-style: preserve-3d; -webkit-backface-visibility: hidden;"><div class="wave paint depth-50"></div></li>
        <li class="layer" data-depth="0.60" style="position: absolute; display: block; height: 100%; width: 100%; left: 0px; top: 0px; -webkit-transform: translate3d(1.7857142857142867%, -8.936395759717309%, 0px); -webkit-transform-style: preserve-3d; -webkit-backface-visibility: hidden;"><div class="lighthouse depth-60"></div></li>
        <li class="layer" data-depth="0.60" style="position: absolute; display: block; height: 100%; width: 100%; left: 0px; top: 0px; -webkit-transform: translate3d(1.7857142857142867%, -8.936395759717309%, 0px); -webkit-transform-style: preserve-3d; -webkit-backface-visibility: hidden;">
            <ul class="rope depth-60">
                <li><img src="https://wagerfield.github.io/parallax/assets/images/rope.png" alt="Rope"/></li>
                <li class="hanger position-3">
                    <div class="board birds swing-5"></div>
                </li>
                <li class="hanger position-6">
                    <div class="board cloud-2 swing-2"></div>
                </li>
                <li class="hanger position-8">
                    <div class="board cloud-3 swing-4"></div>
                </li>
            </ul>
        </li>
        <li class="layer" data-depth="0.60" style="position: absolute; display: block; height: 100%; width: 100%; left: 0px; top: 0px; -webkit-transform: translate3d(1.7857142857142867%, -8.936395759717309%, 0px); -webkit-transform-style: preserve-3d; -webkit-backface-visibility: hidden;"><div class="wave plain depth-60"></div></li>
        <li class="layer" data-depth="0.80" style="position: absolute; display: block; height: 100%; width: 100%; left: 0px; top: 0px; -webkit-transform: translate3d(2.3809523809523827%, -11.915194346289747%, 0px); -webkit-transform-style: preserve-3d; -webkit-backface-visibility: hidden;"><div class="wave plain depth-80"></div></li>
        <li class="layer" data-depth="1.00" style="position: absolute; display: block; height: 100%; width: 100%; left: 0px; top: 0px; -webkit-transform: translate3d(2.976190476190478%, -14.893992932862183%, 0px); -webkit-transform-style: preserve-3d; -webkit-backface-visibility: hidden;"><div class="wave paint depth-100"></div></li>
    </ul>
</div>
</body>
</html>
<script>
    //project url https://github.com/wagerfield/parallax/
    //full demo https://wagerfield.github.io/parallax/

    // Pretty simple huh?
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);

    //============================================================
    //
    // The MIT License
    //
    // Copyright (C) 2013 Matthew Wagerfield - @mwagerfield
    //
    // Permission is hereby granted, free of charge, to any
    // person obtaining a copy of this software and associated
    // documentation files (the "Software"), to deal in the
    // Software without restriction, including without limitation
    // the rights to use, copy, modify, merge, publish, distribute,
    // sublicense, and/or sell copies of the Software, and to
    // permit persons to whom the Software is furnished to do
    // so, subject to the following conditions:
    //
    // The above copyright notice and this permission notice
    // shall be included in all copies or substantial portions
    // of the Software.
    //
    // THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY
    // OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT
    // LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
    // FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO
    // EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE
    // FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN
    // AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
    // OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE
    // OR OTHER DEALINGS IN THE SOFTWARE.
    //
    //============================================================

    /**
     * Parallax.js
     * @author Matthew Wagerfield - @mwagerfield
     * @description Creates a parallax effect between an array of layers,
     *              driving the motion from the gyroscope output of a smartdevice.
     *              If no gyroscope is available, the cursor position is used.
     */
    ;(function(window, document, undefined) {

        var NAME = 'Parallax';
        var MAGIC_NUMBER = 30;
        var DEFAULTS = {
            calibrationThreshold: 100,
            calibrationDelay: 500,
            supportDelay: 500,
            calibrateX: false,
            calibrateY: true,
            invertX: true,
            invertY: true,
            limitX: false,
            limitY: false,
            scalarX: 10.0,
            scalarY: 10.0,
            frictionX: 0.1,
            frictionY: 0.1
        };

        function Parallax(element, options) {

            // DOM Context
            this.element = element;
            this.layers = element.getElementsByClassName('layer');

            // Data Extraction
            var data = {
                calibrateX: this.data(this.element, 'calibrate-x'),
                calibrateY: this.data(this.element, 'calibrate-y'),
                invertX: this.data(this.element, 'invert-x'),
                invertY: this.data(this.element, 'invert-y'),
                limitX: this.data(this.element, 'limit-x'),
                limitY: this.data(this.element, 'limit-y'),
                scalarX: this.data(this.element, 'scalar-x'),
                scalarY: this.data(this.element, 'scalar-y'),
                frictionX: this.data(this.element, 'friction-x'),
                frictionY: this.data(this.element, 'friction-y')
            };

            // Delete Null Data Values
            for (var key in data) {
                if (data[key] === null) delete data[key];
            }

            // Compose Settings Object
            this.extend(this, DEFAULTS, options, data);

            // States
            this.calibrationTimer = null;
            this.calibrationFlag = true;
            this.enabled = false;
            this.depths = [];
            this.raf = null;

            // Offset
            this.ox = 0;
            this.oy = 0;
            this.ow = 0;
            this.oh = 0;

            // Calibration
            this.cx = 0;
            this.cy = 0;

            // Input
            this.ix = 0;
            this.iy = 0;

            // Motion
            this.mx = 0;
            this.my = 0;

            // Velocity
            this.vx = 0;
            this.vy = 0;

            // Callbacks
            this.onMouseMove = this.onMouseMove.bind(this);
            this.onDeviceOrientation = this.onDeviceOrientation.bind(this);
            this.onOrientationTimer = this.onOrientationTimer.bind(this);
            this.onCalibrationTimer = this.onCalibrationTimer.bind(this);
            this.onAnimationFrame = this.onAnimationFrame.bind(this);
            this.onWindowResize = this.onWindowResize.bind(this);

            // Initialise
            this.initialise();
        }

        Parallax.prototype.extend = function() {
            if (arguments.length > 1) {
                var master = arguments[0];
                for (var i = 1, l = arguments.length; i < l; i++) {
                    var object = arguments[i];
                    for (var key in object) {
                        master[key] = object[key];
                    }
                }
            }
        };

        Parallax.prototype.data = function(element, name) {
            return this.deserialize(element.getAttribute('data-'+name));
        };

        Parallax.prototype.deserialize = function(value) {
            if (value === "true") {
                return true;
            } else if (value === "false") {
                return false;
            } else if (value === "null") {
                return null;
            } else if (!isNaN(parseFloat(value)) && isFinite(value)) {
                return parseFloat(value);
            } else {
                return value;
            }
        };

        Parallax.prototype.offset = function(element) {
            var x = 0, y = 0;
            while (element && !isNaN(element.offsetLeft) && !isNaN(element.offsetTop)) {
                x += element.offsetLeft - element.scrollLeft;
                y += element.offsetTop - element.scrollTop;
                element = element.offsetParent;
            }
            return {top:y, left:x};
        };

        Parallax.prototype.camelCase = function(value) {
            return value.replace(/-+(.)?/g, function(match, character){
                return character ? character.toUpperCase() : '';
            });
        };

        Parallax.prototype.transformSupport = function(value) {
            var element = document.createElement('div');
            var propertySupport = false;
            var propertyValue = null;
            var featureSupport = false;
            var cssProperty = null;
            var jsProperty = null;
            for (var i = 0, l = this.vendors.length; i < l; i++) {
                if (this.vendors[i] !== null) {
                    cssProperty = this.vendors[i][0] + 'transform';
                    jsProperty = this.vendors[i][1] + 'Transform';
                } else {
                    cssProperty = 'transform';
                    jsProperty = 'transform';
                }
                if (element.style[jsProperty] !== undefined) {
                    propertySupport = true;
                    break;
                }
            }
            switch(value) {
                case '2D':
                    featureSupport = propertySupport;
                    break;
                case '3D':
                    if (propertySupport) {
                        document.body.appendChild(element);
                        element.style[jsProperty] = 'translate3d(1px,1px,1px)';
                        propertyValue = window.getComputedStyle(element).getPropertyValue(cssProperty);
                        featureSupport = propertyValue !== undefined && propertyValue.length > 0 && propertyValue !== "none";
                        document.body.removeChild(element);
                    }
                    break;
            }
            return featureSupport;
        };

        Parallax.prototype.ww = null;
        Parallax.prototype.wh = null;
        Parallax.prototype.hw = null;
        Parallax.prototype.hh = null;
        Parallax.prototype.portrait = null;
        Parallax.prototype.desktop = !navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|IEMobile)/);
        Parallax.prototype.vendors = [null,['-webkit-','webkit'],['-moz-','Moz'],['-o-','O'],['-ms-','ms']];
        Parallax.prototype.motionSupport = window.DeviceMotionEvent !== undefined;
        Parallax.prototype.orientationSupport = window.DeviceOrientationEvent !== undefined;
        Parallax.prototype.orientationStatus = 0;
        Parallax.prototype.transform2DSupport = Parallax.prototype.transformSupport('2D');
        Parallax.prototype.transform3DSupport = Parallax.prototype.transformSupport('3D');

        Parallax.prototype.initialise = function() {

            // Configure Context Styles
            if (this.transform3DSupport) this.accelerate(this.element);
            var style = window.getComputedStyle(this.element);
            if (style.getPropertyValue('position') === 'static') {
                this.element.style.position = 'relative';
            }

            // Configure Layer Styles
            for (var i = 0, l = this.layers.length; i < l; i++) {
                var layer = this.layers[i];
                if (this.transform3DSupport) this.accelerate(layer);
                layer.style.position = i ? 'absolute' : 'relative';
                layer.style.display = 'block';
                layer.style.height = '100%';
                layer.style.width = '100%';
                layer.style.left = 0;
                layer.style.top = 0;

                // Cache Layer Depth
                this.depths.push(this.data(layer, 'depth') || 0);
            }

            // Setup
            this.updateDimensions();
            this.enable();
            this.queueCalibration(this.calibrationDelay);
        };

        Parallax.prototype.updateDimensions = function() {

            // Cache Context Dimensions
            this.ox = this.offset(this.element).left;
            this.oy = this.offset(this.element).top;
            this.ow = this.element.offsetWidth;
            this.oh = this.element.offsetHeight;

            // Cache Window Dimensions
            this.ww = window.innerWidth;
            this.wh = window.innerHeight;
            this.hw = this.ww / 2;
            this.hh = this.wh / 2;
        };

        Parallax.prototype.queueCalibration = function(delay) {
            clearTimeout(this.calibrationTimer);
            this.calibrationTimer = setTimeout(this.onCalibrationTimer, delay);
        };

        Parallax.prototype.enable = function() {
            if (!this.enabled) {
                this.enabled = true;
                if (this.orientationSupport) {
                    this.portrait = null;
                    window.addEventListener('deviceorientation', this.onDeviceOrientation);
                    setTimeout(this.onOrientationTimer, this.supportDelay);
                } else {
                    this.cx = 0;
                    this.cy = 0;
                    this.portrait = false;
                    window.addEventListener('mousemove', this.onMouseMove);
                }
                window.addEventListener('resize', this.onWindowResize);
                this.raf = requestAnimationFrame(this.onAnimationFrame);
            }
        };

        Parallax.prototype.disable = function() {
            if (this.enabled) {
                this.enabled = false;
                if (this.orientationSupport) {
                    window.removeEventListener('deviceorientation', this.onDeviceOrientation);
                } else {
                    window.removeEventListener('mousemove', this.onMouseMove);
                }
                window.removeEventListener('resize', this.onWindowResize);
                cancelAnimationFrame(this.raf);
            }
        };

        Parallax.prototype.calibrate = function(x, y) {
            this.calibrateX = x === undefined ? this.calibrateX : x;
            this.calibrateY = y === undefined ? this.calibrateY : y;
        };

        Parallax.prototype.invert = function(x, y) {
            this.invertX = x === undefined ? this.invertX : x;
            this.invertY = y === undefined ? this.invertY : y;
        };

        Parallax.prototype.friction = function(x, y) {
            this.frictionX = x === undefined ? this.frictionX : x;
            this.frictionY = y === undefined ? this.frictionY : y;
        };

        Parallax.prototype.scalar = function(x, y) {
            this.scalarX = x === undefined ? this.scalarX : x;
            this.scalarY = y === undefined ? this.scalarY : y;
        };

        Parallax.prototype.limit = function(x, y) {
            this.limitX = x === undefined ? this.limitX : x;
            this.limitY = y === undefined ? this.limitY : y;
        };

        Parallax.prototype.clamp = function(value, min, max) {
            value = Math.max(value, min);
            value = Math.min(value, max);
            return value;
        };

        Parallax.prototype.css = function(element, property, value) {
            var jsProperty = null;
            for (var i = 0, l = this.vendors.length; i < l; i++) {
                if (this.vendors[i] !== null) {
                    jsProperty = this.camelCase(this.vendors[i][1] + '-' + property);
                } else {
                    jsProperty = property;
                }
                if (element.style[jsProperty] !== undefined) {
                    element.style[jsProperty] = value;
                    break;
                }
            }
        };

        Parallax.prototype.accelerate = function(element) {
            this.css(element, 'transform', 'translate3d(0,0,0)');
            this.css(element, 'transform-style', 'preserve-3d');
            this.css(element, 'backface-visibility', 'hidden');
        };

        Parallax.prototype.setPosition = function(element, x, y) {
            x += '%';
            y += '%';
            if (this.transform3DSupport) {
                this.css(element, 'transform', 'translate3d('+x+','+y+',0)');
            } else if (this.transform2DSupport) {
                this.css(element, 'transform', 'translate('+x+','+y+')');
            } else {
                element.style.left = x;
                element.style.top = y;
            }
        };

        Parallax.prototype.onOrientationTimer = function(event) {
            if (this.orientationSupport && this.orientationStatus === 0) {
                this.disable();
                this.orientationSupport = false;
                this.enable();
            }
        };

        Parallax.prototype.onCalibrationTimer = function(event) {
            this.calibrationFlag = true;
        };

        Parallax.prototype.onWindowResize = function(event) {
            this.updateDimensions();
        };

        Parallax.prototype.onAnimationFrame = function() {
            var dx = this.ix - this.cx;
            var dy = this.iy - this.cy;
            if ((Math.abs(dx) > this.calibrationThreshold) || (Math.abs(dy) > this.calibrationThreshold)) {
                this.queueCalibration(0);
            }
            if (this.portrait) {
                this.mx = (this.calibrateX ? dy : this.iy) * this.scalarX;
                this.my = (this.calibrateY ? dx : this.ix) * this.scalarY;
            } else {
                this.mx = (this.calibrateX ? dx : this.ix) * this.scalarX;
                this.my = (this.calibrateY ? dy : this.iy) * this.scalarY;
            }
            if (!isNaN(parseFloat(this.limitX))) {
                this.mx = this.clamp(this.mx, -this.limitX, this.limitX);
            }
            if (!isNaN(parseFloat(this.limitY))) {
                this.my = this.clamp(this.my, -this.limitY, this.limitY);
            }
            this.vx += (this.mx - this.vx) * this.frictionX;
            this.vy += (this.my - this.vy) * this.frictionY;
            for (var i = 0, l = this.layers.length; i < l; i++) {
                var layer = this.layers[i];
                var depth = this.depths[i];
                var xOffset = this.vx * depth * (this.invertX ? -1 : 1);
                var yOffset = this.vy * depth * (this.invertY ? -1 : 1);
                this.setPosition(layer, xOffset, yOffset);
            }
            this.raf = requestAnimationFrame(this.onAnimationFrame);
        };

        Parallax.prototype.onDeviceOrientation = function(event) {

            // Validate environment and event properties.
            if (!this.desktop && event.beta !== null && event.gamma !== null) {

                // Set orientation status.
                this.orientationStatus = 1;

                // Extract Rotation
                var x = (event.beta  || 0) / MAGIC_NUMBER; //  -90 :: 90
                var y = (event.gamma || 0) / MAGIC_NUMBER; // -180 :: 180

                // Detect Orientation Change
                var portrait = this.wh > this.ww;
                if (this.portrait !== portrait) {
                    this.portrait = portrait;
                    this.calibrationFlag = true;
                }

                // Set Calibration
                if (this.calibrationFlag) {
                    this.calibrationFlag = false;
                    this.cx = x;
                    this.cy = y;
                }

                // Set Input
                this.ix = x;
                this.iy = y;
            }
        };

        Parallax.prototype.onMouseMove = function(event) {

            // Calculate Input
            this.ix = (event.pageX - this.hw) / this.hw;
            this.iy = (event.pageY - this.hh) / this.hh;
        };

        // Expose Parallax
        window[NAME] = Parallax;

    })(window, document);

    /**
     * Request Animation Frame Polyfill.
     * @author Tino Zijdel
     * @author Paul Irish
     * @see https://gist.github.com/paulirish/1579671
     */
    ;(function() {

        var lastTime = 0;
        var vendors = ['ms', 'moz', 'webkit', 'o'];

        for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
            window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
            window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] || window[vendors[x]+'CancelRequestAnimationFrame'];
        }

        if (!window.requestAnimationFrame) {
            window.requestAnimationFrame = function(callback, element) {
                var currTime = new Date().getTime();
                var timeToCall = Math.max(0, 16 - (currTime - lastTime));
                var id = window.setTimeout(function() { callback(currTime + timeToCall); },
                    timeToCall);
                lastTime = currTime + timeToCall;
                return id;
            };
        }

        if (!window.cancelAnimationFrame) {
            window.cancelAnimationFrame = function(id) {
                clearTimeout(id);
            };
        }

    }());
</script>
</body>
</html>