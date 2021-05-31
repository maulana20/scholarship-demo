<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = $this->addUser();
  
        $role = $this->addRole();
   
        $permissions = Permission::pluck('id', 'id')->all();
  
        $role->syncPermissions($permissions);
   
        $user->assignRole([$role->id]);
    }
    
    protected function addUser()
    {
        $user = User::firstOrNew([ 'email' => 'admin@admin.com', ]);
        
        if (!$user->exists) {
            $user->fill([
                'name'         => 'Admin',
                'password'     => bcrypt('password'),
            ])->save();
        }
        
        return $user;
    }
    
    protected function addRole()
    {
        $role = Role::firstOrNew([ 'name' => 'Admin', ]);
        
        if (!$role->exists) $role->save();
        
        return $role;
    }
}
