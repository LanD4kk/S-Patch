@extends('layouts.app')

@section('title', 'Admin - Manajemen Siswa | SMKN 4 Tangerang')

@section('content')
<!-- Page Title Section -->
<div class="mb-6">
    <h2 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white">Student Management</h2>
    <p class="text-slate-500 mt-1">Manage student data and information</p>
</div>

<!-- Search, Filter, and Add Button Section -->
<div class="flex flex-col md:flex-row gap-4 items-center justify-between mb-8">
    <div class="flex items-center gap-3 w-full md:max-w-2xl">
        <div class="relative flex-1">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
            <input class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-800 dark:bg-slate-900 focus:ring-blue-600 focus:border-blue-600 text-sm shadow-sm" placeholder="Cari Nama atau NIS..." type="text"/>
        </div>
        <div class="relative w-48">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[20px]">filter_list</span>
            <select class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-800 dark:bg-slate-900 focus:ring-blue-600 focus:border-blue-600 text-sm appearance-none shadow-sm cursor-pointer">
                <option value="">Semua Kelas</option>
                <option value="XII RPL 1">XII RPL 1</option>
                <option value="XII RPL 2">XII RPL 2</option>
                <option value="XI TKJ 1">XI TKJ 1</option>
                <option value="XI TKJ 2">XI TKJ 2</option>
                <option value="X TKR 1">X TKR 1</option>
                <option value="X TKR 2">X TKR 2</option>
            </select>
        </div>
    </div>
    <button class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-xl font-semibold text-sm transition-all shadow-lg shadow-blue-600/20 whitespace-nowrap">
        <span class="material-symbols-outlined">person_add</span>
        Tambah Siswa Baru
    </button>
</div>

<div class="bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50 dark:bg-slate-800/50 text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-wider">
                    <th class="px-6 py-4">NIS</th>
                    <th class="px-6 py-4">Nama Lengkap</th>
                    <th class="px-6 py-4">Kelas</th>
                    <th class="px-6 py-4">No. Telp</th>
                    <th class="px-6 py-4 text-center">Aksi</th>
                </tr>
            </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                    @forelse($students as $student)
                    <tr class="hover:bg-blue-50/50 dark:hover:bg-blue-900/10 transition-colors group">
                        <td class="px-6 py-4 font-mono text-sm text-slate-600 dark:text-slate-400">{{ $student->identity_number }}</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                @php
                                    $names = explode(' ', $student->full_name);
                                    $initials = strtoupper(substr($names[0] ?? 'A', 0, 1) . substr($names[1] ?? '', 0, 1));
                                @endphp
                                <div class="size-8 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400 font-bold text-xs uppercase">{{ $initials }}</div>
                                <span class="text-sm font-bold text-slate-900 dark:text-slate-100">{{ $student->full_name }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300">{{ $student->class_name ?? '-' }}</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">{{ $student->phone_number ?? '-' }}</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-2">
                                <button class="p-1.5 rounded-lg text-blue-600 hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors" title="Edit">
                                    <span class="material-symbols-outlined text-[18px]">edit</span>
                                </button>
                                <button class="p-1.5 rounded-lg text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors" title="Hapus">
                                    <span class="material-symbols-outlined text-[18px]">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center text-slate-500">
                            Belum ada data siswa.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
        </table>
    </div>
    
    <div class="px-6 py-4 bg-slate-50 dark:bg-slate-800/30 border-t border-slate-200 dark:border-slate-800">
        {{ $students->links('pagination::tailwind') }}
    </div>
</div>
@endsection
