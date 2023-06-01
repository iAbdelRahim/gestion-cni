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

    <title>Enrolement !</title>
    <style>
        .container {
            padding-top: 5%;
            padding-bottom: 5%;

        }

        button {
            position: relative;
            left: 45%;
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
            <form class="col s12" action="{{ url('register.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                @method("POST")
                {{--
                <div>
                    <label for="id_enrolement">ID Enrolement:</label>
                    <input type="text" name="id_enrolement" id="id_enrolement">
                </div> --}}

                {{-- section 1 --}}
                <section>
                    <h3 class="flow-text center-align">
                        Première étape :
                    </h3>
                    <div class="row">
                        <div class="input-field col s6">


                            <select name="id_pere" id="id_pere">
                                @foreach ($peres as $pere)
                                    <option value="{{ $pere->id_pere }}">{{ $pere->nom_pere }}</option>
                                @endforeach

                            </select>
                            <label>nom du pere</label>
                        </div>
                        <div class="input-field col s6">


                            <select name="id_mere" id="id_mere">
                                @foreach ($meres as $mere)
                                    <option value="{{ $mere->id_mere }}">{{ $mere->nom_mere }}</option>
                                @endforeach

                            </select>
                            <label>nom de la mère</label>
                        </div>
                    </div>

                </section>



                {{-- section 2 --}}
                <section>
                    <h3 class="flow-text center-align">
                        Seconde étape :
                    </h3>
                    <div class="row">
                        <div class="col s6">
                            <label for="nom">Nom:</label>
                            <input type="text" name="nom" id="nom">
                        </div>

                        <div class="col s6">
                            <label for="prenom">Prenom:</label>
                            <input type="text" name="prenom" id="prenom">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">


                            <select name="id_profession" id="id_profession">
                                @foreach ($professions as $profession)
                                    <option value="{{ $profession->id_profession }}">{{ $profession->lib_profession }}
                                    </option>
                                @endforeach

                            </select>
                            <label>Nationalité</label>
                        </div>
                        <div class="input-field col s4">


                            <select name="id_sexe" id="id_sexe">
                                @foreach ($sexe as $sexe)
                                    <option value="{{ $sexe->id_sexe }}">{{ $sexe->libelle_sexe }}
                                    </option>
                                @endforeach

                            </select>
                            <label>Nationalité</label>
                        </div>
                        <div class="input-field col s4">
                            <select name="id_pays" id="id_pays">
                                @foreach ($pays as $pays)
                                    <option value="{{ $pays->id_pays }}">{{ $pays->lib_pays }}</option>
                                @endforeach
                            </select>
                            <label>pays</label>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="row">
                        <div class="col s4">
                            <label for="date_naissance">Date Naissance:</label>
                            <input type="date" name="date_naissance" id="date_naissance">
                        </div>

                        <div class="col s4">
                            <label for="heure_naissance">Heure Naissance:</label>
                            <input type="time" name="heure_naissance" id="heure_naissance">
                        </div>

                        <div class="col s4">
                            <label for="lieu_naissance">Lieu Naissance:</label>
                            <input type="text" name="lieu_naissance" id="lieu_naissance">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s4">
                            <label for="taille">Taille:</label>
                            <input type="number" name="taille" id="taille">
                        </div>
                    </div>
                </section>
                <section>
                    <h3 class="flow-text center-align">
                        Troisieme étape :
                    </h3>
                    <div class="row">
                        <div class="file-field input-field col s6">
                            <div class="btn">
                                <span>Photo</span>
                                <input type="file" name="lien_photo">
                            </div>
                            <div class="file-path-wrapper">
                                <input  class="file-path validate" id="lien_photo" type="text">
                            </div>
                        </div>

                        <div class="file-field input-field col s6">
                            <div class="btn">
                                <span>Empreinte</span>
                                <input name="lien_empreinte" type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" id="lien_empreinte"
                                    type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="file-field input-field col s6">
                            <div class="btn">
                                <span>Signature</span>
                                <input name="lien_signature" type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input  class="file-path validate" id="lien_signature"
                                    type="text">
                            </div>
                        </div>
                        <div class="col s6">
                            <label for="visa">Visa:</label>
                            <input type="text" name="visa" id="visa">
                        </div>
                        {{-- <div>
                        <label for="nni">NNI:</label>
                        <input type="text" name="nni" id="nni">
                        </div> --}}



                    </div>
                    <div>
                        <button class="btn waves-effect waves-light teal-accent center-align" type="submit"
                            name="action">Soumettre
                            {{-- <i class="material-icons right">send</i> --}}
                        </button>
                    </div>
                </section>
                <section>
                    <h3 class="flow-text center-align">
                        Dernière étape :
                    </h3>
                    <div class="row">
                    <div class="col s4">
                            <label for="date_emission">Date emission:</label>
                            <input type="date" name="date_emission" id="date_emission">
                    </div>
                    <div class="col s4">
                            <label for="date_expiration">Date expiration:</label>
                            <input type="date" name="date_expiration" id="date_expiration">
                    </div>
                    <div class="col s4">
                            <label for="date_enrolement">Date enrolement:</label>
                            <input type="date" name="date_enrolement" id="date_enrolement">
                    </div>
                    </div>
                </section>
            </form>
        </div>


        <footer class="page-footer teal">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">A propos</h5>
                        <p class="grey-text text-lighten-4">Adipisicing aliquip sint laborum consequat nulla aute
                            anim in
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
                $('select').formSelect();


            });
        </script>
</body>

</html>
