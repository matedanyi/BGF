<?php
// src/Model/Entity/Article.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class ProductTool extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'product_id' => true,
        'tool_id' => true
    ];
}
