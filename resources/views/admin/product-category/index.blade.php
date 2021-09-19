@extends('admin.layouts.master')

@section('title', config('app.name'). ' Dashboard | Product Categories')

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
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('product_category.index') }}">Product Category</a></li>
                        <li class="breadcrumb-item active">View All</li>
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

            <a href="{{ route('product_category.create') }}" class="btn btn-success mb-3">Create a new category</a>

            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 10%" >
                                    Category ID
                                </th>
                                <th style="width: 10%">
                                    Category Image
                                </th>
                                <th style="width: 20%">
                                    Category Name
                                </th>
                                <th>
                                    Category Description
                                </th>
                                <th style="width: 20%">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <th>
                                        # {{$category->id}} 
                                    </th>

                                    <td>
                                        @php
                                            $catImages = explode('|', $category->category_image);
                                        @endphp
                                        @foreach($catImages as $image)
                                            <img alt="Avatar" class="table-avatar" src="{{asset($image)}}">
                                        @endforeach
                                    </td>

                                    <td>
                                        {{$category->category_name}}
                                    </td>

                                    <td>
                                        {!! $category->category_description !!}
                                    </td>

                                    <td class="project-actions text-right d-flex align-items-center justify-content-center">
                                        <a class="btn btn-warning btn-sm mr-2 " href="{{ route('product_category.show', $category->id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <form action="{{ route('product_category.delete', $category->id) }}" method="post">
                                            @csrf
                                            {{ method_field('delete') }}
                                            <button class="btn btn-danger btn-sm" type="submit">
                                                <i class="fas fa-trash">
                                            </i>
                                            Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
@endsection
