<div class="modal fade" id="modifypublisher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modify publisher</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row justify-content-center">
                    <div class="col-8">


                        <?php echo $this->Form->create($publisher, array('id' => 'form-inside', 'method' => 'post')); ?>

                        <?php echo $this->Form->control('id', ['type' => 'hidden']); ?>

                        <?php echo $this->Form->control('name', array('label' => 'Publisher', 'class' => 'mb-3 form-control')); ?>
                        <?php echo $this->Form->end(); ?>

                    </div>

                    <div class="row justify-content-center">
                        <div class="col-8 d-flex justify-content-center mb-3">
                            <button onclick="myFunction()" type="button" class="btn btn-outline-primary rounded" id="showAddBoardgames">Add boardgames</button>
                        </div>




                        <div id="addBoardgamesOnPublisherModify" class="hidden">
                            <div class="modal-header">
                                <h5 class="" id="">Add boardgames</h5>
                                <button type="button" class="btn-close" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">


                                <div class="d-flex justify-content-center">
                                    <div class="col-11">
                                        <?php echo $this->Form->create($boardgame, array('id' => 'form-inside', 'method' => 'post')); ?>

                                        <?php echo $this->Form->label('Publisher'); ?>

                                        <? echo ('sziasztok') ?>
                                    </div>

                                    <div class="">
                                        <button type="button" class="btn btn-secondary">Close</button>
                                        <button type="button" class="btn btn-primary" id="bgnewsave">Save</button>
                                    </div>
                                </div>




                            </div>







                        </div>
                        <div class>
                            <ul class="nav nav-tabs  d-flex justify-content-around" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="boardgames-tab" data-bs-toggle="tab" data-bs-target="#boardgames" type="button" role="tab" aria-controls="home" aria-selected="true">Boardgames</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tools-tab" data-bs-toggle="tab" data-bs-target="#tools" type="button" role="tab" aria-controls="profile" aria-selected="false">Tools</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="productiondata-tab" data-bs-toggle="tab" data-bs-target="#productiondata" type="button" role="tab" aria-controls="contact" aria-selected="false">Production data</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="boardgames" role="tabpanel" aria-labelledby="home-tab">
                                    <table class="table table-success  table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name<span class="f-right">
                                                        <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'gameparts.name']); ?>
                                                        <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'gameparts.name']); ?>
                                                    </span>
                                                </th>
                                                <th class="d-none d-lg-table-cell" scope="col">Menu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($publisher["boardgames"] as $boardgame) : ?>
                                                <tr>
                                                    <th scope="row"><?= $boardgame->name ?></th>


                                                    <td class="d-none d-lg-table-cell" align="center" valign="middle">
                                                        <span>


                                                            <?= $this->Html->image('delete.png', ['title' => 'törlés', 'alt' => 'delete']);  ?>

                                                        </span>
                                                    </td>

                                                <?php // lapozót???   
                                            endforeach; ?>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tools" role="tabpanel" aria-labelledby="profile-tab">
                                    <table class="table table-success  table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name<span class="f-right">
                                                        <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'gameparts.quantity']); ?>
                                                        <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'gameparts.name']); ?>
                                                    </span>
                                                </th>
                                                <th scope="col">Lifetime<span class="f-right">
                                                        <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'gameparts.quantity']); ?>
                                                        <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'gameparts.name']); ?>
                                                    </span>
                                                </th>

                                                <th class="d-none d-lg-table-cell" scope="col">Expire date</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($publisher["lifetimes"] as $lifetime) : ?>
                                                <tr>
                                                    <th scope="row"><?= $lifetime->name ?></th>

                                                    <td>
                                                        <?= $lifetime->lifetime ?>
                                                    </td>

                                                    <td><?= $lifetime->elevules ?> days left
                                                    </td>



                                                <?php // lapozót???   
                                            endforeach; ?>
                                                </tr>









                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="productiondata" role="tabpanel" aria-labelledby="contact-tab">
                                    <table class="table table-success  table-striped table-hover">
                                        <thead>


                                            <tr>
                                                <th scope="col">Date:<span class="f-right">
                                                        <?= $this->Html->image('arrow_up.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert asc', 'name' => 'gameparts.quantity']); ?>
                                                        <?= $this->Html->image('arrow_down.png', ['title' => 'Rendezés A-Z', 'alt' => 'Rendezés A-Z', 'class' => 'invert desc', 'name' => 'gameparts.name']); ?>
                                                    </span>
                                                </th>
                                                <th class="d-none d-lg-table-cell" scope="col">Boardgame</th>
                                                <th class="d-none d-lg-table-cell" scope="col">Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($publisher["publisherboardgamesstats"] as $publisherboardgamesstats) : ?>
                                                <tr>
                                                    <th scope="row"><?= $publisherboardgamesstats->production_date->i18nFormat('dd-MMM-yyyy') ?></th>


                                                    <td><?= $publisherboardgamesstats->name ?>
                                                    </td>

                                                    <td><?= $publisherboardgamesstats->quantity ?>
                                                    </td>



                                                <?php // lapozót???   
                                            endforeach; ?>
                                                </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <br>




                    </div>
                    <div class="col-12">
                        <ul class="pagination">
                            <?= $this->Paginator->prev("<<") ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(">>") ?>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="pubmodifybezar">Close</button>
                        <button type="button" class="btn btn-primary" id="pubmodifysave">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <button id="shownewpublisher" type="button" class="hidden" data-bs-toggle="modal" data-bs-target="#modifypublisher">
        Add publisher
    </button>


    <script>
        $('#pubmodifysave').click(function() {

            $.ajax({
                url: '<?= $this->Url->build(['controller' => 'Publishers', 'action' => 'modify',]); ?>',
                data: $('#form-inside').serialize()

                    ,
                type: "JSON",
                method: "post",
                success: function(response) {
                    console.log(response);

                    if (response.success) {
                        if (response.success == 1) {
                            /* window.location.href = "<?= $this->Url->build(['controller' => 'Publishers', 'action' => 'index']); ?>";*/
                            $('#pubmodifybezar').trigger('click');
                            reloadPubList();
                        } else {
                            /* hibaüzenetek és validálás */
                        }
                    }

                    /*$('#modal-container').html(response);
                    $('#pubmodifybezar').trigger('click');*/
                }
            });
        });

        $('#modifypublisher').keydown(function(e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                $('#pubmodifysave').trigger('click');
            }
        })

        function myFunction() {
            var x = document.getElementById("addBoardgamesOnPublisherModify");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        // $('#showAddBoardgames').click(function() {
        //     //if ha van show akkor ugrik...
        //     $("#addBoardgamesOnPublisherModify").addClass("show");
        //     $("#addBoardgamesOnPublisherModify").removeClass("hidden");
        // });
    </script>