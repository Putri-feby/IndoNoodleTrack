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
                        <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="whitespace-nowrap">Dashboard</span>
                    </a>
                    
                    <a href="{{ route('permintaan-masuk') }}" class="flex items-center px-4 py-3 text-white hover:bg-primary-dark rounded-lg transition-colors {{ request()->routeIs('permintaan-masuk') ? 'font-bold' : '' }}">
                        <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                        <span class="whitespace-nowrap">Permintaan Masuk</span>
                    </a>
                    
                    <a href="{{ route('retur-masuk') }}" class="flex items-center px-4 py-3 text-white hover:bg-primary-dark rounded-lg transition-colors {{ request()->routeIs('retur-masuk') ? 'font-bold' : '' }}">
                        <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 14V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l4-2 4 2 4-2 4 2z" />
                        </svg>
                        <span class="whitespace-nowrap">Retur Masuk</span>
                    </a>
                    
                    <a href="{{ route('monitoring') }}" class="flex items-center px-4 py-3 text-white hover:bg-primary-dark rounded-lg transition-colors {{ request()->routeIs('monitoring') ? 'font-bold' : '' }}">
                        <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        <span class="whitespace-nowrap">Monitoring</span>
                    </a>
                    
                    <a href="{{ route('riwayat') }}" class="flex items-center px-4 py-3 text-white hover:bg-primary-dark rounded-lg transition-colors {{ request()->routeIs('riwayat') ? 'font-bold' : '' }}">
                        <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
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