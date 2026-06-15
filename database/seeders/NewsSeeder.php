<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\News;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Http;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(int $count = 10): void
    {
        $faker = Faker::create();

        $users = User::pluck('id')->all();

        for ($i = 0; $i < $count; $i++) {
            $title = $faker->sentence;
            $slug = Str::slug($title) . '-' . Str::random(5);
            $mainImage = $this->downloadImage();

            $galleryImages = [];
            for ($j = 0; $j < rand(2, 5); $j++) {
                $galleryImages[] = $this->downloadImage();
            }

            News::create([
                'title'         => $title,
                'slug'          => $slug,
                'category'      => $faker->word,
                'summary'       => $faker->paragraph,
                'content'       => $faker->paragraphs(5, true),
                'published_at'  => now(),
                'status'        => $faker->randomElement(['draft', 'published']),
                'main_image'    => $mainImage,
                'gallery_images'=> json_encode($galleryImages),
                'tags'          => implode(', ', $faker->words(3)),
                'user_id'       => $faker->randomElement($users),
            ]);
        }
    }

    private function downloadImage(): string
    {
        $url = 'https://picsum.photos/800/600';
        $imageContents = Http::get($url)->body();
        $filename = Str::uuid() . '.jpg';

        Storage::disk('public')->put('news/'.$filename, $imageContents);

        return $filename;
    }
}
