<div id="blockFilter" class="d-flex">

    <form id="formFilter" class="form-inline" action="" method="get" autocomplete="on">
        @csrf
        <label class="mr-2">Từ</label>
        @if(isset($currentPriceFrom) && $currentPriceFrom)
        <input class="text-right mr-0" type="number" min="0" name="price_from" value="{{$currentPriceFrom}}">
        @else
        <input class="text-right mr-0" type="number" min="0" name="price_from">
        @endif
        <label class="text-danger">Triệu</label>
        <label class="mr-2">Đến</label>
        @if(isset($currentPriceTo)&& $currentPriceTo)
        <input class="text-right mr-0" type="number" min="1" name="price_to"  value="{{$currentPriceTo}}">
        @else
        <input class="text-right mr-0" type="number" min="1" name="price_to">
        @endif
        <label class="ml-0 mr-5 text-danger">Triệu</label>
        @if(isset($childCategories) && $childCategories!=null)
        <div id="childCategories" class="d-inline">
            <select name="childCategory" autocomplete="">
                @if(isset($currentChild) && $currentChild)
                    <option value="{{$currentChild->id}}" selected>{{$currentChild->name}}</option>
                    <option value="0">Danh mục liên quan</option>
                @else
                    <option value="0" selected>Danh mục liên quan</option>
                @endif
                @foreach($childCategories as $childCategory)
                    <option value="{{$childCategory->id}}">{{$childCategory->name}}</option>
                @endforeach
            </select>
        </div>
        @endif
        <div id="filterColor">
            <select name="color">
                @if(isset($currentColor) && $currentColor)
                    <option value="{{$currentColor}}" selected>{{$currentColor}}</option>
                    <option value="0">Màu sắc</option>
                @else
                    <option value="0" selected>Màu sắc</option>
                @endif
                @foreach($filterColors as $color)
                    <option value="{{$color}}">{{$color}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Tìm kiếm</button>
    </form>

</div>
