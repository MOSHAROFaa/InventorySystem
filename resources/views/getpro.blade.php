
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="getpro.css">
  <title>Inventory Management System</title>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->
</head>

<body>

<div class="container">

<h2 id="headingfir">View Inventory Product</h2>
  <header>
    
  <hr>
    <nav>
      <ul>


      

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
  
        <li>
          <button>
          <a href="/dashboard">
              Dashboard
            </a>
          </button>
        </li>


      </ul>
    </nav>
    <hr>
  </header>

  <section>
    <h2>Product Inventory Table</h2>
    <table id="inventoryTable">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col" style="width: 6%;">SKU</th>
          <th scope="col" style="width: 6%;">Quantity</th>
          <th scope="col" style="width: 10%;">Title</th>
          <th scope="col">Description</th>
          <th scope="col" style="width: 10%;">Created At</th>
          <th scope="col" style="width: 10%;">Updated At</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr>
          <td>{{ $product['id'] }} </td>
          <td>{{ $product['sku'] }} </td>
          <td>{{ $product['quantity'] }} </td>
          <td>{{ $product['title'] }} </td>
          <td>{{ $product['description'] }} </td>
          <td> {{ $product['created_at'] }} </td>
          <td> {{ $product['updated_at'] }} </td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </section>

<span  id="pag">
{{ $products->links() }}
</span>

</div>

</body>

</html>
