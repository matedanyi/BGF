<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container col-lg-10 col-12" id="forthdiv">
    <div class="users form row h-100 justify-content-center align-items-center">
        <div class="col-6">



            <div class=" content">
                <?= $this->Form->create($user) ?>
                <fieldset>
                    <legend><?= __('Add User') ?></legend>
                    <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>

                <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
        </div>

    </div>
</div>