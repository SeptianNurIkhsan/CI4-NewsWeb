<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title'   => 'Berita Pertama',
                'content' => 'Isi berita pertama.',
            ],
            [
                'title'   => 'Berita Kedua',
                'content' => 'Isi berita kedua.',
            ],
            [
                'title'   => 'Berita Ketiga',
                'content' => 'Isi berita ketiga.',
            ],
        ];

        // Using Query Builder
        $this->db->table('posts')->insertBatch($data);
    }
}