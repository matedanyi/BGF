<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container col-lg-10 col-12" id="forthdiv">
    <?= $this->Flash->render() ?>
    <div class="form-signin text-center">
        <aside class="column">
            <div class="side-nav">
                <div style="margin: 10px;" class="side-nav">
                    <div style="text-align: center;">
                        <h4 class="heading"><?= __('Actions') ?></h4>
                    </div>

                    <?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $user->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $user->email), 'style' => 'color: white !important;', 'class' => 'float-right side-nav-item  btn btn-sm btn-primary']
                    ) ?>
                    <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['style' => 'color: white !important;', 'class' => 'float-right side-nav-item  btn btn-sm btn-primary']) ?>
                </div>
            </div>
        </aside>


        <?= $this->Form->create($user) ?>

        <legend><?= __('Edit User') ?></legend>

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