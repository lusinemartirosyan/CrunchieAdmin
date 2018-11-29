$(document).ready(function() {
    $('#advertiserList').DataTable({
        "paging": false
    });

    function FilterAdvertiser(id, type)
    {
        console.log(id);
        var data;
        if(type == 'quality')
        {
            data = id;
        }
        else if(type == 'manager')
        {
            data = id;
        }
        // $.ajax({
        //     type: 'get',
        //     url: 'advertiser',
        //     data: data,
        //     // beforeSend: function () {
        //     //     $('.client-filter').append('<div class="loader"></div>');
        //     // },
        //     // complete: function () {
        //     //     $('.loader').remove();
        //     // },
        //     success: function (data) {
        //        console.log(response);
        //     }
        //
        // });
    }
    $('.crunchie-btn').click(function(){

        //    var filter = $(this).val();
        //    console.log(filter);

    });

});

