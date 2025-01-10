<?php extract(Piewpiew\view\View::$view_vars['admin.confirm']->get_data()); ?><?php $___vars___->start_block("head"); ?>
    <style>
        th {
            text-transform: uppercase;
        }
    </style>
<?php $___vars___->end_block(); ?>

<?php $___vars___->start_block("header"); ?>
    <a href="/admin" class="navigationItem active">
        <img src="" />
        <p>Home</p>
    </a>
    <a href="/admin/confirm" class="navigationItem">
        <img src="/asset/image/generateur.png" alt="">
        <p>Confirmer les transactions</p>
    </a>
<?php $___vars___->end_block(); ?>


<?php $___vars___->add_template('ligne_table', '


    <tr>
        <td><?= $id ?></td>
        <td><?= $user ?></td>
        <td><?= $montant ?></td>
        <td><?= $helper($verif) ?></td>
        <td>
            <?php if($verif): ?>
                <p>-</p>
            <?php else: ?>
                <a href="/admin/doconfirm?id=<?= $id ?>" class="btn btn-success">Confirmer</a>
            <?php endif; ?>
        </td>
    </tr>
', compact('helper')) ?>

<?php $___vars___->start_block("body"); ?>

    <div class="table-responsive col-md-12">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>user</th>
                    <th>montant</th>
                    <th>verifie</th>
                    <th>confirmer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($transactions as $transaction): ?>
                    <?php $___vars___->use_template('ligne_table', ['id' => $transaction->transaction_id,'user' => $transaction->user->user_name,'montant' => $transaction->transaction_montant, 'verif' => $transaction->transaction_verif]); ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?php $___vars___->end_block(); ?>

<?php $___vars___->join('templatehome', ['title' => 'Admin - Confirmer Transaction'] + compact('user', 'isAdmin')); ?><?php $___vars___->use_join(); ?>