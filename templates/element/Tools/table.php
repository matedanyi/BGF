<table class="table table-success  table-striped table-hover" id="toolsTable">
    <thead>
        <tr>
            <th scope="col">
                <?= __('Kiadó') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'name' => 'publishers.name', 'class' => 'invert asc']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A', 'name' => 'publishers.name', 'class' => 'invert desc']);  ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Szerszám neve') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'name' => 'tools.name', 'class' => 'invert asc']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A', 'name' => 'tools.name', 'class' => 'invert desc']);  ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Élettartam') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z',  'class' => 'invert asc']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A',  'class' => 'invert desc']);  ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Gyártott mennyiség') ?>
                <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z',  'class' => 'invert asc']);  ?>
                <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A',  'class' => 'invert desc']);  ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Várható elévülés') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A',  'class' => 'invert desc']);  ?>
                </span>
            </th>
            <th class="d-none d-lg-table-cell" scope="col">
                <?= __('Inaktiválás') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z',  'class' => 'invert asc']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A', 'class' => 'invert desc']);  ?>
                </span>
            </th>
        </tr>
    </thead>
    <tbody>



        <?php foreach ($tools as $tool) : ?>
            <?php if ($tool->lifetimes->lifetime > 10) {
                $class = "tdOldTool";
            } else {
                $class = "";
            } ?>
            <tr class="item-row <?= $class ?>">
                <th scope="row"> <?= $tool->publishers->name ?></th>

                <td><?= $tool->name ?></td>


                <td><?= $tool->lifetimes->lifetime ?> %</td>
                <td><?= $tool->lifetimes->quantity ?></td>
                <td><?= $tool->lifetimes->elevules ?> nap múlva</td>

                <td class="d-none d-lg-table-cell" align="center" valign="middle">
                    <span>

                        <?= $this->Html->image('edit.png', ['title' => 'Módosítás', 'alt' => 'módosítás', 'data-bs-toggle' => 'modal', 'data-bs-target' => '#modifyboardgame']);  ?>
                        <?= $this->Html->image('delete.png', ['title' => 'Törlés', 'alt' => 'delete']);  ?>

                    </span>
                </td>
            <?php endforeach; ?>



            </tr>




    </tbody>
</table>