<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class CreatorSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'names' => 'Literalprass',
                'twitter'    => 'prakoso_675',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'names' => 'Dino',
                'twitter'    => 'dinoartframe',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'names' => 'Ninomae inanis',
                'twitter'    => 'ina',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO creator (names, twitter, created_at, updated_at) VALUES(:names:, :twitter:, :created_at:, :updated_at:)", $data);

        // Using Query Builder
        // $this->db->table('creator')->insert($data);
        $this->db->table('creator')->insertBatch($data);
    }
}
