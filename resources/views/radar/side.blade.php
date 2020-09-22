@extends('layouts.app')

@section('content')
<!--stalite map-->
<div class="satellite text-center">
    <div class="container">
        <div class="sat-map">
            <h3>
                <i class="fas fa-satellite-dish mx-2"></i> صور الأقمار الإصطناعية بلاد الشام <small> - بلاد الشام ومصر - تحديث مباشر</small>
            </h3>
            <p class="">
                صور الأقمار الاصطناعية و حركة السحب المتحركة الآن و راصد البروق و رادار الأمطار تحديث مباشر لمنطقة بلاد الشام ، بلاد الشام ومصر
            </p>
            <ul class="list-unstyled d-flex">
               <li><a href="#">بلاد الشام</a></li>
               <li><a href="#">شرق المتوسط و مصر</a></li>
               <li><a href="#">فلسطين</a></li>
               <li><a href="#">الاردن</a></li>
               <li><a href="#">سوريا</a></li>
               <li><a href="#">لبنان</a></li>
               <li><a href="#">مصر</a></li>
            </ul>
            <a href='#'><image src="{{asset('img/الشام.jpg')}}" width="100%"></a>
            <div class="hours">
                <div class="row">
                    <div class="col-md-4 ">
                    <p>اخر 4 ساعات</p>
                    </div>
                    <div class="col-md-4">
                    <p>اخر 12 ساعة</p>
                    </div>
                    <div class="col-md-4">
                    <p>اخر 18 ساعة</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="maps text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="map">
                    <a href="{{asset('img/البروق.jpg')}}">
                        <img src="{{asset('img/البروق.jpg')}}" class="img-fluid" alt="البروق">
                    </a>
                    <div class="overlay">البروق</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="map">
                    <a href="{{asset('img/الحرارة.jpg')}}">
                        <img src="{{asset('img/الحرارة.jpg')}}" class="img-fluid" alt="الحرارة">
                    </a>
                    <div class="overlay">درجات الحرارة السحب (ملون)</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="map">
                    <a href="{{asset('img/الحرارة2.jpg')}}">
                        <img src="{{asset('img/الحرارة2.jpg')}}" class="img-fluid" alt="الحرارة">
                    </a>
                    <div class="overlay">درجات الحرارة السحب</div>
               </div>
            </div>
            <div class="col-md-4">
                <div class="map">
                    <a href="{{asset('img/الحمراء.jpg')}}">
                        <img src="{{asset('img/الحمراء.jpg')}}" class="img-fluid" alt="الاشعه تحت الحمراء">
                    </a>
                    <div class="overlay">الاشعة تحت الحمراء</div>
                </div>
            </div>
            <div class="col-md-4">
               <div class="map">
                    <a href="{{asset('img/10.jpg')}}">
                        <img src="{{asset('img/10.jpg')}}" class="img-fluid" alt="الصور المرئيه">
                    </a>
                    <div class="overlay">الصور المرئية</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="map">
                    <a href="{{asset('img/10.jpg')}}">
                        <img src="{{asset('img/10.jpg')}}" class="img-fluid" alt="الاشعه تحت الحمراء">
                    </a>
                    <div class="overlay">الغطاء النباتي</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
