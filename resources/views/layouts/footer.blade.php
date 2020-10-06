<div class="footer-bottom  text-center">
    <div class="container-fluid">
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
    </div>
</div>
<!-- footer section -->
