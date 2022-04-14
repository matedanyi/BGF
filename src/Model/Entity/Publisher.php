<?php
// src/Model/Entity/Article.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Publisher extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'name' => true,
    ];
}
