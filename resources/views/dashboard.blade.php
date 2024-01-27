<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inventory Management System') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- {{ __("You're logged in!") }} -->

                    <!-- <a href=""></a> -->

                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="dashboard.css">

                    </head>

                    <body>


                        <header>
                            <hr>
                            <nav>
                                <ul>
                                    <li id="logged">
                                        {{ __("Start Here!") }}
                                    </li>

                                    <li>
                                        <button>
                                            <a href="/getpro">
                                                View Inventory
                                            </a>
                                        </button>
                                    </li>



                                    <li>
                                        <button>
                                            <a href="/createpro">
                                                Create Product
                                            </a>
                                        </button>
                                    </li>



                                    @auth
                                    @if(auth()->user()->is_admin)


                                    <li>
                                        <button>
                                            <a href="/updatepro">
                                                Update Product
                                            </a>
                                        </button>
                                    </li>



                                    <li>
                                        <button>
                                            <a href="/deletepro">
                                                Delete Product
                                            </a>
                                        </button>
                                    </li>

                                    @endif
                                    @endauth


                                </ul>
                            </nav>
                            <hr>
                        </header>

                    </body>

                    </html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>