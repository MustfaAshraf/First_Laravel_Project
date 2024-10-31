@extends('layouts.app')

@section('content')

<!---- UPDATE User ---->
<div class="container">
    <div class="row">
        <div class="col-md-10 m-auto">
            <h4 class="text-center mb-4">{{ __('language.update_user') }} <span class="badge badge-success">{{$user->id}}</span></h4>
            <form method="post" action={{route('users.save')}} enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="old_id" value="{{$user->id}}" class="form-control">

                <label>{{ __('language.id') }}</label>
                <input type="text" name="id" value="{{$user->id}}" class="form-control mb-4">
                @error('id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.name') }}</label>
                <input type="text" name="name" value="{{$user->name}}" class="form-control mb-4">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.email') }}</label>
                <input type="email" name="email" value="{{$user->email}}" class="form-control mb-4">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="submit" class="btn btn-success btn-block" value="{{ __('language.update') }}">
            </form>
        </div>
    </div>
</div>


@endsection