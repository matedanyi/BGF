<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class ProductToolsTable extends Table
{
    public function initialize(array $config): void
    {

        $this->belongsTo('Products', [
            'className' => 'Products'
        ])
            ->setForeignKey('product_id')
            ->setProperty('products')
            ->setBindingKey('id');
    }
}
