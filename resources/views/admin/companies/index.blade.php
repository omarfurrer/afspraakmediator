@extends('layouts.admin')

@section('content')
<div class="row mb-2">
    <div class="col-sm-12">
        <a class="btn btn-primary btn-sm pull-right text-white" href="/admin/companies/create"><i class="fa fa-plus mr-1"></i>Add Company</a>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card card-accent-primary">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> {{ $companies->count() }} Companies
            </div>
            @if($companies->isNotEmpty())
            <div class="card-body">
                <table class="table table-responsive-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Contact Name</th>
                            <th>Contact Email</th>
                            <th>Contact Phone</th>
                            <th>Operating Cities</th>
                            <th>Operating Categories</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companies as $company)
                        <tr>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->city->name }}</td>
                            <td>{{ $company->user->name }}</td>
                            <td>{{ $company->user->email }}</td>
                            <td>{{ $company->phone == NULL ? '-' : $company->phone }}</td>
                            <td>
                                <ul>
                                    @foreach($company->cities as $city)
                                    <li>{{ $city->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    @foreach($company->categories as $category)
                                    <li>{{ $category->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <a class="btn btn-info text-white" href="/admin/companies/{{ $company->id }}/edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a class="btn btn-danger" href="#"
                                   onclick="return deleteModel(event,'delete-form-{{$company->id}}', 'Are you sure you want to delete this content block ? All related data will be lost');">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                                @include("subviews.components.delete_form",["id"=>$company->id, "action"=> url("admin/companies/". $company->id )])
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
