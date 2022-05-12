<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container col-lg-10 col-12" id="forthdiv">
    <div class="users form row h-100 justify-content-center align-items-center">
        <div class="col-6 ">

            <?= $this->Flash->render() ?>
            <h3>Login</h3>
            <?= $this->Form->create() ?>
            <fieldset>
                <legend>
                    <?= __('Please enter your email and password') ?>
                </legend>
                <?= $this->Form->control('email', ['required' => true]) ?>
                <?= $this->Form->control('password', ['required' => true]) ?>
            </fieldset>

            <?= $this->Form->submit(__('Login')); ?>
            <?= $this->Form->end() ?>

            <?= $this->Html->link("Add User", ['action' => 'add']) ?>
        </div>
    </div>
</div>