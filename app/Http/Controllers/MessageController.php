<?php
 
namespace App\Http\Controllers;
 
class MessageController extends Controller
{
    public function index()
    {
        // Data dummy sementara. Diganti data database pada Pertemuan 3.
        $messages = [
            ['content' => 'Semangat buat semua peserta Skill Up Class!', 'time' => '2 menit lalu'],
            ['content' => 'Materi Laravel ternyata seru juga ya.', 'time' => '10 menit lalu'],
            ['content' => 'Halo, ini pesan anonim pertama saya.', 'time' => '1 jam lalu'],
        ];
 
        return view('home', ['messages' => $messages]);
    }
}
