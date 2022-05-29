@extends('layouts.app')

@section('content')
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="row w-100 justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-end my-2">
                        <a class="btn btn-success " href="{{route('home')}}"> Back to dashboard</a>
                    </div>
                </div>

                <div class="card-body">



                    <div class="d-flex justify-content-center my-2">
                        <h3>Create new Post</h3>
                    </div>
                    @if(session()->has('success'))
                        {{session()->get('success')}}
                    @endif
                    <div >
                        <form enctype="multipart/form-data" action="{{route('postStore')}}" method="POST">@csrf
                            <div class="form-group">
                                <label> Title of the post</label>
                                <input type="text" class="form-control" name="title" value="{{old('title')}}">
                            </div>
                            @error('title')
                            {{-- The $attributeValue field is/must be $validationRule --}}
                            <p style="color: red;  ">{{ $message }}</p>
                            @enderror
                            <div class="form-group">
                                <select class="form-control" name="category_id">
                                    <option> Select a Category</option>
                                    @foreach ($cats as $cat )
                                        <option value="{{$cat->id}}"> {{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category_id')
                            {{-- The $attributeValue field is/must be $validationRule --}}
                            <p style="color: red;  ">{{ $message }}</p>
                            @enderror
                            <div class="form-group">
                                <label> Image</label>
                                <input type="file" class="form-control" name="image" value="{{old('image')}}">
                            </div>
                            @error('image')
                            {{-- The $attributeValue field is/must be $validationRule --}}
                            <p style="color: red;  ">{{ $message }}</p>
                            @enderror
                            <div class="form-group">
                                <label> Body</label>
                                 <textarea rows="3" name="body" class="form-control">
                                     {{old('body')}}
                                 </textarea>
                            </div>
                            @error('body')
                            {{-- The $attributeValue field is/must be $validationRule --}}
                            <p style="color: red;  ">{{ $message }}</p>
                            @enderror
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
