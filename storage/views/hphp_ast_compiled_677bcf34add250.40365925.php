<?php extract(Piewpiew\view\View::$view_vars['listeCadeaux']->get_data()); ?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/listeCadeaux.css">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>
    <a href="/" class="retour btn btn-default">Cancel</a>
    <button type="button" id="buy-btn" class="btn btn-success"
        style="position: fixed; top: 1em; right: 1em; z-index: 2001;">Acheter</button>
    <div class="backGround">
        <img src="asset/image/back.jpg" alt="">
    </div>
    <h1 class="bigTitle">Liste des cadeaux genere</h1>
    <div class="container">
        <form action="buy-cadeau" method="post" style="display: contents;">
            <?php foreach($types as $type): ?>
                <?php if(($count = $nombres[$type['id']]) <= 0): ?>
                    <?php continue ; ?>
                <?php endif; ?>
                <div class="col-md-6">
                    <div class="divType">
                        <h1 class="titleDiv">
                            <?= $type['nom'] ?> : <?= $count ?>
                            <button class="btn btn-primary" data-random-btn="<?= $type['id'] ?>">Randomiser</button>
                        </h1>
                        <div class="listCadeau" data-cadeau="<?= $type['id'] ?>" data-needed="<?= $count ?>">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <input type="submit" value="submit" style="display: none;" id="submit-btn">
        </form>
    </div>
    <script src="asset/js/cadeaux.js"></script>
    <script>
        const types = <?= json_encode($types) ?>;
        const cadeaux = <?= json_encode($cadeaux) ?>;
        const solde = <?= $solde ?>;
        const count = <?= json_encode($nombres) ?>;

        const randomPickers = {};

        for (const i in cadeaux)
            randomPickers[i] = new RandomPicker(cadeaux[i]);

        const cadeauTypes = document.body.querySelectorAll('[data-cadeau]');

        cadeauTypes.forEach(e => {
            let typeId = e.getAttribute('data-cadeau');
            let n = e.getAttribute('data-needed');
            const el = randomPickers[typeId].getRandomElements(n);

            let i = 0;
            el.forEach(element => {
                let div = templateCadeau(element, i);
                e.appendChild(div);
                i++;
            });
        });

        document.body.addEventListener('click', event => {
            if (event.target.matches('[data-random-btn]')) {
                event.preventDefault();
                const cadeauContainer = document.body.querySelector(`[data-cadeau="${event.target.getAttribute('data-random-btn')}"]`);

                let typeId = cadeauContainer.getAttribute('data-cadeau');
                let n = cadeauContainer.getAttribute('data-needed');
                const el = randomPickers[typeId].getRandomElements(n);
                Array.from(cadeauContainer.children).forEach(e => e.remove());

                let i = 0;
                el.forEach(element => {
                    let div = templateCadeau(element, i);
                    cadeauContainer.appendChild(div);
                    i++;
                });
                dummyImage();
            }
        });

        dummyImage();

        document.body.addEventListener('click', event => {
            if (event.target.matches('[data-change-cadeau]')) {
                const but = event.target;
                const butTypeId = but.getAttribute('data-type');
                const index = but.getAttribute('data-index');

                randomPickers[butTypeId].changeValue(index);

                let cadeauType = document.body.querySelector(`[data-cadeau="${butTypeId}"]`);
                Array.from(cadeauType.children).forEach(e => e.remove());

                const el = randomPickers[butTypeId].getElement();

                let i = 0;
                el.forEach(element => {
                    let div = templateCadeau(element, i);
                    cadeauType.appendChild(div);
                    i++;
                });

                dummyImage();
            }
        });
    </script>

    <script>
        document.getElementById('buy-btn').onclick = () => {
            let sum = 0;
            document.querySelectorAll('[data-cadeau-prix]').forEach(e => sum += Number(e.getAttribute(
                'data-cadeau-prix')));
            if (solde < sum) {
                alert('Votre solde n\'est pas suffisant, ' + (sum - solde).toFixed(2) + ' $ manquante.');
                return;
            }
            document.getElementById('submit-btn').click();
        };
    </script>
</body>

</html>