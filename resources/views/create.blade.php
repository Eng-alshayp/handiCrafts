@extends('layouts.layout')

@section('title')
    create
@endsection

@section('body')
    <section class="cards">

        <h2 class="title">اختر أحد الأقسام </h2>
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
                    <a  href="/doors/create">صفحة أنشاء الأبواب</a>
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
                    <a href="/kitchens/create">صفحة أنشاء المطابخ</a>
                </div>
            </div>

            {{--            --------- card 3--------}}

            <div class="card" >
                <div class="icon">
                    <img class="otherimg" src="/images/otherwood.jpg" alt="table">
                </div>
                <div class="info">
                    <h3>صفحة خشبيات</h3>
                </div>
                <div class="infoLink">
                    <a  href="/woods/create">صفحة أنشاء خشبيات </a>
                </div>
            </div>
        </div>
    </section>

@endsection
