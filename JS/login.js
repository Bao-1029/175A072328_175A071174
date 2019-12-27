$(document).ready(function() {

    $('#btn-login').click(function() {
        const email = $('#email-login').val();
        const password = $('#password-login').val();
        if (!email || !password) {
            $('#error-login').text('Chưa nhập đầy đủ thông tin');
            $('#error-login').addClass("has-error")
        }
        if (email && password){
            $.ajax({
                type:'post',
                url:'login-process.php',
                data:{
                    email,
                    password
                },
                success:function(data){
                    console.log(data);
                    if(data=='OK'){
                       window.location.href='index.php';
                    }else{
                        if(data=='No OK'){
                            $('#error-login').text("Nhập sai mật khẩu!!!")
                            $('#error-login').addClass("has-error")
                        }
                    }
                  
                }
            })
        }
        })
    })
