<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seller
        $seller_permission = [
            'manage products',
            'register',
            'manage delivery_order',
            'create time_schedules_for_physical_inspection',
            'chat with_buyers',
            'view all_the_bids',
            'see buyer_profile'
        ];

        $seller_role = Role::create(['name' => 'seller']);

        foreach ($seller_permission as $permission_name) {
            $permission = Permission::create(['name' => $permission_name]);
            $seller_role->givePermissionTo($permission);
            $permission->assignRole($seller_role);
        }

        //buyer
        $buyer_permissions = [
            'bid for_products',
            'add reviews_to_product_buyers'
        ];

        $buyer_role = Role::create(['name' => 'buyer']);

        foreach ($buyer_permissions as $permission_name) {
            $buyer_permission = Permission::create(['name' => $permission_name]);
            $buyer_role->givePermissionTo($buyer_permission);
            $buyer_permission->assignRole($buyer_role);
        }

        //delivery
        $delivery_permissions = [
            'manage delivery_orders_status',
            'view buyer_and_seller_profile'
        ];

        $delivery_role = Role::create(['name' => 'delivery']);

        foreach ($delivery_permissions as $permission_name) {
            $delivery_permission = Permission::create(['name' => $permission_name]);
            $delivery_role->givePermissionTo($delivery_permission);
            $delivery_permission->assignRole($delivery_role);
        }

        //super admin

        $super_admin_permissions = [
            'manage users',
            'manage categories',
            'blacklisting'
        ];

        foreach ($super_admin_permissions as $permission_name) {
            Permission::create(['name' => $permission_name]);
        }

        $super_admin_role = Role::create(['name' => 'super_admin']);

        $all_permissions = Permission::all();

        foreach ($all_permissions as $permission_name)
        {
            $super_admin_permission = Permission::where('name', $permission_name)->first();
            $super_admin_role->givePermissionTo($super_admin_permission);
        }

        // define super admin
        $user = new User();
        $user->name = "super admin";
        $user->email = "super_admin@gmail.com";
        $user->password = Hash::make('123456');
        $user->save();
        $user->assignRole('super_admin');
        $user->syncRoles('super_admin');

        $this->command->info("You have been created set of Permissions | Role and Define Super Admin \n email - super_admin@gmail.com \n Password - 123456");
    }
}
