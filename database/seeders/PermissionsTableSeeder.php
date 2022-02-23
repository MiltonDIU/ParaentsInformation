<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
//            [
//                'id'    => 1,
//                'title' => 'user_management_access',
//            ],
//            [
//                'id'    => 2,
//                'title' => 'permission_create',
//            ],
//            [
//                'id'    => 3,
//                'title' => 'permission_edit',
//            ],
//            [
//                'id'    => 4,
//                'title' => 'permission_show',
//            ],
//            [
//                'id'    => 5,
//                'title' => 'permission_delete',
//            ],
//            [
//                'id'    => 6,
//                'title' => 'permission_access',
//            ],
//            [
//                'id'    => 7,
//                'title' => 'role_create',
//            ],
//            [
//                'id'    => 8,
//                'title' => 'role_edit',
//            ],
//            [
//                'id'    => 9,
//                'title' => 'role_show',
//            ],
//            [
//                'id'    => 10,
//                'title' => 'role_delete',
//            ],
//            [
//                'id'    => 11,
//                'title' => 'role_access',
//            ],
//            [
//                'id'    => 12,
//                'title' => 'user_create',
//            ],
//            [
//                'id'    => 13,
//                'title' => 'user_edit',
//            ],
//            [
//                'id'    => 14,
//                'title' => 'user_show',
//            ],
//            [
//                'id'    => 15,
//                'title' => 'user_delete',
//            ],
//            [
//                'id'    => 16,
//                'title' => 'user_access',
//            ],
//            [
//                'id'    => 17,
//                'title' => 'profile_password_edit',
//            ],
//            [
//                'id'    => 18,
//                'title' => 'audit_log_show',
//            ],
//            [
//                'id'    => 19,
//                'title' => 'audit_log_access',
//            ],
//
//            [
//                'id'    => 20,
//                'title' => 'country_create',
//            ],
//            [
//                'id'    => 21,
//                'title' => 'country_edit',
//            ],
//            [
//                'id'    => 22,
//                'title' => 'country_show',
//            ],
//            [
//                'id'    => 23,
//                'title' => 'country_delete',
//            ],
//            [
//                'id'    => 24,
//                'title' => 'country_access',
//            ],
//            [
//                'id'    => 25,
//                'title' => 'profile_edit',
//            ],
//            [
//                'id'    => 26,
//                'title' => 'profile_show',
//            ],
//            [
//                'id'    => 27,
//                'title' => 'profile_access',
//            ],
//            [
//                'id'    => 28,
//                'title' => 'setting_edit',
//            ],
//            [
//                'id'    => 29,
//                'title' => 'setting_access',
//            ],

//            [
//                'id'    => 30,
//                'title' => 'slider_create',
//            ],
//            [
//                'id'    => 31,
//                'title' => 'slider_edit',
//            ],
//            [
//                'id'    => 32,
//                'title' => 'slider_show',
//            ],
//            [
//                'id'    => 33,
//                'title' => 'slider_delete',
//            ],
//            [
//                'id'    => 34,
//                'title' => 'slider_access',
//            ],
//            [
//                'id'    => 35,
//                'title' => 'slider_create',
//            ],
//            [
//                'id'    => 36,
//                'title' => 'slider_edit',
//            ],
//            [
//                'id'    => 37,
//                'title' => 'slider_show',
//            ],
//            [
//                'id'    => 38,
//                'title' => 'slider_delete',
//            ],
//            [
//                'id'    => 39,
//                'title' => 'slider_access',
//            ],

//            [
//                'id'    => 40,
//                'title' => 'link_category_create',
//            ],
//            [
//                'id'    => 41,
//                'title' => 'link_category_edit',
//            ],
//            [
//                'id'    => 42,
//                'title' => 'link_category_show',
//            ],
//            [
//                'id'    => 43,
//                'title' => 'link_category_delete',
//            ],
//            [
//                'id'    => 44,
//                'title' => 'link_category_access',
//            ],
//            [
//                'id'    => 45,
//                'title' => 'link_create',
//            ],
//            [
//                'id'    => 46,
//                'title' => 'link_edit',
//            ],
//            [
//                'id'    => 47,
//                'title' => 'link_show',
//            ],
//            [
//                'id'    => 48,
//                'title' => 'link_delete',
//            ],
//            [
//                'id'    => 49,
//                'title' => 'link_access',
//            ],

            [
                'id'    => 50,
                'title' => 'news_letter_create',
            ],
            [
                'id'    => 51,
                'title' => 'news_letter_edit',
            ],
            [
                'id'    => 52,
                'title' => 'news_letter_show',
            ],
            [
                'id'    => 53,
                'title' => 'news_letter_delete',
            ],
            [
                'id'    => 54,
                'title' => 'news_letter_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
