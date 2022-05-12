<table class="table table-success  table-striped table-hover" id="area-export">
    <thead>
        <tr>
            <th scope="col">
                <?= __('Publisher') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'boardgames.name']); ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'boardgames.name']); ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Boardgame') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'boardgames.name']); ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'boardgames.name']); ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Quantity') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'boardgames.name']); ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'boardgames.name']); ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Production date') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'products.production_date']); ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'products.production_date']); ?>
                </span>
            </th>
            <th class="d-none d-lg-table-cell" scope="col">
                <?= __('Menu') ?>
            </th>

        </tr>
    </thead>

    <tbody>



        <?php foreach ($products as $product) : ?>
            <tr>
                <th scope="row"> <?= $product->publishers->name ?></th>

                <td><?= $product->boardgames->name ?></td>
                <td><?= $product->quantity . " " . __('pc') ?> </td>
                <td><?= $product->production_date->i18nFormat('dd-MMM-yyyy') ?></td>

                <td class="d-none d-lg-table-cell" align="center" valign="middle">
                    <span>
                        <?= $this->Html->image('edit.png', ['title' => 'Módosítás', 'class' => 'hover', 'alt' => 'módosítás', 'data-bs-toggle' => 'modal', 'data-bs-target' => '#modifyboardgame']);  ?>
                        <?= $this->Html->image('delete.png', ['title' => 'Törlés', 'alt' => 'delete', 'class' => 'hover']);  ?>
                    </span>
                </td>
            <?php endforeach; ?>
            </tr>

    </tbody>
</table>