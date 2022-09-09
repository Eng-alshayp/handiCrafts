@extends('layouts.layoutpage')

@section('title')
    insert kitchen
@endsection

@section('body')
    <section class="container mt-4" >
        <h1>قم بأدخال معلومات المطبخ</h1>
        <form action="{{route('kitchens.store')}}" class="form" method="post" enctype="multipart/form-data">
            @csrf

            <input type="text" name="title" ><br><br>
            <input type="file" name="photo"><br><br>
            <button type="submit">أدخال</button>
        </form>

    </section>
@endsection
