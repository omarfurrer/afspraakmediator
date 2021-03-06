@extends('layouts.admin')

@section('content')
<div class="row mb-2">
    <div class="col-sm-12">
        <a class="btn btn-primary btn-sm pull-right text-white" href="/admin/reviews/create"><i class="fa fa-plus mr-1"></i>Add Review</a>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card card-accent-primary">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> {{ $reviews->count() }} Reviews
            </div>
            @if($reviews->isNotEmpty())
            <div class="card-body">
                <table class="table table-responsive-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>Reviewer</th>
                            <th>Content</th>
                            <th>Rating</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reviews as $review)
                        <tr>
                            <td>{{ $review->name }}</td>
                            <td class="w-25">{{ $review->content }}</td>
                            <td>
                                <select class="star-rating-read-only">
                                    <option {{ $review->rating == 1 ? 'selected' : '' }} value="1">1</option>
                                    <option {{ $review->rating == 2 ? 'selected' : '' }} value="2">2</option>
                                    <option {{ $review->rating == 3 ? 'selected' : '' }} value="3">3</option>
                                    <option {{ $review->rating == 4 ? 'selected' : '' }} value="4">4</option>
                                    <option {{ $review->rating == 5 ? 'selected' : '' }} value="5">5</option>
                                </select>
                            </td>
                            <td>{{ $review->category == NULL ? '-' : $review->category->name }}</td>
                            <td>
                                <a class="btn btn-info text-white" href="/admin/reviews/{{ $review->id }}/edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a class="btn btn-danger" href="#"
                                   onclick="return deleteModel(event,'delete-form-{{$review->id}}', 'Are you sure you want to delete this content block ? All related data will be lost');">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                                @include("subviews.components.delete_form",["id"=>$review->id, "action"=> url("admin/reviews/". $review->id )])
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
