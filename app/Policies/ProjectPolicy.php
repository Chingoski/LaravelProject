<?php

namespace App\Policies;

use App\Role;
use App\User;
use App\Project;
use App\UserRole;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Arr;

class ProjectPolicy
{
    use HandlesAuthorization;
    public function viewAny(User $user)
    {
        //
    }
    public function view(User $user, Project $project)
    {
        return $project->user_id == $user->id || $user->is_admin;
    }
    public function create(User $user)
    {
       // return $project->user_id == $user->id || $user->is_admin;
    }
    public function update(User $user, Project $project)
    {
        return $project->user_id == $user->id || $user->is_admin;
    }
    public function delete(User $user, Project $project)
    {
        return $project->user_id == $user->id || $user->is_admin;
    }
    public function restore(User $user, Project $project)
    {
        return $project->user_id == $user->id || $user->is_admin;
    }
    public function forceDelete(User $user, Project $project)
    {
        return $project->user_id == $user->id || $user->is_admin;
    }
//    public function before(User $user, $ability){
//        return  $user->is_admin;
//    }
}
