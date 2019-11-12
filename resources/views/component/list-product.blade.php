<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tên Sản Phẩm</th>
        <th scope="col">Image</th>
        <th scope="col">Price</th>
        <th scope="col">Hành động</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
    <tr>
        <th scope="row">{{$product->id}}</th>
        <td><a href="products/{{$product->id}}" target="_blank">{{$product->name}}</a></td>
        <td> <img src="{{$product->image_1}}"></td>
        <td>{{$product->price}} đ</td>
        <td>
            <button class="btn-success"><span class="fa fa-edit"></span></button>
            <button class="btn-danger"><span class="fa fa-remove"></span></button>

        </td>
    </tr>
    @endforeach
    </tbody>
</table>
<div class="d-flex">
    <div class="m-auto">
        {{ $products->onEachSide(1)->links() }}
    </div>
</div>
<script type="text/javascript">
    $('.page-link').click(function(e){
        e.preventDefault();
        $.ajax({
            url : $(this).attr('href'),
            type: 'get',
            success:function (data) {
                console.log(data);
                $('#product-container').html(data);
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
</script>
<div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        </div>
    </div>
</div>

