<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('isManager', function (User $user) {
            return true;
        });
        Gate::define('isAdmin', function (User $user) {
            return $user->is_admin;
        });
        Gate::define('isDoctor', function (User $user) {
            return true;
        });
        Gate::define('isPatient', function (User $user) {
            return true;
        });
    }
}
