@extends('layouts.layoutpage')

@section('title')
    details kitchen
@endsection

@section('body')
    <section class="container" style="margin-top: 100px">

        <div class="card-body">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/'.$kitchen->path)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p style="text-align: center" class="card-text">{{$kitchen->title}}</p>
                    <hr>
                </div>
                <div class="goBack">
                    <a style="text-decoration: none; display: block; text-align: center ; margin-bottom: 10px "
                       href="/kitchens">الرجوع إلى الصفحة السابقة</a>
                </div>
            </div>
        </div>

    </section>


@endsection
