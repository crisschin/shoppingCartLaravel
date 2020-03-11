
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

@if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>
@endif

<div class="table-responsive" id="sailorTableArea">
    <table id="sailorTable" class="table table-striped table-bordered" width="100%">
        <form action="" method="POST">
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>&nbsp;</th>                
            </tr>
        </thead>
        <tbody>
                @foreach($products as $product)
                    <tr>
                        <td><img src="{{ asset('pic/') }}/{{$product->image}}" width="50"></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->categoryID}}</td>
                        <td><a href="{{ route('viewproduct.delete', ['id' => $product->id]) }}" class="btn btn-danger confirmation"> Delete </a>
                        <a href="{{ route('edit.product', ['id' => $product->id]) }}" class="btn btn-primary"> Edit </a></td>              
                    </tr>
                @endforeach 
                <script type="text/javascript">
                        $('.confirmation').on('click', function () {
                            return confirm('Are you sure?');
                        });
                </script>
                 
        </tbody>
        </form>
    </table>
    <a href="{{ route('product', ['id' => $product->id]) }}" class="btn btn-success"> Add Product </a></td>
    </div>