$(document).ready(function() {
    // Triggering tabs activity
    $('.tabs .tab-links li').on('click', function (e) {
        e.preventDefault();
        var $activePartnersTab = $('.active-partners'),
            $passivePartnersTab = $('.passive-partners');
        $(this).addClass('active').siblings('li').removeClass('active');
        if($(this).attr('data-partner') === 'passive'){
            $passivePartnersTab.css('display', 'block');
            $activePartnersTab.css('display', 'none');
        }
        else{
            $passivePartnersTab.css('display', 'none');
            $activePartnersTab.css('display', 'block');
        }
    });

    // Datatables
    $.each($('.table'), function () {
        $(this).DataTable({
            "paging": false
        });
    });

    // Options list activation
    $('#activePartners tbody').on('click', '.options-list-container', function () {
        $(this).html('<ul>' +
            '<li><a href="#">campaigns</a></li>' +
            '<li><a href="#">edit</a></li>' +
            '<li><a href="#">view</a></li>' +
            '<li><a href="#">placements</a></li>' +
            '<li><a href="#">application</a></li>' +
            '<li><a href="#">delete</a></li><' +
            '/ul>')
            .addClass('oppened');
        $(this).parents('tr').siblings('tr').find('.options-list-container').removeClass('oppened')
            .html('<p>click for options</p>');
    });
} );