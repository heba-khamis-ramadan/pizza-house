import $ from 'jquery';

$(document).ready(function() {
    $('#status-update-form').submit(function(e) {
        e.preventDefault();
        const token = $('input[name="_token"]').val();
        const status = $('#status').val();
        const url = $(this).attr('action');
        $.ajax({
            url: url,
            type: 'PATCH',
            data: {
                _token: token,
                status: status
            }
        }).done(function(response) {
            $('.status').text('Status - ' + status);
            console.log(response.message);
        }).fail(function(xhr) {
                console.log(xhr.responseText);
                console.log(xhr.status);  
        });
    });
});
