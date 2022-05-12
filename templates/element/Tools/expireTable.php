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
                <?= __('Tool') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'name' => 'tools.name', 'class' => 'invert asc']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A', 'name' => 'tools.name', 'class' => 'invert desc']);  ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Lifetime') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z',  'class' => 'invert asc']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A',  'class' => 'invert desc']);  ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Produced quantity') ?>
                <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z',  'class' => 'invert asc']);  ?>
                <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A',  'class' => 'invert desc']);  ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Expected expiration') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc']);  ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés Z-A', 'alt' => 'Rendezés Z-A',  'class' => 'invert desc']);  ?>
                </span>
            </th>
            <th class="d-none d-lg-table-cell" scope="col">
                <?= __('Inactivation') ?>

            </th>
        </tr>
    </thead>
    <tbody>



        <?php foreach ($tools as $tool) : ?>
            <?php if ($tool->lifetimes->lifetime > 80) {
                $class = "tdOldTool";
            } else {
                $class = "";
            } ?>
            <tr class="item-row <?= $class ?>">
                <th scope="row"> <?= $tool->publishers->name ?></th>

                <td><?= $tool->name ?></td>


                <td><?= $tool->lifetimes->lifetime ?> %</td>
                <td><?= $tool->lifetimes->quantity . " " . __('pc') ?></td>
                <td><?= $tool->lifetimes->elevules ?> days left</td>

                <td class="d-none d-lg-table-cell" align="center" valign="middle">


                    <span>

                        <?= $this->Html->image('delete.png', ['title' => 'Delete', 'alt' => 'delete', 'class' => 'inactivateTool hover', "toolId" => $tool->id],); ?>




                    </span>
                </td>
            <?php endforeach; ?>



            </tr>




    </tbody>
</table>