<div class="container">
    <div class="navbar">
        <div><img src="{{asset('images/dc-logo.png')}}" alt="logo" /></div>
        <div class="lista">
            <ul>
                <li><a href="#">CHARACTERS</a></li>
                <li><a href="#">COMICS</a></li>
                <li><a href="#">MOVIES</a></li>
                <li><a href="#">TV</a></li>
                <li><a href="#">GAMES</a></li>
                <li><a href="#">COLLECTIBLES</a></li>
                <li><a href="#">VIDEOS</a></li>
                <li><a href="#">FANS</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">SHOP</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="jumbotron">
            <button>CURRENT SERIES</button>
        </div>
        <div class="cards">
            @foreach ($comics_info as $item)
                <div class="card">
                    <img src="{{$item['thumb']}}" alt="img">
                    <h6>{{$item['title']}} </h6>
                </div>
            @endforeach
        </div>
        <button class="loadmore">LOAD MORE</button>
    </div>
</div>
