@extends('docker-and-php-mvc-authentication-example.public_html.pagination.layouts.main')
@section('content')
    <div class="container">
        <form method="post" action="{{ route('news.store')  }}">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter title" name="title">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
