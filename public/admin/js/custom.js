$(document).ready(function () {
             
                   loadorder();
                
                     $.ajaxSetup({
                                headers: {
                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                         }
                                     });

      function loadorder() {
           $.ajax({
                method: "GET",
                url: "/load-order-data",
                success: function (response) {
                    $('.order-count').html('');
                     $('.order-count').html(response.count);
                  // console.log(response.counts);
                }
            });
             }       
})