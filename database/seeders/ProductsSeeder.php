<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'LG Mobile',
                'price' => '20000',
                'description' => 'A Smart phone',
                'category' => 'Mobile',
                'gallery' => 'https://www.lg.com/lk/images/mobile-phones/md05890936/gallery/LGX240K_mobile-phones_D01.jpg',
            ],
            [
                'name' => 'Oppo Mobile',
                'price' => '10000',
                'description' => 'A Smart phone',
                'category' => 'Mobile',
                'gallery' => 'https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/a15s/navigation/A15s-navigation-white-v2.png.thumb.webp',
            ],
            [
                'name' => 'LG TV',
                'price' => '80000',
                'description' => 'A 32" TV',
                'category' => 'Television',
                'gallery' => 'https://www.lg.com/eg_en/images/tvs/md06123376/gallery/32LM550BPVA-M1v.jpg',
            ],
            [
                'name' => 'Sony TV',
                'price' => '100,000',
                'description' => 'A Smart Television',
                'category' => 'Television',
                'gallery' => 'https://www.sony-asia.com/image/ff0a71866476e0ad65b8d848f2d7b40c?fmt=pjpeg&wid=1014&hei=396&bgcolor=F1F5F9&bgc=F1F5F9',
            ]
           
        ]);
    }
}
