@extends('layouts.layout')

@section('title')
    Door
@endsection

@section('body')
    <section class="cards">
        <h1 class="titlePages">صفحة الأبواب</h1>

        <div class="content">

              {{--            --------- card 1--------}}
            @foreach($doors as $door)
            <div class="card">
                <div class="icon">
                    <img src="{{asset('img/'.$door->path)}}" alt="door">
                </div>
                <div class="info">
                    <h3>{{$door->title}}</h3>
                </div>
                <div class="infoLink">
                    <a href="{{route('doors.show',$door->id)}}">عرض التفاصيل</a>

                </div>
            </div>
            @endforeach
        </div>
    </section>


@endsection
