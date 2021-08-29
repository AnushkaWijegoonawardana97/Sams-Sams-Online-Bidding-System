@extends('admin.layouts.master')

@section('title', config('app.name'). ' Dashboard | Product')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('product.index') }}">Product</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            @if(Session::has('message'))
                <div class="alert alert-dismissible fade show {{Session::get('class')}}" role="alert">
                    <strong>{{Session::get('message')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="row">
                <div class="col-md-12 m-auto">
                    <div class="card card-primary">
                        <form id="quickForm" novalidate="novalidate" action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('put') }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" name="product_name" class="form-control @error('product_name') is-invalid @enderror" id="product_name" placeholder="Enter product name" aria-describedby="product_name-error" aria-invalid="true" value="{{$product->product_name}}">
                                    @error('product_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="product_description">Product Description</label>
                                    <textarea name="product_description" class="form-control @error('product_description') is-invalid @enderror" id="product_description" placeholder="Enter product description" aria-describedby="product_description-error" spellcheck="true" cols="20" rows="10">{{$product->product_description}}</textarea>
                                    @error('product_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label for="product_condition">Product Condition</label>
                                            <select class="form-control" id="product_condition" name="product_condition">
                                                <option value="brand new" {{$product->product_condition == "brand new" ? "selected" : "" }}>Brand New</option>
                                                <option value="second hand" {{$product->product_condition == "second hand" ? "selected" : "" }}>Second Hand</option>
                                                <option value="first owner" {{$product->product_condition == "first owner" ? "selected" : "" }}>First Owner</option>
                                                <option value="imported" {{$product->product_condition == "imported" ? "selected" : "" }}>Imported</option>
                                            </select>
                                            <span id="product_condition-error" class="error invalid-feedback">Please select the product condition</span>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="product_category">Product Category</label>
                                            <select class="form-control" id="product_category" name="product_category">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}"  {{$category->id == $product->category_id ? "selected" : "" }}>{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                            <span id="product_category-error" class="error invalid-feedback">Please select the product category</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="starting_bid_price">Starting Bid Price</label>
                                            <input type="number" name="starting_bid_price" class="form-control  @error('starting_bid_price') is-invalid @enderror" id="starting_bid_price" placeholder="Enter starting bid price" aria-describedby="starting_bid_price-error" aria-invalid="true" value="{{$product->starting_bid_price}}" min="1000">
                                            @error('starting_bid_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col">
                                            <label for="min_bid_price">Minimum Bid Price</label>
                                            <input type="number" name="min_bid_price" class="form-control @error('min_bid_price') is-invalid @enderror" id="min_bid_price" placeholder="Enter minimum bid price" aria-describedby="min_bid_price-error" aria-invalid="true" value="{{$product->min_bid_price}}" min="10">
                                            @error('min_bid_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col">
                                            @php
                                                $todaysDate = date('Y-m-d\TH:i', strtotime($product->bid_ending_date));
                                            @endphp
                                            <label for="bid_ending_date">Bid Closing Date</label>
                                            <input  type="datetime-local" name="bid_ending_date" class="form-control @error('bid_ending_date') is-invalid @enderror" id="bid_ending_date" aria-describedby="bid_ending_date-error" aria-invalid="true" min={{$todaysDate}} value={{$todaysDate}}>
                                            @error('bid_ending_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="special_product_notes">Product Special Notes</label>
                                    <textarea name="special_product_notes" class="form-control  @error('special_product_notes') is-invalid @enderror" id="special_product_notes" placeholder="Enter special product note" aria-describedby="special_product_notes-error" spellcheck="true" cols="20" rows="10">{{$product->special_product_notes}}</textarea>
                                    @error('special_product_notes')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="product_images">Product Images</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('product_images') is-invalid @enderror" id="product_images" name="product_images[]" multiple>
                                        <label class="custom-file-label" for="product_images">Upload your prouct image files</label>
                                    </div>
                                    @error('product_images')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Gallery -->
                                <div class="row mt-5 image-gallery">
                                    @if($product->product_images)
                                        <input class="form-control" name="old_product_images" type="hidden" placeholder="" value="{{$product->product_images}}">
                                        @php
                                            $prodImages = explode('|', $product->product_images);
                                        @endphp
                                        @foreach($prodImages as $prodImage)
                                            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 currentImg">
                                                <img
                                                    src="{{asset($prodImage)}}"
                                                    class="w-100 shadow-1-strong rounded mb-4"
                                                    alt=""
                                                />
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Update Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('additional-scripts')
<script>
    tinymce.init({
        selector: '#product_description',
    });
    tinymce.init({
        selector: '#special_product_notes',
    });

    $(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) {
            $( ".currentImg" ).remove();


            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $(`
                            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                <img
                                    src="${event.target.result}"
                                    class="w-100 shadow-1-strong rounded mb-4"
                                    alt=""
                                />
                            </div>
                        `).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#product_images').on('change', function() {
            imagesPreview(this, 'div.image-gallery');
        });
    });
</script>
@endsection


