<div class="modal fade" id="modifygamepart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Társasjáték módosítása</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body"></div>
            </div>

        </div>
    </div>
</div>

<button id="shownewmodifygp" type="button" class="hidden" data-bs-toggle="modal" data-bs-target="#modifygamepart">
    Add publisher
</button>

<script>
    $('#gpmodifysave').click(function() {

        $.ajax({
            url: '<?= $this->Url->build(['controller' => 'Gameparts', 'action' => 'modify',]); ?>',
            data: $('#form-inside').serialize()

                ,
            type: "JSON",
            method: "post",
            success: function(response) {
                console.log(response);

                if (response.success) {
                    if (response.success == 1) {
                        /* window.location.href = "<?= $this->Url->build(['controller' => 'Gameparts', 'action' => 'index']); ?>";*/
                        $('#gpmodifybezar').trigger('click');
                        reloadGpList();
                    } else {
                        /* hibaüzenetek és validálás */
                    }
                }

                /*$('#modal-container').html(response);
                $('#bgmodifybezar').trigger('click');*/
            }
        });
    });

    $('#modifygamepart').keydown(function(e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            $('#gpmodifysave').trigger('click');
        }
    })
</script>