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
                <?= __('Produced quantity') ?> <span class="f-right">

                </span>
            </th>
            <th scope="col">
                <?= __('Expected expiration') ?>
                <span class="f-right">
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
                <td><?= $tool->lifetimes->quantity . " " . __('Pc') ?></td>
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

<script>
    console.log('szia');
    $('.inactivateTool').click(function() {
        $.ajax({
            url: '<?= $this->Url->build(['controller' => 'Tools', 'action' => 'inactivateTool',]); ?>',
            data: {
                id: $(this).attr('toolId')
            },
            type: "JSON",
            method: "post",
            success: function(response) {
                console.log('sadfs');
                reloadToolsList();
            }
        });
    });



    function reloadToolsList() {
        $('#valami').html('hali');
        $.ajax({
            url: '<?= $this->Url->build(['controller' => 'Tools', 'action' => 'close_to_expire',]); ?>',
            data: {

            },
            /*type: "JSON",*/
            method: "post",
            success: function(response) {
                $('#toolsList').html(response);
                console.log($('#toolsList'));
            }
        });
    }
</script>