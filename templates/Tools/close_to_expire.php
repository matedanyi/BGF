<div class="container col-lg-10 col-12" id="forthdiv">

    <div class="row align-items-center" id="sixthdiv">
        <span>Tools list of close to expire </span>
    </div>

    <div class="row align-items-center" id="fifthdiv">

        <div class="col-6 row">

            <?= $this->Form->create($searchGame, array("class" => "row")) ?>
            <div class="col-6 ">
                <?= $this->Form->input('name', array("class" => "form-control rounded", "placeholder" => "Search", "aria-label" => "Search", "aria-describedby" => "search-addon", 'label' => __('Search', true) . ':')); ?>

            </div>
            <div class="col-3">

                <?= $this->Form->button(
                    'Search',
                    array(
                        "class" => "btn btn-outline-primary rounded",
                        "type" => "submit"
                    )
                ); ?>
            </div>

            <div class="col-3">

                <?php
                if (!$hideCancel)
                    echo $this->Html->link(
                        'Mégse',
                        '/tools/closeToExpire',
                        ['class' => 'btn btn-outline-primary rounded megse ', "id" => "kereses", "role" => "button"]
                    );

                ?>
            </div>

        </div>
        <div class="col-6">

            <?= $this->Html->link(
                'Generate tools',
                '/tools/startGenerateTools',
                array(
                    "class" => "btn btn-outline-primary rounded",
                    "type" => "button"
                )
            ); ?>

            <button type="button" class="btn btn-outline-primary f-right" id="export-button">Export</button>
        </div>
    </div>



    <div id="publist">

        <?= $this->element('Tools\expireTable'); ?>



        <div class="col-12">
            <ul class="pagination">
                <?= $this->Paginator->prev("<<") ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(">>") ?>
            </ul>
        </div>

    </div>
</div>
</div>