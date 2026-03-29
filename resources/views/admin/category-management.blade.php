@extends('layouts.app')

@section('title', 'Admin - Manajemen Kategori | SMKN 4 Tangerang')

@section('content')
<!-- Content Header -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
    <div>
        <h1 class="text-3xl font-extrabold text-slate-900 dark:text-white tracking-tight leading-tight">Daftar Kategori Laporan</h1>
        <p class="text-slate-500 dark:text-slate-400 mt-1">Kelola jenis-jenis permasalahan fasilitas sekolah secara efisien.</p>
    </div>
    <button class="flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg font-bold shadow-lg shadow-blue-600/20 transition-all active:scale-95">
        <span class="material-symbols-outlined text-[20px]">add_circle</span>
        <span>Tambah Kategori</span>
    </button>
</div>

<!-- Category Table Card -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50 dark:bg-slate-800/50">
                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 border-b border-slate-200 dark:border-slate-800">ID</th>
                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 border-b border-slate-200 dark:border-slate-800">Nama Kategori</th>
                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 border-b border-slate-200 dark:border-slate-800 text-center">Laporan Terkait</th>
                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 border-b border-slate-200 dark:border-slate-800 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                @forelse($categories as $category)
                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
                    <td class="px-6 py-5 font-mono text-sm text-slate-500 dark:text-slate-400">#CAT-{{ str_pad($category->category_id, 3, '0', STR_PAD_LEFT) }}</td>
                    <td class="px-6 py-5">
                        <span class="font-bold text-slate-800 dark:text-white">{{ $category->category_name }}</span>
                    </td>
                    <td class="px-6 py-5 text-center">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-700 dark:bg-blue-900/40 dark:text-blue-300">
                            {{ $category->complaints_count }} Laporan
                        </span>
                    </td>
                    <td class="px-6 py-5 text-right space-x-2">
                        <button class="p-1.5 text-blue-600 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded transition-colors" title="Edit">
                            <span class="material-symbols-outlined text-[20px]">edit</span>
                        </button>
                        <button class="p-1.5 text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 rounded transition-colors" title="Hapus">
                            <span class="material-symbols-outlined text-[20px]">delete</span>
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-8 text-center text-slate-500">
                        Belum ada data kategori.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    <div class="px-6 py-4 flex items-center justify-between border-t border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
        <div class="w-full">
            {{ $categories->links('pagination::tailwind') }}
        </div>
    </div>
</div>
@endsection
