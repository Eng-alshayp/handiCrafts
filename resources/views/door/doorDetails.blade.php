@extends('layouts.layoutpage')

@section('title')
    details door
@endsection

@section('body')


    <section class="container" style="margin-top: 100px">

        <div class="card-body">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/'.$door->path)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p style="text-align: center" class="card-text">{{$door->title}}</p>
                    <hr>
                </div>
                <div class="goBack">
                    <a style="text-decoration: none; display: block; text-align: center ; margin-bottom: 10px "
                       href="/doors">الرجوع إلى الصفحة السابقة</a>
                </div>
            </div>
        </div>

    </section>


@endsection


