$(document).ready(function() {

    $('#btn-register').click(function() {
        const email = $('#email').val();
        const password = $('#password').val();
        const password2 = $('#password2').val();
        if (!email || !password || !password2) {
            $('#error-register').text('Chưa nhập đầy đủ thông tin');
        }
        if (password != password2) {
            $('#error-register').text('Mật khẩu không trùng khớp');
        }

        if (email && password && password2 && password == password2) {
            $.ajax({
                type: "POST",
                url: "register-process.php",
                data: {
                    email,
                    password,
                    password2
                },
                dataType: "JSON",
                success: function(response) {
                    if (response.trangthai) {
                        // $('#error-register').text("Đăng ký thành công")
                        window.location.href = "login.php";
                    } else {

                        if (response.code == 1) {
                            $('#error-register').text("email đã tồn tại")

                        } else {
                            $('#error-register').text("sql lỗi")


                        }
                    }
                }
            });
        }
    })





})