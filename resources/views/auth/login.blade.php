@extends('layouts.app')

@section('content')
    <h1 class="text-center p-3">Login</h1>
    <div class="row">
        <div class="col-6">
            <form method="POST" action="{{route('auth.login')}}">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control <?= $errors->has('email') ? 'border-danger' : '' ?>" id="email" name="email" >
                    @if($errors->has('email'))
                        <span class="text-danger"><b>  {{ $errors->first('email')}} </b></span>
                    @endif
                </div>
                <div class="mb-3 ">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control <?= $errors->has('password') ? 'border-danger' : '' ?>" id="password" name="password" >
                    @if($errors->has('password'))
                        <span class="text-danger"><b>  {{ $errors->first('password')}} </b></span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>


@endsection
