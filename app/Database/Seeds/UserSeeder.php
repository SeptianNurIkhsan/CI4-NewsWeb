<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'password' => password_hash('password', PASSWORD_BCRYPT),
                'role'     => 'admin',
            ],
            [
                'username' => 'pengelola',
                'password' => password_hash('password', PASSWORD_BCRYPT),
                'role'     => 'pengelola',
            ],
        ];

        // Using Query Builder
        $this->db->table('users')->insertBatch($data);
    }
}