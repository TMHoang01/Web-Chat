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
                    <th><?= __('Image File Name') ?></th>
                    <td><?= h($chat->image_file_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($chat->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Id From') ?></th>
                    <td><?= $chat->user_id_from === null ? '' : $this->Number->format($chat->user_id_from) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Id To') ?></th>
                    <td><?= $chat->user_id_to === null ? '' : $this->Number->format($chat->user_id_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($chat->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($chat->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Message') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($chat->message)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
