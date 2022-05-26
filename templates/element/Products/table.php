<table class="table table-success  table-striped table-hover" id="area-export">
    <thead>
        <tr>
            <th scope="col">
                <?= __('Publisher') ?>
                <span class="f-right">
                </span>
            </th>
            <th scope="col">
                <?= __('Boardgame') ?>
                <span class="f-right">
                </span>
            </th>
            <th scope="col">
                <?= __('Quantity') ?>
                <span class="f-right">
                </span>
            </th>
            <th scope="col">
                <?= __('Production date') ?>
                <span class="f-right">
                </span>
            </th>

        </tr>
    </thead>

    <tbody>



        <?php foreach ($products as $product) : ?>
            <tr>
                <th scope="row"> <?= $product->publishers->name ?></th>

                <td><?= $product->boardgames->name ?></td>
                <td><?= $product->quantity . " " . __('Pc') ?> </td>
                <td><?= $product->production_date->i18nFormat('dd-MMM-yyyy') ?></td>


            <?php endforeach; ?>
            </tr>

    </tbody>
</table>