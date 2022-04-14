<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class ToolsTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('bgf_tools'); // if prefix set tablename should be prefix_users
        $this->addBehavior('Timestamp');

        $this->belongsTo('Publishers', [
            'className' => 'Publishers'
        ])
            ->setForeignKey('publisher_id')
            ->setProperty('publishers')
            ->setBindingKey('id');

        $this->hasOne('Lifetimes', [
            'className' => 'Lifetimes'
        ])
            ->setForeignKey('tool_id')
            ->setProperty('lifetimes')
            ->setBindingKey('id');
    }
}
