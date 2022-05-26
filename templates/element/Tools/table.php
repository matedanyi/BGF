<table class="table table-success  table-striped table-hover" id="area-export">
    <thead>
        <tr>
            <th scope="col">
                <?= __('Publisher') ?>
                <span class="f-right">
                </span>
            </th>
            <th scope="col">
                <?= __('Tool') ?>
                <span class="f-right">
                </span>
            </th>
            <th scope="col">
                <?= __('Lifetime') ?>
                <span class="f-right">
                </span>
            </th>
            <th scope="col">
                <?= __('Produced quantity') ?>
                <span class="f-right">
                </span>
            </th>
            <th scope="col">
                <?= __('Expected expiration') ?>
                <span class="f-right">
                </span>
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
                <td><?= $tool->lifetimes->quantity . " " . __('Pc') ?></td>
                <td><?= $tool->lifetimes->elevules ?> days left</td>


            <?php endforeach; ?>



            </tr>




    </tbody>
</table>