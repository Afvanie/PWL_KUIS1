<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
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
                'nama' => 'Budi Susanto',
                'gambar' => 'https://photo.kontan.co.id/photo/2013/07/31/395929569p.jpg',
                'konten' => 'Makanan disini sangat lezat dan memuaskan pelayanannya juga sangat baik',

            ],
            [
                'nama' => 'Susi Susanti',
                'gambar' => 'https://cdns.klimg.com/dream.co.id/resized/640x320/news/2021/01/06/156703/5-fakta-menarik-tentang-laura-basuki-di-susi-susanti-love-all-210106a.jpg',
                'konten' => 'Makanan disini sangat lezat dan memuaskan pelayanannya juga sangat baik',

            ],            [
                'nama' => 'Luhut Panjaitan',
                'gambar' => 'https://www.pinterpolitik.com/wp-content/uploads/2019/02/Luhut-Panjaitan.-Foto-HarianIndo.jpg',
                'konten' => 'Makanan disini sangat lezat dan memuaskan pelayanannya juga sangat baik',

            ],            [
                'nama' => 'Seya Novanto',
                'gambar' => 'https://risetcdn.jatimtimes.com/images/2021/01/30/Setya-Novanto-Foto-WIKEN.id4881a86c93955095.jpg',
                'konten' => 'Makanan disini sangat lezat dan memuaskan pelayanannya juga sangat baik',

            ],            [
                'nama' => 'Novel Baswedan',
                'gambar' => 'https://statik.tempo.co/data/2021/06/08/id_1026448/1026448_720.jpg',
                'konten' => 'Makanan disini sangat lezat dan memuaskan pelayanannya juga sangat baik',
            ],
        ];
        DB::table('pelanggans')->insert($data);
    }
}
