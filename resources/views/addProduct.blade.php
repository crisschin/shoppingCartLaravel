<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--

Copy this code in your html file.

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
</head>
<body>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>
    @endif
    <div class="container">
     
        <p class="h2 text-center">Add New Product</p>
        <form action="{{ route('addProduct.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="preview text-center">
                <img class="preview-img" src="http://simpleicon.com/wp-content/uploads/account.png" alt="Preview Image" width="200" height="200"/>
                <div class="browse-button">
                    <i class="fa fa-pencil-alt"></i>
                    <input class="browse-input" type="file" required name="product-image" id="product-image"/>
                </div>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Product Name:</label>
                <input class="form-control" type="text" name="fullname" required placeholder="Enter Product Name"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Brand:</label>
                <select name="brand" id="brand" class="form-control">
                    <option value="dell">Dell</option>
                    <option value="asus">Asus</option>
                </select>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>CPU:</label>
                <select name="CPU" id="CPU" class="form-control">
                    <option value="i5">i5</option>
                    <option value="i7">i7</option>
                    <option value="i9">i9</option>
                </select>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>CPU Detail:</label>
                <input class="form-control" type="text" name="cpudetail" required placeholder="Enter Product Name"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>RAM:</label>
                <select name="RAM" id="RAM" class="form-control">
                    <option value="8gb">8GB</option>
                    <option value="16gb">16GB</option>
                    <option value="32gb">32GB</option>
                </select>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>RAM Detail:</label>
                <input class="form-control" type="text" name="ramdetail" required placeholder="Enter Product Name"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>GPU:</label>
                <select name="GPU" id="GPU" class="form-control">
                    <option value="1660">1660</option>
                    <option value="2060">2060</option>
                    <option value="2070">2070</option>
                    <option value="2080">2080</option>
                </select>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>GPU Detail:</label>
                <input class="form-control" type="text" name="gpudetail" required placeholder="Enter Product Name"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>OS:</label>
                <input class="form-control" type="text" name="OS" required placeholder="Enter Product description"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Storage:</label>
                <input class="form-control" type="text" name="storage" required placeholder="Enter Product description"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Product price:</label>
                <input class="form-control" type="number" name="price" required placeholder="Enter Price"/>
                <span class="Error"></span>
            </div>

            <div class="form-group">
                <label>Product Quantity:</label>
                <input class="form-control" type="number" name="quantity" required placeholder="Enter quantity"/>
                <span class="Error"></span>
            </div>
           
            <div class="form-group">
                <label>Product Type:</label>
                <select name="categoryID" id="categoryID" class="form-control">
                    <option value="desktop">Desktop</option>
                    <option value="laptop">Laptop</option>
                </select>
                <span class="Error"></span>
            </div>

            <div class="form-group">
                <input class="btn btn-primary btn-block" type="submit" value="Submit"/>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>