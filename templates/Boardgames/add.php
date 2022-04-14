<div class="modal fade" id="newboardgame" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Új társasjáték</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <div class="col-12">

                        <?php echo $this->Form->create($boardgame, array('id' => 'form-inside', 'method' => 'post')); ?>

                        <?php echo $this->Form->label('Kiadó'); ?>
                        <?php echo $this->Form->select("Boardgames.publisher_id", $publishers, array("label" => "Kiadó", "class" => "form-select", "placeholder" => "Kiadó", 'empty' => true)); ?>

                        <?php echo $this->Form->control('Boardgames.name', array('label' => 'Társasjáték neve', 'class' => 'mb-3 form-control rounded', 'type' => 'text')); ?>

                        <div class="row" id="all_div">

                            <div class="col-5 parts" id="part_div">
                                <?php echo $this->Form->control('gameparts[0].name', array('label' => 'Alkatrész neve', 'class' => 'mb-3 form-control rounded')); ?>
                            </div>

                            <div class="col-4 materials" id="material_div">
                                <?php echo $this->Form->label('Anyaga'); ?>
                                <?php echo $this->Form->select("gameparts[0].material_id", $materials, array('class' => 'form-select', 'empty' => true)); ?>
                            </div>

                            <div class="col-2 numbers" id="number_div">
                                <?php echo $this->Form->control('gameparts[0].quantity', array('label' => 'db', 'class' => 'mb-3 form-control rounded')); ?>
                            </div>

                            <div class="col-1">
                                <?= $this->Html->image('add.png', ['title' => 'add', 'alt' => 'add', 'class' => 'f-right', 'id' => 'add']); ?>

                            </div>
                        </div>
                        <?php echo $this->Form->end(); ?>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bezár</button>
                    <button type="button" class="btn btn-primary" id="bgnewsave">Mentés</button>
                </div>
            </div>
        </div>
    </div>
</div>

<button id="shownewbg" type="button" class="hidden" data-bs-toggle="modal" data-bs-target="#newboardgame">
    Új társasjáték felvétele
</button>




<?= $this->Html->script('addbgnewline') ?>

<script>
    $('#bgnewsave').click(function() {

        $.ajax({
            url: '<?= $this->Url->build(['controller' => 'Boardgames', 'action' => 'add',]); ?>',
            data: $('#form-inside').serialize()

                ,
            type: "JSON",
            method: "post",
            success: function(response) {
                console.log(response);

                if (response.success) {
                    if (response.success == 1) {
                        /* window.location.href = "<?= $this->Url->build(['controller' => 'Boardgames', 'action' => 'index']); ?>";*/
                        $('#bgnewbezar').trigger('click');
                        reloadBgList();
                    } else {
                        /* hibaüzenetek és validálás */
                    }
                }

                /*$('#modal-container').html(response);
                $('#pubnewsave').trigger('click');*/
            }
        });
    });

    $('#newboardgame').keydown(function(e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            $('#bgnewsave').trigger('click');
        }
    })
</script>