<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.9/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,600">
    <link rel="stylesheet" href="/termennetwerk/assets/css/style.css?v=4">
    <title>Demo Reconciliation service | Netwerk Digitaal Erfgoed</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light border-bottom shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/termennetwerk/nl"><img src="/termennetwerk/assets/images/nl/logo.png?v=2" height="30" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/termennetwerk/nl">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/termennetwerk/nl/faq">FAQ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/termennetwerk/en">English</a>
                            <a class="dropdown-item active" href="/termennetwerk/nl">Nederlands</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container pt-3 pt-md-5">
        <h1 class="display-4 text-center">Demo Reconciliation service</h1>
        <p class="lead text-center">Demo van een Reconciliation service op het Termennetwerk</p>
        <div class="content">

            <p>
                <br>
            </p>
            <h2 class="display-5">Reconciliation service in OpenRefine</h2>
            <p>OpenRefine biedt een reconciliatie functie waarmee je de waardes in een kolom kan omzetten "van strings naar links". Het <a href="/termennetwerk/nl">Termennetwerk</a> is een dienst van het Netwerk Digitaal Erfgoed voor het vinden van termen in terminologiebronnen, zoals thesauri, classificatiesystemen en referentielijsten. Er is een prototype en een API beschikbaar die gebruikt kan worden om termen op te zoeken. Bovenop de API van het prototype van het Termennetwerk is nu voor demo doeleinden een <a href="https://github.com/OpenRefine/OpenRefine/wiki/Reconciliation-Service-API" target="_new">Reconciliation Service API</a> gemaakt die binnen <a href="http://openrefine.org/" target="_new">OpenRefine</a> gebruikt kan worden.</p>

            <p>
                <br>
            </p>

            <h2 class="display-5">Toevoegen van een Reconciliation service in OpenRefine</h2>

            <p>Eenmalig dient een Reconciliation service voor een specifieke dataset in het Termennetwerk toegevoegd te worden. Hierna kan de service geselecteerd worden voor gebruik. NB: waar het Termennetwerk bevraagd kan worden op meerdere datasets, kan deze demo van Reconciliation via het Termennetwerk maar een enkele dataset tegelijkertijd aan.</p>
            <ul>
                <li>Kies in het geopende project op het pijltje naast een kolomkop en kies daar <strong>Reconcile > Start reconciling</strong>
                    <br><img vspace="10" src="images/1.png"></li>
                <li>Klik op de knop <strong>Add Standard Service...</strong>
                    <br><img vspace="10" src="images/2.png"></li>
                <li>Vul het adres in van de gewenste Reconciliation service die het Termennetwerk bevraagd voor de geselecteerde dataset.
                    <br>
                    <img vspace="10" src="images/3.png">
                    <br> Gebruik een URL uit onderstaande tabel met in het Termennetwerk beschikbare datasets en klik op <strong>Add Service</strong>.
                    <br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Dataset</th>
                                <th>URL Reconciliation service</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($datasets as $key=>$name) { echo '<tr><th width="35%">'.$name.'</th><td>http://demo.netwerkdigitaalerfgoed.nl/termennetwerk/reconciliation/?dataset='.$key.'</td></tr>'; } ?>
                        </tbody>
                    </table>
                </li>
            </ul>
            <p>
                <br>
            </p>

            <h2 class="display-5">Gebruik maken een Reconciliation service in OpenRefine</h2>
            <ul>
                <li>Kies in het geopende project op het pijltje naast de kolomkop van de kolom met waarden die ge-reconciled moet worden en kies daar <strong>Reconcile > Start reconciling</strong><br><img src="images/1.png" vspace="10"></li>
                <li>Selecteer de gewenste service, bijvoorbeeld de 'Plaatsen in de Nederlandse topografie door de tijd (Erfgeo via proxy)'.<br><img vspace="10" src="images/5.png"></p>
                <li>In deze demo van Reconciliation via het Termennetwerk kan er geen informatie van andere kolommen gebruikt worden. Klik op <strong>Start Reconciling</strong>. Na enige tijd verschijnen de resultaten van de uitgevoerde zoekopdrachten in het Termennetwerk, waarna een materiedeskundige/collectiebeheerder de juiste keuzes kan maken. Het resultaat (in dit voorbeeld) zijn Geonames URI's voor plaatsnamen.<br><img src="images/6.png" vspace="10"></li>
			</ul>
        </div>
    </div>

    <footer class="text-muted border-top">
        <div class="container">
            <p>Een initiatief van het <a href="https://www.netwerkdigitaalerfgoed.nl/">Netwerk Digitaal Erfgoed</a>, in samenwerking met <a href="https://www.clariah.nl/">CLARIAH</a></p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.9/js/bootstrap-select.min.js"></script>
</body>

</html>