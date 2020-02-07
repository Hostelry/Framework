<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>{{config('app.name')}}</title>

        <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,600,600i,700&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body class="font-custom min-h-screen">
        <header class="py-4 px-6 absolute top-0 left-0 right-0 z-10">
            <div class="container mx-auto">
                <div class="flex items-center">
                    <div class="flex-1">

                    </div>
                    <button class="text-secondary lg:hidden">
                        <svg class="current-fill h-6 w-6" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="-49 141 512 512" style="enable-background:new -49 141 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M413,422H1c-13.807,0-25-11.193-25-25s11.193-25,25-25h412c13.807,0,25,11.193,25,25S426.807,422,413,422z"/>
                                </g>
                                <g>
                                    <path d="M413,562H1c-13.807,0-25-11.193-25-25s11.193-25,25-25h412c13.807,0,25,11.193,25,25S426.807,562,413,562z"/>
                                </g>
                                <g>
                                    <path d="M413,282H1c-13.807,0-25-11.193-25-25s11.193-25,25-25h412c13.807,0,25,11.193,25,25S426.807,282,413,282z"/>
                                </g>
                            </g>
                        </svg>
                    </button>
                    <nav class="hidden lg:flex items-center">
                        <a href="#" class="px-6 py-3 font-bold uppercase text-primary border-b-2 border-primary">Home</a>
                        <a href="#overview" class="px-6 py-3 font-bold uppercase text-secondary">Overview</a>
                        <a href="#pricing" class="px-6 py-3 font-bold uppercase text-secondary">Plans</a>
                        <a href="#features" class="px-6 py-3 font-bold uppercase text-secondary">Features</a>
                        <a href="#partners" class="px-6 py-3 font-bold uppercase text-secondary">Partners</a>
                        <a href="#demo" class="px-6 py-3 font-bold uppercase text-secondary">Demo</a>
                    </nav>
                </div>
            </div>
        </header>
        @yield('content')
        <footer class="bg-blue-100">
            <div class="container mx-auto px-6 py-12 text-secondary-500 text-center border-t border-gray-300">
                <p>Copyright Hostelry © @php echo date('Y'); @endphp. All rights reserved | Developed and maintained by <a href="https://codingmatters.today" class="text-secondary-900 font-bold underline">Coding Matters</a>
            </div>
        </footer>
         <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
