
@extends('layouts.index')
@section('content')
<?php use Carbon\Carbon;

?>
    <h1 class="text-center">@lang("msg.Tashkilotlar_ruyxati")</h1>
    <a href="{{route('company.create')}}">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-success" type="button">Tashkilot qo'shish</button>
        </div>
    </a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>T\R</td>
            <td>Tashkilot nomi</td>
            <td>Tashkilot manzili</td>
            <td>Tashkilot telefon raqami</td>
            <td>Tashkilot emaili</td>
            <td>Tashkilot haqida</td>
            <td>Amallar</td>

        </tr>
        </thead>
        <tbody>
        @foreach($com as $comi)
            <tr>
                <td>{{($com->currentpage()-1)*$com->perpage()+($loop->index+1)}}</td>
                <td><a href="{{route('company.show',['company'=>$comi])}}">{{$comi->name}}</a></td>
                <td>{{$comi->address}}</td>
                <td>{{$comi->phone}}</td>
                <td>{{$comi->email}}</td>
                <td>{{$comi->about}}</td>
                <td>
                    <form action="{{ route('company.destroy',['company' => $comi]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                    <a href="{{route('company.edit',['company' => $comi->id])}}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                </td>

            </tr>

        @endforeach
        </tbody>
    </table>
    {{$com->links()}}

@endsection
