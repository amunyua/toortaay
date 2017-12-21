<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    const sys_admin = 'SYSADMIN';
    const core_admin = 'COREADMIN';
    const assembly_clerks = 'ASSCLERKS';
    const com_clerk = 'COMCLERK';
    const mca = 'MCA';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'System Admin', 'code' => self::sys_admin]);
        Role::create(['name' => 'Core Admin', 'code' => self::core_admin]);
        Role::create(['name' => 'Assembly Clerk', 'code' => self::assembly_clerks]);
        Role::create(['name' => 'Committee Clerk', 'code' => self::com_clerk]);
        Role::create(['name' => 'Member of County Assembly (MCA)', 'code' => self::mca]);
    }
}
