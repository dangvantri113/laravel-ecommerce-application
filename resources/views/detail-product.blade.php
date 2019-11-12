@extends('layouts.app')
@section('content')
    @include('component.intro-shop-slide')
    <div id="detail-product">
        <h3>
            {{$product->name}}
        </h3>

        <h4>
           {{$product->categoryLv1->name}}
        </h4>
        <h5>
            {{$product->categoryLv2->name}}
        </h5>
        <div id="content-wrapper" class="col-xs-12">


            <section id="main" itemscope="" itemtype="https://schema.org/Product" class="product-page">

                <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 pb-left-column">

                            <section class="page-content" id="content">


                                <div class="images-container  horizontal-thumbnails ">


                                    <div class="product-cover" data-productzoom="1" data-productzoomtype="inner">
                                        <img class="js-qv-product-cover" src="http://ps.flytheme.net/themes/sp_shopee/367-large_default/deserunt-reicien-volupbu-alias.jpg" alt="" title="" style="width:100%;" itemprop="image">
                                        <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                            <i class="material-icons zoom-in"></i>
                                        </div>

                                        <div class="product-flags">
                                        </div>

                                    </div>



                                    <div class="js-qv-mask mask scroll">
                                        <ul class="product-images js-qv-product-images slick-initialized slick-slider" data-thumb="4" data-thumbtype="false">
                                            <div aria-live="polite" class="slick-list draggable"><div class="slick-track" role="listbox" style="opacity: 1; width: 452px; transform: translate3d(0px, 0px, 0px);"><li class="thumb-container slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" role="option" aria-describedby="slick-slide10" style="width: 95px;">
                                                        <img class="thumb js-thumb selected" data-image-medium-src="http://ps.flytheme.net/themes/sp_shopee/367-medium_default/deserunt-reicien-volupbu-alias.jpg" data-image-large-src="http://ps.flytheme.net/themes/sp_shopee/367-large_default/deserunt-reicien-volupbu-alias.jpg" src="http://ps.flytheme.net/themes/sp_shopee/367-small_default/deserunt-reicien-volupbu-alias.jpg" alt="" title="" itemprop="image">
                                                    </li><li class="thumb-container slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" role="option" aria-describedby="slick-slide11" style="width: 95px;">
                                                        <img class="thumb js-thumb" data-image-medium-src="http://ps.flytheme.net/themes/sp_shopee/368-medium_default/deserunt-reicien-volupbu-alias.jpg" data-image-large-src="http://ps.flytheme.net/themes/sp_shopee/368-large_default/deserunt-reicien-volupbu-alias.jpg" src="http://ps.flytheme.net/themes/sp_shopee/368-small_default/deserunt-reicien-volupbu-alias.jpg" alt="" title="" itemprop="image">
                                                    </li><li class="thumb-container slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" role="option" aria-describedby="slick-slide12" style="width: 95px;">
                                                        <img class="thumb js-thumb" data-image-medium-src="http://ps.flytheme.net/themes/sp_shopee/369-medium_default/deserunt-reicien-volupbu-alias.jpg" data-image-large-src="http://ps.flytheme.net/themes/sp_shopee/369-large_default/deserunt-reicien-volupbu-alias.jpg" src="http://ps.flytheme.net/themes/sp_shopee/369-small_default/deserunt-reicien-volupbu-alias.jpg" alt="" title="" itemprop="image">
                                                    </li><li class="thumb-container slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" role="option" aria-describedby="slick-slide13" style="width: 95px;">
                                                        <img class="thumb js-thumb" data-image-medium-src="http://ps.flytheme.net/themes/sp_shopee/370-medium_default/deserunt-reicien-volupbu-alias.jpg" data-image-large-src="http://ps.flytheme.net/themes/sp_shopee/370-large_default/deserunt-reicien-volupbu-alias.jpg" src="http://ps.flytheme.net/themes/sp_shopee/370-small_default/deserunt-reicien-volupbu-alias.jpg" alt="" title="" itemprop="image">
                                                    </li></div></div>



                                        </ul>
                                    </div>


                                </div>

                            </section>

                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12 pb-right-column">


                            <h1 class="product-name" itemprop="name">Deserunt reicien volupbu alias toxe lol</h1>




                            <div id="product_comments_block_extra">


                                <div class="comments_advices">
                                    <div class="comments_note">
                                        <div class="star_content clearfix">
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <a class="nb-comments" href="#idTab5">0 Reviews</a>

                                    <a class="open-comment-form" href="#" data-toggle="modal" data-target="#productcomment-modal">Write a review</a>
                                </div>











                            </div>
                            <!--  /Module SPProductComments -->




                            <div class="product-prices">
                                <!--<span class="control-label">
                                    Price
                                </span>-->

                                <div class="product-price " itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
                                    <link itemprop="availability" href="https://schema.org/InStock">
                                    <meta itemprop="priceCurrency" content="USD">
                                    <div class="current-price">
                                        <span itemprop="price" content="88.51" class="price">$88.51</span>
                                    </div>


                                </div>












                                <div class="tax-shipping-delivery-label">


                                </div>
                            </div>




                            <div class="tab-pane " id="product-details">





                                <div class="product-reference">
                                    <label class="label">Reference: </label>
                                    <span itemprop="sku">demo_14</span>
                                </div>



                                <div class="product-quantities">
                                    <label class="label">In stock:</label>
                                    <span>16 Items</span>
                                </div>






                                <div class="product-out-of-stock">

                                </div>







                            </div>




                            <div id="product-description-short-14" class="product-short-description" itemprop="description"><p>Every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p></div>


                            <div class="product-actions">

                                <form action="http://ps.flytheme.net/themes/sp_shopee/en/cart" method="post" id="add-to-cart-or-refresh">
                                    <input type="hidden" name="token" value="b641c5a3136d9d38f36896224404e670">
                                    <input type="hidden" name="id_product" value="14" id="product_page_product_id">
                                    <input type="hidden" name="id_customization" value="0" id="product_customization_id">





                                    <div class="product-variants">
                                        <div class="clearfix product-variants-item Color">
                                            <span class="control-label">Color :</span>
                                            <div class="selector">
                                                <select id="group_3" data-product-attribute="3" name="group[3]">
                                                    <option value="15" title="Green">Green</option>
                                                    <option value="16" title="Yellow" selected="selected">Yellow</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="clearfix product-variants-item Size">
                                            <span class="control-label">Size :</span>
                                            <div class="selector">
                                                <select id="group_1" data-product-attribute="1" name="group[1]">
                                                    <option value="1" title="S" selected="selected">S</option>
                                                    <option value="2" title="M">M</option>
                                                    <option value="3" title="L">L</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>



                                    <section class="product-discounts">
                                    </section>



                                    <div class="product-add-to-cart">

                                        <div class="product-quantity">
                                            <span class="control-label">Qty :</span>
                                            <div class="qty">
                                                <div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="text" name="qty" id="quantity_wanted" value="1" class="input-group form-control" min="1" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn-vertical"><button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button"><i class="material-icons touchspin-up"></i></button><button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button"><i class="material-icons touchspin-down"></i></button></span></div>
                                            </div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                Add To Cart
                                            </button>
                                        </div>
                                        <div class="clearfix"></div>




                                        <span id="product-availability">
                                                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                    In stock
                                    </span>




                                        <p class="product-minimal-quantity">
                                        </p>

                                    </div>

                                    <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="Refresh" style="display: none;">

                                </form>

                            </div>


                            <div class="social-sharing">
                                <span>Share this</span>
                                <ul>
                                    <li class="facebook icon-gray"><a href="http://www.facebook.com/sharer.php?u=http://ps.flytheme.net/themes/sp_shopee/en/electronics-computer/14-deserunt-reicien-volupbu-alias.html" class="text-hide" title="Share" target="_blank">Share</a></li>
                                    <li class="twitter icon-gray"><a href="https://twitter.com/intent/tweet?text=Deserunt reicien volupbu alias toxe lol http://ps.flytheme.net/themes/sp_shopee/en/electronics-computer/14-deserunt-reicien-volupbu-alias.html" class="text-hide" title="Tweet" target="_blank">Tweet</a></li>
                                    <li class="googleplus icon-gray"><a href="https://plus.google.com/share?url=http://ps.flytheme.net/themes/sp_shopee/en/electronics-computer/14-deserunt-reicien-volupbu-alias.html" class="text-hide" title="Google+" target="_blank">Google+</a></li>
                                    <li class="pinterest icon-gray"><a href="http://www.pinterest.com/pin/create/button/?media=http://ps.flytheme.net/themes/sp_shopee/367/deserunt-reicien-volupbu-alias.jpg&amp;url=http://ps.flytheme.net/themes/sp_shopee/en/electronics-computer/14-deserunt-reicien-volupbu-alias.html" class="text-hide" title="Pinterest" target="_blank">Pinterest</a></li>
                                </ul>
                            </div>



                        </div>
                    </div>


                <div class="product-moreinfo col-xs-12">
                        <div class="tabs clearfix">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#description" aria-expanded="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#review" aria-expanded="false">Review</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content">
                                <div class="tab-pane fade active in" id="description" aria-expanded="true">

                                    <div class="product-description"><p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p></div>

                                </div>

                                <div class="tab-pane " id="product-details">





                                    <div class="product-reference">
                                        <label class="label">Reference: </label>
                                        <span itemprop="sku">demo_14</span>
                                    </div>



                                    <div class="product-quantities">
                                        <label class="label">In stock:</label>
                                        <span>16 Items</span>
                                    </div>






                                    <div class="product-out-of-stock">

                                    </div>







                                </div>

                                <div class="tab-pane fade" id="review" aria-expanded="false">

                                    <script type="text/javascript">
                                        var productcomments_controller_url = 'http://ps.flytheme.net/themes/sp_shopee/en/module/productcomments/default';
                                        var confirm_report_message = 'Are you sure that you want to report this comment?';
                                        var secure_key = '532035ae78c1011ba67d5890e577a511';
                                        var productcomments_url_rewrite = '1';
                                        var productcomment_added = 'Your comment has been added!';
                                        var productcomment_added_moderation = 'Your comment has been submitted and will be available once approved by a moderator.';
                                        var productcomment_title = 'New comment';
                                        var productcomment_ok = 'OK';
                                        var moderation_active = 1;
                                    </script>

                                    <div id="productcomment-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="SpProductComment" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    <h4 class="title"><i class="fa fa-comments" aria-hidden="true"></i> Write your review</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="comment-form-wrap">
                                                        <form id="comment-form" action="#">
                                                            <div class="row">
                                                                <div class="comment-form-wrap_content col-xs-12">
                                                                    <div id="comment-form-wrap_error" class="alert alert-error" style="display: none;">
                                                                        <span title="Hide" class="iclose-btn  pull-right" onclick="icloseClick(this)"><i class="fa fa-times" aria-hidden="true"></i></span>
                                                                        <ul></ul>
                                                                    </div>
                                                                    <ul id="criterions_list">
                                                                        <li>
                                                                            <label>Quality</label>
                                                                            <div class="stars">
                                                                                <input class="star-1" id="star-1-1" type="radio" name="criterion[1]" value="1">
                                                                                <label class="star-1" for="star-1-1">1</label>
                                                                                <input class="star-2" id="star-2-1" type="radio" name="criterion[1]" value="2">
                                                                                <label class="star-2" for="star-2-1">2</label>
                                                                                <input class="star-3" id="star-3-1" type="radio" name="criterion[1]" value="3">
                                                                                <label class="star-3" for="star-3-1">3</label>
                                                                                <input class="star-4" id="star-4-1" type="radio" name="criterion[1]" value="4">
                                                                                <label class="star-4" for="star-4-1">4</label>
                                                                                <input class="star-5" id="star-5-1" type="radio" name="criterion[1]" value="5" checked="checked">
                                                                                <label class="star-5" for="star-5-1">5</label>
                                                                                <span></span>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div style="clear: both;"></div>
                                                                    <label for="comment_title">Title for your review <sup class="required">*</sup></label>
                                                                    <input id="comment_title" class=" form-control" name="title" type="text" value="">

                                                                    <label for="content">Your review <sup class="required">*</sup></label>
                                                                    <textarea id="content" name="content" class=" form-control"></textarea>


                                                                    <div id="comment-form-wrap_footer">
                                                                        <input id="id_product_comment_send" class="iinput form-control" name="id_product" type="hidden" value="14">
                                                                        <p class="fl"><sup class="required">*</sup> <small>Required fields</small></p>
                                                                        <p class="fr">
                                                                            <a class="btn btn-info" href="javascript:void(0)" id="submitNewMessage" onclick="fnSubmitNewMessage()"><i id="iloading-icon" class="fa fa-circle-o-notch fa-spin fa-fw" style="display: none;"></i> Send</a>
                                                                        </p>
                                                                        <div style="clear: both;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form><!-- /end comment-form-wrap_content -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="productcomment-modal-success" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="SpProductComment" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    <h4 class="title"><i class="fa fa-comments" aria-hidden="true"></i> New comment</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="comment-form-wrap_success">
                                                        <p class="alert alert-success">
                                                            You are sent a comment success. The administrator will review and approve your comment. Thank you!

                                                        </p>
                                                        <p class="submit" id="comment-form-wrap_success-reload" style="text-align:right; padding-bottom: 0"><button type="submit" class="button btn btn-info" value="true" onclick="productcommentRefreshPage()"><span>OK</span></button></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div style="clear: both;"></div>
                                    <div id="idTab5" style="margin-top: 2rem;">
                                        <div id="product_comments_block_tab">
                                            <p class="align_center">
                                                <a id="new_comment_tab_btn" class="open-comment-form" href="#" data-toggle="modal" data-target="#productcomment-modal">Be the first to write your review !</a>
                                            </p>

                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>

                        <script>// <![CDATA[
                            $(document).ready(function(){
                                $(".open-comment-form").on('click',function(){
                                    $('#review').addClass('active');
                                });
                                $("#productcomment-modal .close").on('click',function(){
                                    $('#review').removeClass('active');
                                });
                            });
                        </script>			</div>




            </section>

        </div>
    </div>
@endsection
@section('script')
@endsection
