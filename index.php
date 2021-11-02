<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Association des visites virtuelles</title>
    <meta name="description" content="Découvrez les visites virtuelles grâce à l'association 
        des visites virtuelles et voyager depuis votre salon, votre bureau ou depuis n'importe où">
    <link rel="stylesheet" href="Bootstrap+jquery/bootstrap.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header id="start" class="container-fluid">
        <div class=" row justify-content-center">
            <div class="plane-box">
                <img class="plane" src="icone/avion4.png" alt="">
                <img class="planete" src="icone/planete4.png" alt="">
                <img class="canape" src="icone/gif.gif" alt="">
            </div>
            <h1 class="text-skyblue text-center">Visites virtuelles</h1>
        </div>
    </header>

    <nav class="navbar navbar-expand-sm navbar-dark bg-skyblue">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="articles.html">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="contact.html" tabindex="-1" aria-disabled="true"> Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Accueil</li>
        </ol>
    </nav>

    <main class="container-fluid">

        <h2>Comparatif des méthodes de visites virtuelles </h2>

        <div class="row justify-content-center">
            <p> L'association des visites virtuelles vous propose ce comparatif des méthodes de visites virtuelles
                existantes à l'heure actuelle. </p>
            <p> À vous de les tester et de choisir celle qui vous convient le mieux pour voyager d'une nouvelle façon.
            </p>
        </div>

        <section>
            <h3>1) La navigation entre des images 360° (par exemple Google Street View) </h3>
            <div class="row justify-content-center">
                <div class="col-11 col-md-6 shadow-lg p-3 mb-2 rounded">
                    <div class="video-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!4v1623821057088!6m8!1m7!1sAqSB43pceQZiNb1t9vRfBg!2m2!1d-21.08069643509078!2d55.22330054624015!3f282.7719798610652!4f6.910278635717333!5f0.7820865974627469"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            class="rounded"></iframe>
                    </div>
                </div>
                <div class="col-11 col-md-6  p-3 mb-2 shadow-lg rounded">
                    <div class="video-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!4v1623821926750!6m8!1m7!1sRkcFaq6xuaPgx_85MBd2Ew!2m2!1d-21.28747833140343!2d55.79634337777052!3f300.7137636783484!4f-2.8220851919614915!5f0.7820865974627469"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            class="rounded"></iframe>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-11 col-md-6 border border-dark  bg-gradient shadow-lg  rounded mb-2">
                    <p class="mt-2 fw-bold underline text-decoration-underline text-center">Avantages : </p>
                    <ul>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Bonne qualité d'image</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Beaucoup de lieux à visiter</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Bonne expérience d'immersion</li>
                    </ul>
                </div>
                <div class="col-11 col-md-6 border border-dark  bg-gradient shadow-lg  rounded mb-2">
                    <p class="mt-2 fw-bold underline text-decoration-underline text-center">Inconvénients : </p>
                    <ul>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> Les déplacements image par image </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> L'expérience se limite aux routes et chemins praticables en voiture (il y a tout de
                            même quelques exceptions) </li>
                    </ul>
                </div>
            </div>

            <aside class="text-end">
                <a href="#start">Retour en haut de la page</a>
            </aside>
        </section>

        <section>
            <h3>2) Webcam en direct </h3>
            <div class="row justify-content-center">
                <div class="col-11 col-md-6  bg-gradient shadow-lg p-3 mb-2  rounded">
                    <div class="video-responsive">
                        <iframe src="https://pv.viewsurf.com/1586/La-Reunion-Roches-Noires?i=NjIwODp1bmRlZmluZWQ"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            class="rounded"></iframe>
                    </div>
                </div>
                <div class="col-11 col-md-6  bg-gradient   shadow-lg p-3 mb-2  rounded">
                    <a href="https://www.reunion.fr/organisez/webcams/" target="_blank">Lien vers le site des Webcam en
                        direct</a>
                    <div class="video-responsive">
                        <iframe src="https://www.reunion.fr/organisez/webcams/" width="600" height="450"
                            style="border:0;" allowfullscreen="" loading="lazy" class="rounded"></iframe>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-11 col-md-6 border border-dark  bg-gradient shadow-lg  rounded mb-2">
                    <p class="mt-2 fw-bold underline text-decoration-underline text-center">Avantages : </p>
                    <ul>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Vidéos en direct</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Idéal pour consulter la météo d'un endroit</li>
                    </ul>
                </div>
                <div class="col-11 col-md-6 border border-dark  bg-gradient shadow-lg  rounded mb-2">
                    <p class="mt-2 fw-bold underline text-decoration-underline text-center">Inconvénients : </p>
                    <ul>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> Pas vraiment d'expérience d'immersion </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> Mauvaise qualité d'image </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> L'expérience se limite aux quelques webcam installées </li>
                    </ul>
                </div>
            </div>

            <aside class="text-end">
                <a href="#start">Retour en haut de la page</a>
            </aside>
        </section>

        <h3>3) Parcours photos et vidéos avec localisation </h3>

        <section>
            <h4>a) Utilisation d'une application mobile (exemple réalisé avec <a
                    href="https://play.google.com/store/apps/details?id=eu.bischofs.photomap&hl=fr&gl=US"
                    target="_blank">PhotoMap</a>) </h4>

            <div class="row justify-content-center mb-5">
                <div id="carouselExampleIndicators" class="carousel slide col-8 col-md-4" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                            aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"
                            aria-label="Slide 8"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8"
                            aria-label="Slide 9"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image-site/image1.jpeg" class="d-block w-100 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image-site/image2.jpeg" class="d-block w-100 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image-site/image3.jpeg" class="d-block w-100 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image-site/image4.jpeg" class="d-block w-100 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image-site/image5.jpeg" class="d-block w-100 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image-site/image6.jpeg" class="d-block w-100 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image-site/image7.jpeg" class="d-block w-100 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image-site/image8.jpeg" class="d-block w-100 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image-site/image9.jpeg" class="d-block w-100 rounded" alt="...">
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-11 col-md-6 border border-dark  bg-gradient shadow-lg  rounded mb-2">
                    <p class="mt-2 fw-bold underline text-decoration-underline text-center">Avantages : </p>
                    <ul>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Permet d'ajouter une géolocalisation aux photos et de faire une visite virtuelle</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Facile et pratique à faire directement avec les photos de son smartphone </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Beaucoup plus intéractif que de simplement regarder les photos d'un album de
                            smartphone</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Rendu de bonne qualité</li>
                    </ul>
                </div>
                <div class="col-11 col-md-6 border border-dark  bg-gradient shadow-lg  rounded mb-2">
                    <p class="mt-2 fw-bold underline text-decoration-underline text-center">Inconvénients : </p>
                    <ul>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> Impossible de partager la carte intéractive avec quelqu'un ou sur un ordinateur </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> Impossible d'ajouter des vidéos </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> Limité à présenter la visite virtuelle depuis son propre smartphone </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> La carte utilisé est une simple image de Google Map avec les noms des lieux, pas
                            d'intéractivé possible </li>
                    </ul>
                </div>
            </div>

            <aside class="text-end">
                <a href="#start">Retour en haut de la page</a>
            </aside>
        </section>

        <section>
            <h4>b) Utilisation de Google My Maps </h4>
            <p>(Regarder en plein écran)</p>

            <div class="row justify-content-center">
                <div class="col-11 col-md-6  bg-gradient shadow-lg p-3 mb-2  rounded">
                    <div class="video-responsive">
                        <iframe src="https://www.google.com/maps/d/embed?mid=1WqoznSFOn7seT5oLXBbgKLugie8" width="640"
                            height="480" class="rounded"></iframe>
                    </div>
                </div>
                <div class="col-11 col-md-6  bg-gradient shadow-lg p-3 mb-2  rounded">
                    <div class="video-responsive">
                        <iframe src="https://www.google.com/maps/d/embed?mid=1oTzOm7VkX2hSWfjUnPheEHe5HqVluNPT"
                            width="640" height="480" class="rounded"></iframe>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-11 col-md-6 border border-dark  bg-gradient shadow-lg  rounded mb-2">
                    <p class="mt-2 fw-bold underline text-decoration-underline text-center">Avantages : </p>
                    <ul>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Permet d'ajouter une géolocalisation aux photos et<span class="fw-bold">
                                vidéos</span> et de faire une visite virtuelle</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Pratique à partager car la carte intéractive est enregistrée en ligne et il est
                            possible de la consulter sur smartphone ou ordinateur (les modifications se font uniquement
                            sur ce dernier)</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Possibilité d'inclure d'autres personnes pour créer une carte intéractive en commun
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Utilisation de la vraie carte de Google Map avec tous les centres d'intérêts présents
                            (il manque Street View)</li>
                    </ul>
                </div>
                <div class="col-11 col-md-6 border border-dark  bg-gradient shadow-lg  rounded mb-2">
                    <p class="mt-2 fw-bold underline text-decoration-underline text-center">Inconvénients : </p>
                    <ul>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> Les vidéos doivent provenir de youtube mais il est possible de publier en mode "non
                            répertorié sur youtube" </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> Les transitions et le système pour consulter les différents points crées manquent
                            d'effet pour se sentir en immersion</li>
                    </ul>
                </div>
            </div>

            <aside class="text-end">
                <a href="#start">Retour en haut de la page</a>
            </aside>
        </section>
        <section>
            <h4>c) Utilisation des projets dans Google Earth </h4>

            <div class="row justify-content-center">
                <div class="col-11 col-md-6  bg-gradient shadow-lg p-3 mb-2  rounded">
                    <div class="video-responsive">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/W09mz7yyY5I"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="rounded"></iframe>
                    </div>
                </div>
                <div class="col-11 col-md-6  bg-gradient shadow-lg p-3 mb-2  rounded">
                    <div class="video-responsive">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/BFQrg3ef2wg"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="rounded"></iframe>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-11 col-md-6 border border-dark  bg-gradient shadow-lg  rounded mb-2">
                    <p class="mt-2 fw-bold underline text-decoration-underline text-center">Avantages : </p>
                    <ul>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Permet d'ajouter une géolocalisation aux photos et<span class="fw-bold">
                                vidéos</span> et de faire une visite virtuelle</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Les transitions pour arriver sur le lieux à visiter son mieux faites</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Possibilité d'inclure d'autres personnes pour créer une carte intéractive en commun
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Possiblité d'inclure Street View dans la visite virtuelle</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Certaines grandes villes sont représentées en 3D</li>
                    </ul>
                </div>
                <div class="col-11 col-md-6 border border-dark  bg-gradient shadow-lg  rounded mb-2">
                    <p class="mt-2 fw-bold underline text-decoration-underline text-center">Inconvénients : </p>
                    <ul>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> Les temps de chargement des cartes 3D et la latence réduisent l'effet d'immersion
                        </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> 3D disponible uniquement dans certaines grandes villes</li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> La mauvaise qualité des images en 3D </li>
                    </ul>
                </div>
            </div>

            <aside class="text-end">
                <a href="#start">Retour en haut de la page</a>
            </aside>
        </section>

        <section>
            <h3>4) Utilisation du drone </h3>

            <div class="text-center fw-bold">
                (Vidéos 360°, changez d'angle de vue selon vos envies) <br> <span class="text-decoration-underline"> A
                    regarder en plein écran </span>
            </div>

            <div class="row justify-content-center">
                <div class="col-11 col-md-6  bg-gradient shadow-lg p-3 mb-2  rounded">
                    <div class="video-responsive">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/J8310XWt1X8"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="rounded"> </iframe>
                    </div>
                </div>
                <div class="col-11 col-md-6  bg-gradient shadow-lg p-3 mb-2  rounded">
                    <div class="video-responsive">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/0vtXW8wy1DM"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="rounded"></iframe>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-11 col-md-6 border border-dark  bg-gradient shadow-lg  rounded mb-2">
                    <p class="mt-2 fw-bold underline text-decoration-underline text-center">Avantages : </p>
                    <ul>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Excellente expérience d'immersion grâce aux vidéos 360° qui permettent d'orienter la
                            caméra de faire un zoom </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Qualité d'image impressionante</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Points de vue aériens uniques des sites, impossible à avoir même en allant sur place
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Déplacements fluides (et pas image par image) </li>
                    </ul>
                </div>
                <div class="col-11 col-md-6 border border-dark  bg-gradient shadow-lg  rounded mb-2">
                    <p class="mt-2 fw-bold underline text-decoration-underline text-center">Inconvénients : </p>
                    <ul>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> Encore peu de contenu disponible actuellement </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> Impossible de contrôler les déplacements du drone, on est obligé de suivre l'unique
                            trajet de la vidéo</li>
                    </ul>
                </div>
            </div>

            <aside class="text-end">
                <a href="#start">Retour en haut de la page</a>
            </aside>

            <div class="text-center">
                <a href="articles.html" class="btn btn-secondary mb-3" role="button"> En savoir plus</a>
            </div>
        </section>

        <section>
            <h3>5) Utilisation d'un casque VR</h3>

            <div class="row justify-content-center mb-5">
                <div id="carousel2" class="carousel slide col-11 col-md-8" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carousel2" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image-site/casqueVR.jpeg" class="d-block w-100 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image-site/casqueVR2.jpeg" class="d-block w-100 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image-site/casqueVR3.jpeg" class="d-block w-100 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image-site/droneFPV.jpeg" class="d-block w-100 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image-site/casque3.jpeg" class="d-block w-100 rounded" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel2"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel2"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-11 col-md-6 border border-dark  bg-gradient shadow-lg  rounded mb-2">
                    <p class="mt-2 fw-bold underline text-decoration-underline text-center">Avantages : </p>
                    <ul>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Immersion totale grâce au casque (connecté au drone ou à une vidéo 360° enregistrée)
                            et sensation de voler comme un oiseau </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Possibilité de visionner du contenu en direct en utilisant un casque compatible avec
                            un drone </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Possibilité de visionner du contenu enregistré, comme les vidéos 360° par exemple,
                            avec un casque VR classique </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Points de vue aériens uniques des sites, impossible à avoir même en allant sur place
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-plus-circle-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Déplacements fluides (et pas image par image) </li>
                    </ul>
                </div>
                <div class="col-11 col-md-6 border border-dark  bg-gradient shadow-lg  rounded mb-2">
                    <p class="mt-2 fw-bold underline text-decoration-underline text-center">Inconvénients : </p>
                    <ul>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> Nécessite d'acheter du matériel </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> Le drone ne peut pas voler par mauvais temps. Dans ce cas, seul le visonnage de
                            vidéos enregistrées est possible (en utilisant un casque VR classique) </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                                class="bi bi-dash-circle-fill text-danger" viewbox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                            </svg> Nécessite de réaliser une déclaration préfectorale 5 jours avant l’événement et
                            d'obtenir l'autorisation pour organiser des vols de drones </li>
                    </ul>
                </div>
            </div>

            <aside class="text-end">
                <a href="#start">Retour en haut de la page</a>
            </aside>

            <div class="text-center mb-3">
                <a href="https://www.realite-virtuelle.com/guide-comparatif-casque-vr/" target="_blank">Comparatif des
                    casques VR</a>
            </div>

            <div class="text-center">
                <a href="articles.html" class="btn btn-secondary mb-3" role="button"> En savoir plus</a>
            </div>
        </section>

    </main>

    <script src="Bootstrap+jquery/jquery-3.6.0.min.js"></script>
    <script src="Bootstrap+jquery/bootstrap.bundle.min.js"></script>
</body>

</html>