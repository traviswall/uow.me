$(document).ready(function() {

    baseUrl = "http://www.uow.edu.au/student/dates/";
    $.ajax({
        url: baseUrl,
        type: "get",
        dataType: "",
        success: function(data) {

            // load the response into jquery element
            // form tags are needed to get the entire html,head and body
            $foop = $('<form>' + data.responseText + '</form>');
            //console.log(data.responseText);

            // find links
            $.each($foop.find('#main-content'), function(idx, item) {
                lnk = $(item);
                $(lnk).appendTo('#dates');
            });
        },
        error: function(status) {
            //console.log("request error:"+url);
        }
    });
});