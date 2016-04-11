<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class AccountPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can delete the given task.
     *
     * @param  User  $user
     * @param  Task  $task
     * @return bool
     */
    public function update(User $user, Account $account)
    {
        return $user->id === $account->user_id;
    }
    
    public function destroy(Request $request, Account $account)
    {
        $this->authorize('destroy', $account);
        
        return $user->id === $account->user_id;
    }
}
