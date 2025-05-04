@extends('layouts.app-layout')

@section('header', 'Dashboard')

@section('content')
    <div class="bg-white overflow-hidden shadow-sm rounded-lg">
        <div class="p-6 text-gray-900">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Selamat Datang di Indo Noodle Track</h2>
            <p class="mb-4">Sistem Pengelolaan Permintaan dan Stok Bahan Baku</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-6">
                <div class="bg-teal-50 p-4 rounded-lg border border-teal-200">
                    <h3 class="font-semibold text-teal-700 mb-2">Total Permintaan</h3>
                    <p class="text-2xl font-bold text-teal-600">24</p>
                </div>
                
                <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                    <h3 class="font-semibold text-blue-700 mb-2">Total Bahan Baku</h3>
                    <p class="text-2xl font-bold text-blue-600">156</p>
                </div>
                
                <div class="bg-yellow-50 p-4 rounded-lg border border-yellow-200">
                    <h3 class="font-semibold text-yellow-700 mb-2">Retur Masuk</h3>
                    <p class="text-2xl font-bold text-yellow-600">8</p>
                </div>
                
                <div class="bg-green-50 p-4 rounded-lg border border-green-200">
                    <h3 class="font-semibold text-green-700 mb-2">Permintaan Selesai</h3>
                    <p class="text-2xl font-bold text-green-600">18</p>
                </div>
            </div>
        </div>
    </div>
@endsection
