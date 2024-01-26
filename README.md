

Routes for Products - REST API

Route::get('products', [ProductController::class, 'index']);

Route::get('products/{id}', [ProductController::class, 'show']);

Route::post('products', [ProductController::class, 'store']);

Route::put('products/update/{id}', [ProductController::class, 'update']);

Route::delete('products/{id}', [ProductController::class, 'destroy']);



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
5. Unit testing is done here all 34 cases successfully passed.
   
![1](https://github.com/MOSHAROFaa/InventorySystem/assets/84110930/a6411476-76e3-4d17-a3c3-6d3e617ddea9)


![2](https://github.com/MOSHAROFaa/InventorySystem/assets/84110930/faa03c36-fd82-4a44-975c-e120ec6ffe54)


Here is the system shown to you,


![1](https://github.com/MOSHAROFaa/InventorySystem/assets/84110930/ab19759b-ff48-4d16-9ccd-d9851418e77d)


![2](https://github.com/MOSHAROFaa/InventorySystem/assets/84110930/265f8300-d593-4a43-8949-5f8615fea78f)


![3](https://github.com/MOSHAROFaa/InventorySystem/assets/84110930/c4032e71-06c2-408a-af76-e6dda1db563d)


![4](https://github.com/MOSHAROFaa/InventorySystem/assets/84110930/2508b6db-7422-47bf-9642-7e46b49c26cd)

![5](https://github.com/MOSHAROFaa/InventorySystem/assets/84110930/f2d97457-256e-4aca-9b9a-91a8fb43d637)



![6](https://github.com/MOSHAROFaa/InventorySystem/assets/84110930/b3d52a12-9f4c-4c06-b042-cdf1b0da17c4)


![7](https://github.com/MOSHAROFaa/InventorySystem/assets/84110930/ba100778-eb0e-444e-a6e2-a170a44dd3c2)


![8](https://github.com/MOSHAROFaa/InventorySystem/assets/84110930/42bf58c4-9e6b-425d-9774-96fce28be0bc)


![9](https://github.com/MOSHAROFaa/InventorySystem/assets/84110930/31588aa2-eaa1-4a75-bb3c-1b124e525db1)


![10](https://github.com/MOSHAROFaa/InventorySystem/assets/84110930/1f5dfd46-ae84-4085-969a-d67663fb4a90)


![11](https://github.com/MOSHAROFaa/InventorySystem/assets/84110930/83605084-fcd5-4692-9b15-854ef95b3d89)


![12](https://github.com/MOSHAROFaa/InventorySystem/assets/84110930/425a3c0c-7514-4dd0-b03c-c021615194b5)


![13](https://github.com/MOSHAROFaa/InventorySystem/assets/84110930/b9a6040d-17af-4fc5-b7d1-aa2f1ebd78ad)
