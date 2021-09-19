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
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <form id="quickForm" novalidate="novalidate" action="{{ route('product_category.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="categoryname">Category Name</label>
                                    <input type="text" name="category_name" class="form-control  @error('category_name') is-invalid @enderror" id="categoryname" placeholder="Enter category name" aria-describedby="categoryname-error" aria-invalid="true">
                                    @error('category_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="categorydescription">Category Description</label>
                                    <textarea name="category_description" class="form-control @error('category_description') is-invalid @enderror" id="categorydescription" placeholder="Enter category description" aria-describedby="categorydescription-error" spellcheck="true" cols="20" rows="10"></textarea>
                                    @error('category_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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

                                        <div class="gallery col-md-3 ml-auto"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Create Category</button>
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