<?php

namespace Sibtain\Classrooms\App\Policies;

use Sibtain\Classrooms\App\Models\Classroom as Model;
use LaravelEnso\Core\App\Models\User;

class Classroom
{
    public function before(User $user)
    {
        if ($user->isAdmin() || $user->isSupervisor()) {
            return true;
        }
    }

    public function store(User $user, Model $model)
    {
        return true;
    }

    public function update(User $user, Model $model)
    {
        return true;
    }

    public function destroy(User $user, Model $model)
    {
        return true;
    }

    public function managePeople(User $user, Model $model)
    {
        return true;
    }
}
