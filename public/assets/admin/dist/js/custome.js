 $('.editServiceBtn').on('click', function() {
     var ServiceId = $(this).attr('data-Serviceid');
     $.ajax({
         type: 'get',
         url: url + '/specialist/services/' + ServiceId + '/edit',
         success: function(data) {
             $('.requestServiceData').html(data);
         }
     });
 });

 /*** Open Deleting Category  Modal ***/
 $('.ServiceDelete').on('click', function() {
     var ServiceId = $(this).attr('data-Serviceid');
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
             // $("#deleteCatModal").modal("hide");
             $("#target_" + ServiceId).hide();

             $('#message').html(data);
         },

     });
 });

 /*** Open Deleting Category  Modal ***/
 $('.delete_portfolio_image').on('click', function() {
     var portfolioID = $(this).attr('data-portfolioID');
     $('#deletePortfolioBtn').val(portfolioID);
 });

 /*** Deleting Category  ***/
 $('#deletePortfolioBtn').on('click', function() {
     var portfolioID = $(this).val();
     $.ajax({
         type: 'post',
         url: url + '/portfolio_image_delete/' + portfolioID,
         data: { id: portfolioID, _token: token },
         success: function(data) {
             // $("#deleteCatModal").modal("hide");
             $("#target_" + portfolioID).hide();

             $('#message').html(data);
         },

     });
 });