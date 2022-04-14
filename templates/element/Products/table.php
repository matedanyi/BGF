<table class="table table-success  table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">
                <?= __('Kiadó') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'boardgames.name']); ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'boardgames.name']); ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Társasjáték') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'boardgames.name']); ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'boardgames.name']); ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Mennyiség') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'boardgames.name']); ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'boardgames.name']); ?>
                </span>
            </th>
            <th scope="col">
                <?= __('Gyártási idő') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'products.production_date']); ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'products.production_date']); ?>
                </span>
            </th>
            <th class="d-none d-lg-table-cell" scope="col">
                <?= __('Funkciók') ?>
            </th>

        </tr>
    </thead>

    <tbody>



        <?php foreach ($products as $product) : ?>
            <tr>
                <th scope="row"> <?= $product->publishers->name ?></th>

                <td><?= $product->boardgames->name ?></td>
                <td><?= $product->quantity . " " . __('db') ?> </td>
                <td><?= $product->production_date->i18nFormat('yyyy-MMM-dd') ?></td>

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