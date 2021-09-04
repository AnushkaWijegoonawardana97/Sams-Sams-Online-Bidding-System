@extends('admin.layouts.master')

@section('title', config('app.name'). ' Dashboard | Product Biddings')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Product Bid</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('product_bids.index') }}">Product Bids</a></li>
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
                <div class="col-md-12">
                    <div class="card card-primary">
                        <form id="quickForm" novalidate="novalidate" action="{{ route('product_bids.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label for="buyer_id">Buyer</label>
                                            <select class="form-control" id="buyer_id" name="buyer_id">
                                                @foreach($buyers as $buyer)
                                                    <option value={{$buyer->id}}>{{$buyer->first_name. " " .$buyer->last_name}}</option>
                                                @endforeach
                                            </select>
                                            @error('buyer_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="bid_price">Bidding Price</label>
                                            @if($productbids)
                                                <input type="number" name="bid_price" class="form-control  @error('bid_price') is-invalid @enderror" id="bid_price" aria-describedby="bid_price-error" aria-invalid="true" step="{{$product->min_bid_price}}" value="{{$productbids}}">
                                            @else
                                                <input type="number" name="bid_price" class="form-control  @error('bid_price') is-invalid @enderror" id="bid_price" aria-describedby="bid_price-error" aria-invalid="true" step="{{$product->min_bid_price}}" value="{{$product->starting_bid_price}}">
                                            @endif
                                            @error('bid_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                                   
                                        </div>

                                        <input class="form-control" name="product_id" type="hidden" placeholder="" value="{{$product->id}}">
                                    </div>
                                </div>
                                
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Create Product Bid</button>
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
    // Product ID
    var productid = document.getElementById("product_id").value;
    console.log(productid);

    tinymce.init({
        selector: '#categorydescription'
    });

    $(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).attr('class', "product-category-img").appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#category_image').on('change', function() {
            imagesPreview(this, 'div.gallery');
        });
    });
</script>
@endsection