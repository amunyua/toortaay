<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer(['layouts.partials.sidebar'], function($view) {
            $menu = [
                (object) [
                    'title' => 'Home',
                    'icon' => 'home',
                    'url' => 'home',
                    'parent' => false
                ],
                (object) [
                    'title' => 'Subjects',
                    'icon' => 'subject',
                    'url' => 'subjects',
                    'parent' => false
                ],
                (object) [
                    'title' => 'Parents',
                    'icon' => 'account_circle',
                    'url' => 'parents',
                    'parent' => false
                ],
                (object) [
                    'title' => 'Classes',
                    'icon' => 'assignment',
                    'url' => 'classes',
                    'parent' => false
                ],
                (object) [
                    'title' => 'Pupils',
                    'icon' => 'supervisor_account',
                    'url' => 'pupils',
                    'parent' => false
                ]
                /*(object) [
                    'title' => 'Masterfiles',
                    'icon' => 'supervisor_account',
                    'url' => '#',
                    'id' => 'mfs',
                    'parent' => true,
                    'children' => [
                        (object) [ 'title' => 'All Masterfiles', 'url' => 'masterFiles' ],
                    ]
                ],
//                (object) [
//                    'title' => 'Manage Classes',
//                    'icon' => 'assignment',
//                    'url' => '#',
//                    'id' => 'classes',
//                    'parent' => true,
//                    'children' => [
//                        (object) ['title' => 'All classes', 'url' => 'classes'],
//                    ]
//                ],
                (object) [
                    'title' => 'User Manager',
                    'icon' => 'account_circle',
                    'url' => '#',
                    'id' => 'user-account',
                    'parent' => true,
                    'children' => [
                        (object) [ 'title' => 'System Users', 'url' => 'users' ],
                        (object) [ 'title' => 'Roles', 'url' => 'roles' ],
                        (object) [ 'title' => 'Audit Trail', 'url' => 'audits' ],
                    ]
                ],
                (object) [
                    'title' => 'System Manager',
                    'icon' => 'settings',
                    'url' => '#',
                    'id' => 'sys_man',
                    'parent' => true,
                    'children' => [
                        (object) [ 'title' => 'Routes', 'url' => 'admin/routes' ],
                    ]
                ]*/
            ];

            $view->with('menu', $menu)->with('current_route', Route::current());
        });
    }
}
