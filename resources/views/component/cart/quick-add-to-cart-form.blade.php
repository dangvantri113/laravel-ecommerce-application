<form id="addToCartForm" action="{{route('product.add.cart')}}" method="post">
    @csrf
    <input id="groupProductId" type="text" name="group_product_id" value="{{$product->id}}" class="d-none">
    <div class="form-group">
        @php
            $colors = $product->products->where('color','!=',null)->unique('color')->pluck('color')->toArray();
            $sizes = $product->products->where('size','!=',null)->unique('size')->pluck('size')->toArray();
        @endphp
        @if(count($colors)>0)
            <label class="mr-2">Màu sắc</label>
            <select id="colorSelect" name="color">
                @foreach($colors as $color)
                    <option value="{{$color}}" class="text-capitalize">{{$color}}</option>
                @endforeach
            </select>
        @endif
        @if(count($sizes)>0)
            <label class="mr-2">Size</label>
            <select id="sizeSelect" name="size">
                @foreach($sizes as $size)
                    <option value="{{$size}}" class="text-capitalize">{{$size}}</option>
                @endforeach
            </select>
            @endif
    </div>
    <div class="form-group">
        <label class="mr-2">Đơn giá </label>
        <span id="detailPrice" class="text-danger mr-2"></span><span class="text-danger">VNĐ</span>
    </div>
    <div class="form-group">
        <label class="mr-2">Số lượng</label>
        <input type="number" name="quantity" min="1" value="1">
    </div>
</form>
<script type="text/javascript" src="{{asset('js/quick-add-to-cart.js')}}"></script>
