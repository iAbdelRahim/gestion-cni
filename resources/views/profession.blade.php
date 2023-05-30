<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <title>Nouveau métier</title>
    <style>
        .container {
            padding-top: 5%;
            padding-bottom: 5%;

        }

        button {
            position: relative;
            left: 40%;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper teal">
                <a href="#" class="brand-logo">Register</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="">Liste enrolés</a></li>
                    <li><a href="">details enrolé</a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="enregistrer">Enregistrer
                            <i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>
        </nav>
        <ul id="enregistrer" class="dropdown-content">
            <li><a href="">nouvel enrolé</a></li>
            <li class="divider"></li>
            <li><a href="">pays</a></li>
            <li class="divider"></li>
            <li><a href="">profession</a></li>
        </ul>
    </header>

    <section>
        <div class="container">
            <form class="col s12" action="" method="POST">
                @csrf
                <section>
                    <div class="row ">
                        <div class="col s12 ">
                            <div class="card medium" style="height: 40em">
                                <div class="card-image">
                                    <img src="https://images.pexels.com/photos/8961336/pexels-photo-8961336.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="Card Image">
                                    <span class="card-title">Nouvelle profession prise en charge</span>
                                </div>
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col s12">
                                            <label for="lib_profession">Dénomination complète de la profession</label>
                                            <input type="text" name="lib_profession" id="lib_profession">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <button class="btn waves-effect waves-light teal-accent center-align"
                                            type="submit" name="action">Ajouter
                                            {{-- <i class="material-icons right">send</i> --}}
                                        </button>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>

    </section>

    <footer class="page-footer teal">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">A propos</h5>
                    <p class="grey-text text-lighten-4">Adipisicing aliquip sint laborum consequat nulla aute anim in
                        minim minim deserunt.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Liens du site</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="">Lien 1</a></li>
                        <li><a class="grey-text text-lighten-3" href="">Lien 2</a></li>
                        <li><a class="grey-text text-lighten-3" href="">Lien 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="">Lien 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright teal-accent-4">
            <div class="container">
                © Made with ❤️
                <a class="grey-text text-lighten-4 right" href="#!">Ingrid & Irvin</a>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {

            $(".dropdown-trigger").dropdown();
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
            $('.carousel.carousel-slider').carousel({
                fullWidth: true,
                indicators: true,
                duration: 100,
            });

        });
    </script>
</body>

</html>
