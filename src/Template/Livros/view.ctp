<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro $livro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<div  class="col mt-2">    
<ul class="list-group list-group-flush">
        <li class="list-group-item active"><?= __('Ações') ?></li>
        <li class="list-group-item "><?= $this->Html->link(__('Editar Livro'), ['action' => 'edit', $livro->id]) ?> </li>
        <li class="list-group-item "><?= $this->Form->postLink(__('Excluir Livro'), ['action' => 'delete', $livro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livro->id)]) ?> </li>
        <li class="list-group-item "><?= $this->Html->link(__('Listar Livros'), ['action' => 'index']) ?> </li>
        <li class="list-group-item "><?= $this->Html->link(__('Novo Livro'), ['action' => 'add']) ?> </li>
        <li class="list-group-item "><?= $this->Html->link(__('Listar Editoras'), ['controller' => 'Editoras', 'action' => 'index']) ?> </li>
        <li class="list-group-item "><?= $this->Html->link(__('Nova Editora'), ['controller' => 'Editoras', 'action' => 'add']) ?> </li>
    </ul>
  </div>  
</nav>
<div class="livros view large-9 medium-8 columns content">
    <h3><?= h($livro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($livro->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genero') ?></th>
            <td><?= h($livro->genero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Editora') ?></th>
            <td><?= $livro->has('editora') ? $this->Html->link($livro->editora->id, ['controller' => 'Editoras', 'action' => 'view', $livro->editora->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($livro->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado') ?></th>
            <td><?= h($livro->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($livro->modified) ?></td>
        </tr>
    </table>
</div>
