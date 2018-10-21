$('#tblApplicants').click(function () {
    $('#txtName').val($('#tblApplicants tbody tr td:nth-child(2)').text());
    $('#txtMarks').val($('#tblApplicants tbody tr td:nth-child(4)').text().split(" / ")[0]);
    $('#txtTotal').val($('#tblApplicants tbody tr td:nth-child(4)').text());
    $('#txtAvg').val(parseInt($('#tblApplicants tbody tr td:nth-child(4)').text()) / 4);
})

$('#txtMarks').bind('keyup mouseup', function () {
    $('#tblApplicants tbody tr td:nth-child(4)').text($('#txtMarks').val() + ' / 100');
})