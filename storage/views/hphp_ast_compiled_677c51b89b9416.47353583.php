<?php extract(Piewpiew\view\View::$view_vars['home']->get_data()); ?><?php $___vars___->start_block("header"); ?>
    <a href="" class="navigationItem active">
        <img src="" />
        <p>Home</p>
    </a>
    <a href="cadeau" class="navigationItem">
        <img src="asset/image/generateur.png" alt="">
        <p>Générateur de Cadeaux</p>
    </a>
    <a href="recharge" class="navigationItem">
        <img src="asset/image/recharge.png" alt="">
        <p>Recharge du Compte</p>
    </a>
<?php $___vars___->end_block(); ?>

<?php $___vars___->start_block("body"); ?>
    <h1>Home page</h1>
<?php $___vars___->end_block(); ?>

<?php $___vars___->join('templatehome', ['title' => 'Home page'] + compact('user')); ?><?php $___vars___->use_join(); ?>