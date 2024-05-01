<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Client;

class ClientPolicy
{
    
    
    public function __construct()
    {
        //
    }

    public function update (User $user , Client $client)
    {
        return $user->id === $client->created_by;
    }

    public function delete (User $user , Client $client)
    {
        return $user->id === $client->created_by;
    }
}
