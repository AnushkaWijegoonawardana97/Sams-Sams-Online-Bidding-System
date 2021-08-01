@extends('admin.layouts.master')

@section('title', config('app.name'). '| Dashboard')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product Categories</h1>
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

    <a href="{{ route('product_category.create') }}" class="btn btn-success btn-sm">Create</a>

    <table class="table">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>desc</th>
            <th>Action</th>
        </tr>

        @foreach($categories as $category)
            <tr>
                <th>{{$category->id}}</th>
                <th>{{$category->category_name}}</th>
                <th>{{$category->category_description}}</th>
                <th>
                    <a href="{{ route('product_category.show', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('product_category.delete', $category->id) }}" method="post">
                        @csrf
                        {{ method_field('delete') }}
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                </th>
            </tr>
        @endforeach

    </table>
@endsection
