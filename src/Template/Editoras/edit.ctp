<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Editora $editora
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<div class="col mt-2">
 <ul class="list-group list-group-flush">
        <li class="list-group-item active"><?= __('Ações') ?></li>
        <li class="list-group-item "><?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $editora->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $editora->id)]
            )
        ?></li>
        <li class="list-group-item "><?= $this->Html->link(__('Listar Editoras'), ['action' => 'index']) ?></li>
        <li class="list-group-item "><?= $this->Html->link(__('Listar Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li class="list-group-item "><?= $this->Html->link(__('Novo Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
    </ul>
        </div>
</nav>
<div class="editoras form large-9 medium-8 columns content">
    <?= $this->Form->create($editora) ?>
    <fieldset>
        <legend><?= __('Editar Editora') ?></legend>
        <?php
            echo $this->Form->control('nome');
        ?>
    </fieldset>
    <div class="btn">
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
        </div>
</div>
