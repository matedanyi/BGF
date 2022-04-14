<script>
    $(document).ready(
        function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
                }
            });

            $('.addnewbg').click(function() {
                $.ajax({
                    url: '<?= $this->Url->build(['controller' => 'Boardgames', 'action' => 'add',]); ?>',
                    data: {

                    },
                    type: "JSON",
                    method: "post",
                    success: function(response) {
                        $('#modal-container').html(response);
                        $('#shownewbg').trigger('click');
                    }
                });
            });



            $('.addnewpub').click(function() {
                $.ajax({
                    url: '<?= $this->Url->build(['controller' => 'Publishers', 'action' => 'add',]); ?>',
                    data: {

                    },
                    type: "JSON",
                    method: "post",
                    success: function(response) {
                        $('#modal-container').html(response);
                        $('#shownewpub').trigger('click');
                    }
                });
            });

            $('.modifybg').click(function() {
                $.ajax({
                    url: '<?= $this->Url->build(['controller' => 'Boardgames', 'action' => 'modify',]); ?>',
                    data: {
                        id: $(this).attr('bgid')
                    },
                    type: "JSON",
                    method: "post",
                    success: function(response) {
                        $('#modal-container').html(response);
                        $('#shownewmodifybg').trigger('click');
                    }
                });
            });



            $('.modifypub').click(function() {
                $.ajax({
                    url: '<?= $this->Url->build(['controller' => 'Publishers', 'action' => 'modify',]); ?>',
                    data: {
                        id: $(this).attr('pubid')
                    },
                    type: "JSON",
                    method: "post",
                    success: function(response) {
                        $('#modal-container').html(response);
                        $('#shownewpublisher').trigger('click');
                    }
                });
            });

            $('.modifygp').click(function() {
                $.ajax({
                    url: '<?= $this->Url->build(['controller' => 'Gameparts', 'action' => 'modify',]); ?>',
                    data: {
                        id: $(this).attr('gpid')
                    },
                    type: "JSON",
                    method: "post",
                    success: function(response) {
                        $('#modal-container').html(response);
                        $('#shownewmodifygp').trigger('click');
                    }
                });
            });


        }
    );

    function reloadPubList() {
        $.ajax({
            url: '<?= $this->Url->build(['controller' => 'Publishers', 'action' => 'index',]); ?>',
            data: {

            },
            /*type: "JSON",*/
            method: "post",
            success: function(response) {
                $('#publist').html(response);

            }
        });
    }

    function reloadBgList() {
        $.ajax({
            url: '<?= $this->Url->build(['controller' => 'Boardgames', 'action' => 'index',]); ?>',
            data: {

            },
            /*type: "JSON",*/
            method: "post",
            success: function(response) {
                $('#bglist').html(response);

            }
        });
    }

    $("#newBgFromPub").click(function() {
        $('#modifypublisher').modal('hide')
        $('#newboardgame').modal('show')
    });
</script>