<?php

namespace App\GraphQL\Mutations;

use App\Models\User;

final class UpdateUser
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $data = $args['input'];
        $user = User::find($data['id']);
        $user->update($data);
        return $user;
    }
}
