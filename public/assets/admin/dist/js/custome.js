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