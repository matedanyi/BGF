<table class="table table-success  table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">
                <?= __('Neve') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'name' => 'publishers.name', 'class' => 'invert asc']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A', 'name' => 'publishers.name', 'class' => 'invert desc']);  ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Társasjátékok száma') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'name' => 'publisherStats.ossz', 'class' => 'invert asc']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A', 'name' => 'publisherStats.ossz', 'class' => 'invert desc']);  ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Szerszámok száma') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'name' => 'publisher_tool_stats.ossz', 'class' => 'invert asc']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A', 'name' => 'publisher_tool_stats.ossz', 'class' => 'invert desc']);  ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Elmúlt 30 napi gyártás') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A', 'class' => 'invert desc']);  ?>
                </span>
            </th>
            <th class="d-none d-lg-table-cell" scope="col">
                <?= __('Funkciók') ?>

            </th>
        </tr>
    </thead>

    <tbody>

        <?php foreach ($publishers as $publisher) : ?>
            <tr>
                <th scope="row"><?= $publisher->name ?></th>

                <td><?= $publisher->publisherstats->ossz . " " . __('db') ?></td>
                <td><?= $publisher->publishertoolstats->ossz . " " . __('db') ?></td>
                <td><?= $publisher->last30dayspublishers->ossz . " " . __('db') ?></td>
                <td class="d-none d-lg-table-cell" align="center" valign="middle">
                    <span>


                        <?= $this->Html->image('edit.png', ['title' => 'Módosítás', 'alt' => 'módosítás', 'class' => 'modifypub', "pubid" => $publisher->id]);  ?>
                        <?= $this->Html->image('delete.png', ['title' => 'Törlés', 'alt' => 'delete']);  ?>
                        <?= $this->Html->image('tool.png', ['title' => 'Új szerszám generálása', 'alt' => 'generalás']);  ?>
                    </span>
                </td>

            <?php endforeach; ?>
            </tr>




    </tbody>
</table>