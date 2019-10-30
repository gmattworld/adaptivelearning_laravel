<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Interfaces\IBaseRepository',
            'App\Repositories\BaseRepository'
        );

        $this->app->bind(
            'App\Repositories\Interfaces\IUserRepository',
            'App\Repositories\UserRepository'
        );

        $this->app->bind(
            'App\Repositories\Interfaces\IUserTypeRepository',
            'App\Repositories\UserTypeRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\IUserRoleRepository',
            'App\Repositories\UserRoleRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\IDepartmentRepository',
            'App\Repositories\DepartmentRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\ICategoryRepository',
            'App\Repositories\CategoryRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\IQualificationRepository',
            'App\Repositories\QualificationRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\ICourtRepository',
            'App\Repositories\CourtRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\ICourtRoomRepository',
            'App\Repositories\CourtRoomRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\IPostRepository',
            'App\Repositories\PostRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\ILawyerRepository',
            'App\Repositories\LawyerRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\IClientRepository',
            'App\Repositories\ClientRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\ICasesRepository',
            'App\Repositories\CasesRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\IContactRepository',
            'App\Repositories\ContactRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\IArchiveRepository',
            'App\Repositories\ArchiveRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\IEfilingRepository',
            'App\Repositories\EfilingRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
