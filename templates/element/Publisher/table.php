<table class="table table-success  table-striped table-hover" id="area-export">
    <thead>
        <tr>
            <th scope="col">
                <?= __('Publisher') ?>
                <span class="f-right">
                </span>
            </th>
            <th scope="col">
                <?= __('Boardgames') ?>
                <span class="f-right">
                </span>
            </th>
            <th scope="col">
                <?= __('Tools') ?>
                <span class="f-right">
                </span>
            </th>
            <th scope="col">
                <?= __('Last 30 days production') ?>
                <span class="f-right">
                </span>
            </th>
            <th class="d-none d-lg-table-cell" scope="col">
                <?= __('Menu') ?>

            </th>
        </tr>
    </thead>

    <tbody>

        <?php foreach ($publishers as $publisher) : ?>
            <tr>
                <th scope="row"><?= $publisher->name ?></th>

                <td><?= $publisher->publisherstats->ossz . " " . __('Pc') ?></td>
                <td><?= $publisher->publishertoolstats->ossz . " " . __('Pc') ?></td>
                <td><?= $publisher->last30dayspublishers->ossz . " " . __('Pc') ?></td>
                <td class="d-none d-lg-table-cell" align="center" valign="middle">
                    <span>


                        <?= $this->Html->image('edit.png', ['title' => 'Módosítás', 'alt' => 'módosítás', 'class' => 'modifypub hover', "pubid" => $publisher->id]);  ?>

                    </span>
                </td>

            <?php endforeach; ?>
            </tr>




    </tbody>
</table>