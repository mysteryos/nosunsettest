/*
 * Name: Car.Js
 * Description: Js file for landing search page of cars
 */

//Cache a few jQuery objects to speed things up
var $btn_submit = $('#btn_submit');
var $result = $('#result');

//When form submits
$('#car_form').on('submit',function(event){
    //Prevent default action
    event.preventDefault();
    //Validate registration value
    if($.trim($('#registration').val()) === "")
    {
        alert('Please input a registration number');
    }

    //Prevent Double Submit by User
    $btn_submit.attr('disabled','disabled');
    $result.slideUp('300');

    //Send asynchronous ajax request to server
    $.ajax({
        type:'GET',
        url: $(this).attr('action'),
        data: $(this).serialize(),
        success:function(html)
        {
            //Display html
            $result.slideUp(300,function(){
                $result.empty().append(html).slideDown(300,function(){
                    $btn_submit.removeAttr('disabled');
                });
            });
        },
        error:function(xhr)
        {
            var errorJson = $.parseJSON(xhr.responseText);
            alert(errorJson.msg);
            $btn_submit.removeAttr('disabled');
        }
    })
});


