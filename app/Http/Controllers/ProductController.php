<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return "Halaman Home";
    }
    public function product()
    {
        return "Halaman Product";
    }
    public function edugame()
    {
        echo "<a href=https://www.educastudio.com/category/marbel-edu-games> Edutional Game </a>";
    }
    public function kidgames()
    {
        echo "<a href=https://www.educastudio.com/category/marbel-and-friends-kids-games> Kid Game </a>";
    }
    public function storybook()
    {
        echo "<a href=https://www.educastudio.com/category/riri-story-books> Story Book </a>";
    }
    public function kidsongs()
    {
        echo "<a href=https://www.educastudio.com/category/kolak-kids-songs> Kid Songs </a>";
    }
    public function News($id = null)
    {
        if ($id==null){
            echo "<a href=https://www.educastudio.com/news> News </a>";
        }
        else{
            echo "<a href=https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19> COVID </a>";
        }
    }
    public function Program()
    {
        return "Halaman Program";
    }
    public function Karir()
    {
        echo "<a href=https://www.educastudio.com/program/karir> Karir </a>";
    }
    public function Magang()
    {
        echo "<a href=https://www.educastudio.com/program/magang> Magang </a>";
    }
    public function Industri()
    {
        echo "<a href=https://www.educastudio.com/program/kunjungan-industri> Industri </a>";
    }
    public function AboutUs()
    {
        echo "<a href=https://www.educastudio.com/about-us> About Us </a>";
    }

}
