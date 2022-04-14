<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class SearchGameForm extends Form
{
    protected function _buildSchema(Schema $schema): Schema
    {
        return $schema->addField('name', 'string');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator->minLength('name', 3);

        return $validator;
    }

    protected function _execute(array $data): bool
    {
        // Send an email.
        return true;
    }
}
