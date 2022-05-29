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
                        <h3>Edit Category</h3>
                    </div>
                    <div >
                        <form  action="{{route('categories.update',$category)}}" method="POST">@csrf @method('put')
                            <div class="form-group">
                                <label> Category Name</label>
                                <input type="text" class="form-control" name="name" value="{{$category->name}}">
                            </div>

                            <div class="form-group d-flex justify-content-center mt-5">
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

