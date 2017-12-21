<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::transaction(function(){
            $this->call(MasterfileTableSeeder::class);
            $this->call(RoleTableSeeder::class);
            $this->call(UserTableSeeder::class);
            $this->call(RoutesTableSeeder::class);
            $this->call(CommitteeTableSeeder::class);
        });

    }
}
