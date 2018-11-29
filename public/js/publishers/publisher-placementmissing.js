$(document).ready(function () {

    // Date Picker
    $('#placementMissingPicker').daterangepicker({
        "startDate": "01/19/2018",
        "endDate": "01/25/2018"
    }, function (start, end, label) {
        console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
    });

    // Placement Stats Table
    var placementMissingTable = $('#placementMissingTable').DataTable();
});