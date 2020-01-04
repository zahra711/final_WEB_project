@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/m/{{$memory->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="login-header pb-4">{{ __('Edit') }}</div>   
                    <div class="form-group row justify-content-center">
                        <div class="col-md-10">
                            <input id="mem_title" type="text" placeholder="Title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $memory->title }}" required autocomplete="title" autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <div class="col-md-10">
                            <textarea id="mem_text" rows="15" placeholder="Caption" class="form-control @error('description') is-invalid @enderror" name="description"  value="{{ old('description') ?? $memory->description }}" required autocomplete="description" autofocus >{{ old('description') ?? $memory->description }}</textarea>
                            
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div> 
            </div> 
        </div>
        <div class="row justify-content-center">
                
                <button type="submit" class="btn btn-primary center-block">
                    {{ __(' Save ') }}
                </button>
                <a type="submit" href="/m" class="btn btn-primary center-block"> {{ __(' Back ') }} </a>
            </div>
    </form>
</div>
@endsection
