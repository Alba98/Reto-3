<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\Models\User;

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
        Gate::define('alumno',function(User $user){
            return $user->tipo_usuario === 'alumno';
        });
        Gate::define('coordinador',function(User $user){
            return $user->tipo_usuario === 'coordinador';
        });
        Gate::define('tempresa',function(User $user){
            return $user->tipo_usuario === 'tempresa';
        });
        Gate::define('tuniversidad',function(User $user){
            return $user->tipo_usuario === 'tuniversidad';
        });

        Gate::define('registrar',function(User $user){ //por si quisieramos que en algun momento el tutor tmb registre
            return $user->tipo_usuario === 'coordinador';
        });

    }




}
