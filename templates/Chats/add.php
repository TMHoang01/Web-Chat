<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chat $chat
 * @var \Cake\Collection\CollectionInterface|string[] $userFrom
 * @var \Cake\Collection\CollectionInterface|string[] $userTo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Chats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chats form content">
            <?= $this->Form->create($chat) ?>
            <fieldset>
                <legend><?= __('Add Chat') ?></legend>
                <?php
                    echo $this->Form->control('user_id_from', ['options' => $userFrom]);
                    echo $this->Form->control('user_id_to', ['options' => $userTo]);
                    echo $this->Form->control('message');
                    echo $this->Form->control('image_file_name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
