<?php
 
namespace App\Http\Controllers;
 
use App\Models\Message;
use Illuminate\Http\Request;
 
class MessageController extends Controller
{
    public function index()
    {
        // Ambil semua pesan, terbaru di atas.
        $messages = Message::latest()->get();
 
        return view('home', ['messages' => $messages]);
    }
 
    public function store(Request $request)
    {
        // Validasi: pesan wajib diisi, maksimal 500 karakter.
        $validated = $request->validate([
            'content' => 'required|string|max:500',
        ]);
 
        Message::create($validated);
 
        return redirect()->route('messages.index')->with('success', 'Pesan berhasil dikirim!');
    }
 
    public function about()
    {
        return view('about');
    }

    public function destroy(Message $message)
{
    $message->delete();
 
    return redirect()->route('messages.index')->with('success', 'Pesan dihapus.');
}

}
