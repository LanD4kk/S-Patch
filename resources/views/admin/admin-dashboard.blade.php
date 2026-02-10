@extends('layouts.app')

@section('title', 'Admin Dashboard - SMKN 4 Tangerang')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">
    
    <div class="flex items-end justify-between">
        <div>
            <h2 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white">Facility Overview</h2>
            <p class="text-slate-500 mt-1">Status monitor for campus infrastructure</p>
        </div>
        <div class="flex gap-2">
            <button class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 px-4 py-2 rounded-lg text-xs font-semibold flex items-center gap-2 hover:bg-slate-50 transition-colors text-slate-700 dark:text-slate-300">
                <span class="material-symbols-outlined text-sm">calendar_today</span>
                Last 30 Days
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white dark:bg-[#101622] p-6 rounded-[20px] shadow-sm border border-slate-100 dark:border-slate-800 relative overflow-hidden group hover:-translate-y-1 transition-transform duration-300">
            <div class="absolute -right-6 -bottom-6 opacity-10 group-hover:opacity-20 transition-opacity">
                <span class="material-symbols-outlined text-[140px] text-blue-600 select-none">assignment</span>
            </div>
            <div class="relative z-10">
                <p class="text-slate-500 text-sm font-bold tracking-wide mb-1">Total Complaints</p>
                <div class="flex items-center gap-3">
                    <h3 class="text-4xl font-black text-slate-800 dark:text-white tracking-tight">1,284</h3>
                    <span class="text-xs font-bold text-green-500 flex items-center bg-green-50 dark:bg-green-900/30 px-2 py-1 rounded-lg">+12.5%</span>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-[#101622] p-6 rounded-[20px] shadow-sm border border-slate-100 dark:border-slate-800 relative overflow-hidden group hover:-translate-y-1 transition-transform duration-300">
            <div class="absolute -right-6 -bottom-6 opacity-10 group-hover:opacity-20 transition-opacity">
                <span class="material-symbols-outlined text-[140px] text-amber-500 select-none">verified_user</span>
            </div>
            <div class="absolute top-6 right-6 w-3 h-3 bg-amber-400 rounded-full animate-ping"></div>
            <div class="absolute top-6 right-6 w-3 h-3 bg-amber-500 rounded-full"></div>
            <div class="relative z-10">
                <p class="text-slate-500 text-sm font-bold tracking-wide mb-1">Need Verification</p>
                <div class="flex items-center gap-3">
                    <h3 class="text-4xl font-black text-slate-800 dark:text-white tracking-tight">42</h3>
                    <span class="text-xs font-bold text-amber-500 flex items-center bg-amber-50 dark:bg-amber-900/30 px-2 py-1 rounded-lg">High Priority</span>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-[#101622] p-6 rounded-[20px] shadow-sm border border-slate-100 dark:border-slate-800 relative overflow-hidden group hover:-translate-y-1 transition-transform duration-300">
            <div class="absolute -right-6 -bottom-6 opacity-10 group-hover:opacity-20 transition-opacity">
                <span class="material-symbols-outlined text-[140px] text-emerald-500 select-none">task_alt</span>
            </div>
            <div class="relative z-10">
                <p class="text-slate-500 text-sm font-bold tracking-wide mb-1">Resolved Cases</p>
                <div class="flex items-center gap-3">
                    <h3 class="text-4xl font-black text-slate-800 dark:text-white tracking-tight">958</h3>
                    <span class="text-xs font-bold text-emerald-500 flex items-center bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-lg">84% Efficiency</span>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-[#101622] p-6 rounded-[20px] shadow-sm border border-slate-100 dark:border-slate-800 relative overflow-hidden group hover:-translate-y-1 transition-transform duration-300">
            <div class="absolute -right-6 -bottom-6 opacity-10 group-hover:opacity-20 transition-opacity">
                <span class="material-symbols-outlined text-[140px] text-blue-400 select-none">group</span>
            </div>
            <div class="relative z-10">
                <p class="text-slate-500 text-sm font-bold tracking-wide mb-1">Active Staff</p>
                <div class="flex items-center gap-3">
                    <h3 class="text-4xl font-black text-slate-800 dark:text-white tracking-tight">18</h3>
                    <span class="text-xs font-bold text-slate-400 flex items-center bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded-lg">On Duty</span>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
        
        <div class="p-6 border-b border-slate-100 dark:border-slate-800 flex items-center justify-between">
            <div>
                <h3 class="text-slate-900 dark:text-white font-bold text-lg">Laporan Terbaru</h3>
                <p class="text-slate-500 dark:text-slate-400 text-sm">Daftar keluhan fasilitas sekolah terbaru masuk</p>
            </div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-bold flex items-center gap-2 hover:bg-blue-700 transition-colors shadow-lg shadow-blue-600/20">
                <span class="material-symbols-outlined text-sm">filter_list</span>
                Filter Data
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 dark:bg-slate-800/50">
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Pelapor</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Kategori</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-slate-400">#001</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-400 shrink-0">
                                    <span class="material-symbols-outlined text-sm">person</span>
                                </div>
                                <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Siswa A</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 rounded-full text-xs font-medium">Fasilitas</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-400 rounded-full text-xs font-bold">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500"></span> Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-blue-600 hover:text-blue-700 text-sm font-bold">Detail</button>
                        </td>
                    </tr>

                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-slate-400">#002</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-400 shrink-0">
                                    <span class="material-symbols-outlined text-sm">person</span>
                                </div>
                                <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Guru B</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 rounded-full text-xs font-medium">Kelistrikan</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400 rounded-full text-xs font-bold">
                                <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span> Proses
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-blue-600 hover:text-blue-700 text-sm font-bold">Detail</button>
                        </td>
                    </tr>

                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-slate-400">#003</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-400 shrink-0">
                                    <span class="material-symbols-outlined text-sm">person</span>
                                </div>
                                <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Staf C</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 rounded-full text-xs font-medium">Kebersihan</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full text-xs font-bold">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Selesai
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-blue-600 hover:text-blue-700 text-sm font-bold">Detail</button>
                        </td>
                    </tr>

                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-slate-400">#004</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-400 shrink-0">
                                    <span class="material-symbols-outlined text-sm">person</span>
                                </div>
                                <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Siswa D</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 rounded-full text-xs font-medium">Fasilitas</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-purple-100 text-purple-700 dark:bg-purple-900/30 dark:text-purple-400 rounded-full text-xs font-bold">
                                <span class="w-1.5 h-1.5 rounded-full bg-purple-500"></span> Verifikasi
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-blue-600 hover:text-blue-700 text-sm font-bold">Detail</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="px-6 py-4 bg-slate-50 dark:bg-slate-800/50 flex items-center justify-between border-t border-slate-100 dark:border-slate-800">
            <span class="text-xs font-medium text-slate-500">Showing 4 of 128 results</span>
            <div class="flex gap-1">
                <button class="p-1 px-2 rounded border border-slate-200 dark:border-slate-700 text-xs font-bold text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800">Prev</button>
                <button class="p-1 px-3 rounded bg-blue-600 text-white text-xs font-bold">1</button>
                <button class="p-1 px-3 rounded border border-slate-200 dark:border-slate-700 text-xs font-bold text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800">2</button>
                <button class="p-1 px-2 rounded border border-slate-200 dark:border-slate-700 text-xs font-bold text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection