@extends('admin.layouts.master')

@section('title', config('app.name'). ' Dashboard | Product Inspections')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Product Inspections Times</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('product_inspection.index') }}">Product Inspections Time</a></li>
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
                <div class="col-md-12">
                    <div class="card card-primary">
                        <form id="quickForm" novalidate="novalidate" action="{{ route('product_inspection.update', $inspection->id) }}" method="POST">
                            @csrf
                             {{ method_field('put') }}
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label for="product_id">Product</label>
                                            <select class="form-control" id="product_id" name="product_id">
                                                @foreach($products as $product)
                                                    <option value={{$product->id}} @if($inspection->product_id == $product->id) selected @endif>{{$product->product_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inspection_status">Inspection Schedule States</label>
                                            <input type="text" name="inspection_status" class="form-control @error('inspection_status') is-invalid @enderror" id="inspection_status" disabled aria-describedby="inspection_status-error" aria-invalid="true" value="Not Booked">
                                            @error('inspection_status')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            @php
                                                $inspectionStartTime = date('Y-m-d\TH:i', strtotime($inspection->inspection_start_time));
                                            @endphp
                                            <label for="inspection_start_time">Inspection Starting Time</label>
                                            <input type="datetime-local" name="inspection_start_time" class="form-control @error('inspection_start_time') is-invalid @enderror" id="inspection_start_time" placeholder="Enter bid closing date" aria-describedby="inspection_start_time-error" aria-invalid="true" min={{$todaysDate}} value={{$inspectionStartTime}}>
                                            @error('inspection_start_time')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            @php
                                                $inspectionEndTime = date('Y-m-d\TH:i', strtotime($inspection->inspection_end_time));
                                            @endphp
                                            <label for="inspection_end_time">Inspection Ending Time</label>
                                            <input type="datetime-local" name="inspection_end_time" class="form-control @error('inspection_end_time') is-invalid @enderror" id="inspection_end_time" placeholder="Enter bid closing date" aria-describedby="inspection_end_time-error" aria-invalid="true" min={{$todaysDate}} value={{$inspectionEndTime}}>
                                            @error('inspection_end_time')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inspection_address">Product Inspection Address</label>
                                    <input type="text" name="inspection_address" class="form-control @error('inspection_address') is-invalid @enderror" id="inspection_address" placeholder="Enter product name" aria-describedby="inspection_address-error" aria-invalid="true" value="{{$inspection->inspection_address}}">
                                    @error('inspection_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="inspection_notes">Insspection Notes</label>
                                    <textarea name="inspection_notes" class="form-control @error('inspection_notes') is-invalid @enderror" id="inspection_notes" placeholder="Enter product description" aria-describedby="inspection_notes-error" spellcheck="true" cols="20" rows="10">{{$inspection->inspection_notes}}</textarea>
                                    @error('inspection_notes')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Create Product Inspection Times</button>
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