<div>
    <h3 class="text-lg-center text-danger">Đánh giá của bạn</h3>
    <form class="" id="addReviewForm">
        <div class="review-item row">
            <div class="review-left-block col-md-4 col-12">
                <div>
                    <img src="{{Auth::user()->profile->avatar}}" class="d-inline">
                    <span>{{Auth::user()->email}}</span>
                </div>
                <div class="star_content mb-1">
                    <label class="mb-0">Đánh giá </label>
                    @for($i=0; $i<5; $i++)
                        <i class="fa fa-star" aria-hidden="true" value="{{$i}}star"></i>
                    @endfor
                </div>
                <input type="text" class="d-none" name="group_product_id" value="{{$product->id}}">
            </div>
            <div class="review-right-block col-md-8 col-12 d-flex">
                <textarea class="flex-grow-1" name="comment"></textarea>
                <button type="submit" class="btn-success">Đánh giá</button>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="{{asset('js/review.js')}}"></script>
