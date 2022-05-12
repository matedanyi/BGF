<table class="table table-success  table-striped table-hover" id="area-export">
    <thead>
        <tr>
            <th scope="col">
                <?= $this->Paginator->sort('Boardgame') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'boardgames.name']); ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'boardgames.name']); ?>

                </span>
            </th>
            <th scope="col">
                <?= $this->Paginator->sort('Publisher') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'publishers.name']); ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'publishers.name']); ?>

                </span>
            </th>
            <th scope="col">
                <?= __('Parts') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'gameStats.quantity']); ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'gameStats.quantity']); ?>

                </span>
            </th>
            <th scope="col">
                <?= __('Last 30 days production') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'last30daysproducts.name']); ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'last30daysproducts.name']); ?>

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
                <td><?= $boardgame->gamestats->ossz . " " . __('pc') ?> </td>
                <td><?= $boardgame->last30daysproducts->quantity . " " . __('pc') ?></td>

                <td class="d-none d-lg-table-cell" align="center" valign="middle">
                    <span>
                        <?= $this->Html->image('edit.png', ['title' => 'Modify', 'alt' => 'Modify', 'class' => 'modifybg hover', "bgid" => $boardgame->id]);  ?>
                        <?= $this->Html->image('delete.png', ['title' => 'Delete', 'alt' => 'Delete', 'class' => 'hover']);  ?>



                    </span>
                </td>
            <?php endforeach; ?>



            </tr>




    </tbody>
</table>