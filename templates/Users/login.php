<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container col-lg-10 col-12" id="forthdiv">
    <?= $this->Flash->render() ?>
    <div class="form-signin text-center">
        <p class="mt-5 mb-3 text-muted">
        <h3>Library application</h3>
        For login as admin use the following please! <br>
        Username: <b>demo@demo.com</b> <br>
        Password: <b>demo</b>
        </p>
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <?= $this->Form->create() ?>
        <div class="form-floating">
            <?= $this->Form->control('email', ['required' => true, 'class' => 'form-control ', 'label' => 'Email address', 'id' => 'floatingInput', 'placeholder' => 'name@example.com']) ?>
        </div>
        <div class="form-floating">
            <?= $this->Form->control('password', ['required' => true, 'class' => 'form-control ', 'label' => 'Password', 'id' => 'floatingInput', 'placeholder' => 'Password']) ?>
        </div>
        <?= $this->Form->submit(__('Login'), ['class' => 'w-100 btn btn-lg btn-primary']); ?>
        <?= $this->Form->end() ?>
    </div>
</div>