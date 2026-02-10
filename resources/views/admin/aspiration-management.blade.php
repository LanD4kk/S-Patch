@extends('layouts.app')

@section('title', 'Admin - Manajemen Aspirasi | SMKN 4 Tangerang')

@section('content')
<!-- Filter Section -->
<section class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden mb-8">
    <div class="px-6 py-4 border-b border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/50">
        <h3 class="font-bold text-slate-800 dark:text-slate-100 flex items-center gap-2">
            <span class="material-symbols-outlined text-blue-600">filter_list</span>
            Filter Data
        </h3>
    </div>
    <div class="p-6">
        <form class="grid grid-cols-1 md:grid-cols-4 gap-6 items-end">
            <div class="space-y-2">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Mulai Tanggal</label>
                <input class="w-full h-11 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg px-4 focus:ring-blue-600 focus:border-blue-600 transition-all text-sm" type="date"/>
            </div>
            <div class="space-y-2">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Sampai Tanggal</label>
                <input class="w-full h-11 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg px-4 focus:ring-blue-600 focus:border-blue-600 transition-all text-sm" type="date"/>
            </div>
            <div class="space-y-2">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Kategori</label>
                <select class="w-full h-11 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg px-4 focus:ring-blue-600 focus:border-blue-600 transition-all text-sm">
                    <option>Pilih Kategori</option>
                    <option>Sarana & Prasarana</option>
                    <option>Kebersihan</option>
                    <option>Keamanan</option>
                    <option>Lainnya</option>
                </select>
            </div>
            <div class="space-y-2">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">NIS Siswa</label>
                <div class="relative">
                    <input class="w-full h-11 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg pl-10 pr-4 focus:ring-blue-600 focus:border-blue-600 transition-all text-sm" placeholder="Cari NIS..." type="text"/>
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm">search</span>
                </div>
            </div>
            <div class="md:col-span-4 flex justify-end">
                <button class="bg-blue-600 text-white h-11 px-8 rounded-lg font-bold text-sm shadow-lg shadow-blue-600/25 flex items-center gap-2 hover:bg-blue-700 transition-colors" type="submit">
                    <span class="material-symbols-outlined">search</span>
                    Tampilkan Data
                </button>
            </div>
        </form>
    </div>
</section>

<!-- Results Table -->
<section class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
    <div class="px-6 py-4 border-b border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/50 flex items-center justify-between">
        <h3 class="font-bold text-slate-800 dark:text-slate-100">Hasil Pencarian</h3>
        <div class="flex gap-2">
            <button class="p-2 hover:bg-slate-200 dark:hover:bg-slate-700 rounded-lg transition-colors" title="Print">
                <span class="material-symbols-outlined text-slate-500">print</span>
            </button>
            <button class="p-2 hover:bg-slate-200 dark:hover:bg-slate-700 rounded-lg transition-colors" title="Download">
                <span class="material-symbols-outlined text-slate-500">download</span>
            </button>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50/30 dark:bg-slate-800/30 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                    <th class="px-6 py-4 text-center border-b border-slate-100 dark:border-slate-800 w-16">No</th>
                    <th class="px-6 py-4 border-b border-slate-100 dark:border-slate-800">Tanggal</th>
                    <th class="px-6 py-4 border-b border-slate-100 dark:border-slate-800">Siswa</th>
                    <th class="px-6 py-4 border-b border-slate-100 dark:border-slate-800">Kategori</th>
                    <th class="px-6 py-4 border-b border-slate-100 dark:border-slate-800">Isi Aspirasi</th>
                    <th class="px-6 py-4 border-b border-slate-100 dark:border-slate-800">Status</th>
                    <th class="px-6 py-4 border-b border-slate-100 dark:border-slate-800 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                <!-- Row 1 -->
                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                    <td class="px-6 py-5 text-center font-mono text-sm text-slate-500 dark:text-slate-400">01</td>
                    <td class="px-6 py-5 whitespace-nowrap text-sm font-medium">12 Okt 2023</td>
                    <td class="px-6 py-5">
                        <div class="flex flex-col">
                            <span class="text-sm font-bold">Andi Setiawan</span>
                            <span class="text-xs text-slate-500 dark:text-slate-400">NIS: 21221001</span>
                        </div>
                    </td>
                    <td class="px-6 py-5">
                        <span class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 px-3 py-1 rounded-full text-xs font-semibold">Fasilitas</span>
                    </td>
                    <td class="px-6 py-5 min-w-[300px]">
                        <p class="text-sm line-clamp-2 text-slate-600 dark:text-slate-300 leading-relaxed">Kerusakan AC di ruang kelas XI RPL 2 sudah berlangsung selama satu minggu...</p>
                    </td>
                    <td class="px-6 py-5">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-500">
                            <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 mr-2"></span>
                            Menunggu
                        </span>
                    </td>
                    <td class="px-6 py-5 text-center">
                        <button class="text-blue-600 hover:underline text-sm font-bold">Detail</button>
                    </td>
                </tr>
                <!-- Row 2 -->
                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                    <td class="px-6 py-5 text-center font-mono text-sm text-slate-500 dark:text-slate-400">02</td>
                    <td class="px-6 py-5 whitespace-nowrap text-sm font-medium">10 Okt 2023</td>
                    <td class="px-6 py-5">
                        <div class="flex flex-col">
                            <span class="text-sm font-bold">Budi Santoso</span>
                            <span class="text-xs text-slate-500 dark:text-slate-400">NIS: 21221045</span>
                        </div>
                    </td>
                    <td class="px-6 py-5">
                        <span class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 px-3 py-1 rounded-full text-xs font-semibold">Kebersihan</span>
                    </td>
                    <td class="px-6 py-5 min-w-[300px]">
                        <p class="text-sm line-clamp-2 text-slate-600 dark:text-slate-300 leading-relaxed">Tempat sampah di area kantin sudah penuh dan beraroma tidak sedap sejak pagi.</p>
                    </td>
                    <td class="px-6 py-5">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600 mr-2"></span>
                            Proses
                        </span>
                    </td>
                    <td class="px-6 py-5 text-center">
                        <button class="text-blue-600 hover:underline text-sm font-bold">Detail</button>
                    </td>
                </tr>
                <!-- Row 3 -->
                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                    <td class="px-6 py-5 text-center font-mono text-sm text-slate-500 dark:text-slate-400">03</td>
                    <td class="px-6 py-5 whitespace-nowrap text-sm font-medium">08 Okt 2023</td>
                    <td class="px-6 py-5">
                        <div class="flex flex-col">
                            <span class="text-sm font-bold">Citra Lestari</span>
                            <span class="text-xs text-slate-500 dark:text-slate-400">NIS: 21221092</span>
                        </div>
                    </td>
                    <td class="px-6 py-5">
                        <span class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 px-3 py-1 rounded-full text-xs font-semibold">Infrastruktur</span>
                    </td>
                    <td class="px-6 py-5 min-w-[300px]">
                        <p class="text-sm line-clamp-2 text-slate-600 dark:text-slate-300 leading-relaxed">Genteng bocor di lorong perpustakaan, menyebabkan lantai licin saat hujan.</p>
                    </td>
                    <td class="px-6 py-5">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-500">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mr-2"></span>
                            Selesai
                        </span>
                    </td>
                    <td class="px-6 py-5 text-center">
                        <button class="text-blue-600 hover:underline text-sm font-bold">Detail</button>
                    </td>
                </tr>
                <!-- Row 4 -->
                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                    <td class="px-6 py-5 text-center font-mono text-sm text-slate-500 dark:text-slate-400">04</td>
                    <td class="px-6 py-5 whitespace-nowrap text-sm font-medium">05 Okt 2023</td>
                    <td class="px-6 py-5">
                        <div class="flex flex-col">
                            <span class="text-sm font-bold">Dimas Pratama</span>
                            <span class="text-xs text-slate-500 dark:text-slate-400">NIS: 21221104</span>
                        </div>
                    </td>
                    <td class="px-6 py-5">
                        <span class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 px-3 py-1 rounded-full text-xs font-semibold">Listrik</span>
                    </td>
                    <td class="px-6 py-5 min-w-[300px]">
                        <p class="text-sm line-clamp-2 text-slate-600 dark:text-slate-300 leading-relaxed">Proyektor di lab komputer 3 sering mati sendiri saat digunakan mengajar.</p>
                    </td>
                    <td class="px-6 py-5">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-500">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mr-2"></span>
                            Selesai
                        </span>
                    </td>
                    <td class="px-6 py-5 text-center">
                        <button class="text-blue-600 hover:underline text-sm font-bold">Detail</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <!-- Pagination Footer -->
    <div class="px-6 py-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between bg-slate-50/50 dark:bg-slate-800/30">
        <p class="text-sm text-slate-500 dark:text-slate-400">Menampilkan <span class="font-bold text-slate-900 dark:text-slate-200">1 - 4</span> dari <span class="font-bold text-slate-900 dark:text-slate-200">128</span> data</p>
        <div class="flex items-center gap-1">
            <button class="size-9 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 disabled:opacity-50 disabled:cursor-not-allowed transition-colors" disabled>
                <span class="material-symbols-outlined text-sm">chevron_left</span>
            </button>
            <button class="size-9 flex items-center justify-center rounded-lg bg-blue-600 text-white text-sm font-bold shadow-sm">1</button>
            <button class="size-9 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 text-sm transition-colors">2</button>
            <button class="size-9 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 text-sm transition-colors">3</button>
            <span class="px-2 text-slate-400">...</span>
            <button class="size-9 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 text-sm transition-colors">32</button>
            <button class="size-9 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                <span class="material-symbols-outlined text-sm">chevron_right</span>
            </button>
        </div>
    </div>
</section>
@endsection
