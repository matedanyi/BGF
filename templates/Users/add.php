<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="container col-lg-10 col-12" id="forthdiv">
    <?= $this->Flash->render() ?>
    <div class="form-signin text-center">
        <h1 class="h3 mb-3 fw-normal">Add user</h1>
        <?= $this->Form->create($user) ?>
        <div class="form-floating">
            <?= $this->Form->control('email', ['required' => true, 'class' => 'form-control ', 'label' => 'Email address', 'id' => 'floatingInput', 'placeholder' => 'name@example.com']) ?>
        </div>
        <div class="form-floating">
            <?= $this->Form->control('password', ['required' => true, 'class' => 'form-control ', 'label' => 'Password', 'id' => 'floatingInput', 'placeholder' => 'Password']) ?>
        </div>
        <?= $this->Form->button(__('Submit'), ['class' => 'w-100 btn btn-lg btn-primary']); ?>

        <?= $this->Form->end() ?>
        <div style="margin-top: 10px; color: white;">
            <?= $this->Html->link(__('Back'), ['action' => 'index'], ['style' => 'color: white !important;', 'class' => 'side-nav-item w-50 btn btn-sm btn-primary']) ?>
        </div>
    </div>
</div>