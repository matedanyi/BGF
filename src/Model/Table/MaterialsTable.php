<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class MaterialsTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('bgf_materials'); // if prefix set tablename should be prefix_users
        $this->addBehavior('Timestamp');
    }
}
