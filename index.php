<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>La santé aujourd'hui </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Santé</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/sante">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="person_form.html">Ajoute Tes stats</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<body>


<header class="masthead text-center text-white">
    <div class="masthead-content">
        <div class="container">
            <h1 class="masthead-heading mb-0">La santé Aujourd'hui </h1>
            <h2 class="masthead-subheading mb-0">Une étude mené sur des populations à travers le monde </h2>
            <a href="#down" class="btn btn-primary btn-xl rounded-pill mt-5">Voir plus </a>
        </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
</header>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div id="down" class="p-5">
                    <img class="img-fluid rounded-circle" src="img/01.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2 class="display-4"> Santé ?</h2>

                    <br>La santé est un état de complet bien-être physique, mental et social,
                    et ne consiste pas seulement en une absence de maladie ou d'infirmité.</br>
                    Cette définition est inscrite au préambule1 de 1946 à la constitution de
                    l'Organisation Mondiale de la Santé (OMS).</br>
                    Elle implique que tous les besoins fondamentaux de
                    la personne soient satisfaits, qu'ils soient affectifs, sanitaires, nutritionnels,
                    sociaux ou culturels et du stade de l'embryon (voire des gamètes) à celui de la personne âgée.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" src="img/02.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-5">
                    <h2 class="display-4">Participants </h2>
                    <canvas id="age_chart" style="max-width: 500px;"></canvas>

                    <p>
                        L'étude a était mené sur différentes tranches d'âge d'une population ,
                        afin de fournir des résultats divérs , riches et significatifs
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" src="img/03.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2 class="display-4">Le bien étre </h2>
                    <canvas id="happiness_chart" style="max-width: 500px;"></canvas>
                    <br>
                    Aujourd'hui , les gens sont -ils heureux ou malheureux ?</br>
                    L'esprit est trés important pour une bonne santé et le bien étre des gens .
                    les participants ont réponduent sur un echelon de 1 à 4, s'ils sont plutôt heureux ,
                    trés heureux , malheureux ou trés malheureux .</br>

                    Au rang des motifs de bien-être dans leur vie,
                    les personnes citent le logement ,
                    leur environnement, la santé et les relations avec leur
                    entourage. Le réconfort vient en effet de
                    leurs liens sociaux avec la famille,
                    les amis et les «gens sur qui compter».</br>

                    L’indicateur montre toutefois un niveau de bonheur très inégal selon les
                    tranches d'ages , et donc la conception de la vie en géneral .

                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" src="img/04.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-5">
                    <h2 class="display-4">Maladies chroniques </h2>
                    <canvas id="chronic_disease_chart" style="max-width: 500px;"></canvas>

                    <p>
                        Une maladie chronique est une maladie de longue durée, évolutive, avec un retentissement sur la
                        vie quotidienne. Elle peut générer des incapacités, voire des complications graves.</br>
                        Les maladies chroniques comprennent les cardiopathies, les accidents
                        vasculaires cérébraux, les cancers, les maladies respiratoires chroniques
                        et les diabètes. La baisse de l’acuité visuelle et la cécité, la baisse de
                        l’acuité auditive et la surdité, ainsi que les affections bucco-dentaires et
                        génétiques constituent d’autres maladies chroniques qui représentent
                        une fraction non négligeable de la charge mondiale de morbidité.
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" src="img/05.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2 class="display-4">Pratique de sport </h2>
                    <canvas id="sport_chart" style="max-width: 500px;"></canvas>
                    <br>
                    Tout le monde sait qu’il est important de pratiquer une activité sportive lorsque l’on veut
                    perdre du poids par exemple.
                    Cependant, une activité physique a bien d’autres vertus pour la santé et pour le bien-être au
                    quotidien. </br>
                    Faire de l’exercice est bon pour la santé mais également pour se sentir bien dans sa tête et
                    dans son corps. Quelle que soit l’activité que l’on pratique, c’est un moment où l’on ne pense à
                    rien d’autres, où l’on évacue toutes les tensions accumulées durant la journée et surtout c’est
                    un excellent moyen de déstresser. Pour la santé, les avantages d’une activité sportive ne sont
                    plus à prouver </br>
                    Par rapport à la pratique du sports , les participants étaient à moitié pratiquants et l'autre
                    motié non pratiquants
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Footer -->
<footer class="py-5 bg-black">
    <div class="container">
        <p class="m-0 text-center text-white small"> Copyright &copy; M.Kamilia </p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Material Design Bootstrap -->
<link href="css/mdb.min.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

<!-- My Charts -->
<script type="text/javascript" src="js/charts/age_chart.js"></script>
<script type="text/javascript" src="js/charts/happiness_chart.js"></script>
<script type="text/javascript" src="js/charts/chronic_disease_chart.js"></script>
<script type="text/javascript" src="js/charts/sport_chart.js"></script>
</body>

</html>
