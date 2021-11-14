<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'title' => 'Berita Pertama',
            'slug' => 'berita-pertama',
            'image' => 'imgBeritaPertama',
            'excerpt' => '<div>beritaExcerpt</div>',
            'body' => 'iniberitabody'
        ]);

        News::create([
            'title' => 'Berita kedua',
            'slug' => 'berita-kedua',
            'image' => 'imgBeritakedua',
            'excerpt' => '<div>beritaExcerpt</div>',
            'body' => 'iniberitabody'
        ]);

        News::create([
            'title' => 'Berita ketiga',
            'slug' => 'berita-ketiga',
            'image' => 'imgBeritaketiga',
            'excerpt' => '<div>beritaExcerpt</div>',
            'body' => 'iniberitabody'
        ]);

        News::create([
            'title' => 'Berita keempat',
            'slug' => 'berita-keempat',
            'image' => 'imgBeritakeempat',
            'excerpt' => '<div>beritaExcerpt</div>',
            'body' => 'iniberitabody'
        ]);
    }
}
