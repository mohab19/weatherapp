<div class="footer-bottom  text-center">
    <div class="container d-flex ">
        <div class="footer-links">
            <a href="{{$settings->where('name', 'facebook_url')->first()->value}}" target="_blank" >
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="{{$settings->where('name', 'twitter_url')->first()->value}}" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="{{$settings->where('name', 'youtube_channel')->first()->value}}" target="_blank" >
                <i class="fab fa-youtube"></i>
            </a>
        </div>
        <div class="data  text-white">
        <span class="d-flex"><b><i class="fas fa-envelope-open-text"></i></b> &nbsp; <p>{{$settings->where('name', 'email')->first()->value}}</p></span>
        <span class="d-flex"><b><i class="fas fa-phone-volume"></i></b> &nbsp; <p>{{$settings->where('name', 'phone')->first()->value}}</p></span>
        </div>
    </div>
</div>
<footer class="text-center">
    <div class="container">
        <p>Copyright © 2019 All rights reserved | This template is made with love by Gigastone</p>
    </div>
</footer>
<!-- footer section -->
