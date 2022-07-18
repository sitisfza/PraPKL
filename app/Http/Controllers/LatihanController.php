<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    // 

    public function menu () 
    {
        $a = [
            array('beranda' => "Beranda" ,
                'berita' => "Berita",
                'Berita' => ['Politik','Manca Negara'],
                'Olahraga' => "Olahraga",
                'olahraga' => ['Sepak Bola', 'Bulu Tangkis'],
                'tentang' => "Tentang"),
        ];
        return view('pages1.menu', ['menu' => $a]);
    }

    public function kampus ()
    {
        $dosen = [
            
                ['nama' => 'Yusuf Bachtiar','mata_kuliah' => 'pemrograman mobile', 'mahasiswa' => [
                ['nama' => 'Muhammad Sholeh', 'nilai' => 78],
                ['nama' => 'Jujun Junaedi', 'nilai' => 85],
                ['nama' => 'Mamat Alkatiri', 'nilai' => 90],
                ['nama' => 'Ubay Holin', 'nilai' => 87],
                ['nama' => 'Fadillah', 'nilai' => 95],
        ],
        ],
                ['nama' => 'Yaris Riyadi', 'mata_kuliah' => 'pemrograman web', 'mahasiswa' => [
                ['nama' => 'Alfred McTomminay', 'nilai' => 67],
                ['nama' => 'Bruno Kasmir', 'nilai' => 90],
                ['nama' => 'Akid Hendra', 'nilai' => 50],
                ['nama' => 'Dany Irawan', 'nilai' => 70],
                ['nama' => 'Chandra Mega Putra', 'nilai' => 60],
        ],
        ],
    
    ];
        return view('pages1.kampus',['kampus' => $dosen]);
        
    }

    public function tv ()
    {
        $tv = [
            array('siaran' => 'NET TV', 'acara' => 'Hiburan', 'jam' => '19.00', 'tanggal' => '14 Juli 2022'),
            array('siaran' => 'TVRI', 'acara' => 'Wayang', 'jam' => '18.00', 'tanggal' => '16 Juli 2022'),
            array('siaran' => 'BEINSPORT', 'acara' => 'Sepak Bola', 'jam' => '15.00', 'tanggal' => '15 Juli 2022'),
            array('siaran' => 'Ochannel', 'acara' => 'Berita', 'jam' => '14.00', 'tanggal' => '17 Juli 2022'),
            array('siaran' => 'Indosiar', 'acara' => 'Azab', 'jam' => '16.00', 'tanggal' => '18 Juli 2022'),  
        ];
            return view('pages1.tv', ['tv' => $tv]);
    }

    public function belanja ()
    {
        $barang = [
            
            ['nama' => 'Alfian', 'membeli' => [
            ['beli' => 'Sepatu', 'harga' => 250000],
            ['beli' => 'Baju', 'harga' => 100000],
            ['beli' => 'Celana', 'harga' => 150000],
            ['beli' => 'Kupluk', 'harga' => 100000],
    ],
    ],
            ['nama' => 'Dida', 'membeli' => [
            ['beli' => 'Topi', 'harga' => 100000],
            ['beli' => 'Baju', 'harga' => 75000],
            ['beli' => 'Celana', 'harga' => 125000],
    ],
    ],

];
    return view('pages1.belanja',['belanja' => $barang]);
    }

}
