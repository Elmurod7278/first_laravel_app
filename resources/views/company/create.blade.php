@extends('layouts.index')
@section('content')

    <?php /** @var ArrayIterator $errors */ ?>
    <h1 class="text-center p-3">Tashkilot qo'shish</h1>

    <div class="row">
        <div class="col-6">
            <form method="POST" action="{{route('company.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Tashkilot nomi</label>
                    <input type="text" class="form-control <?= $errors->has('name') ? 'border-danger' : '' ?> " id="name" name="name" value="{{ old('name')  }}">
                    @if($errors->has('name'))
                        <span class="text-danger"><b>  {{ $errors->first('name')}} </b></span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Tashkilot manzili</label>
                    <input type="text" class="form-control <?= $errors->has('address') ? 'border-danger' : '' ?>" id="address" name="address" value="{{ old('address')  }}">
                    @if($errors->has('address'))
                        <span class="text-danger"><b>  {{ $errors->first('address')}} </b></span>
                    @endif
                </div>
                <div class="mb-3 ">
                    <label for="phone" class="form-label">Telefon raqami</label>
                    <input type="text" class="form-control <?= $errors->has('phone') ? 'border-danger' : '' ?>" id="raqam" name="phone" value="{{ old('phone')  }}">
                    @if($errors->has('phone'))
                        <span class="text-danger"><b>  {{ $errors->first('phone')}} </b></span>
                    @endif
                </div>
                <div class="mb-3 ">
                    <label for="email" class="form-label">email</label>
                    <input type="text" class="form-control <?= $errors->has('email') ? 'border-danger' : '' ?>" id="raqam" name="email" value="{{ old('email')  }}">
                    @if($errors->has('email'))
                        <span class="text-danger"><b>  {{ $errors->first('email')}} </b></span>
                    @endif
                </div>
                <div class="mb-3 ">
                    <label for="about" class="form-label">About</label>
                    <input type="text" class="form-control <?= $errors->has('about') ? 'border-danger' : '' ?>" id="raqam" name="about" value="{{ old('about')  }}">
                    @if($errors->has('about'))
                        <span class="text-danger"><b>  {{ $errors->first('about')}} </b></span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>


@endsection
