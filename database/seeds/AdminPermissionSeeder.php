<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;
use App\User;

class AdminPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            //user permission for admin
            [
                'permission_name' =>'List-User',
                'permission_for' => 'UserController',
            ],
            [
                'permission_name' =>'Add-User',
                'permission_for' => 'UserController',
            ],
            [
                'permission_name' =>'Edit-User',
                'permission_for' => 'UserController',
            ],
            [
                'permission_name' =>'Update-User',
                'permission_for' => 'UserController',
            ],
            [
                'permission_name' =>'Delete-User',
                'permission_for' => 'UserController',
            ],
             //roles permission for admin
             [
                'permission_name' =>'List-Role',
                'permission_for' => 'RoleController',
            ],
            [
                'permission_name' =>'Add-Role',
                'permission_for' => 'RoleController',
            ],
            [
                'permission_name' =>'Edit-Role',
                'permission_for' => 'RoleController',
            ],
            [
                'permission_name' =>'Update-Role',
                'permission_for' => 'RoleController',
            ],
            [
                'permission_name' =>'Delete-Role',
                'permission_for' => 'RoleController',
            ],
             // permission for admin
            [
                'permission_name' =>'List-Permission',
                'permission_for' => 'PermissionController',
            ],
            [
                'permission_name' => 'Add-Permission',
                'permission_for' => 'PermissionController',
            ],
            [
                'permission_name' =>'Edit-Permission',
                'permission_for' => 'PermissionController',
            ],
            [
                'permission_name' =>'Update-Permission',
                'permission_for' => 'PermissionController',
            ],
            [
                'permission_name' =>'Delete-Permission',
                'permission_for' => 'PermissionController',
            ],
             // clients for admin
            [
                'permission_name' =>'List-Client',
                'permission_for' => 'ClientController',
            ],
            [
                'permission_name' =>'Add-Client',
                'permission_for' => 'ClientController',
            ],
            [
                'permission_name' =>'Edit-Client',
                'permission_for' => 'ClientController',
            ],
            [
                'permission_name' =>'Update-Client',
                'permission_for' => 'ClientController',
            ],
            [
                'permission_name' =>'Delete-Client',
                'permission_for' => 'ClientController',
            ],
             // stores for admin
            [
                'permission_name' =>'List-Store',
                'permission_for' => 'StoreController',
            ],
            [
                'permission_name' =>'Add-Store',
                'permission_for' => 'StoreController',
            ],
            [
                'permission_name' =>'Edit-Client',
                'permission_for' => 'StoreController',
            ],
            [
                'permission_name' =>'Update-Store',
                'permission_for' => 'StoreController',
            ],
            [
                'permission_name' =>'Delete-Store',
                'permission_for' => 'StoreController',
            ],
              // announcements for admin
            [
                'permission_name' =>'List-Announcement',
                'permission_for' => 'AnnouncementController',
            ],
            [
                'permission_name' =>'Add-Announcement',
                'permission_for' => 'AnnouncementController',
            ],
            [
                'permission_name' =>'Edit-Announcement',
                'permission_for' => 'AnnouncementController',
            ],
            [
                'permission_name' =>'Update-Announcement',
                'permission_for' => 'AnnouncementController',
            ],
            [
                'permission_name' =>'Delete-Announcement',
                'permission_for' => 'AnnouncementController',
            ],
              // packages for admin
              [
                'permission_name' =>'List-Package',
                'permission_for' => 'PackageController',
            ],
            [
                'permission_name' =>'Add-Package',
                'permission_for' => 'PackageController',
            ],
            [
                'permission_name' =>'Edit-Package',
                'permission_for' => 'PackageController',
            ],
            [
                'permission_name' =>'Update-Package',
                'permission_for' => 'PackageController',
            ],
            [
                'permission_name' =>'Delete-Package',
                'permission_for' => 'PackageController',
            ],
              // payments for admin
              [
                'permission_name' =>'List-Payment',
                'permission_for' => 'PaymentGatewayController',
            ],
            [
                'permission_name' =>'Add-Payment',
                'permission_for' => 'PaymentGatewayController',
            ],
            [
                'permission_name' =>'Edit-Payment',
                'permission_for' => 'PaymentGatewayController',
            ],
            [
                'permission_name' =>'Update-Payment',
                'permission_for' => 'PaymentGatewayController',
            ],
            [
                'permission_name' =>'Delete-Payment',
                'permission_for' => 'PaymentGatewayController',
            ],
             // profiles for admin
             [
                'permission_name' =>'List-Profile',
                'permission_for' => 'ProfileController',
            ],
            [
                'permission_name' =>'Add-Profile',
                'permission_for' => 'ProfileController',
            ],
            [
                'permission_name' =>'Edit-Profile',
                'permission_for' => 'ProfileController',
            ],
            [
                'permission_name' =>'Update-Profile',
                'permission_for' => 'ProfileController',
            ],
            [
                'permission_name' =>'Delete-Profile',
                'permission_for' => 'ProfileController',
            ],
            // subscriptions for admin
            [
                'permission_name' =>'List-Subscription',
                'permission_for' => 'SubscriptionController',
            ],
            [
                'permission_name' =>'Add-Subscription',
                'permission_for' => 'SubscriptionController',
            ],
            [
                'permission_name' =>'Edit-Subscription',
                'permission_for' => 'SubscriptionController',
            ],
            [
                'permission_name' =>'Update-Subscription',
                'permission_for' => 'SubscriptionController',
            ],
            [
                'permission_name' =>'Delete-Subscription',
                'permission_for' => 'SubscriptionController',
            ],
               // emails for admin
               [
                'permission_name' =>'List-Email',
                'permission_for' => 'EmailTemplateController',
            ],
            [
                'permission_name' =>'Add-Email',
                'permission_for' => 'EmailTemplateController',
            ],
            [
                'permission_name' =>'Edit-Email',
                'permission_for' => 'EmailTemplateController',
            ],
            [
                'permission_name' =>'Update-Email',
                'permission_for' => 'EmailTemplateController',
            ],
            [
                'permission_name' =>'Delete-Email',
                'permission_for' => 'EmailTemplateController',
            ],
        ]);
        // Ask for confirmation to refresh migration
        if ($this->command->confirm('Do you wish to refresh migration before seeding, Make sure it will clear all old data ?')) {
            $this->command->call('migrate:refresh');
            $this->command->warn("Data deleted, starting from fresh database.");
        }
        // Seed the default permission
      
        // Ask to confirm to assign admin or user role
        if ($this->command->confirm('Create Roles for user, default is Superadmin? [y|N]', true)) {
            // Ask for roles from input
            $roles ='SuperAdmin';
            // Explode roles
            $rolesArray = explode(',', $roles);
            // add roles
            foreach($rolesArray as $role) {
                $role = Role::firstOrCreate(['name' => trim($role)]);
                if( $role->name == 'SuperAdmin' ) {
                    // assign all permissions to admin role
                    $role->permissions()->attach(Permission::all());
                    $this->command->info('SuperAdmin will have full rights');
                } else {
                    // for others, give access to view only
                    $role->permissions()->attach(Permission::where('permission_name', 'LIKE', 'view_%')->get());
                }
                
            }
            $this->command->info('Roles ' . $roles . ' added successfully');
        } else {
            Role::firstOrCreate(['name' => 'SuperAdmin']);
            $this->command->info('By default, User role SuperAdmin.');
        }
      

        $role = Role::where(['name' => 'SuperAdmin'])->first();
        $user = User::where(['user_type'=>'superadmin'])->first();
        $user->roles()->attach([$role->id]);
    }
    
    
}

