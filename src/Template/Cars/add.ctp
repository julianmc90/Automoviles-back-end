<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cars'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Car Brands'), ['controller' => 'CarBrands', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Car Brand'), ['controller' => 'CarBrands', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cars form large-9 medium-8 columns content">
    <?= $this->Form->create($car) ?>
    <fieldset>
        <legend><?= __('Add Car') ?></legend>
        <?php
            echo $this->Form->control('model');
            echo $this->Form->control('car_brands_id', ['options' => $carBrands]);
            echo $this->Form->control('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
