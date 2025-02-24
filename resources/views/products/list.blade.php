<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
   
<div class="bg-dark py-3">
    <h1 class="text-white text-center">To-Do List Application</h1>
</div>
<div class="container">
    <!-- Create Button Row -->
    <div class="row justify-content-center mt-4">
        <div class="col-md-10 d-flex justify-content-end">
            <a href="{{ route('products.create') }}" class="btn btn-dark">Create</a>
        </div>
    </div>

    <!-- Success Message Section -->
    @if (Session::has('success'))
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif

    <!-- Products Table Section -->
    <div class="row justify-content-center mt-4">
        <div class="col-md-10">
            <div class="card border-0 shadow-lg my-4">
                <!-- Card Header -->
                <div class="card-header bg-dark">
                    <h3 class="text-white">Products</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <!-- Table Header -->
                        <tr>
                            <th>Id</th>
                            <th></th>
                            <th>Name</th>
                            <th>Sku</th>
                            <th>Price</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                        <!-- Table Body -->
                        @if ($products->isNotEmpty())
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>
                                        <!-- Product Image -->
                                        @if ($product->image)
                                            <img width="50" src="{{ asset('uploads/products/' . $product->image) }}" alt="">
                                        @endif
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->sku }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d M, Y') }}</td>
                                    <td>
                                        <!-- Edit Button -->
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-dark">Edit</a>
                                        <!-- Delete Button -->
                                        <a href="#" onclick="deleteProduct({{ $product->id }});" class="btn btn-danger">Delete</a>
                                        <!-- Delete Form -->
                                        <form id="delete-product-form-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Product Script -->
<script>
    function deleteProduct(id) {
        if (confirm("Are you sure you want to delete the product?")) {
            document.getElementById("delete-product-form-" + id).submit();
        }
    }
</script>

</body>
</html>

