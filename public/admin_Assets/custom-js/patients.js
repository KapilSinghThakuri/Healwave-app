
$(document).ready(function () {

    $('#tableSearchInput').on("keyup", function () {
        var searchedInput = $(this).val();

        $.ajax({
            url: "/Healwave/admin/patient/search",
            method: 'GET',
            data: { 'searchedInput': searchedInput },
            success: function (response) {
                // console.log(response.data);
                var searchedPatients = response.data;
                var tbody = $('#patientsTable tbody');
                tbody.empty();
                if (response.data === " " || response.data.length === 0) {
                    $('#patientsTable tbody').html(`
                        <tr>
                            <td colspan="6" class="text-center alert alert-info">
                                <strong>No records found!</strong>
                                <br>Try adjusting your search or using different keywords.
                            </td>
                        </tr>
                    `);
                } else {
                    $.each(searchedPatients, function (index, patient) {
                        var dob = new Date(patient.date_of_birth);
                        var dobYear = dob.getFullYear();
                        var currentDate = new Date();
                        var currentYear = currentDate.getFullYear();

                        var patientAge = currentYear - dobYear;
                        var row =
                            '<tr>' +
                            '<td>' + (index + 1) + '</td>' +
                            '<td>' + patient.fullname + '</td>' +
                            '<td>' + patientAge + ' years' + '</td>' +
                            '<td>' + patient.permanent_address + '</td>' +
                            '<td>' + patient.phone + '</td>' +
                            '<td>' + patient.email + '</td>' +
                            '</tr>';
                        tbody.append(row);
                    });
                }
            },
            error: function (error) {
                console.log(error);
            }
        })
    })
})