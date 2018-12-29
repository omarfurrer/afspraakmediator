@extends('layouts.admin')

@section('content')
<div class="row mb-2">
    <div class="col-sm-12">
        <a class="btn btn-primary btn-sm pull-right text-white" href="/admin/categories/create"><i class="fa fa-plus mr-1"></i>Add Category</a>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card card-accent-primary">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> {{ $categories->count() }} Categories
            </div>
            @if($categories->isNotEmpty())
            <div class="card-body">
                <table class="table table-responsive-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Meta Title</th>
                            <th>Meta Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ $category->meta_title == NULL ? '-' : $category->meta_title }}</td>
                            <td class="w-50">{{ $category->meta_description == NULL ? '-' : $category->meta_description }}</td>
                            <td>
                                <a class="btn btn-info text-white" href="/admin/categories/{{ $category->id }}/edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a class="btn btn-danger" href="#"
                                   onclick="return deleteModel(event,'delete-form-{{$category->id}}', 'Are you sure you want to delete this category ? ALL COMPANIES UNDER THIS CATEGORY WILL BE DELETED');">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                                @include("subviews.components.delete_form",["id"=>$category->id, "action"=> url("admin/categories/". $category->id )])
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection
