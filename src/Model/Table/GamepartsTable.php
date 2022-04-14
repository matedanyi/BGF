<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class GamepartsTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');

        $this->belongsTo('Boardgames', [
            'className' => 'Boardgames'
        ])
            ->setForeignKey('boardgame_id')
            ->setProperty('boardgames')
            ->setBindingKey('id');

        $this->hasOne('GameStats', [
            'className' => 'GameStats'
        ])
            ->setForeignKey('boardgame_id')
            ->setProperty('gamestats')
            ->setBindingKey('id');

        $this->hasOne('Materials', [
            'className' => 'Materials'
        ])
            ->setForeignKey('material_id')
            ->setProperty('materials')
            ->setBindingKey('id');
    }
}
