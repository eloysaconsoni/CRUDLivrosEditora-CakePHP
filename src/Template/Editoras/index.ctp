<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Editora[]|\Cake\Collection\CollectionInterface $editoras
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<div class="col mt-2">
    <ul class="list-group list-group-flush">
        <li class="list-group-item active"><?= __('Ações') ?></li>
        <li class="list-group-item "><?= $this->Html->link(__('Nova Editora'), ['action' => 'add']) ?></li>
        <li class="list-group-item "><?= $this->Html->link(__('Listar Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li class="list-group-item "><?= $this->Html->link(__('Novo Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
    </ul>
</div>
</nav>
<div class="editoras index large-9 medium-8 columns content">
    <h3><?= __('Editoras') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('criada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificada') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($editoras as $editora): ?>
            <tr>
                <td><?= $this->Number->format($editora->id) ?></td>
                <td><?= h($editora->nome) ?></td>
                <td><?= h($editora->created) ?></td>
                <td><?= h($editora->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visu'), ['action' => 'view', $editora->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $editora->id]) ?>
                    <?= $this->Form->postLink(__('Del'), ['action' => 'delete', $editora->id], ['confirm' => __('Are you sure you want to delete # {0}?', $editora->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
