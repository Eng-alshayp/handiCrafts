@extends('layouts.layoutpage')

@section('title')
    insert door
@endsection

@section('body')
    <section class="container mt-4" >
        <h1>قم بأدخال معلومات الباب</h1>
        <form action="{{route('doors.store')}}" class="form" method="post" enctype="multipart/form-data">
            @csrf

            <input type="text" name="title" ><br><br>
            <input type="file" name="photo"><br><br>
            <button type="submit">أدخال</button>
        </form>

    </section>
@endsection
