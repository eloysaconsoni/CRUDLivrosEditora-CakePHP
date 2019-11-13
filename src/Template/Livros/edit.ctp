<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro $livro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<div class="col mt-2">   
<ul class="list-group list-group-flush">
        <li class="list-group-item active"><?= __('Ações') ?></li>
        <li class="list-group-item "><?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $livro->id],
                ['confirm' => __('Tem certeza que deseja excluir # {0}?', $livro->id)]
            )
        ?></li>
        <li class="list-group-item "><?= $this->Html->link(__('Listar Livros'), ['action' => 'index']) ?></li>
        <li class="list-group-item "><?= $this->Html->link(__('Listar Editoras'), ['controller' => 'Editoras', 'action' => 'index']) ?></li>
        <li class="list-group-item "><?= $this->Html->link(__('Nova Editora'), ['controller' => 'Editoras', 'action' => 'add']) ?></li>
    </ul>
   </div> 
</nav>
<div class="livros form large-9 medium-8 columns content">
    <?= $this->Form->create($livro) ?>
    <fieldset>
        <legend><?= __('Editar Livro') ?></legend>
        <div class="form-group">
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('genero');
            echo $this->Form->control('editora_id', ['options' => $editoras]);
        ?>
        </div>
    </fieldset>
    <div class="btn">
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
    </div>
</div>
