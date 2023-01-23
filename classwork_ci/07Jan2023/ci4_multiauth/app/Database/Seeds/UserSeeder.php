<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;
class UserSeeder extends Seeder
{
    public function run()
    {
        $user_object = new UserModel();

		$user_object->insertBatch([
			[
				"name" => "Sharmin Sultana",
				"email" => "sharmin123@gmail.com",
				"phone_no" => "01879321765",
				"role" => "admin",
				"password" => password_hash("sharmin123", PASSWORD_DEFAULT)
			],
			[
				"name" => "Shakib Hossain",
				"email" => "shakib123@gmail.com",
				"phone_no" => "01983561810",
				"role" => "editor",
				"password" => password_hash("shakib123", PASSWORD_DEFAULT)
			]
		]);
    }
}
