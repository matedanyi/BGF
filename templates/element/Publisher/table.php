<table class="table table-success  table-striped table-hover" id="area-export">
    <thead>
        <tr>
            <th scope="col">
                <?= __('Publisher') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'name' => 'publishers.name', 'class' => 'invert asc']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A', 'name' => 'publishers.name', 'class' => 'invert desc']);  ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Boardgames') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'name' => 'publisherStats.ossz', 'class' => 'invert asc']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A', 'name' => 'publisherStats.ossz', 'class' => 'invert desc']);  ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Tools') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'name' => 'publisher_tool_stats.ossz', 'class' => 'invert asc']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A', 'name' => 'publisher_tool_stats.ossz', 'class' => 'invert desc']);  ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Last 30 days production') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A', 'class' => 'invert desc']);  ?>
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

                <td><?= $publisher->publisherstats->ossz . " " . __('pc') ?></td>
                <td><?= $publisher->publishertoolstats->ossz . " " . __('pc') ?></td>
                <td><?= $publisher->last30dayspublishers->ossz . " " . __('pc') ?></td>
                <td class="d-none d-lg-table-cell" align="center" valign="middle">
                    <span>


                        <?= $this->Html->image('edit.png', ['title' => 'Módosítás', 'alt' => 'módosítás', 'class' => 'modifypub hover', "pubid" => $publisher->id]);  ?>
                        <?= $this->Html->image('delete.png', ['title' => 'Delete', 'alt' => 'delete', 'class' => 'hover']);  ?>
                        <?= $this->Html->image('tool.png', ['title' => 'Új szerszám generálása', 'alt' => 'generalás']);  ?>
                    </span>
                </td>

            <?php endforeach; ?>
            </tr>




    </tbody>
</table>