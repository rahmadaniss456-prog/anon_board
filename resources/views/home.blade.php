@extends('layouts.app')
 
@section('title', 'Papan Pesan')
 
@section('content')
    @if (session('success'))
        <div class="bg-green-100 text-green-800 rounded-lg p-3 mb-4 text-sm">
            {{ session('success') }}
        </div>
    @endif
 
    <div class="bg-white rounded-xl shadow p-6 mb-6">
        <h1 class="text-xl font-bold mb-4">Kirim Pesan Anonim</h1>
        <form action="{{ route('messages.store') }}" method="POST">
            @csrf
            <textarea
                name="content"
                class="w-full border border-gray-300 rounded-lg p-3 mb-1"
                rows="3"
                placeholder="Tulis pesanmu di sini...">{{ old('content') }}</textarea>
            @error('content')
                <p class="text-red-500 text-sm mb-2">{{ $message }}</p>
            @enderror
            <button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded-lg mt-2">
                Kirim
            </button>
        </form>
    </div>
 
    <h2 class="text-lg font-semibold mb-3">Pesan Masuk</h2>
 
    <div class="space-y-3">
        @forelse ($messages as $message)
            <div class="bg-white rounded-lg shadow p-4">
    <p>{{ $message->content }}</p>
    <div class="flex justify-between items-center mt-2">
        <span class="text-xs text-gray-400">{{ $message->created_at->diffForHumans() }}</span>
        <form action="{{ route('messages.destroy', $message) }}" method="POST"
              onsubmit="return confirm('Hapus pesan ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-xs text-red-400 hover:text-red-600">Hapus</button>
        </form>
    </div>
</div>
        @empty
            <p class="text-gray-400 text-sm">Belum ada pesan.</p>
        @endforelse
    </div>
@endsection