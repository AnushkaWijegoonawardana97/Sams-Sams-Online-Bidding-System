@extends('admin.layouts.master')

@section('title', config('app.name'). '| Dashboard')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product Category Edit</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    @if(Session::has('message'))
        <p>{{Session::get('message')}}</p>
    @endif

    <form action="{{ route('product_category.update', $category->id) }}" method="POST">
        @csrf
        {{ method_field('put') }}
        <input type="text" name="category_name" placeholder="category_name" value="{{$category->category_name}}">

        <textarea name="category_description" id="" cols="30" rows="10" placeholder="category_description">{{$category->category_description}}</textarea>

        <button type="submit">Update</button>
    </form>

@endsection
