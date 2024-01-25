<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Update Product</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="updatepro.css">

</head>

<body id="blacklay">

    <div class="container">
        <h2>Update Product</h2>

        <div id="card">
            <div class="mb-3">
                <p class="text-danger">* Required fields</p>
                <label for="productId" class="">Product ID*</label>
                <input type="text" id="productId" placeholder="Enter Product ID" class="form-control">
            </div>

            <div class="mb-3">
                <label>
                    <input type="checkbox" id="skuCheckbox" onclick="toggleInput('sku')" class="form-label">
                    Update SKU
                    <input type="text" id="skuInput" class="form-control" disabled>
                </label>

            </div>

            <label>
                <input type="checkbox" id="quantityCheckbox" onclick="toggleInput('quantity')">
                Update Quantity
                <input type="number" id="quantityInput" class="form-control" disabled>
            </label>

            <label>
                <input type="checkbox" id="titleCheckbox" onclick="toggleInput('title')">
                Update Title
                <input type="text" id="titleInput" class="form-control" disabled>
            </label>

            <label class="">
                <input type="checkbox" id="descriptionCheckbox" onclick="toggleInput('description')">
                Update Description
                <input type="text" id="descriptionInput" class="form-control" disabled>
            </label>

            <button onclick="updateProduct()" class="btn btn-primary" id="btn">Update Product</button>

            <a href="/getpro" class="btn btn-secondary" id="btn">Cancel</a>
        </div>
    </div>


    <script>
        function toggleInput(inputId) {
            const checkbox = document.getElementById(inputId + 'Checkbox');
            const inputField = document.getElementById(inputId + 'Input');

            inputField.disabled = !checkbox.checked;
        }

        //     // For Quantity
        //     function isNumeric(value) {
        //     // Check if the value is a valid integer
        //     return /^\d+$/.test(value);
        // }

        // // For sku, title and description
        // function isAlphaNumeric(value) {
        //     // Check if the value contains only alphanumeric characters and spaces
        //     return /^[a-zA-Z0-9\s]+$/.test(value);
        // }


        async function updateProduct() {
            const productId = document.getElementById('productId').value;
            const sku = document.getElementById('skuCheckbox').checked ? document.getElementById('skuInput').value : null;
            const quantity = document.getElementById('quantityCheckbox').checked ? document.getElementById('quantityInput').value : null;
            const title = document.getElementById('titleCheckbox').checked ? document.getElementById('titleInput').value : null;
            const description = document.getElementById('descriptionCheckbox').checked ? document.getElementById('descriptionInput').value : null;

            const apiUrl = `http://127.0.0.1:8000/api/products/update/${productId}`;

            // Fetch the CSRF token from the meta tag in your HTML
            const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

            const data = {
                _token: csrfToken
            }; // Include the CSRF token

            // && !isAlphaNumeric(sku)
            //&& !isNumeric(quantity)

            if (sku !== null) {
                data.sku = sku;
            }

            if (quantity !== null) {
                data.quantity = quantity;
                // alert('Quantity must be a number');
            }

            if (title !== null) {
                data.title = title;
            }

            if (description !== null) {
                data.description = description;
            }

            try {
                const response = await fetch(apiUrl, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data),
                });

                console.log('Response Status:', response.status);

                if (response.ok) {
                    const contentType = response.headers.get('content-type');
                    if (contentType && contentType.includes('application/json')) {
                        const responseData = await response.json();
                        alert('Product updated successfully');
                    } else {
                        const text = await response.text();
                        alert('Product updated successfully. Response: ' + text);
                    }
                    // Redirect to inventory screen
                    window.location.href = '/getpro';
                } else {
                    const text = await response.text();
                    alert('Error: ' + text);
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred while updating the product.');
            }
        }
    </script>


</body>

</html>