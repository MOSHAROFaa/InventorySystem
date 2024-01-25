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

                                   
                                </ul>
                            </nav>
                            <hr>
                        </header>

                        <!-- <section>
                            <h2>Product Inventory Table</h2>
                            <table id="inventoryTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>SKU</th>
                                        <th>Quantity</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </section>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                fetch('http://127.0.0.1:8000/api/products') 
                                    .then(response => {
                                        if (!response.ok) {
                                            throw new Error(`HTTP error! Status: ${response.status}`);
                                        }
                                        return response.json();
                                    })
                                    .then(responseData => {
                                        console.log(responseData); 

                                        if (responseData.status === 200) {
                                            const products = responseData.message;
                                            const tableBody = document.querySelector('#inventoryTable tbody');

                                            products.forEach(product => {
                                                const row = document.createElement('tr');
                                                row.innerHTML = `
                                                <td>${product.id}</td>
                                                <td>${product.sku}</td>
                                                <td>${product.quantity}</td>
                                                <td>${product.title}</td>
                                                <td>${product.description}</td>
                                                <td>${product.created_at}</td>
                                                <td>${product.updated_at}</td>
                                                    `;

                                                tableBody.appendChild(row);
                                            });
                                        } else {
                                            console.error('Error fetching inventory:', responseData.message);
                                        }
                                    })
                                    .catch(error => console.error('Error fetching inventory:', error));
                            });
                        </script> -->
                    </body>

                    </html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>