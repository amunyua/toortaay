$(function () {

    $("body").on("click",".attach-pms-btn", function () {
//                alert("clicked");
        var roleId = $(this).attr('r-id');
        $('#id-holder').val(roleId);
        var url = $('#permissions-route').val()+'/'+ roleId;
        $("#permissions").dataTable({
            destroy:true,
            processing: true,
            serverSide: true,
            width:"100%",
            ajax: url,
            // headers: {
            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            // },
            columns: [
//                    { data: 'id', name: 'id' },
                { data: 'url', name: 'url' },
                { data: 'action', name: 'action' },
                { data: 'id', name: 'id' }
            ]
        });

    }).on('click','.menu-permission',function () {
        var roleId = $('#id-holder').val();
        var routeId = $(this).val();
        var url = $('#attach-route').val();
        // alert(url);


        if($(this).is(":checked")){
            allocateDissalocateMenu("allocate",roleId,routeId,url)
        }else{
            allocateDissalocateMenu("dissallocate",roleId,routeId,url)
        }
    });

    function allocateDissalocateMenu(action,roleId,routeId, url){
        var data = {
            'action':action,
            'role_id': roleId,
            'route_id':routeId
        };
        // console.log(data);
        $.ajax({
            url: url,
            type: "POST",
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: data,
            success: function (data) {
                // console.log(data.status.state);
                if(data.status.state == "success"){
                    $.notify({
                        icon: 'notifications',
                        message:"Success! "+data.status.message
                    },{
                        type: 'success',
                        timer: 300,
                        placement: {
                            from: 'top',
                            align: 'right'
                        }
                    });
                }else{
                    $.notify({
                        icon: 'notifications',
                        message:"Failed! "+data.status.message
                    },{
                        type: 'danger',
                        timer: 300,
                        placement: {
                            from: 'top',
                            align: 'right'
                        }
                    });
                }
            }
        });
    }
});