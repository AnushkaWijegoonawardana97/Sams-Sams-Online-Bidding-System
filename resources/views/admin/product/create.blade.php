@extends('admin.layouts.master')

@section('title', config('app.name'). ' Dashboard | Product')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('product.index') }}">Product</a></li>
                        <li class="breadcrumb-item active">Create</li>
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
                        <form id="quickForm" novalidate="novalidate" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" name="product_name" class="form-control @error('product_name') is-invalid @enderror" id="product_name" placeholder="Enter product name" aria-describedby="product_name-error" aria-invalid="true">
                                    @error('product_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="product_description">Product Description</label>
                                    <textarea name="product_description" class="form-control @error('product_description') is-invalid @enderror" id="product_description" placeholder="Enter product description" aria-describedby="product_description-error" spellcheck="true" cols="20" rows="10"></textarea>
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
                                                <option value="brand new">Brand New</option>
                                                <option value="second hand">Second Hand</option>
                                                <option value="first owner">First Owner</option>
                                                <option value="imported">Imported</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="product_category">Product Category</label>
                                            <select class="form-control" id="product_category" name="product_category">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                            <span id="product_category-error" class="error invalid-feedback">Please select the product category</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <label for="starting_bid_price">Starting Bid Price</label>
                                            <input type="number" name="starting_bid_price" class="form-control @error('starting_bid_price') is-invalid @enderror" id="starting_bid_price" placeholder="Enter starting bid price" aria-describedby="starting_bid_price-error" aria-invalid="true" min="1000">
                                            @error('starting_bid_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="min_bid_price">Minimum Bid Price</label>
                                            <input type="number" name="min_bid_price" class="form-control @error('min_bid_price') is-invalid @enderror" id="min_bid_price" placeholder="Enter minimum bid price" aria-describedby="min_bid_price-error" aria-invalid="true" min="10">
                                            @error('min_bid_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="bid_ending_date">Bid Closing Date</label>
                                            <input type="datetime-local" name="bid_ending_date" class="form-control @error('bid_ending_date') is-invalid @enderror" id="bid_ending_date" placeholder="Enter bid closing date" aria-describedby="bid_ending_date-error" aria-invalid="true" min={{$todaysDate}}>
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
                                    <textarea name="special_product_notes" class="form-control @error('special_product_notes') is-invalid @enderror" id="special_product_notes" placeholder="Enter special product note" aria-describedby="special_product_notes-error" spellcheck="true" cols="20" rows="10"></textarea>
                                    @error('special_product_notes')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="product_images">Product Images</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="product_images" name="product_images[]" multiple>
                                        <label class="custom-file-label" for="product_images">Upload your prouct image files</label>
                                    </div>
                                </div>

                                <!-- Gallery -->
                                <div class="row mt-5 image-gallery"></div>
            
                                <input class="form-control" name="product_seller" type="hidden" placeholder="" value="{{Auth::user()->id}}">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Create Product</button>
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