@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card border-primary">
            <div class="card-header bg-primary">
                <strong>Edit {{ $company->name }}</strong>
            </div>
            <div class="card-body">
                @include('admin.companies._form')
            </div>
            <div class="card-footer">
                <button type="submit" form="form__company" class="btn btn-primary pull-right">Save</button>
            </div>
        </div>
    </div>
</div>

@endsection
