@extends('layouts.app')
 
@section('title', 'Edit Pesan')
 
@section('content')
    <div class="bg-white rounded-xl shadow p-6">
        <h1 class="text-xl font-bold mb-4">Edit Pesan</h1>
        <form action="{{ route('messages.update', $message) }}" method="POST">
            @csrf
            @method('PUT')
            <textarea
                name="content"
                class="w-full border border-gray-300 rounded-lg p-3 mb-1"
                rows="3">{{ old('content', $message->content) }}</textarea>
            @error('content')
                <p class="text-red-500 text-sm mb-2">{{ $message }}</p>
            @enderror
            <button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded-lg mt-2">
                Simpan
            </button>
        </form>
    </div>
@endsection
