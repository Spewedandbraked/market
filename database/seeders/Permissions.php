<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Permissions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $role_bucketRed = new Permission();
        $role_bucketRed->id = '1';
        $role_bucketRed->name = 'Bucket Redaction (Full Control)';
        $role_bucketRed->save();

        $role_productView = new Permission();
        $role_productView->id = '2';
        $role_productView->name = 'Product View';
        $role_productView->save();

        $role_productRed = new Permission();
        $role_productRed->id = '3';
        $role_productRed->name = 'Product Redaction (Full Controll)';
        $role_productRed->save();

        $role_userRed = new Permission();
        $role_userRed->id = '4';
        $role_userRed->name = 'User Redaction (Full Control)';
        $role_userRed->save();

    }
}
