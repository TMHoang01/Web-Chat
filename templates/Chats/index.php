<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chat[]|\Cake\Collection\CollectionInterface $chats
 */
?>
<div class="chats index content">
    <?= $this->Html->link(__('New Chat'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Chats') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id_from') ?></th>
                    <th><?= $this->Paginator->sort('user_id_to') ?></th>
                    <th><?= $this->Paginator->sort('image_file_name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($chats as $chat): ?>
                <tr>
                    <td><?= $this->Number->format($chat->id) ?></td>
                    <td><?= $chat->user_id_from === null ? '' : $this->Number->format($chat->user_id_from) ?></td>
                    <td><?= $chat->user_id_to === null ? '' : $this->Number->format($chat->user_id_to) ?></td>
                    <td><?= h($chat->image_file_name) ?></td>
                    <td><?= h($chat->created) ?></td>
                    <td><?= h($chat->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $chat->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chat->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chat->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
