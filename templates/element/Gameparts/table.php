<table class="table table-success  table-striped table-hover" id="area-export">
    <thead>
        <tr>
            <th scope="col"><?= __('Gamepart') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'name' => 'gameparts.name', 'class' => 'invert asc']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A', 'name' => 'gameparts.name', 'class' => 'invert desc']);  ?>
                </span>
                </span>
            </th>
            <th scope="col"><?= __('Quantity') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'name' => 'gameparts.quantity', 'class' => 'invert asc']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'name' => 'gameparts.quantity', 'class' => 'invert desc']);  ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Boardgame') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'name' => 'boardgames.name', 'class' => 'invert asc']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'name' => 'boardgames.name', 'class' => 'invert desc']);  ?>
                </span>
            </th>
            <th class="d-none d-lg-table-cell" scope="col"><?= __('Menu') ?>
            </th>


        </tr>


    </thead>
    <tbody>



        <?php foreach ($gameparts as $gamepart) : ?>
            <tr>
                <th scope="row"> <?= $gamepart->name ?></th>

                <td><?= $gamepart->quantity . " " . __('pc') ?></td>


                <td><?= $gamepart->boardgames->name  ?> </td>


                <td class="d-none d-lg-table-cell" align="center" valign="middle">
                    <span>
                        <?= $this->Html->image('edit.png', ['title' => 'Módosítás', 'alt' => 'módosítás', 'class' => 'hover modifygp', "gpid" => $gamepart->id]);  ?>
                        <?= $this->Html->image('delete.png', ['title' => 'Törlés', 'alt' => 'delete', 'class' => 'hover']);  ?>

                    </span>
                </td>
            <?php endforeach; ?>




            </tr>




    </tbody>
</table>