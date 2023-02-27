<?php

namespace App\GraphQL\Validators;

use Nuwave\Lighthouse\Validation\Validator;

final class UpdateUserInputValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'id' => ['required', 'int'],
            'name' => ['sometimes', 'max:50'],
            'email' => ['sometimes', 'unique:users,email,'.$this->arg('id')]
        ];
    }
    
    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'id' => 'ID',
            'name' => "Name",
            'email' => 'Email Address'
        ];
    }
}
