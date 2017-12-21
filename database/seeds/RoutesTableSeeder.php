<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;
use App\Route as SystemRoute;
use Illuminate\Support\Facades\DB;

class RoutesTableSeeder extends Seeder
{
    const SystemAdmin = 'SYSADMIN';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collection = Route::getRoutes();

        foreach ($collection as $route) {
            $action = $route->getAction();

            if ($action['prefix'] != 'api') {

                if (!is_object($action['uses'])) {

                    DB::transaction(function() use($route, $action) {

                        $sys_route = SystemRoute::create(['url' => $route->uri, 'action' => $action['uses']]);

                        $role = Role::where('code', self::SystemAdmin)->first();

                        $sys_route->roles()->attach($role);

                    });

                }

            }
        }
    }
}
