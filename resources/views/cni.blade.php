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
        .card{
            margin-left: 10em;
        }
        .card .card-content {
            padding: 0.8em;
        }

        .row {
            margin-bottom: 0.5em;
        }

        div p {
            font-size: 0.8rem;
        }

        div .card-stacked {
            height: 25em;
            width: 70%;
        }

        div .card-content {
            margin: 0;
            padding: 0;
            width: 90%;
        }

        .container,
        h5 {
            width: 70%;
            font-size: 0.9rem;
            font-weight: 500;
        }

        h5,
        h6 {
            margin: 0;
        }

        .container h6 {
            font-size: 0.65rem;
        }

        .card {
            height: 20%;
            width: 70%;
        }

        .card-image {
            width: 24%;
            padding: 10px;
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


    <section class=" left-allign">
        <h3>
            Carte Nationale d'Identité
        </h3>
    </section>
    <section class="container">
        <div class="row">
            <div class="col s12">
                <div class="card horizontal">
                    <div class="card-image valign-wrapper"><img
                            src="https://images.pexels.com/photos/228842/pexels-photo-228842.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <div class="center-align">
                                        <P class="flow-text">
                                            REPUBLIQUE DE CÔTE D'IVOIRE
                                        </P>
                                        <p>
                                            <b>Carte Nationale d'identité</b>
                                        </p>
                                        <p>
                                          
                                            Immatriculation : <b>{{ $enroler->getAttributes()['id_enrolement']}}</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <div class="left-align">
                                        <P>
                                        <h5>
                                           Nom
                                        </h5>
                                        <h6>
                                            {{ $enroler->nom }}
                                        </h6>
                                        </P>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <div class="left-align">
                                        <P>
                                        <h5>
                                        Prénom
                                        </h5>
                                        <h6>
                                            
                                            {{ $enroler->prenom }}
                                        </h6>
                                        </P>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s3">
                                    <h5>
                                        {{ $enroler->id_sexe }}
                                    </h5>
                                    <h6>
                                        Sexe
                                    </h6>
                                </div>
                                <div class="col s3">
                                    <h5>
                                        {{ $enroler->taille }}
                                    </h5>
                                    <h6>
                                        Taille (cm)
                                    </h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <div class="left-align">
                                        <P>
                                        <h5>
                                            {{ $enroler->lib_pays }}
                                        </h5>
                                        <h6>
                                          nee le
                                        </h6>
                                        </P>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s6">
                                    <h5>
                                        {{ $enroler->date_naissance }}</b>
                                    </h5>
                                </div>
         
                            </div>
                            <div class="row">
                                <div class="col s3">
                                    A : <b>{{ $enroler->lieu_naissance }}</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col s12">
                <div class="card horizontal">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s6 left-align">
                                <h6>Domicile :</h6>
                                <h5>COCODY ANGRE DJIBI</h5>
                            </div>
                            <div class="col s6 right-align">
                                <p><img src="https://i.pinimg.com/550x/f8/32/1c/f8321c65bb1b8942ded67a5bb74de569.jpg"
                                        alt="" height="30px"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 left-align">
                                <h6>Proffession:</h6>
                                <h5>{{ $enroler->profession->lib_profession }}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 right-align">
                                <p>signature du titulaire :
                            
                                <img src="{{ public_path('img/' . $enroler->lien_signature) }}">
                            </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12 right-align">
                                <p>date Emission : {{ $enroler->date_emission }}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <h6>
                                    père:
                                </h6>
                                <h5>
                                {{ $enroler->pere->nom_pere }}
                                </h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12 right-align">
                                <p>date Expiration :{{ $enroler->date_expiration }}
                                </p>
                                       
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <h6>
                                    né le:
                                </h6>
                                <h5>
                                {{ $enroler->pere->date_naissance_pere }}
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <h6>
                                    mère:
                                </h6>
                                <h5>
                                {{ $enroler->mere->nom_mere }}
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <h6>
                                    né le:
                                </h6>
                                <h5>
                                {{ $enroler->mere->date_naissance_mere }}
                                    
                                </h5>
                            </div>

                        
                        </div>
                        <div class="row">
                            <div class="col s12 right-align">
                                <h6>
                                {{ $enroler->nni }}
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <div>
        <button class="btn waves-effect waves-light teal-accent center-align" type="submit"
            name="action" ><a href="" onclick=window.print(); style="padding:120px;">Imprimer</a>
            {{-- <i class="material-icons right">send</i> --}}
        </button>
    </div>
    <br>
    <br>
    <br>

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
