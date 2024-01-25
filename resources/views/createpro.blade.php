<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Add Product</title>
    <!-- bootstrap cdn -->
    <link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>

      <link rel="stylesheet" href="createpro.css">
    
</head>
<body>

<div class="container">
<h2 id="headingfir">Create Product</h2>
<div class="mb-3">


   <div id="proForm">
   <form id="productForm" action="http://127.0.0.1:8000/api/products" method="POST">
 
          
          @csrf
        <p class="text-danger">* Required fields</p>
      <label for="sku">SKU:*</label>
      <input type="text" id="sku" name="sku" required>

      <label for="quantity">Quantity:*</label>
      <input type="number" id="quantity" name="quantity" required>

      <label for="title">Title:*</label>
      <input type="text" id="title" name="title" required>

      <label for="description">Description:*</label>
      <textarea id="description" name="description" rows="4" required></textarea>

      <br>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="getpro" class="btn btn-secondary">Cancel</a>
  </form>
   </div>
</div> 
</div> 




<script>
    document.getElementById('productForm').addEventListener('submit', async function (event) {
        event.preventDefault();

        const apiUrl = 'http://127.0.0.1:8000/api/products';
        const formElement = document.getElementById('productForm');

        try {
            // const response = await fetch(apiUrl, {
            //     method: 'POST',
            //     headers: {
            //         'Content-Type': 'application/json',
            //         'X-CSRF-TOKEN': '{{ csrf_token() }}',  // Replace with the actual CSRF token
            //     },
            //     body: new FormData(this),
            // });

            const formData = new FormData(formElement);
            const response = await fetch(apiUrl, {
            method: 'POST',
            headers: {
                // 'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: formData,  // Pass the form element to FormData
        });

            if (response.ok) {
                const contentType = response.headers.get('content-type');
                if (contentType && contentType.includes('application/json')) {
                    const responseData = await response.json();          
                } else {
                    const text = await response.text();
                }

                alert('Product added successfully. Redirecting to the Inventory...');
                window.location.href = '/getpro';
            } else {
                const text = await response.text();
                alert('Error: ' + text);
            }
        } catch (error) {
            console.error('Error:', error);
            alert('An error occurred while adding the product.');
        }
    });
</script>

   

</body>
</html>
