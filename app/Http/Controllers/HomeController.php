<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class HomeController extends Controller
{
    public function blog() {
        $data1 = new stdClass;
        $data1->nama = 'Aji seblak';
        $data1->kelas = 'XII RPL 1';
        $data1->nis = '12345';

        $data2 = new stdClass;
        $data2->nama = 'Nanda Eskrim';
        $data2->kelas = 'XII RPL 1';
        $data2->nis = '12346';

        $data3 = new stdClass;
        $data3->nama = 'Akmal tela tello';
        $data3->kelas = 'XII RPL 1';
        $data3->nis = '12347';

        $data4 = new stdClass;
        $data4->nama = 'jaki monyet';
        $data4->kelas = 'XII RPL 1';
        $data4->nis = '12344';

        $datas = array($data1, $data2, $data3, $data4);

        return view('blog.index', ['data' => $datas]);
    }

    public function blogabout()
    {
        return view('blog.about');
    }
    
    public function blogcontact()
    {
        return view('blog.contact');
    }
}