<!DOCTYPE html>
<html>
<head>
    <title>HIWORTH</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('products') }}">{{ __('Product') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.create') }}">{{ __('Create product') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Product List') }}</div>
                        <div class="card-body">


                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Description</th>
                                            <th>Variants</th>
                                        </tr>
                                        @foreach($product as $value)
                                            @php
                                                $sizes = [];
                                                $colors = [];
                                                $price = [];
                                                $quantity = [];
                                                foreach ($value->variant as $item) {
                                                  $sizes[] = $item['size'];
                                                  $colors[] = $item['color'];
                                                  $price[] = $item['price'];
                                                  $quantity[] = $item['quantity'];
                                                }
                                                $sizes = implode(', ', $sizes);
                                                $colors = implode(', ', $colors);
                                               $price = implode(', ', $price);
                                               $quantity = implode(', ', $quantity);
                                            @endphp
                                        <tr>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->description}}</td>
                                            <td>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>Color</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                    </tr>
                                                    <tr>
                                                        <td>{{$sizes}}</td>
                                                        <td>{{$colors}}</td>
                                                        <td>{{$price}}</td>
                                                        <td>{{$quantity}}</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    <div class="d-flex">
                                        {!! $product->links() !!}
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>
</body>
</html>
