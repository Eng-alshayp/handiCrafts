@extends('layouts.layoutpage')

@section('title')
    insert kitchen
@endsection

@section('body')
{{--    <section class="container mt-4" >--}}
{{--        <h1>قم بأدخال معلومات المطبخ</h1>--}}
{{--        <form action="{{route('kitchens.store')}}" class="form" method="post" enctype="multipart/form-data">--}}
{{--            @csrf--}}

{{--            <input type="text" name="title" ><br><br>--}}
{{--            <input type="file" name="photo"><br><br>--}}
{{--            <button type="submit">أدخال</button>--}}
{{--        </form>--}}

{{--    </section>--}}

    <section class="container mt-4"
             style=
                 "direction: rtl ;
                  border: 1px solid #000;
                  padding: 20px;
                  background-color: #eee;
                  border-radius: 30px;
                 "
    >


        <h1 style="text-align: center; padding-bottom: 10px">قم بأدخال معلومات المطبخ</h1>
        <form action="{{route('kitchens.store')}}" class="form" method="post" enctype="multipart/form-data">
            @csrf
            <label style="font-weight: 700;font-size: large">قم بأدخال شرح حول المطيخ:</label><br><br>
            <input style="width: 90%" type="text" name="title" ><br><br>
            <label style="font-weight: 700;font-size: large">أدرج صورة المطبخ:</label><br><br>
            <input type="file" name="photo"><br><br>
            <button style="border-radius: 10px; " type="submit">أدخال</button>
        </form>

    </section>
@endsection
