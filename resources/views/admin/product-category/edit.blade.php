@extends('admin.layouts.master')

@section('title', config('app.name'). ' Dashboard | Product Categories')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Product Categories</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('product_category.index') }}">Product Category</a></li>
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
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('message')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <form id="quickForm" novalidate="novalidate" action="{{ route('product_category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('put') }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="categoryname">Category Name</label>
                                    <input type="text" name="category_name" class="form-control" id="categoryname" placeholder="Enter category name" value="{{$category->category_name}}" aria-describedby="categoryname-error" aria-invalid="true">
                                    <span id="categoryname-error" class="error invalid-feedback">Please enter a category name</span>
                                </div>

                                <div class="form-group">
                                    <label for="categorydescription">Category Description</label>
                                    <textarea name="category_description" class="form-control" id="categorydescription" placeholder="Enter category description" aria-describedby="categorydescription-error" spellcheck="true" cols="20" rows="10">{!! $category->category_description !!}</textarea>
                                    <span id="categorydescription-error" class="error invalid-feedback">Please enter a category description</span>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-8">
                                            <label for="category_image">Category Image</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="category_image" name="category_image[]">
                                                <label class="custom-file-label" for="category_image">Upload your category image file</label>
                                            </div>
                                        </div>

                                        <div class="gallery col-md-3 ml-auto" id="gallery">
                                            @if($category->category_image)
                                                @php
                                                    $catImages = explode('|', $category->category_image);
                                                @endphp
                                                @foreach($catImages as $image)
                                                    <img src="{{asset($image)}}" alt="" id="currentImg" class="product-category-img">
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Update Category</button>
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
            $( "#currentImg" ).remove();

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
