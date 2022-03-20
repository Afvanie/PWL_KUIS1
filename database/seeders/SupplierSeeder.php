<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
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
                'nama' => 'Keju',
                'gambar' => 'https://awsimages.detik.net.id/community/media/visual/2020/05/27/d3fe9238-8299-4074-a55a-879b35089b7d.jpeg?w=700&q=90',
                'alamat' => 'Jalan Keju no 89, Tangerang'
            ],
            [
                'nama' => 'Kentang',
                'gambar' => 'https://ecofrost.s3-eu-west-1.amazonaws.com/production/images/lwq4VPYrHRubh8UH.jpg',
                'alamat' => 'Jalan Kentang no 33, Jakarta Pusat '
            ],
            [
                'nama' => 'Roti',
                'gambar' => 'https://tse4.mm.bing.net/th?id=OIP.JbTPt_wh6SKogKDNhJiXNwHaHa&pid=Api&P=0&w=180&h=180',
                'alamat' => 'Jalan Roti no 10, Jakarta Selatan '
            ],
            [
                'nama' => 'Tomat',
                'gambar' => 'https://tse2.mm.bing.net/th?id=OIP.EWx714nuiicm56IuLfCW0QHaE8&pid=Api&P=0&w=264&h=176',
                'alamat' => 'Jalan Tomat no 22, Jakarta Utara'
            ],
            [
                'nama' => 'Selada',
                'gambar' => 'https://cdn-2.tstatic.net/banjarmasin/foto/bank/images/pemilik-fatih-hidroponik-hafiz-ramadhani-di-kebun-hidroponik-miliknya-amirul-yusuf.jpg',
                'alamat' => 'Jalan Selada no 45 , Jakarta Pusat'
            ],
        ];
        DB::table('suppliers')->insert($data);
    }
}    

