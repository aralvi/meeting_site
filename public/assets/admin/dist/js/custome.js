// open edit categoory modal
$('.editServiceBtn').on('click', function() {
    var ServiceId = $(this).attr('data-Serviceid');
    $.ajax({
        type: 'get',
        url: url + '/specialist/services/' + ServiceId + '/edit',
        success: function(data) {
            $('.requestServiceData').html(data);
            $('.editServiceModal').modal('toggle');
        }
    });
});

/*** Open Deleting Category  Modal ***/
$('.ServiceDelete').on('click', function() {
    var ServiceId = $(this).attr('data-Serviceid');
    $('#deleteServiceModal').modal('toggle');
    $('#deleteServiceBtn').val(ServiceId);
});

/*** Deleting Category  ***/
$('#deleteServiceBtn').on('click', function() {
    var ServiceId = $(this).val();
    $.ajax({
        type: 'post',
        url: url + '/specialist/services/' + ServiceId,
        data: { id: ServiceId, _token: token, _method: 'DELETE' },
        success: function(data) {
            $("#deleteCatModal").modal("hide");
            $("#target_" + ServiceId).hide();
            $('#success_errror_any').addClass("hide");
            $('#messageDiv').removeClass("alert-danger hide");
            $('#messageDiv').addClass("alert-success");
            $('#message').html(data);
        },
        error: function() {
            $('#success_errror_any').addClass("hide");
            $('#messageDiv').removeClass("alert-success hide");
            $('#messageDiv').addClass("alert-danger");
            $('#message').html('Category not found or Something is wrong');
            $('#deleteCatModal').modal('hide');
        }

    });
});

// end of Category section