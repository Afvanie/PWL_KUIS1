<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
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
                'nama' => 'Arnold Poernomo',
                'gambar' => 'http://3.bp.blogspot.com/-23Jr3WfYJcU/UZrz5_uEVNI/AAAAAAAAY-U/pVcmksPXD_A/s1600/chef+arnold+poernomo+ganteng.jpg',
                'deskripsi' => 'Nama Arnold Poernomo mulai dikenal masyarakat Indonesia saat dirinya menjadi juri dalam acara pencarian bakat memasak MasterChef 
                Indonesia pada 2013. Sebelum itu, Chef Arnold telah memiliki kemampuan andal dalam memasak hingga diakui di dunia internasional.'
            ],
            [
                'nama' => 'Juna Rorimpandey',
                'gambar' => 'https://akcdn.detik.net.id/visual/2020/11/02/chef-juna_169.jpeg?w=900&q=90',
                'deskripsi' => 'Seperti Chef Arnold, Chef Juna tak mengenyam pendidikan khusus untuk menjadi juru masak. Bahkan dirinya bisa dibilang tak sengaja 
                masuk ke dunia masak-memasak.  Langkahnya memasuki dunia dapur berawal dari sekolahnya yang bangkrut saat hendak mengambil lisensi pilot di Amerika Serikat. 
                Ya, Chef Juna awalnya belajar di sekolah penerbangan di Texas, Amerika. '
            ],
            [
                'nama' => 'Farah Quinn',
                'gambar' => 'https://cdn-image.hipwee.com/wp-content/uploads/2014/04/farah-quinn.jpg',
                'deskripsi' => 'Berbeda dari kedua chef diatas, Chef Farah Quinn pernah mengenyam pendidikan khusus didunia memasak, khususnya di bidang pastry di Pittsburgh Culinary 
                Institute. Kelihaiannya membuat masakan yang memanjakan lidah membuat dia menjadi salah satu koki dalam pertemuan kepala negara forum G8 di Seattle, Amerika. '
            ],
            [
                'nama' => 'Vindex Tengker',
                'gambar' => 'https://cdn-cas.orami.co.id/parenting/images/Chef_Vindex_exquisite-taste-magazine.com.width-800.jpg',
                'deskripsi' => 'Chef Indonesia terbaik yang paling terkenal pertama adalah Vindex Tengker. Namanya memang sudah tak asing lagi karena dirinya pernah tampil sebagai juri 
                ajang memasak yakni Master Chef Indonesia musim pertama, Top Chef Indonesia, hingga Cooking Master.'
            ],
            [
                'nama' => 'Degan Septoadji',
                'gambar' => 'https://cdn-cas.orami.co.id/parenting/images/Chef_Degan_www.tagar.id.width-800.jpg',
                'deskripsi' => 'Degan Septoadji merupakan chef Indonesia terbaik yang namanya juga sangat dikenal oleh masyarakat Indonesia karena pernah tampil sebagai juru Master 
                Chef Indonesia pada musim kedua, dan ketiga.'
            ],
            [
                'nama' => 'Chandra Yudasswara',
                'gambar' => 'https://cdn-cas.orami.co.id/parenting/images/Chef_Degan_www.tagar.id.width-800.jpg',
                'deskripsi' => 'Chandra Yudasswara dikenal sebagai chef Indonesia yang punya ciri khas masakan dengan tampilan yang sangat estetik'
            ]
        ];
        DB::table('pegawai')->insert($data);
    }
}
