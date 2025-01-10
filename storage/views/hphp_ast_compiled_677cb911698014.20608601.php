<?php extract(Piewpiew\view\View::$view_vars['recharge']->get_data()); ?><?php $___vars___->start_block("header"); ?>
    <a href="." class="navigationItem">
        <img src="" />
        <p>Home</p>
    </a>
    <a href="cadeau" class="navigationItem">
        <img src="asset/image/generateur.png" alt="">
        <p>Générateur de Cadeaux</p>
    </a>
    <a href="recharge" class="navigationItem active">
        <img src="asset/image/recharge.png" alt="">
        <p>Recharge du Compte</p>
    </a>
<?php $___vars___->end_block(); ?>

<?php $___vars___->start_block("body"); ?>
    <div class="containerFormulaire col-md-6 col-md-offset-3">
        <h1 style="color: white;">Deposer de l'argent</h1>
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Solde</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $solde ?>$" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Montant</label>
                <input type="number" name="montant" class="form-control" id="exampleInputEmail1"
                    placeholder="Montant ..." required>
            </div>
            <button type="submit" class="btn btn-primary" id="but">Deposer</button>
        </form>
    </div>

    <script>
    sortir('but')
    </script>
<?php $___vars___->end_block(); ?>

<?php $___vars___->join('templatehome', ['title' => 'Deposer de l\'argent'] + compact('user')); ?><?php $___vars___->use_join(); ?>