<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Delete Product</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="deletepro.css">

</head>

@auth
@if(!auth()->user()->is_admin)
<script>window.location = "/dashboard";</script>
@endif
@endauth


@auth
@if(auth()->user()->is_admin)


<body id="blacklay">


  <div class="container">
    <h2 id="headingfir">Delete Product</h2>
    <div class="mb-3">
      <div id="card">
        <p class="text-danger">* Required numeric fields</p>
        <label for="productId">Product ID*:</label>
        <input type="number" id="productId" placeholder="Enter Product ID" class="form-control" required>

        <br>
        <button onclick="deleteProduct()" class="btn btn-danger">Delete Product</button>
        <a href="/getpro" class="btn btn-secondary">Cancel</a>
      </div>
    </div>
  </div>


  

  <script>

  

    async function deleteProduct() {

      const productId = document.getElementById('productId').value;

      if (!productId) {
        alert('Please enter a Product ID');
        return;
      }

      const apiUrl = `http://127.0.0.1:8000/api/products/${productId}`;

      // Fetch the CSRF token from the meta tag in your HTML
      const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

      try {
        const response = await fetch(apiUrl, {
          method: 'DELETE',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken, // Include the CSRF token in the headers
          },
        });

        console.log('Response Status:', response.status);

        if (response.ok) {
          const contentType = response.headers.get('content-type');
          if (contentType && contentType.includes('application/json')) {
            const responseData = await response.json();
            alert('Product deleted successfully');

          } else {
            const text = await response.text();
            alert('Product deleted successfully. Response: ' + text);

          }
          window.location.href = '/getpro';
        } else {
          const text = await response.text();
          alert('Error: ' + text);
        }
      } catch (error) {
        console.error('Error:', error);
        alert('An error occurred while deleting the product.');
      }
    }
  </script>

@endif
  @endauth

</body>

</html>