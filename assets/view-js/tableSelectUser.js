$('#tblApplicants tbody tr').click(function () {
    $('#txtId').val($(this).children('td:nth-child(1)').text());
    $('#txtName').val($(this).children('td:nth-child(2)').text());
    $('#txtMarks').val($(this).children('td:nth-child(4)').text().split(" / ")[0]);
    $('#txtTotal').val($(this).children('td:nth-child(4)').text());
    $('#txtAvg').val(parseInt($(this).children('td:nth-child(4)').text()) / 4);
})

$('#txtMarks').bind('keyup mouseup', function () {
    for (var i = 0; i < $("#tblApplicants tr").length - 2; i++) {
        if ($('#tblApplicants tbody tr:nth-child(' + (i + 1) + ')').children('td:nth-child(1)').text() == $('#txtId').val()) {
            $('#tblApplicants tbody tr:nth-child(' + (i + 1) + ')').children('td:nth-child(4)').text($('#txtMarks').val() + ' / 100');
        }
    }
})