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
            'App\Repositories\Interfaces\ISchoolRepository',
            'App\Repositories\SchoolRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\IDepartmentRepository',
            'App\Repositories\DepartmentRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\ILevelRepository',
            'App\Repositories\LevelRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\IResourceRepository',
            'App\Repositories\ResourceRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\ISubjectRepository',
            'App\Repositories\SubjectRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\ICourseRepository',
            'App\Repositories\CourseRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\IPostRepository',
            'App\Repositories\PostRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\IContactRepository',
            'App\Repositories\ContactRepository'
        );






        $this->app->bind(
            'App\Repositories\Interfaces\IClientRepository',
            'App\Repositories\ClientRepository'
        );


        $this->app->bind(
            'App\Repositories\Interfaces\ICategoryRepository',
            'App\Repositories\CategoryRepository'
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
