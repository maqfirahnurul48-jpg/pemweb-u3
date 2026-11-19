@extends('layouts.app')

@section('content')

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg font-semibold">Daftar Tugas</h2>

        <a href="{{ route('tasks.create') }}"
           class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg text-sm">
            + Tambah Tugas
        </a>
    </div>

    <div class="space-y-3">
        @forelse ($tasks as $task)

            <div class="flex justify-between items-center border border-slate-200 rounded-xl p-4">

                <span class="font-medium">
                    {{ $task->title }}
                </span>

                <div class="flex gap-2">
                    <a href="{{ route('tasks.edit', $task->id) }}"
                       class="text-blue-600 text-sm">
                        Edit
                    </a>

                    <form action="{{ route('tasks.destroy', $task->id) }}"
                          method="POST"
                          onsubmit="return confirm('Yakin ingin menghapus tugas ini?')">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="text-red-600 text-sm">
                            Hapus
                        </button>
                    </form>
                </div>

            </div>

        @empty

            <div class="text-center py-8 text-slate-500">
                Belum ada tugas. Silakan tambahkan tugas baru.
            </div>

        @endforelse
    </div>

@endsection