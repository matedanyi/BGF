<table class="table table-success  table-striped table-hover" id="area-export">
    <thead>
        <tr>
            <th scope="col">
                <?= $this->Paginator->sort('Boardgames.name') ?>
                <span class="f-right">
                </span>
            </th>
            <th scope="col">
                <?= $this->Paginator->sort('Boardgames.publishers.name') ?>
                <span class="f-right">

                </span>
            </th>
            <th scope="col">
                <?= __('Parts') ?>
                <span class="f-right">

                </span>
            </th>
            <th scope="col">
                <?= __('Last 30 days production') ?>
                <span class="f-right">

                </span>
            </th>
            <th class="d-none d-lg-table-cell" scope="col"><?= __('Menu') ?></th>
        </tr>
    </thead>


    <tbody>
        <?php foreach ($boardgames as $boardgame) : ?>
            <tr>
                <th scope="row"> <?= $boardgame->name ?></th>
                <td><?= $boardgame->publishers->name ?></td>
                <td><?= $boardgame->gamestats->ossz . " " . __('Pc') ?> </td>
                <td><?= $boardgame->last30daysproducts->quantity . " " . __('Pc') ?></td>

                <td class="d-none d-lg-table-cell" align="center" valign="middle">
                    <span>
                        <?= $this->Html->image('edit.png', ['title' => 'Modify', 'alt' => 'Modify', 'class' => 'modifybg hover', "bgid" => $boardgame->id]);  ?>



                    </span>
                </td>
            <?php endforeach; ?>



            </tr>




    </tbody>
</table>