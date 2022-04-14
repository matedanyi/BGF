<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?= $this->Html->css('style') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?= $this->Html->script('script') ?>
    <?php echo $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken')); ?>
    <script>
        var csrfToken = $('meta[name="csrfToken"]').attr('content');
    </script>

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['style.css']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <?= $this->element('spinner'); ?>
    <header>
        <div class="container-lg" id="maincontainer">
            <div class="row align-items-center" id="firstdiv">
                <div class="col-2">
                    <span class="d-none d-lg-block f-left">
                        <?= $this->Html->image('menu.png', ['title' => 'menü', 'alt' => 'menü', 'id' => 'panel-nyito']);  ?>

                    </span>
                    <?=

                    $this->element('topmenu');
                    ?>
                </div>
                <div class="col-8">
                    <h1>Board Game Factory<h1>
                </div>
                <div class="col-2">
                    <span>username</span>
                    <span class="f-right">
                        <?= $this->Html->image('logout.png', ['title' => 'logout', 'alt' => 'logout', 'id' => 'logout']);  ?>


                    </span>
                </div>

            </div>
        </div>

    </header>

    <main class="main">
        <div class="container-lg" id="container">
            <?= $this->Flash->render() ?>
            <div class="row" id="seconddiv">
                <?= $this->element('sidemenu'); ?>
                <?= $this->fetch('content') ?>
                <div id='modal-container'></div>
                <?= $this->element('ajax'); ?>

            </div>
        </div>
    </main>

    <footer>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>