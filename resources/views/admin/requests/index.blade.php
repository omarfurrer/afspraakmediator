@extends('layouts.admin')

@section('content')
<!--<div class="row mb-2">-->
    <!--<div class="col-sm-12">-->
        <!--<a class="btn btn-primary btn-sm pull-right text-white" href="/admin/requests/create"><i class="fa fa-plus mr-1"></i>Add Request</a>-->
    <!--</div>-->
<!--</div>-->
<div class="row">
    <div class="col-sm-12">
        <div class="card card-accent-primary">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> {{ $requests->count() }} Requests
            </div>
            @if($requests->isNotEmpty())
            <div class="card-body">
                <table class="table table-responsive-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>City</th>
                            <th>Category</th>
                            <th>Contact Name</th>
                            <th>Contact Email</th>
                            <th>Contact Phone</th>
                            <th>Description</th>
                            <th>All Behind Mediation</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($requests as $request)
                        <tr>
                            <td>{{ $request->city->name }}</td>
                            <td>{{ $request->category->name }}</td>
                            <td>{{ $request->user->name }}</td>
                            <td>{{ $request->user->email }}</td>
                            <td>{{ $request->contact_phone }}</td>
                            <td class="w-25">{{ $request->description == NULL ? '-' : $request->description }}</td>
                            <td>{!! $request->are_all_parties_behind_mediation ? '<i class="icons cui-circle-check font-2xl text-success"></i>' : '<i class="icons cui-circle-x font-2xl text-danger"></i>' !!}</td>
                            <td>{{ $request->getStatus() }}</td>
                            <td>
<!--                                <a class="btn btn-info text-white" href="/admin/requests/{{ $request->id }}/edit">
                                    <i class="fa fa-edit"></i>
                                </a>-->
                                <a class="btn btn-danger" href="#"
                                   onclick="return deleteModel(event,'delete-form-{{$request->id}}', 'Are you sure you want to delete this content block ? All related data will be lost');">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                                @include("subviews.components.delete_form",["id"=>$request->id, "action"=> url("admin/requests/". $request->id )])
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
