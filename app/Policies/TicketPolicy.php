<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TicketPolicy
{
    use HandlesAuthorization;

    // Define your authorization methods here
    public function view(User $user, $ticket)
    {
        // Your logic
    }

    public function create(User $user)
    {
        // Your logic
    }

    public function update(User $user, $ticket)
    {
        // Your logic
    }

    public function delete(User $user, $ticket)
    {
        // Your logic
    }
}