<table class="table table-success  table-striped table-hover" id="area-export">
    <thead>
        <tr>
            <th scope="col"><?= __('Gamepart') ?>
                <span class="f-right">
                </span>
                </span>
            </th>
            <th scope="col"><?= __('Quantity') ?>
                <span class="f-right">
                </span>
            </th>
            <th scope="col">
                <?= __('Boardgame') ?>
                <span class="f-right">
                </span>
            </th>


        </tr>


    </thead>
    <tbody>



        <?php foreach ($gameparts as $gamepart) : ?>
            <tr>
                <th scope="row"> <?= $gamepart->name ?></th>

                <td><?= $gamepart->quantity . " " . __('Pc') ?></td>

                <td><?= $gamepart->boardgames->name  ?> </td>

                </td>
            <?php endforeach; ?>




            </tr>




    </tbody>
</table>