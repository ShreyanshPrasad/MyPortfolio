$(document).ready(function(){

    function ValidateEmail(mail){
        if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail))
            return true;
        return false;
    }

    $('#subscribeBtn').on('click', (e) =>{

        const emailId = $('#email').val().trim();

        if(ValidateEmail(emailId)){
            $('#email').val('');

            $.ajax({
                type:'POST',
                url:'subscribe.php',
                data:'FrmSubmit=1&emailId='+emailId,
                beforeSend: function () {
                    $('.submitBtn').attr("disabled","disabled");
                    $('.submitBtn').css('cursor', 'no-drop');
                },
                success:function(msg){
                    //console.log(msg);
                    if(msg == 'ok'){
                        $('.statusMsg').html('<span style="color:green;">Subscribed successfully..!!</p>');
                        $('#subscribeBtn').removeAttr("disabled");
                        $('#subscribeBtn').css('cursor', 'default');
                    }
                    else if(msg == 'okL'){
                        $('.statusMsg').html('<span style="color:green;">Subscribed successfully Local!!</p>');
                        $('#subscribeBtn').removeAttr("disabled");
                        $('#subscribeBtn').css('cursor', 'default');
                    }
                    else if(msg == 'fail'){
                        $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                        $('#subscribeBtn').removeAttr("disabled");
                        $('#subscribeBtn').css('cursor', 'default');
                    }
                    else if(msg == 'failL'){
                        $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again Local.</span>');
                        $('#subscribeBtn').removeAttr("disabled");
                        $('#subscribeBtn').css('cursor', 'default');
                    }
                    else if(msg == 'UBMNS'){
                        $('.statusMsg').html('<span style="color:red;">Subscribed but mail not sent</span>');
                        $('#subscribeBtn').removeAttr("disabled");
                        $('#subscribeBtn').css('cursor', 'default');
                    }
                },
                error:function(data) {
                    console.log(data);
                }
            });

        }else{
            $('.statusMsg').html('<span style="color:red;">Email ID not valid</span>');
        }

        

    });

});