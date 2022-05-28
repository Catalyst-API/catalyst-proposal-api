<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project Catalyst API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">
    </head>
    <body class="antialiased">
        <div>
            <header>
                <div class="flex flex-row justify-between">
                    <div class="p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </div>
                    <div class="p-4">
                        <h2>Catalyst Proposal API</h2>
                    </div>
                    <div class="p-4">

                    </div>
                </div>
            </header>
            <main>
                <div>
                    <div class="p-24 xl:p-32 card bg-opacity-25" style="background-image: url('{{asset('img/home-splash.jpeg')}}')">
                        <div class="bg-white p-5 container inner">
                            <div class="text-center py-24 flex flex-col gap-6">
                                <h2 class="text-3xl mx:text-4xl lg:text-5xl xl:text-7xl max-w-lg mx-auto">
                                    Catalyst Proposal API
                                </h2>
                                <div class="max-w-xl mx-auto">
                                    <p class="text-lg">
                                        Community REST API for Catalyst Proposal DATA with multi-language support.
                                    </p>
                                </div>
                                <div>
                                    <button type="button" class="inline-flex items-center px-6 py-3 border border-black shadow-sm text-xl mt-4 font-bold rounded-md text-gray-900 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                        See Documentation
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer>

            </footer>
        </div>
    </body>
</html>
