<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Status[]|\Cake\Collection\CollectionInterface $status
 */
?>
<div class="status index content">
    <?= $this->Html->link(__('New Status'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Status') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('resource_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($status as $status): ?>
                <tr>
                    <td><?= $this->Number->format($status->id) ?></td>
                    <td><?= $status->has('user') ? $this->Html->link($status->user->name, ['controller' => 'Users', 'action' => 'view', $status->user->id]) : '' ?></td>
                    <td><?= $this->Number->format($status->resource_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $status->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $status->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $status->id], ['confirm' => __('Are you sure you want to delete # {0}?', $status->id)]) ?>
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
