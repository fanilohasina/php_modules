<?php extract(Piewpiew\view\View::$view_vars['formcadeau']->get_data()); ?><?php $___vars___->start_block("header"); ?>
    <a href="." class="navigationItem">
        <img src="" />
        <p>Home</p>
    </a>
    <a href="" class="navigationItem active">
        <img src="asset/image/generateur.png" alt="">
        <p>Générateur de Cadeaux</p>
    </a>
    <a href="recharge" class="navigationItem">
        <img src="asset/image/recharge.png" alt="">
        <p>Recharge du Compte</p>
    </a>
<?php $___vars___->end_block(); ?>

<?php $___vars___->start_block("body"); ?>
    <div class="containerFormulaire col-md-6 col-md-offset-3">
        <!-- <h1 style="color: white;">Generer des cadeaux</h1> -->
        <form action="/docadeau" method="get">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombres des garcons</label>
                <input type="number" name="Garcon" class="form-control" id="exampleInputEmail1" placeholder="Garcons ..."
                    required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nombres des filles</label>
                <input type="number" name="Fille" class="form-control" id="exampleInputEmail1" placeholder="Filles ..."
                    required>
            </div>
            <button type="submit" class="btn btn-primary" id="but">Generer les cadeaux</button>
        </form>
    </div>
<?php $___vars___->end_block(); ?>

<?php $___vars___->join('templatehome', ['title' => 'Generer des cadeaux'] + compact('user')); ?><?php $___vars___->use_join(); ?>