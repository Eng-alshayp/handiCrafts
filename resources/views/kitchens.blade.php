@extends('layouts.layout')

@section('title')
    kitchens
@endsection

@section('body')
    <section class="cards">
        <h1 class="titlePages">صفحة المطابخ</h1>

        <div class="content">

            {{--            --------- card 1--------}}
            @foreach($kitchens as $kitchen)
                <div class="card">
                    <div class="icon">
                        <img src="{{asset('img/'.$kitchen->path)}}" alt="kitchen">
                    </div>
                    <div class="info">
                        <h3>{{$kitchen->title}}</h3>
                    </div>
                    <div class="infoLink">
                        <a href="{{route('kitchens.show',$kitchen->id)}}">عرض التفاصيل</a>

                    </div>
                </div>
            @endforeach
        </div>
    </section>


@endsection


