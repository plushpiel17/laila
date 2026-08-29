<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() 
    { $data =[
        ['nama' => 'laptop', 'deskripsi' => 'laptop murah', 'harga' => '1.000.000', 'jumlah' => '1'],
        ['nama' => 'pc', 'deskripsi' => 'pc murah', 'harga' => '2.000.000', 'jumlah' => '7'],
        ['nama' => 'router', 'deskripsi' => 'router murah', 'harga' => '106.000', 'jumlah' => '2'],
        ['nama' => 'acces point', 'deskripsi' => 'acces point murah', 'harga' => '200.000', 'jumlah' => '11'],
        ['nama' => 'hub', 'deskripsi' => 'hub murah', 'harga' => '150.000', 'jumlah' => '31'],
    ];
    $new  =[
        ['nama' => 'aksesoris', 'deskripsi' => 'lucuu', 'harga' => '20.000', 'jumlah' => '4'],
        ['nama' => 'pakaian', 'deskripsi' => 'elegant', 'harga' => '176.000', 'jumlah' => '12'],
        ['nama' => 'sepatu', 'deskripsi' => 'style', 'harga' => '1.300.000', 'jumlah' => '1'],
        ['nama' => 'jam tangan', 'deskripsi' => 'praktis', 'harga' => '400.000', 'jumlah' => '7'],
        ['nama' => 'anting', 'deskripsi' => 'mempercantik', 'harga' => '35.000', 'jumlah' => '10'],
        ['nama' => 'kalung', 'deskripsi' => 'cute', 'harga' => '50.000', 'jumlah' => '1'],
        ['nama' => 'jeans', 'deskripsi' => 'main', 'harga' => '410.000', 'jumlah' => '18'],
        ['nama' => 'slayer', 'deskripsi' => 'bandung', 'harga' => '15.000', 'jumlah' => '45'],
        ['nama' => 'tas', 'deskripsi' => 'selempang', 'harga' => '600.000', 'jumlah' => '9'],
        ['nama' => 'hoodie', 'deskripsi' => 'baju', 'harga' => '200.000', 'jumlah' => '32'],
        ];
        return view ('dashboard', compact('data','new'));
    }
}
