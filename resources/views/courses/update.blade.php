@extends('layouts.app')

@section('content')

<!---- UPDATE Course ---->
<div class="container">
    <div class="row">
        <div class="col-md-10 m-auto">
            <h4 class="text-center mb-4">{{ __('language.course') }} <span class="badge badge-success">{{$course->id}}</span></h4>
            <form method="post" action={{route('courses.save')}} enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="old_id" value="{{$course->id}}" class="form-control">

                <label>{{ __('language.id') }}</label>
                <input type="text" name="id" value="{{$course->id}}" class="form-control mb-4">
                @error('id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.title') }}</label>
                <input type="text" name="title" value="{{$course->title}}" class="form-control mb-4">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.description') }}</label>
                <input type="text" name="description" value="{{$course->description}}" class="form-control mb-4">
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
                <label>{{ __('language.hours') }}</label>
                <input type="text" name="hours" value="{{$course->hours}}" class="form-control mb-4">
                @error('hours')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
                <label>{{ __('language.price') }}</label>
                <input type="text" name="price" value="{{$course->price}}" class="form-control mb-4">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="submit" class="btn btn-success btn-block" value="{{ __('language.update') }}">
            </form>
        </div>
    </div>
</div>


@endsection