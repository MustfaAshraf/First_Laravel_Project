@extends('layouts.app')

@section('content')

<!---- UPDATE Message ---->
<div class="container">
    <div class="row">
        <div class="col-md-10 m-auto">
            <h4 class="text-center mb-4">{{ __('language.message') }} <span class="badge badge-success">{{$message->id}}</span></h4>
            <form method="post" action={{route('messages.save')}} enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="old_id" value="{{$message->id}}" class="form-control">

                <label>{{ __('language.id') }}</label>
                <input type="text" name="id" value="{{$message->id}}" class="form-control mb-4">
                @error('id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.name') }}</label>
                <input type="text" name="name" value="{{$message->name}}" class="form-control mb-4">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.email') }}</label>
                <input type="text" name="email" value="{{$message->email}}" class="form-control mb-4">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.subject') }}</label>
                <input type="text" name="subject" value="{{$message->subject}}" class="form-control mb-4">
                @error('subject')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.message_content') }}</label>
                <input type="text" name="message_content" value="{{$message->message}}" class="form-control mb-4">
                @error('message_content')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="submit" class="btn btn-success btn-block" value="{{ __('language.update') }}">
            </form>
        </div>
    </div>
</div>


@endsection