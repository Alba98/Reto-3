<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];



    /**
     * Register any authentication / authorization services.
     *
     * @return void
     *///'alumno', 'coordinador', 'tempresa', 'tuniversidad']
    public function boot()
    {
        $this->registerPolicies();
        //Gates:
        Gate::define('alumno',function($user){
            return $user->persona->tipo_usuario === 'alumno';
        });
        Gate::define('coordinador',function($user){
            return $user->persona->tipo_usuario === 'coordinador';
        });
        Gate::define('tempresa',function($user){
            return $user->persona->tipo_usuario === 'tempresa';
        });
        Gate::define('tuniversidad',function($user){
            return $user->persona->tipo_usuario === 'tuniversidad';
        });

    }




}
