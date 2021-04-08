<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function(User $user)
        {
            return $user->role_id == 1;
        });

        Gate::define('isWebmaster', function(User $user){
            if ($user->role_id == 1 || $user->role_id == 2) {
                return true;
            }
        });

        Gate::define('isRedac', function(User $user)
        {
            if ($user->role_id == 1 || $user->role_id == 2 || $user->role_id == 3) {
                return true;
            }
        });

        Gate::define('isMember', function(User $user)
        {
            if ($user->role_id == 1 || $user->role_id == 2 || $user->role_id == 3 || $user->role_id == 4) {
                return true;
            }
        });

        Gate::define('editPost', function(User $user, $post)
        {
            if ($user->role_id == 1 || $user->role_id == 2 || $post->author_id == $user->id) {
                return true;
            }
        });

        Gate::define('isAuthor', function (User $user,$article)
        {

    
            // if ($user->role_id ==1 || $user->role_id ==2 || ($user->role_id ==3 && $user->role_id ==$article->user_id )) {
            //     return true;

    
            // } 
    
            if ($user->role_id ==1 || $user->role_id ==2 ||  ($user->role_id ==3 && $user->id ==$article->user_id )){

                return true;

    
            } 
            

        });
    }
}
