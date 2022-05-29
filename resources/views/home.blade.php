@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div>
                    {{ Auth::user()->name }} Your are Log in
                   </div>
                <div class="card-body d-flex justify-content-center align-items-center flex-column ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                       <div class="my-5">
                        <a class="btn btn-success" href="{{route('postCreate')}}"> create a post</a>
                       </div>

                       <div class="my-5">
                        <a class="btn btn-success" href="{{route('categoryCreate')}}"> create a Category</a>
                      </div>
                      <div class="my-5">
                        <a class="btn btn-success" href="{{route('categories.index')}}"> view Category</a>
                      </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
