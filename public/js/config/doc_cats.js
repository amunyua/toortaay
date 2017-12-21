$('#doc-cat-dt').DataTable({
    "pagingType": "full_numbers",
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
    ],
    order: [[0, 'desc']],
    responsive: true,
    language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
    }

});

// add button
$('#add-com').click(function(){
    $('#modal-slug').text('New');
    $('input[name=name]').val('').parents('div.form-group').removeClass('is-focused');
    $('div#add-modal input[name=_method]').val('post');
});

// edit button
$('.edit-cat').on('click', function(){
    var edit_btn = $(this);
    $('#modal-slug').text('Edit');

    // fetch data
    $.ajax({
        url: edit_btn.data('source'),
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // populate modal
            $.each(data, function (index, value) {
                var control = 'input[name='+index+']';

                $(control).parents('div.form-group').addClass('is-focused');
                $(control).val(value);
            });

            // open modal
            $('#add-modal').modal('show');

            // spoof
            $('div#add-modal input[name=_method]').val('put');
        }
    });
});

// delete button
$('.remove-cat').on('click', function(){
    var id = $(this).attr('cat-id');
    $('#del-id').val(id);
    $('#delete-modal').modal('show');
});