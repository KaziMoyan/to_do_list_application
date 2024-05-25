<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To-Do</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
       
    <div class="bg-dark py-3">
        <h1 class="text-white text-center">To-Do List Application</h1>
    </div>
    <div class="container">
        <!-- Back Button Row -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{route('products.index')}}" class="btn btn-dark">Back</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-3">
                    <!-- Card Header -->
                    <div class="card-header bg-dark">
                        <h3>Create Product</h3>
                    </div>
                    <form enctype="multipart/form-data" action="{{route('products.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <!-- Product Name Input -->
                            <div class="mb-3">
                                <label for="name" class="form-label h4">Name</label>
                                <input value="{{old('name')}}" type="text" class="@error('name')is-invalid @enderror form-control form-control-lg" placeholder="Name" name="name">
                                @error('name')
                                <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>

                            <!-- Product SKU Input -->
                            <div class="mb-3">
                                <label for="sku" class="form-label h5">SKU</label>
                                <input value="{{old('sku')}}" type="text" class="@error('sku')is-invalid @enderror form-control form-control-lg" placeholder="SKU" name="sku">
                                @error('sku')
                                <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>

                            <!-- Product Price Input -->
                            <div class="mb-3">
                                <label for="price" class="form-label h5">Price</label>
                                <input value="{{old('price')}}" type="text" class="@error('price')is-invalid @enderror form-control form-control-lg" placeholder="Price" name="price">
                                @error('price')
                                <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>

                            <!-- Product Description Input -->
                            <div class="mb-3">
                                <label for="description" class="form-label h5">Description</label>
                                <textarea placeholder="Description" class="form-control" name="description" id="description" cols="30" rows="5">{{old('description')}}</textarea>
                            </div>

                            <!-- Product Image Input -->
                            <div class="mb-3">
                                <label for="image" class="form-label h5">Image</label>
                                <input type="file" class="form-control form-control-lg" placeholder="Image" name="image">
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary">Submit</button>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
