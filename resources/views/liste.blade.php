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

    <title>Liste des enrolés</title>
    <style>

        /* .container {
            width: 70%;

        } */

        thead{
            background-color: teal;
        }
        th{
            color: white;
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
            <h3 class="flow-text center-allign">
                Tableau récapitulatif de tous les enrolements effectués
            </h3>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID Enrolement</th>
                        <th>Nom du Pere</th>
                        <th>Nom de la Mere</th>
                        <th>Sexe</th>
                        <th>Profession</th>
                        <th>Pays</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date Naissance</th>
                        <th>Heure Naissance</th>
                        <th>Lieu Naissance</th>
                        <th>NNI</th>
                        <th>Taille</th>
                        <th>Visa</th>
                        <th>Signataire</th>
                        <th>Date Emission</th>
                        <th>Date Expiration</th>
                        <th>Date Enrolement</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($enrolers as $enroler)
                        <tr>
                            <td>{{ $enroler->id_enrolement }}</td>
                            <td>{{ $enroler->id_pere }}</td>
                            <td>{{ $enroler->id_mere }}</td>
                            <td>{{ $enroler->id_sexe }}</td>
                            <td>{{ $enroler->id_profession }}</td>
                            <td>{{ $enroler->lib_pays }}</td>
                            <td>{{ $enroler->nom }}</td>
                            <td>{{ $enroler->prenom }}</td>
                            <td>{{ $enroler->date_naissance }}</td>
                            <td>{{ $enroler->heure_naissance }}</td>
                            <td>{{ $enroler->lieu_naissance }}</td>
                            <td>{{ $enroler->nni }}</td>
                            <td>{{ $enroler->taille }}</td>
                            <td>{{ $enroler->visa }}</td>
                            <td>{{ $enroler->signataire }}</td>
                            <td>{{ $enroler->date_emission }}</td>
                            <td>{{ $enroler->date_expiration }}</td>
                            <td>{{ $enroler->date_enrolement }}</td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>

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
