@extends('layouts.app')
 
@section('title', 'Papan Pesan')
 
@section('content')
    <div class="bg-white rounded-xl shadow p-6 mb-6">
        <h1 class="text-xl font-bold mb-4">Kirim Pesan Anonim</h1>
        <form>
            <textarea
                class="w-full border border-gray-300 rounded-lg p-3 mb-3"
                rows="3"
                placeholder="Tulis pesanmu di sini..."></textarea>
            <button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded-lg">
                Kirim
            </button>
        </form>
        <p class="text-xs text-gray-400 mt-2">
            Tombol kirim belum berfungsi. Kita aktifkan di Pertemuan 3.
        </p>
    </div>
 
    <h2 class="text-lg font-semibold mb-3">Pesan Masuk</h2>
 
    <div class="space-y-3">
        @foreach ($messages as $message)
            <div class="bg-white rounded-lg shadow p-4">
                <p>{{ $message['content'] }}</p>
                <p class="text-xs text-gray-400 mt-2">{{ $message['time'] }}</p>
            </div>
        @endforeach
    </div>
@endsection
