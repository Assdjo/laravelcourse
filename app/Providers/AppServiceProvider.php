<?php

namespace App\Providers;



use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use App\Models\Article;
use App\Policies\ArticlePolicy;


    


class AppServiceProvider extends ServiceProvider
{
    protected $policies = [
        Article::class => ArticlePolicy::class,
    ];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $this->registerPolicies();
        Gate::define('see-admin-menu', function ($user) {
            return $user->isAdmin();
        });
    }
}
