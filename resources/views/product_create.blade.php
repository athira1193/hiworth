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
                <a class="navbar-brand" href="{{url('/')}}">
                    HIWORTH
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
                            <div class="card-header">{{ __('Create Product') }}</div>
                            <div class="card-body">
                                <form name="add_name" id="add_name">
                                    <div class="alert alert-danger print-error-msg" style="display:none">
                                        <ul></ul>
                                    </div>
                                    <div class="alert alert-success print-success-msg" style="display:none">
                                        <ul></ul>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="title" class="col-sm-2 control-label">Name</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title" class="col-sm-2 control-label">Description</label>
                                                        <div class="col-sm-12">
                                                            <textarea class="form-control" id="product_description" name="product_description" placeholder="Product Description" required></textarea>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                        <h6>Variants</h6>
                                        <table class="table table-bordered" id="dynamic_field">
                                            <tr>
                                                <td><input type="text" name="size[]" placeholder="Enter size" class="form-control size_list" /></td>
                                                <td> <input type="text" name="color[]" placeholder="Enter color" class="form-control color_list" /></td>
                                                <td><input type="number" name="price[]" placeholder="Enter rice" class="form-control price_list" /></td>
                                                <td><input type="number" name="quantity[]" placeholder="Enter quantity" class="form-control qunatity_list" /></td>
                                                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                                            </tr>
                                        </table>
                                        <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script type="text/javascript">
            $(document).ready(function(){
                var postURL = "<?php echo url('addmore'); ?>";
                var i=1;


                $('#add').click(function(){
                    i++;
                    $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="size[]" placeholder="Enter size" class="form-control size_list" /></td><td> <input type="text" name="color[]" placeholder="Enter color" class="form-control color_list" /></td><td><input type="number" name="price[]" placeholder="Enter rice" class="form-control price_list" /></td> <td><input type="number" name="quantity[]" placeholder="Enter quantity" class="form-control qunatity_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
                });


                $(document).on('click', '.btn_remove', function(){
                    var button_id = $(this).attr("id");
                    $('#row'+button_id+'').remove();
                });


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('#submit').click(function(){
                    $.ajax({
                        url:"{{ route('products.store') }}",
                        method:"POST",
                        data:$('#add_name').serialize(),
                        type:'json',
                        success:function(data)
                        {
                            if(data.error){
                                printErrorMsg(data.error);
                            }else{
                                i=1;
                                $('.dynamic-added').remove();
                                $('#add_name')[0].reset();
                                $(".print-success-msg").find("ul").html('');
                                $(".print-success-msg").css('display','block');
                                $(".print-error-msg").css('display','none');
                                $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                            }
                        }
                    });
                });
                function printErrorMsg (msg) {
                    $(".print-error-msg").find("ul").html('');
                    $(".print-error-msg").css('display','block');
                    $(".print-success-msg").css('display','none');
                    $.each( msg, function( key, value ) {
                        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                    });
                }
            });
        </script>
    </div>
</body>
</html>
