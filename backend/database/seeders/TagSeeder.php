<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();
        $tags = [
            ['name' => 'usabilidad', 'created_at' => $now, 'updated_at' => $now ],
            ['name' => 'ui', 'created_at' => $now, 'updated_at' => $now ],
            ['name' => 'ux', 'created_at' => $now, 'updated_at' => $now ],
            ['name' => 'test con usuarios', 'created_at' => $now, 'updated_at' => $now ],
            ['name' => 'responsive', 'created_at' => $now, 'updated_at' => $now ],
        ];
        Tag::insert($tags);
    }
}
