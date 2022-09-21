<?php
include_once "include/connect.php";

include_once "is_login.php";

include_once "class/class.Database.php";
include_once "class/class.Addcart.php";
include_once "include/header.php";

$order = new Order();

$order_display = $order->selected_order();

?>
<?php
if(isset($_SESSION['succ']))
{
foreach($_SESSION['succ'] as $s)
?>
<div class="alert alert-success" style="margin:20px;">
<?php echo $s; ?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<?php
}
?>
<h1 align="center">Your Orders</h1>
<form action="checkout.php" method="post">
    <table class="table table-hover-animation mb-0">
                                    <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Product Image</th> 
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Price</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>                                        
                                        <tbody>
                                        <?php
                                        foreach ($order_display as $key =>$value)
                                        {
                                        ?>
                                        <tr>
                                            <input type="hidden" name="id[]" value="<?php echo $value['product_id']; ?>">
                                            <input type="hidden" name="id1" value="<?php echo $value['id']; ?>">
                                            <td><img class="round" src="<?php echo PRODUCT_IMAGE .  $value['product_image']; ?>" height="50" width="50"></td>
                                            <td><?php echo $value['product_name']; ?></td>
                                            <td><div class="input-group" style="width:50%">
									               	<span class="input-group-btn">
									                  	<button class="btn btn-white btn-minuse" type="button">-</button>
									               	</span>
									               	<input type="text" class="form-control no-padding add-color text-center height-10" style="width:20px;border:none;" maxlength="3" value="1" class="quan" data-qua="<?php echo $value['price']; ?>" name="quanitity[<?php echo $value['product_id']; ?>]">
									               	<span class="input-group-btn">
									                  	<button class="btn btn-red btn-pluss" type="button">+</button>
									               	</span>
									            </div></td>
                                            <td><div class="price" data-price="<?php echo $value['price']; ?>"><?php echo $value['price']; ?></div></td>
                                            <td><a href="models/product_proccess.php?id=<?= $value['id'];?>&type=delete"><img src="assets/images/icons/trash.svg"></a></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                        <td></td>
                                        <td></td>
                                        <td>Grand Total : </td>
                                        <td> <span id="grandTotal"></td>
                                        <td><button class="btn btn-primary">Procced To  checkout</button></td>
    </tbody>
    </table>
    </form>
<script>


window.onload = function(){

    $(document).ready(function(){
        grandtotal();
        $("input").change(function(){
            let tr = $(this).closest("tr");
            let quntity = $(this).val();
            let price = tr.find(".price").data("price");
            let total = price * quntity;
            tr.find(".price").text(total);
            // console.log(tr);
            // console.log(quntity);
            // console.log(price);
            // console.log(price * quntity);
            grandtotal();
            });   

          $('.btn-minuse').on('click', function(){            
               $(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) - 1)

               $(this).parent().siblings('input').trigger("change");


            })

            $('.btn-pluss').on('click', function(){            
                $(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) + 1)

                $(this).parent().siblings('input').trigger("change");


            }) 
    });

}

function grandtotal()
{
    let elements = $("table").find(".price");
    let grandtotal = 0;

    $.each(elements, function (i) {
        grandtotal +=  parseInt($(this).text());
        console.log($(this).text());
});
    $("#grandTotal").text(grandtotal);
}

</script>
<?php
include_once "include/footer.php";
?>      