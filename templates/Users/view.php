<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?><div class="container col-lg-10 col-12" id="forthdiv">

    <div class="row  row h-100 justify-content-center align-items-center">
        <div class="col">
            <aside class="column">
                <div style="margin: 10px;" class="side-nav">
                    <div style="text-align: center;">
                        <h3><?= __('Actions') ?></h3>
                    </div>
                    <div>
                        <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['style' => 'color: white !important;', 'class' => 'float-right side-nav-item  btn btn-sm btn-primary']) ?>

                        <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'style' => 'color: white !important;', 'class' => 'float-right side-nav-item  btn btn-sm btn-primary']) ?>

                        <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['style' => 'color: white !important;', 'class' => 'float-right side-nav-item  btn btn-sm btn-primary']) ?>

                        <?= $this->Html->link(__('New User'), ['action' => 'add'], ['style' => 'color: white !important;', 'class' => 'float-right side-nav-item  btn btn-sm btn-primary']) ?>
                    </div>
                </div>
            </aside>
            <div class="column-responsive column-80">
                <div class="users view content">
                    <table class="table table-success  table-striped table-hover">
                        <tr>
                            <th><?= __('Username') ?></th>
                            <td><?= h($user->username) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Password') ?></th>
                            <td><?= h($user->password) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <td><?= $this->Number->format($user->id) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>