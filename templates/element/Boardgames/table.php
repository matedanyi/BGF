<table class="table table-success  table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">
                <?= __('Társasjáték') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'boardgames.name']); ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'boardgames.name']); ?>

                </span>
            </th>
            <th scope="col">
                <?= __('Kiadó') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'publishers.name']); ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'publishers.name']); ?>

                </span>
            </th>
            <th scope="col">
                <?= __('Alkatrészek') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'gameStats.quantity']); ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'gameStats.quantity']); ?>

                </span>
            </th>
            <th scope="col">
                <?= __('Elmúlt 30 napi gyártás') ?>
                <span class="f-right">
                    <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'last30daysproducts.name']); ?>
                    <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'last30daysproducts.name']); ?>

                </span>
            </th>
            <th class="d-none d-lg-table-cell" scope="col"><?= __('Funkciók') ?></th>


        </tr>


    </thead>
    <tbody>



        <?php foreach ($boardgames as $boardgame) : ?>
            <tr>
                <th scope="row"> <?= $boardgame->name ?></th>

                <td><?= $boardgame->publishers->name ?></td>


                <td><?= $boardgame->gamestats->ossz . " " . __('db') ?> </td>
                <td><?= $boardgame->last30daysproducts->quantity . " " . __('db') ?>


                </td>

                <td class="d-none d-lg-table-cell" align="center" valign="middle">
                    <span>
                        <?= $this->Html->image('edit.png', ['title' => 'Módosítás', 'alt' => 'módosítás', 'class' => 'modifybg', "bgid" => $boardgame->id]);  ?>
                        <?= $this->Html->image('delete.png', ['title' => 'Törlés', 'alt' => 'delete']);  ?>



                    </span>
                </td>
            <?php endforeach; ?>



            </tr>




    </tbody>
</table>