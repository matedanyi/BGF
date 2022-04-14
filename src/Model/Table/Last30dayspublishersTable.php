<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class Last30dayspublishersTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('bgf_last30dayspublishers'); // if prefix set tablename should be prefix_users
        $this->addBehavior('Timestamp');
    }
}
