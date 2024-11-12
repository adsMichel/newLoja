<?php

namespace Modules\Media\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Media\Models\Media;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Media::create([
            'path' => 'products/PTlBBXPTvb5IGo6baF0HFBHgFajgGUkdSkAQPTFj.jpg',
        ]);
    }
}
