<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Editora $editora
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<div class="col mt-2">
    <ul class="list-group list-group-flush">
        <li class="list-group-item active"><?= __('Actions') ?></li>
        <li class="list-group-item "><?= $this->Html->link(__('Editar Editora'), ['action' => 'edit', $editora->id]) ?> </li>
        <li class="list-group-item "><?= $this->Form->postLink(__('Excluir Editora'), ['action' => 'delete', $editora->id], ['confirm' => __('Are you sure you want to delete # {0}?', $editora->id)]) ?> </li>
        <li class="list-group-item "><?= $this->Html->link(__('Listar Editoras'), ['action' => 'index']) ?> </li>
        <li class="list-group-item "><?= $this->Html->link(__('Nova Editora'), ['action' => 'add']) ?> </li>
        <li class="list-group-item "><?= $this->Html->link(__('Listar Livros'), ['controller' => 'Livros', 'action' => 'index']) ?> </li>
        <li class="list-group-item "><?= $this->Html->link(__('Novo Livro'), ['controller' => 'Livros', 'action' => 'add']) ?> </li>
    </ul>
</div>
</nav>
<div class="editoras view large-9 medium-8 columns content">
    <h3><?= h($editora->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($editora->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($editora->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criada') ?></th>
            <td><?= h($editora->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificada') ?></th>
            <td><?= h($editora->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Livro relacionado') ?></h4>
        <?php if (!empty($editora->livros)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Genero') ?></th>
                <th scope="col"><?= __('Editora Id') ?></th>
                <th scope="col"><?= __('Criada') ?></th>
                <th scope="col"><?= __('Modificada') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
            <?php foreach ($editora->livros as $livros): ?>
            <tr>
                <td><?= h($livros->id) ?></td>
                <td><?= h($livros->nome) ?></td>
                <td><?= h($livros->genero) ?></td>
                <td><?= h($livros->editora_id) ?></td>
                <td><?= h($livros->created) ?></td>
                <td><?= h($livros->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visu'), ['controller' => 'Livros', 'action' => 'view', $livros->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Livros', 'action' => 'edit', $livros->id]) ?>
                    <?= $this->Form->postLink(__('Del'), ['controller' => 'Livros', 'action' => 'delete', $livros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livros->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
