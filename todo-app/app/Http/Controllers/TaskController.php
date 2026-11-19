<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Menampilkan daftar tugas (READ)
    public function index()
    {
        $tasks = Task::latest()->get();

        return view('tasks.index', compact('tasks'));
    }

    // Menampilkan halaman tambah tugas
    public function create()
    {
        return view('tasks.create');
    }

    // Menyimpan tugas baru (CREATE)
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'max:255'],
        ]);

        Task::create($data);

        return redirect()->route('tasks.index')
            ->with('success', 'Tugas berhasil ditambahkan.');
    }

    // Menampilkan halaman edit tugas
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // Memperbarui tugas (UPDATE)
    public function update(Request $request, Task $task)
    {
        $data = $request->validate([
            'title' => ['required', 'max:255'],
        ]);

        $task->update($data);

        return redirect()->route('tasks.index')
            ->with('success', 'Tugas berhasil diperbarui.');
    }

    // Menghapus tugas (DELETE)
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')
            ->with('success', 'Tugas berhasil dihapus.');
    }
}
