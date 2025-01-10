<?php extract(Piewpiew\view\View::$view_vars['inscription']->get_data()); ?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/login.css">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="background">
        <img src="asset/image/maison-neige-noel.gif " alt="">
    </div>
    <section class="container">
        <div class="col-md-5 col-md-offset-1">
            <div class="containerForm">
                <h1>Sign up</h1>
                <form action="inscription" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">User name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                            placeholder="User name ...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputEmail1"
                            placeholder="Password ...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Confirm Password</label>
                        <input name="confirm" type="password" class="form-control" id="exampleInputEmail1"
                            placeholder="Confirm ...">
                    </div>
                    <button type="sumbit" class="btn btn-danger">Inscrir</button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="contentDescript">
                <img src="asset/image/logo1.png" alt="">
                <h1>Ho Ho Ho, c'est toi ?</h1>
                <h2>Quel cadeau veux-tu aujourd'hui ?</h2>
                <p>Bienvenue dans l’atelier magique du Père Noël, là où chaque clic transforme tes rêves en cadeaux
                    surprises. Connecte-toi et prépare-toi à être émerveillé !</p>
            </div>
        </div>
    </section>
</body>

</html>