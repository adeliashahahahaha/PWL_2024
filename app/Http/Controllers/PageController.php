<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang dari controller';
    }
    public function about()
    {
        return 'Nama: Adelia Nim: 2241760066 (dari controller)';
    }
    public function articles(){
        $articles = [
            ['postId' => 1, 'title' => 'Artikel Pertama'],
            ['postId' => 2, 'title' => 'Artikel Kedua'],
            ['postId' => 3, 'title' => 'Artikel Ketiga'],
        ];

        $output = '<h1>Daftar Artikel</h1><ul>';
        foreach ($articles as $ar) {
            $output .= '<li><a href="../public/article/' . $ar['postId'] . 
            '">' . $ar['title'] . '</a></li>';
        }
        $output .= '</ul>';

        return $output;
    }
    public function article($postId)
    {
        return 'artikel ke-'.($postId).'( dari controller)';
    }
}
