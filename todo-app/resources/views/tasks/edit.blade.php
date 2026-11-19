
@extends('layouts.app')

@section('content')

    <div class="mb-6">
        <h2 class="text-lg font-semibold">Edit Tugas</h2>
        <p class="text-sm text-slate-500 mt-1">
            Ubah nama tugas kamu.
        </p>
    </div>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium mb-2">
                Nama Tugas
            </label>

            <input
                type="text"
                name="title"
                id="title"
                value="{{ old('title', $task->title) }}"
                class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-teal-500"
            >

            @error('title')
                <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-2">
            <button type="submit"
                class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg text-sm">
                Update Tugas
            </button>

            <a href="{{ route('tasks.index') }}"
                class="bg-slate-200 hover:bg-slate-300 text-slate-700 px-4 py-2 rounded-lg text-sm">
                Batal
            </a>
        </div>
    </form>

@endsection
