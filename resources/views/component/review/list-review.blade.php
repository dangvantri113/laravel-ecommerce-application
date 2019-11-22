<div class="reviews-container">
    <div class="mb-5 text-info title">
        Các đánh giá cho sản phẩm này
    </div>
    @foreach($data as $item)
        <div class="review-item row">
            <div class="review-left-block col-md-4 col-12">
                <div>
                    <img src="{{asset($item->user->profile->avatar)}}" class="d-inline">
                    <span>{{$item->user->email}}</span>
                </div>
                <div class="star_content mb-1">
                    <label class="mb-0">Đánh giá </label>
                    @for($i=0; $i<5; $i++)
                        @if($i < $item->number_star)
                            <i class="fa fa-star fa-star-on" aria-hidden="true"></i>
                        @else
                            <i class="fa fa-star" aria-hidden="true"></i>
                        @endif
                    @endfor
                </div>
            </div>
            <div class="review-right-block col-md-8 col-12">
                <p>{{$item->comment}}</p>
            </div>
        </div>
        <hr>
    @endforeach
</div>
