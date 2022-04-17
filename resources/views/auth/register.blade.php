@extends('layouts.app')


@section('content')
    <h1 class="text-center p-3">Register</h1>

    <div class="row">
        <div class="col-6">
            <form method="POST" action="{{route('auth.register')}}">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="name" class="form-label">Full name</label>
                    <input type="text" class="form-control <?= $errors->has('name') ? 'border-danger' : '' ?> " id="name" name="name" value="{{ old('name')  }}">
                    @if($errors->has('name'))
                        <span class="text-danger"><b>  {{ $errors->first('name')}} </b></span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control <?= $errors->has('email') ? 'border-danger' : '' ?>" id="email" name="email" value="{{ old('email')  }}">
                    @if($errors->has('email'))
                        <span class="text-danger"><b>  {{ $errors->first('email')}} </b></span>
                    @endif
                </div>
                <div class="mb-3 ">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control <?= $errors->has('password') ? 'border-danger' : '' ?>" id="password" name="password" value="{{ old('password')  }}">
                    @if($errors->has('password'))
                        <span class="text-danger"><b>  {{ $errors->first('password')}} </b></span>
                    @endif
                </div>
                <div class="mb-3 ">
                    <label for="password_confirmation" class="form-label">Password</label>
                    <input type="password" class="form-control <?= $errors->has('password_confirmation') ? 'border-danger' : '' ?>" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation')  }}">
                    @if($errors->has('password_confirmation'))
                        <span class="text-danger"><b>  {{ $errors->first('password_confirmation')}} </b></span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
@endsection
