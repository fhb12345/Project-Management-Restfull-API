<?php

namespace CodeProject\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind(
            \CodeProject\Repositories\ClientRepository::class,
            \CodeProject\Repositories\ClientRepositoryEloquent::class
        );

        $this->app->bind(
            \CodeProject\Repositories\ProjectRepository::class,
            \CodeProject\Repositories\ProjectRepositoryEloquent::class
        );

        $this->app->bind(
            \CodeProject\Repositories\ProjectNoteRepository::class,
            \CodeProject\Repositories\ProjectNoteRepositoryEloquent::class
        );

        $this->app->bind(
            \CodeProject\Repositories\ProjectMemberRepository::class,
            \CodeProject\Repositories\ProjectMemberRepositoryEloquent::class
        );

        $this->app->bind(
            \CodeProject\Repositories\ProjectFileRepository::class,
            \CodeProject\Repositories\ProjectFileRepositoryEloquent::class
        );

        $this->app->bind(
            \CodeProject\Repositories\ProjectTaskRepository::class,
            \CodeProject\Repositories\ProjectTaskRepositoryEloquent::class
        );

        $this->app->bind(
            \CodeProject\Repositories\UserRepository::class,
            \CodeProject\Repositories\UserRepositoryEloquent::class
        );
    }
}
