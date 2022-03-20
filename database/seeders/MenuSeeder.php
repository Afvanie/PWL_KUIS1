<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'nama' => 'Mini cheese Burger',
                'gambar' => 'https://tmbidigitalassetsazure.blob.core.windows.net/rms3-prod/attachments/37/1200x1200/exps40978_SD143207C05_28_6b.jpg',
                'konten' => 'Burger mini dengan perpaduan beef dan keju yang melimpah akan memanjakan lidah anda',
                'harga' => 90000,
                'status' => 'Ada'

            ],
            [
                'nama' => 'Double size burger',
                'gambar' => 'https://thumbs.dreamstime.com/b/big-double-cheeseburger-8174934.jpg',
                'konten' => 'Burger dengan ukuran double akan meuaskan perut anda',
                'harga' => 150000,
                'status' => 'Ada'

            ],
            [
                'nama' => 'Bacon, EGG and Cheese',
                'gambar' => 'https://data.thefeedfeed.com/recommended/post_4041215.jpg',
                'konten' => 'Burger dengan perpaduan bacon, telur, dan keju akan memberikan kenikmatan maksimal',
                'harga' => 125000,
                'status' => 'Ada'

            ],
            [
                'nama' => 'Pulled porx Burger',
                'gambar' => 'https://i.pinimg.com/originals/e5/68/be/e568be49415cb4cc9f1f81fbb26b3733.jpg',
                'konten' => 'Pulled porx Burger akan membuat lidah anda bergoyang',
                'harga' => 135000,
                'status' => 'Ada'

            ],
            [
                'nama' => 'Fried chicken Burger',
                'gambar' => 'https://asset.japantoday.com/img/store/42/72/28b62a03f517c3528324ab53dd9ca29c771a/Screen-Shot-2022-02-10-at-9.08.44.png',
                'konten' => 'Burger dengan fried chicken dengan rasa ayam yang sangat nikmat',
                'harga' => 100000,
                'status' => 'Ada'

            ],
        ];
        DB::table('menus')->insert($data);
    }
}
