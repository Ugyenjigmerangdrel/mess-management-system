$(document).ready(function(){
    $("#save").click(function(){
        var item_name = $('#item_name').val();
        var quantity = $('#quantity_name').val();
        var des = $('#des').val();
        var item_rate = $('#item_rate').val();

        $.ajax({
            url: "/mess-management-system/app/controllers/item_list.php",
            type: "post",
            async: true,
            data: {
                "submit": 1,
                "item_name": item_name,
                "quantity_unit": quantity,
                "description": des,
                "item_rate": item_rate
            },
            success: function(data){

            }

        });
    });
});