<div id="intro-shop-slide" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators mb-0">
        <li data-target="#intro-shop-slide" data-slide-to="0" class="active"></li>
        <li data-target="#intro-shop-slide" data-slide-to="1"></li>
        <li data-target="#intro-shop-slide" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        @foreach($shopListIntro as $shop)
            @if ($loop->first)
                <div class="carousel-item active">
                    <img src="{{$shop->image}}" alt="{{$shop->name}}">


                    <div class="carousel-caption">
                        <div>
                            <h3>{{$shop->name}}</h3>
                            <p>{{$shop->description}}</p>
                        </div>
                    </div>
                </div>
            @else
                <div class="carousel-item">
                    <img src="{{$shop->image}}" alt="{{$shop->name}}">
                    <div class="carousel-caption">
                        <div>
                            <h3>{{$shop->name}}</h3>
                            <p>{{$shop->description}}</p>
                        </div>
                    </div>
                </div>
            @endif

        @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#intro-shop-slide" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#intro-shop-slide" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
