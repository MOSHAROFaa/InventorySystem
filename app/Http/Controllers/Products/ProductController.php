<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    // Pagination for products

    // public function paginate 

    // Get all products

    public function index()
    {
        $products = Product::all();
        // $products = Product::paginate(4);
        // return view('getpro', compact('products'));
        if ($products->count() > 0) {
            return response()->json([
                'status' => 200,
                'message' => $products
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No products found'
            ], 404);
        }
    }


    // Get a single product

    public function show($id)
    {
        $product = Product::find($id);
        if ($product) {
            return response()->json([
                'status' => 200,
                'message' => $product
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No product found'
            ], 404);
        }
    }

    // Post a new product

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sku' => 'required|max:200|unique:products',
            'quantity' => 'required|max:100',
            'title' => 'required|max:200',
            'description' => 'required|max:2000'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422, // Invalid data
                'errors' => $validator->messages()
            ], 422);
        } else {
            $product = Product::create([
                'sku' => $request->sku,
                'quantity' => $request->quantity,
                'title' => $request->title,
                'description' => $request->description
            ]);
        }

        if ($product) {
            return response()->json([
                'status' => 200,
                'message' => 'Product created successfully'
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Error creating product'
            ], 500);
        }
    }

    // Put a specific product

    public function update(Request $request, int $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'status' => 404,
                'message' => "No product with ID $id found"
            ], 404);
        }

        // Get the data
        $requestData = $request->only([
            'sku', 
            'quantity', 
            'title', 
            'description'
        ]);

        // Define Validation rules based on the provided fields
        $validationRules =[];
        foreach ($requestData as $field => $value) {
            $validationRules[$field] = "required|max:200";
        }

        $validator = Validator::make($requestData, $validationRules);

        if($validator->fails()){
            return response()->json([
                'status'=>422,
                'message'=>$validator->messages()
            ], 422);
        }

        foreach ($requestData as $field => $value) {
            $product->$field = $value;
        }

        $product->save();

        return response()->json([
            'status'=>200,
            'message'=>'Product updated successfully',
            'Product'=> $product
        ], 200);
    }

    // Delete a specific product

    public function destroy($id){
        $product = Product::find($id);
    
        if ($product) {
            $sku = $product->sku;
            $title = $product->title;
    
            $product->delete();
    
            return response()->json([
                'status' => 200,
                'message' => "Product SKU:$sku & Title: $title is deleted successfully"
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "Product with ID $id not found"
            ], 404);
        }
    }


}
