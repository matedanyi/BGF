<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class ProductsTable extends Table
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

        $this->belongsTo('Boardgames', [
            'className' => 'Boardgames'
        ])
            ->setForeignKey('boardgame_id')
            ->setProperty('boardgames')
            ->setBindingKey('id');

        $this->hasMany('ProductTools', [
            'className' => 'ProductTools'
        ])
            ->setForeignKey('product_id')
            ->setProperty('prodtools')
            ->setBindingKey('id');
    }
}
