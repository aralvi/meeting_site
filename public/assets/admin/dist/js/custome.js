// open edit categoory modal
$('.editCatBtn').on('click', function() {
    var catID = $(this).data('catid');
    $.ajax({
        type: 'get',
        url: url + '/admin/categories/' + catID + '/edit',
        success: function(data) {
            $('.requestCatData').html(data);
            $('.editCatModal').modal('toggle');
        }
    });
});

/*** Open Deleting Category  Modal ***/
$('.catDelete').on('click', function() {
    var catID = $(this).data('catid');

    $('#deleteCatModal').modal('toggle');
    $('#deleteCatBtn').val(catID);
});

/*** Deleting Category  ***/
$('#deleteCatBtn').on('click', function() {
    var catID = $(this).val();
    $.ajax({
        type: 'post',
        url: url + '/admin/categories/' + catID,
        data: { id: catID, _token: token, _method: 'DELETE' },
        success: function(data) {
            $("#deleteCatModal").modal("hide");
            $("#target_" + catID).hide();
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

// open edit sub categoory modal
$('.editSubCatBtn').on('click', function() {
    var subcatID = $(this).data('subcatid');
    $.ajax({
        type: 'get',
        url: url + '/admin/subcategories/' + subcatID + '/edit',
        success: function(data) {
            $('.requestSubCatData').html(data);
            $('.editSubCatModal').modal('toggle');
        }
    });
});

/*** Open Deleting sub Category  Modal ***/
$('.subcatDelete').on('click', function() {
    var subcatID = $(this).data('subcatid');

    $('#deleteSubCatModal').modal('toggle');
    $('#deleteSubCatBtn').val(subcatID);
});

/*** Deleting sub Category  ***/
$('#deleteSubCatBtn').on('click', function() {
    var subcatID = $(this).val();
    $.ajax({
        type: 'post',
        url: url + '/admin/subcategories/' + subcatID,
        data: { id: subcatID, _token: token, _method: 'DELETE' },
        success: function(data) {
            $("#deleteSubCatModal").modal("hide");
            $("#target_" + subcatID).hide();
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
            $('#deleteSubCatModal').modal('hide');
        }

    });
});

// end of sub Category section

// open edit color modal
$('.editColorBtn').on('click', function() {
    var colorID = $(this).data('colorid');
    $.ajax({
        type: 'get',
        url: url + '/admin/colors/' + colorID + '/edit',
        success: function(data) {
            $('.requestColorData').html(data);
            $('.editColorModal').modal('toggle');
        }
    });
});

/*** Open Deleting sub Category  Modal ***/
$('.ColorDelete').on('click', function() {
    var colorID = $(this).data('colorid');

    $('#deleteColorModal').modal('toggle');
    $('#deleteColorBtn').val(colorID);
});

/*** Deleting sub Category  ***/
$('#deleteColorBtn').on('click', function() {
    var colorID = $(this).val();
    $.ajax({
        type: 'post',
        url: url + '/admin/colors/' + colorID,
        data: { id: colorID, _token: token, _method: 'DELETE' },
        success: function(data) {
            $("#deleteColorModal").modal("hide");
            $("#target_" + colorID).hide();
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
            $('#deleteColorModal').modal('hide');
        }

    });
});

// end of sub Category section


// open edit size modal
$('.editsizeBtn').on('click', function() {
    var sizeID = $(this).data('sizeid');
    $.ajax({
        type: 'get',
        url: url + '/admin/sizes/' + sizeID + '/edit',
        success: function(data) {
            $('.requestsizeData').html(data);
            $('.editsizeModal').modal('toggle');
        }
    });
});

/*** Open Deleting sub Category  Modal ***/
$('.sizeDelete').on('click', function() {
    var sizeID = $(this).data('sizeid');

    $('#deletesizeModal').modal('toggle');
    $('#deletesizeBtn').val(sizeID);
});

/*** Deleting sub Category  ***/
$('#deletesizeBtn').on('click', function() {
    var sizeID = $(this).val();
    $.ajax({
        type: 'post',
        url: url + '/admin/sizes/' + sizeID,
        data: { id: sizeID, _token: token, _method: 'DELETE' },
        success: function(data) {
            $("#deletesizeModal").modal("hide");
            $("#target_" + sizeID).hide();
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
            $('#deletesizeModal').modal('hide');
        }

    });
});

// end of sub Category section






// Open Edit Product modal
$('.editProBtn').on('click', function() {
    var ProID = $(this).attr("data-productId");
    $.ajax({
        type: 'get',
        url: url + '/admin/products/' + ProID + '/edit',
        success: function(data) {
            $(".editProModal").modal("toggle");
            $(".requestProData").html(data);
        }
    });
});


/*** Open Deleting Product Group Modal ***/
$('.ProDelete').on('click', function() {
    var ProID = $(this).attr("data-productId");

    $("#deleteProModal").modal("toggle");
    $("#deleteProBtn").val(ProID);
});

/*** Deleting Product Group ***/
$('#deleteProBtn').on('click', function() {
    var ProID = $(this).val();
    $.ajax({
        type: 'post',
        url: url + '/admin/products/' + ProID,
        data: { id: ProID, _token: token, _method: 'DELETE' },
        success: function(data) {
            $("#deleteProModal").modal("hide");
            $("#target_" + ProID).hide();
        },

    });
});