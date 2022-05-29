@extends('layouts.app')

@section('content')
<div class="container vh-100 d-flex align-items-center">
    <div class="row vw-100 justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><div class="d-flex justify-content-center"><h3>{{ __('Category List') }}</h3></div></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped table-bodered">
                        <tr>
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Edit</th>
                            <th>Delete </th>
                        </tr>
                        @foreach ($cats as $cat )
                        <tr>
                            <td>{{$cat->id}}</td>
                            <td>{{$cat->name}}</td>
                            <td><a class="btn btn-success" href="{{route('categories.edit',$cat)}}">Edit</a></td>
                            <td>
                                <form action="{{route('categories.destroy', $cat)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                                </td>
                        </tr>
                        @endforeach

                    </table>
                    <div class="my-3 d-flex justify-content-center"><a class="btn btn-success " href="{{route('home')}}"> Back to dashboard</a></div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

