<?php

namespace Tests\Unit\Product;

// use PHPUnit\Framework\TestCase;

use Tests\TestCase;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    // Positive test

    use RefreshDatabase;

    public function test_get_all_products()
    {
        if (Product::all()->count() > 0) {
            $response = $this->get('/api/products');
            $response->assertStatus(200);

            $products = Product::all();

            foreach ($products as $product) {
                $response->assertJsonFragment([
                    'sku' => $product->sku,
                    'quantity' => $product->quantity,
                    'title' => $product->title,
                    'description' => $product->description
                ]);
            }
        } else {
            $response = $this->get('/api/products');
            $response->assertStatus(404);
        }
    }





    public function test_get_one_product()
    {
        if ($product = Product::find(1)) {
            $response = $this->get('/api/products/1');
            $response->assertStatus(200);
            $response->assertJsonFragment([
                'sku' => $product->sku,
                'quantity' => $product->quantity,
                'title' => $product->title,
                'description' => $product->description
            ]);
        } else {
            $response = $this->get('/api/products/1');
            $response->assertStatus(404);
        }
    }





    public function test_create_product()
    {
        $response = $this->post('/api/products', [
            'sku' => '1001MYR1',
            'quantity' => 10,
            'title' => 'Football Gloves',
            'description' => 'Adidas Football Gloves is one of the best gloves in the world'
        ]);
        $response->assertStatus(200);
    }






    public function test_update_product()
    {

    
        if(Product::all()-> count() <= 0){
            $response = $this->put('/api/products/update/1');
            $response->assertStatus(404);

        }
        else{
            $product = Product:: factory()->create([
                'sku' => '1001MYR1',
                'quantity' => 10,
                'title' => 'Football Gloves',
                'description' => 'Adidas Football Gloves is one of the best gloves in the world'
            ]);
    
            $updateData = [
                'sku' => '2001MYR1',
                'quantity' => 200000,
                'title' => 'Football Gloves',
                'description' => 'Nike Football Gloves is one of the best gloves in the world'
            ];
    
            $response = $this->put('/api/products/1', $updateData);
    
            $response->assertStatus(200);
    
            $this->assertDatabaseHas('products', $updateData);
    
            $response->assertJson([
                'status' => 200,
                'message' => 'Product updated successfully',
                'Product' => $updateData
            ]);
        }
    }





    public function test_delete_product()
    {
        if(Product::all()-> count() <= 0){
            $response = $this->delete('/api/products/1');
            $response->assertStatus(404);

            
        }
        else{
           $products = Product::all();

            foreach ($products as $product) {
                $response = $this->delete('/api/products/' . $product->id);
                $response->assertStatus(200);

                $this->assertDatabaseMissing('products', ['id' => $product->id]);
            }
        }
    }


    

    // Negative test

    public function test_get_products_negative(){
        $response = $this->get('/api/product');
        $response->assertStatus(404);
    }

    public function test_get_one_product_negative(){
        $response = $this->get('/api/products/100');
        $response->assertStatus(404);
    }


      
    // Negative test for update. The product id does not exist
    public function test_update_product_negative(){
        $response = $this->put('/api/products/update/100', [
            'sku' => '2001MYR1',
            'quantity' => 200000,
            'title' => 'Football Gloves',
            'description' => 'Nike Football Gloves is one of the best gloves in the world'
        ]);
        $response->assertStatus(404);
    }

    // Negative test for update. The sku field is not unique
    public function test_update_product_sku_negative(){
        $response = $this->put('/api/products/update/1', [
            'sku' => '1001MYR1', // sku already exists but it should be unique
            'quantity' => 200000,
            'title' => 'Football Gloves',
            'description' => 'Nike Football Gloves is one of the best gloves in the world'
        ]);
        $response->assertStatus(404);
    }

    // Negative test for delete, the product id does not exist
    public function test_delete_product_negative(){
        $response = $this->delete('/api/products/100');
        $response->assertStatus(404);
    }

    
}
