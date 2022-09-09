@extends('layouts.layout')

@section('title')
    woods
@endsection

@section('body')
    <section class="cards">
        <h1 class="titlePages">صفحة القطع الخشبية</h1>

        <div class="content">

            {{--            --------- card 1--------}}
            @foreach($woods as $wood)
                <div class="card">
                    <div class="icon">
                        <img src="{{asset('img/'.$wood->path)}}" alt="woods">
                    </div>
                    <div class="info">
                        <h3>{{$wood->title}}</h3>
                    </div>
                    <div class="infoLink">
                        <a href="{{route('woods.show',$wood->id)}}">عرض التفاصيل</a>

                    </div>
                </div>
            @endforeach
        </div>
    </section>


@endsection
