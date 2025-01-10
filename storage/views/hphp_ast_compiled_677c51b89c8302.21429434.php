<?php extract(Piewpiew\view\View::$view_vars['templatehome']->get_data()); ?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/asset/css/home.css">
    <link rel="stylesheet" href="/asset/css/entre.css">
    <link rel="stylesheet" href="/asset/css/sortir.css">


    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/asset/js/animation.js"></script>

    <?php $___vars___->use('head'); ?>

</head>

<body>
    <div class="backGround">
        <img src="/asset/image/back.jpg" alt="">
        <div class="baclLinear"></div>
    </div>
    <header class="col-md-3 entre4 element4">
        <a href="#" class="titleHeader">
            <img src="/asset/image/profil.png" alt="">
            <div>
                <?php if($isAdmin ?? false): ?>
                    <h1><?= $user->admin_name ?></h1>
                    <p><?= strtolower($user->admin_name) ?>@gmail.com</p>
                <?php else: ?>
                    <h1><?= $user->user_name ?></h1>
                    <p><?= strtolower($user->user_name) ?>@gmail.com</p>
                <?php endif; ?>
            </div>
        </a>
        <nav>
            <?php $___vars___->use('header'); ?>
        </nav>
    </header>
    <section class="col-md-9 col-md-offset-3">
        <?php $___vars___->use('body'); ?>
    </section>
</body>

</html>