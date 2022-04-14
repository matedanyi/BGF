<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class BoardgamesToolsTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('bgf_boardgames_tools'); // if prefix set tablename should be prefix_users
    }
}
