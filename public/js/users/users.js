$(function(){
   $(document).on('click','.act-deact',function () {
       var id = $(this).attr('id');
       var action = $(this).attr('action');
       var url = $(this).attr('url');
       // alert(url);
       var data = {
           "action":action
       };
       swal({
           title: action+ '!',
           text: "Are you sure you want to "+action+" this user account?",
           type: 'warning',
           showCancelButton: true,
           confirmButtonColor: '#6bd633',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Yes!'
       }).then((result) => {
           // alert(result);
           if (result) {
               $.ajax({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   },
                  url: url,
                  type:"POST",
                  dataType: 'json',
                   data: data,
                  success: function (data) {
                      if(data.status == 'success'){
                          swal(
                              data.status+ '! ',
                              data.message,
                              'success'
                          )
                      }
                  } 
               });

           }
       })
   });
});