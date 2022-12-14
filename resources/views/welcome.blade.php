@extends('layouts.layout')

@section('title')
    witty for disegn
@endsection

@section('body')
    <section class="main">
        <div>
        <h1>وتي للديكور</h1>
        <h2>لتجارة وصناعة الأخشاب المنزلية </h2>

        </div>

        <div class="enMain">
            <h1>Witty For Design</h1>
            <h2>For Trading & Handicrafts Industry</h2>
        </div>

    </section>

    <section class="cards">

        <h2 class="title">الخدمات </h2>
        <div class="content">
                        {{--            --------- card 1--------}}
            <div class="card">
                <div class="icon">
                    <img src="/images/door.png" alt="door">
                </div>
                <div class="info">
                <h3>أبواب خشبية بأحدث الموديلات</h3>

                </div>
                <div class="infoLink">
                    <a  href="/doors">صفحة الأبواب</a>
                </div>
            </div>
                        {{--            --------- card 2--------}}

            <div class="card">
                <div class="icon">
                    <img src="/images/kitchen.jpg" alt="kitchen">
                </div>
                <div class="info">
                    <h3>أنشاء مطابخ بأحدث الموديلات</h3>
                </div>
                <div class="infoLink">
                    <a href="/kitchens">صفحة المطابخ</a>
                </div>
            </div>

            {{--            --------- card 3--------}}
{{--            style="flex-grow: 3;"--}}
            <div class="card" >
                <div class="icon">
                    <img class="otherimg" src="/images/otherwood.jpg" alt="table">
                </div>
                <div class="info">
                    <h3>محلنا الجديد لبيع الأثاث الخشبية وغيرها من مستلزمات المنازل</h3>
                </div>
                <div class="infoLink">
                    <a  href="/woods">صفحة المحل الجديد</a>
                </div>
            </div>
        </div>
    </section>




@endsection

