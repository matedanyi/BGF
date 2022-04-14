<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class BoardgamesTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');

        $this->belongsTo('Publishers', [
            'className' => 'Publishers'
        ])
            ->setForeignKey('publisher_id')
            ->setProperty('publishers')
            ->setBindingKey('id');

        $this->hasOne('GameStats', [
            'className' => 'GameStats'
        ])
            ->setForeignKey('boardgame_id')
            ->setProperty('gamestats')
            ->setBindingKey('id');

        $this->hasOne('Last30daysproducts', [
            'className' => 'Last30daysproducts'
        ])
            ->setForeignKey('boardgame_id')
            ->setProperty('last30daysproducts')
            ->setBindingKey('id');

        $this->hasMany('Gameparts', [
            'className' => 'Gameparts'
        ])
            ->setForeignKey('boardgame_id')
            ->setProperty('gameparts')
            ->setBindingKey('id');

        $this->hasMany('Tools', [
            'className' => 'Tools'
        ])
            ->setForeignKey('publisher_id')
            ->setProperty('tools')
            ->setBindingKey('publisher_id');

        $this->hasMany('Products', [
            'className' => 'Products'
        ])
            ->setForeignKey('boardgame_id')
            ->setProperty('products')
            ->setBindingKey('id');

        $this->hasMany('Lifetimes', [
            'className' => 'Lifetimes'
        ])
            ->setForeignKey('boardgame_id')
            ->setProperty('lifetimes')
            ->setBindingKey('id');
    }
}
