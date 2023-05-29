<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenu !</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

</head>
<style>
    body, html {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .front {
      height: 100%;
      width: 100%;
      background-image: url(https://images.pexels.com/photos/8090138/pexels-photo-8090138.jpeg);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    .message{
        padding: 6em;
        background-color: #f6f6fe;
        opacity: 0.7;
        position: absolute;
        top: 20%;
        left: 20%;
    }
    .flow-text{
        color: black;
        opacity: 1;
    }
  </style>
<body>
    <div class="front">
        <div class="message container center-align">
            <h3 class="center-align">
                Bienvenue
            </h3>
            <p class="flow-text">
                Lorem sint sit aliquip fugiat exercitation aliqua sunt magna nisi ipsum sunt ea nisi.
            </p>
            <p>
                <a href="" class="waves-effect waves-light btn-large">Acceder au site</a>
            </p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){

        $('.sidenav').sidenav();
        $('.materialboxed').materialbox();
        $('.parallax').parallax();
        $('.tabs').tabs();
        $('.datepicker').datepicker({
          disableWeekends: true,
          yearRange: 1
        });
        $('.tooltipped').tooltip();
        $('.scrollspy').scrollSpy();

      });
    </script>
</body>
</html>
