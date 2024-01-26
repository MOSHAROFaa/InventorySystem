REST APIs

Routes for Products - API endpoints
Route::get('products', [ProductController::class, 'index']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::post('products', [ProductController::class, 'store']);
Route::put('products/update/{id}', [ProductController::class, 'update']);
Route::delete('products/{id}', [ProductController::class, 'destroy']);


Application Useage:
1. Please start your local host. You can choose XAMPP. Start the Apache and MySQL. (Important: Check the MySQL Port.)
2. Go to the .env file then check and change the followings, 

    DB_CONNECTION=mysql
    DB_HOST=write your own host
    DB_PORT=your MySQL port number
    DB_DATABASE=inventory_system
    DB_USERNAME=root
    DB_PASSWORD=

    (Check if your DB_USERNAME & DB_PASSWORD are correct.)

3. Then in the terminal run these commands,

  3.1 To start the server
      php artisan serve

  3.2 To run the npm dev and authentication system,
      npm run dev

  3.3 Ff there is an issue in terminal write these two command.
      php artisan route:clear
      php artisan route:clear


4. Please import the DB it is located in the database folder.
