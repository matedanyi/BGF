<div class="modal fade" id="newpublisher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New publisher</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <div class="col-8">
                        <?php echo $this->Form->create($publisher, array('id' => 'form-inside', 'method' => 'post')); ?>
                        <?php echo $this->Form->control('name', array('label' => 'Publisher', 'class' => 'mb-3 form-control')); ?>
                        <?php echo $this->Form->end(); ?>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="pubnewbezar">Close</button>
                    <button type="button" class="btn btn-primary" id="pubnewsave">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>

<button id="shownewpub" type="button" class="hidden" data-bs-toggle="modal" data-bs-target="#newpublisher">
    Add publisher
</button>

<script>
    $('#pubnewsave').click(function() {

        $.ajax({
            url: '<?= $this->Url->build(['controller' => 'Publishers', 'action' => 'add',]); ?>',
            data: $('#form-inside').serialize(),
            type: "JSON",
            method: "post",
            success: function(response) {
                console.log(response);

                if (response.success) {
                    if (response.success == 1) {
                        /* window.location.href = "<?= $this->Url->build(['controller' => 'Publishers', 'action' => 'index']); ?>";*/
                        $('#pubnewbezar').trigger('click');
                        reloadPubList();
                    } else {
                        /* hibaüzenetek és validálás */
                    }
                }

                /*$('#modal-container').html(response);
                $('#pubnewsave').trigger('click');*/
            }
        });
    });

    $('#newpublisher').keydown(function(e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            $('#pubnewsave').trigger('click');
        }
    })
</script>