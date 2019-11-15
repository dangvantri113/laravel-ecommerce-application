<!-- Modal -->
<div class="px-5 modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel"
     aria-hidden="true">
    <div class="modal-dialog w-100 mw-100" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalLabel">Modal Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="edit-product-form">
                    <div class="form-group d-flex align-items-center">
                        <label class="p-0 mb-0" for="name-product-input">Tên sản phẩm</label>
                        <input id="name-product-input"
                               type="text" class="form-control" name="nameProduct" placeholder="nameProduct">
                    </div>
                    <div class="form-group d-flex align-items-center">
                        <label class="p-0 mb-0" for="name-product-input">Loại sản phẩm</label>
                        <select id="category-lv1-select">
                            <option>Thời trang</option>
                        </select>
                        <select id="category-lv2-select">
                            <option>Trang phục thể thao</option>
                        </select>
                    </div>
                    <div class="form-group d-flex align-items-center">
                        <label class="p-0 mb-0" for="name-product-input">Thương Hiệu</label>
                        <select id="category-lv1-select">
                            <option>No brand</option>
                        </select>
                    </div>
                    <div class="form-group d-flex align-items-center">
                        <label class="p-0 mb-0" for="description-product-input">Mô tả</label>
                        <textarea id="description-product-input"
                                  type="text" class="form-control" name="descriptionProduct"
                                  placeholder="descriptionProduct"></textarea>

                    </div>
                    <div class="form-group d-flex align-items-center">
                        <label class="p-0 mb-0" for="image-product-input">Các hình ảnh</label>

                        <div class="position-relative">
                            <label class="image-product-label" for="image1-product-input">
                                <img class="w-100" src="{{asset('images/icon/store.jpg')}}"></label>
                            <input id="image2-product-input" type="file" class="form-control upload-image"
                                   name="descriptionProduct" placeholder="descriptionProduct">

                        </div>
                        <div class="position-relative">
                            <label class="image-product-label" for="image2-product-input"><img class="w-100"
                                                                                               for="image2-product-input"
                                                                                               src="{{asset('images/icon/store.jpg')}}"></label>
                            <input id="image1-product-input" type="file" class="form-control upload-image"
                                   name="descriptionProduct" placeholder="descriptionProduct">
                        </div>
                        <div class="position-relative">
                            <label class="image-product-label" for="image3-product-input"><img class="w-100"
                                                                                               src="{{asset('images/icon/store.jpg')}}"></label>
                            <input id="image3-product-input" type="file" class="form-control upload-image"
                                   name="descriptionProduct" placeholder="descriptionProduct">
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center">
                        <label class="p-0 mb-0" for="name-product-input">Phân loại màu sắc</label>
                        <div>
                            <div>
                                <input class="" type="checkbox" value="" id="greenCheckBox">
                                <label class="form-check-label" for="defaultCheck1">
                                    Default checkbox
                                </label>
                            </div>

                            <input type="number">
                        </div>
                        <div>
                            <div>
                                <input class="" type="checkbox" value="" id="greenCheckBox">
                                <label class="form-check-label" for="defaultCheck1">
                                    Default checkbox
                                </label>
                            </div>
                            <input type="number">
                        </div>
                        <div>
                            <div>
                                <input class="" type="checkbox" value="" id="greenCheckBox">
                                <label class="form-check-label" for="defaultCheck1">
                                    Default checkbox
                                </label>
                            </div>
                            <input type="number">
                        </div>

                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
