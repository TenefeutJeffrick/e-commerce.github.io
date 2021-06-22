<?php
    include_once './db/connection.php';
    $object=new Connection();
    $connection=$object->Connect();

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
        <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/css2.css">
    <link rel="stylesheet" href="css/css3.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <title>SGB sarl</title>
    </head>

    <body onload="render()">
        <header>
            <nav class="fixed-top navbar navbar-expand-md navbar-dark  text-while" style="background: #2EB26E">
                <a class="text-while navbar-brand" href="#">
                    <i class="fab fa-pagelines animate flash"></i>SOCIETE GENERAL DES BATISSEUR
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="toggle navigation"> <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto menu">
                        <li class="nav-item active">
                            <a href="./index.html" class="nav-link">Acceuil</a>
                        </li>
                    </ul>
                    <form class="form-inline mt-2 mt-md-0">
                        <a class="text-white nav-link" href="#">
                            <i class="text-info fas fa-shopping-cart"></i> Panier
                            <i style="color: yellow" id="cart_n"></i>
                        </a>
                    </form>
                </div>
            </nav>
        </header>
        <div class="container mt-3">
            <main role="main">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive-sm">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Produits</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Quantité</th>
                                        <th scope="col">Prix</th>
                                    </tr>
                                </thead>
                                <tbody id="table">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr class="featurette-divider">
            </main>
        </div>
        <!-- fin modal -->

        <div class="container">
            <footer>
                <p class="float-right">
                    <a href="#">HAUT</a>
                </p>
                <div class="row">ZEMGMO TENEFEUT JEFFRICK</div>
            </footer>
        </div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/903510007e.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/c72cdcdb5f.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src="js/wow.js"></script>
    <script src="js/main.js"></script>
    <script src="js/sweetalert.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="jQuery.js"></script>
    <script src="js/cart.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.5/sweetalert2.min.js" integrity="sha512-+uGHdpCaEymD6EqvUR4H/PBuwqm3JTZmRh3gT0Lq52VGDAlywdXPBEiLiZUg6D1ViLonuNSUFdbL2tH9djAP8g==" crossorigin="anonymous"></script>
    </body>

    </html>