<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete'
        ];
        
        foreach ($permissions as $permission) {
             $this->add($permission);
        }
    }
    
    protected function add($permission)
    {
        $permission = Permission::firstOrNew([ 'name' => $permission, ]);
        
        if (!$permission->exists) $permission->save();
    }
}
