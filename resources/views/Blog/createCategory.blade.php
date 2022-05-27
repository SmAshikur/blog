@extends('layouts.app')

@section('content')
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="row vw-100 justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Category') }}</div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="d-flex justify-content-end my-2">
                        <a class="btn btn-success " href="{{route('home')}}"> Back to dashboard</a>
                    </div>
                    <div>
                        <h3>Create new Post</h3>
                    </div>
                    <div >
                        <form enctype="multipart/form-data" action="" method="POST">@csrf
                            <div class="form-group">
                                <label> Title of the post</label>
                                <input type="text" class="form-control" name="image">
                            </div>
                            <div class="form-group">
                                <label> Image</label>
                                <input type="file" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label> Body</label>
                                 <textarea rows="3" name="body" class="form-control"></textarea>
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <button type="submit" class="btn btn-success btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

