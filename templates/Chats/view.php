<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chat $chat
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Chat'), ['action' => 'edit', $chat->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Chat'), ['action' => 'delete', $chat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chat->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Chats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Chat'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chats view content">
            <h3><?= h($chat->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User From') ?></th>
                    <td><?= $chat->has('user_from') ? $this->Html->link($chat->user_from->name, ['controller' => 'Users', 'action' => 'view', $chat->user_from->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User To') ?></th>
                    <td><?= $chat->has('user_to') ? $this->Html->link($chat->user_to->name, ['controller' => 'Users', 'action' => 'view', $chat->user_to->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($chat->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Message') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($chat->message)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Image File Name') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($chat->image_file_name)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
