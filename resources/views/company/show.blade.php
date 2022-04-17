
@extends('layouts.index')
@section('content')

    <h1 class="text-center p-3">Tashkilot haqida</h1>

    <div class="row">

            <table class="table table-bordered">
                <tr>
                    <td>Tashkilot nomi</td>
                    <td>Tashkilot manzili</td>
                    <td>Tashkilot telefon raqami</td>
                    <td>Tashkilot emaili</td>
                    <td>Kiritilgan vaqti</td>
                </tr>
                <tr>
                    <td>{{$company->name}}</td>
                    <td>{{$company->address}}</td>
                    <td>{{$company->phone}}</td>
                    <td>{{$company->email}}</td>
                    <td>{{$company->created_at}}</td>
                </tr>
            </table>
        <a href="{{route('company.index')}}" class="btn btn-info">ortga</a>
    </div>


@endsection
