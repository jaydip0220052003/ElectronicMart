		<?php
$q = mysqli_query($conn, "select * from tbl_product");
while ($data = mysqli_fetch_array($q)) {
?>
    <div class="col-md-2 product-men">
        <div class="men-pro-item simpleCart_shelfItem">
            <div class="men-thumb-item text-center" style="width: 100%; height: 100%;">
                <img src="upload/<?php echo $data['product_image'];?>" alt="<?php echo $data['product_name'];?>" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                    </div>
                </div>
            </div>
            <div class="item-info-product text-center mt-2">
                <h4 class="pt-1">
                    <a href="single.html"><?php echo $data['product_name'];?></a>
                </h4>
                <div class="info-product-price">
                    <span class="item_price">$<?php echo $data['product_price'];?></span>
                    <del>$<?php echo $data['product_price'];?></del>
                </div>
                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="#" method="post">
                        <fieldset>
                            <input type="hidden" name="cmd" value="_cart" />
                            <input type="hidden" name="add" value="1" />
                            <input type="hidden" name="business" value=" " />
                            <input type="hidden" name="item_name" value="<?php echo $data['product_name'];?>" />
                            <input type="hidden" name="amount" value="<?php echo $data['product_price'];?>" />
                            <input type="hidden" name="discount_amount" value="1.00" />
                            <input type="hidden" name="currency_code" value="USD" />
                            <input type="hidden" name="return" value=" " />
                            <input type="hidden" name="cancel_return" value=" " />
                            <input type="submit" name="submit" value="Add to cart" class="btn btn-style btn-style-secondary mt-3" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php }?>