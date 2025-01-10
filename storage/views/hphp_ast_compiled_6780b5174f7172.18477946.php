<?php extract(Piewpiew\view\View::$view_vars['admin.home']->get_data()); ?><?php $___vars___->start_block("header"); ?>
    <a href="/admin" class="navigationItem active">
        <img src="" />
        <p>Home</p>
    </a>
    <a href="/admin/confirm" class="navigationItem">
        <img src="asset/image/generateur.png" alt="">
        <p>Confirmer les transactions</p>
    </a>
<?php $___vars___->end_block(); ?>

<?php $___vars___->start_block("body"); ?>
    <h1>Home page - Admin</h1>
<?php $___vars___->end_block(); ?>

<?php $___vars___->join('templatehome', ['title' => 'Home page - Admin'] + compact('user', 'isAdmin')); ?><?php $___vars___->use_join(); ?>