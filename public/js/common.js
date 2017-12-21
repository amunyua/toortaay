$(function () {
    $(document).on("click",".common-delete",function () {
        var action = $(this).attr("action");
        // alert(action);
        $(document).find("form#delete-form").removeAttr("action").attr("action",action);
    });
    $(document).on('click',".mf-common-edit",function(){
        var action = $(this).attr("hint");
        var id = $(this).attr('e-id');
        // alert(id);
        var editRoute  = $("#edit-form").find("#editDetails").val()+ "/"+id;

        // alert(editRoute);
        $(document).find("form#edit-form").removeAttr("action").attr("action",action);

        $.ajax({
            url:editRoute,
            type:"GET",
            dataType:"json",
            success: function (data) {
                if(data) {
                    $('form#edit-form').find('input.form-control,select.form-control').each(function (index, element) {
                        // console.log();
                        var attrId = $(element).attr('name');
                        // alert(attrId);
                        var e = data[attrId];
                        if(data[attrId] === true){
                            e= 1;
                        }else if(data[attrId] === false){
                            e=0;
                        }
                        // alert(e);

                        $(element).val(e).change();


                    })
                    $("#email").val(data.user["email"]).change();
                    $("#role-id").val(data.user["role_id"]).change();
                }
            }
        });
    });
    $(document).on('click',".common-edit",function(){
        var action = $(this).attr("hint");
        var id = $(this).attr('e-id');
        // alert(id);
        var editRoute  = $("#edit-form").find("#editDetails").val()+ "/"+id;

        // alert(editRoute);
        $(document).find("form#edit-form").removeAttr("action").attr("action",action);

        $.ajax({
            url:editRoute,
            type:"GET",
            dataType:"json",
            success: function (data) {
                if(data) {
                    $('form#edit-form').find('input.form-control,select.form-control').each(function (index, element) {
                        // console.log();
                        var attrId = $(element).attr('name');
                        // alert(attrId);
                        var e = data[attrId];
                        if(data[attrId] === true){
                            e= 1;
                        }else if(data[attrId] === false){
                            e=0;
                        }
                        // alert(e);

                        $(element).val(e).change();


                    });
                }
            }
        });
    });
});