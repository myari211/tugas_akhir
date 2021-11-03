$(document).ready(function () {
    $('#provinces').on('change', function () {
        var provinceID = $(this).val();
        if(provinceID) {
            $.ajax({
                url: '/chain-city/'+provinceID,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#city').empty();
                    $.each(data, function(key, value) {
                        console.log(key, value);
                        $('#city').append('<option value="' + key + '">' + value + '</option>');
                    });
                },
                error: function(data) {
                    console.log(data);
                }
            });
        }
        else {
            ('#city').empty();
        }
    });
});