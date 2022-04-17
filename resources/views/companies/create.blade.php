@extends('docker-and-php-mvc-authentication-example.public_html.pagination.layouts.app')
@section('content')
    <h1 class="text-center p-3">Tashkilot qo'shish</h1>

    <div class="row">
        <div class="col-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{route('humana.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Tashkilot nomi</label>
                    <input type="text" class="form-control" id="name" name="name">
                    @if($errors->has('name'))
                        <span class="invalid-feedback"><b>  {{ $errors->first('name')}} </b></span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Tashkilot manzili</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
                <div class="mb-3 ">
                    <label for="raqam" class="form-label">Telefon raqami</label>
                    <input type="text" class="form-control" id="raqam" name="raqam">
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>

@endsection
