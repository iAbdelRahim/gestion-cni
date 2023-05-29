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

    <title>Accueil !</title>
    <style>
        .carousel-item{
            height: 100rem;
        }
        .container{
            width: 70%;

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
        <form action="" method="POST">
            @csrf
{{--
            <div>
                <label for="id_enrolement">ID Enrolement:</label>
                <input type="text" name="id_enrolement" id="id_enrolement">
            </div> --}}

            <div>
                <label for="pere">Nom et prenoms du pere</label>
                <input type="text" name="pere" id="pere">
            </div>

            <div>
                <label for="mere">Nom et prenoms de la mere</label>
                <input type="text" name="mere" id="mere">
            </div>

            <div>
                <label for="sece">Sexe:</label>
                <input type="text" name="sece" id="sece">
            </div>

            <div>
                <label for="profession">Profession:</label>
                <input type="text" name="profession" id="profession">
            </div>

            <div>
                <label for="nationalite">Nationalite</label>
                <input type="text" name="nationalite" id="nationalite">
            </div>

            <div>
                <label for="lib_pays">Libelle Pays:</label>
                <input type="text" name="lib_pays" id="lib_pays">
            </div>

            <div>
                <label for="nom">Nom:</label>
                <input type="text" name="nom" id="nom">
            </div>

            <div>
                <label for="prenom">Prenom:</label>
                <input type="text" name="prenom" id="prenom">
            </div>

            <div>
                <label for="date_naissance">Date Naissance:</label>
                <input type="date" name="date_naissance" id="date_naissance">
            </div>

            <div>
                <label for="heure_naissance">Heure Naissance:</label>
                <input type="time" name="heure_naissance" id="heure_naissance">
            </div>

            <div>
                <label for="lieu_naissance">Lieu Naissance:</label>
                <input type="text" name="lieu_naissance" id="lieu_naissance">
            </div>

            {{-- <div>
                <label for="nni">NNI:</label>
                <input type="text" name="nni" id="nni">
            </div> --}}

            <div>
                <label for="taille">Taille:</label>
                <input type="number" name="taille" id="taille">
            </div>

            <div>
                <label for="lien_photo">Lien Photo:</label>
                <input type="text" name="lien_photo" id="lien_photo">
            </div>

            <div>
                <label for="lien_empreinte">Lien Empreinte:</label>
                <input type="text" name="lien_empreinte" id="lien_empreinte">
            </div>

            <div>
                <label for="lien_signature">Lien Signature:</label>
                <input type="text" name="lien_signature" id="lien_signature">
            </div>

            <div>
                <label for="visa">Visa:</label>
                <input type="text" name="visa" id="visa">
            </div>

            <button type="submit">Enregistrer</button>
        </form>

    </section>

    <footer class="page-footer teal">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">A propos</h5>
                    <p class="grey-text text-lighten-4">Adipisicing aliquip sint laborum consequat nulla aute anim in minim minim deserunt.</p>
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
            $('.carousel.carousel-slider').carousel(
                {
                    fullWidth:true,
                    indicators: true,
                    duration:100,
                }
            );

        });
    </script>
</body>

</html>
