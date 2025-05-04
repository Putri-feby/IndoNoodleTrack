<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Indo Noodle Track') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-primary">
        <div class="flex">
            <!-- Sidebar -->
            <div class="w-64 bg-primary text-white min-h-screen p-5">
                <!-- Logo -->
                <div class="flex justify-center items-center mb-10 pl-2">
                    <img src="{{ asset('logo-svg.svg') }}" alt="Indo Noodle Track Logo" class="h-16">
                </div>
                
                <!-- Navigation Links -->
                <nav class="space-y-1 relative">
                    <!-- Floating Selected Bar -->
                    <div class="absolute right-[-85px] transition-all duration-300 ease-in-out z-[999]" id="selected-bar" style="filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.2)); {{ request()->routeIs('dashboard') ? 'top: 0;' : (request()->routeIs('permintaan-masuk') ? 'top: 56px;' : (request()->routeIs('retur-masuk') ? 'top: 112px;' : (request()->routeIs('monitoring') ? 'top: 168px;' : (request()->routeIs('riwayat') ? 'top: 224px;' : '')))) }}">
                        <img src="{{ asset('selected-bar.svg') }}" alt="Selected" class="h-12">
                    </div>
                    
                    <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-white hover:bg-primary-dark rounded-lg transition-colors {{ request()->routeIs('dashboard') ? 'font-bold' : '' }}">
                        <img src="{{ asset('side-bar/dashboard.svg') }}" alt="Dashboard Icon" class="w-5 h-5 mr-3">
                        <span class="whitespace-nowrap">Dashboard</span>
                    </a>
                    
                    <a href="{{ route('permintaan-masuk') }}" class="flex items-center px-4 py-3 text-white hover:bg-primary-dark rounded-lg transition-colors {{ request()->routeIs('permintaan-masuk') ? 'font-bold' : '' }}">
                        <img src="{{ asset('side-bar/permintaan-masuk.svg') }}" alt="Permintaan Masuk Icon" class="w-5 h-5 mr-3">
                        <span class="whitespace-nowrap">Permintaan Masuk</span>
                    </a>
                    
                    <a href="{{ route('retur-masuk') }}" class="flex items-center px-4 py-3 text-white hover:bg-primary-dark rounded-lg transition-colors {{ request()->routeIs('retur-masuk') ? 'font-bold' : '' }}">
                        <img src="{{ asset('side-bar/retur-masuk.svg') }}" alt="Retur Masuk Icon" class="w-5 h-5 mr-3">
                        <span class="whitespace-nowrap">Retur Masuk</span>
                    </a>
                    
                    <a href="{{ route('monitoring') }}" class="flex items-center px-4 py-3 text-white hover:bg-primary-dark rounded-lg transition-colors {{ request()->routeIs('monitoring') ? 'font-bold' : '' }}">
                        <img src="{{ asset('side-bar/monitoring.svg') }}" alt="Monitoring Icon" class="w-5 h-5 mr-3">
                        <span class="whitespace-nowrap">Monitoring</span>
                    </a>
                    
                    <a href="{{ route('riwayat') }}" class="flex items-center px-4 py-3 text-white hover:bg-primary-dark rounded-lg transition-colors {{ request()->routeIs('riwayat') ? 'font-bold' : '' }}">
                        <img src="{{ asset('side-bar/riwayat.svg') }}" alt="Riwayat Icon" class="w-5 h-5 mr-3">
                        <span class="whitespace-nowrap">Riwayat</span>
                    </a>
                </nav>
            </div>
            
            <!-- Main content area with rounded corners -->
            <div class="flex-1 relative">
                <!-- Primary color strip to create perfect rounded corners -->
                <div class="absolute left-0 top-0 w-[40px] h-full bg-primary"></div>
                
                <!-- Main content with proper rounded corners -->
                <div class="bg-tertiary min-h-screen ml-[40px] rounded-tl-[40px] rounded-bl-[40px] relative z-10">
                <!-- Top Navigation -->
                <header class="bg-transparent pt-6">
                    <!-- Top Section with proper spacing -->
                    <div class="px-6 py-4 flex justify-between items-start">
                        <!-- Page title -->
                        <h1 class="text-4xl font-bold text-primary">{{ $title ?? 'Permintaan Bahan Baku' }}</h1>
                        
                        <!-- Right side (user and search) -->
                        <div class="flex flex-col items-end space-y-2">
                            <!-- User Profile -->
                            <div class="flex items-center">
                                <div>
                                    <div class="text-sm font-medium text-right">{{ auth()->user()->role ?? 'Divisi Gudang' }}</div>
                                    <div class="text-xs text-gray-500 text-right">User Id : {{ auth()->user()->user_id ?? '02081999' }}</div>
                                </div>
                                <img src="https://i.pravatar.cc/60?u={{ auth()->id() ?? '1' }}" alt="Profile" class="w-10 h-10 rounded-full ml-3">
                            </div>
                        </div>
                    </div>
                    
                    <!-- No Page Title here anymore, it's moved to the top section -->
                </header>
                
                <!-- Page Content -->
                <main class="p-6">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
</html>