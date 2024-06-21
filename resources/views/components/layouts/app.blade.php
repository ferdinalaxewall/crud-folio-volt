<html class="bg-gray-50 text-gray-600">
    <head>
        <title>{{ config('app.name') }}</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    container: {
                        center: true
                        , padding: '1rem'
                    , }
                , }
            }
        
        </script>
    </head>

    <body>
        <div class="antialiased bg-gray-50 dark:bg-gray-900">
            {{-- Navbar --}}
            <x-widgets.navbar />
            
            <!-- Sidebar -->
            <x-widgets.sidebar />
    
            <main class="p-4 md:ml-64 h-auto pt-24 min-h-screen">
                {{ $slot }}
            </main>
        </div>
    </body>

</html>
