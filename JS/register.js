$(document).ready(function() {

    $('#btn-register').click(function() {
        const email = $('#email').val();
        const password = $('#password').val();
        const password2 = $('#password2').val();
        const username = $('#username').val();
        if (!username || !email || !password || !password2) {
            $('#error-register').text('Chưa nhập đầy đủ thông tin');
            $('#error-register').addClass("has-error")

        }
        if (password != password2) {
            $('#error-register').text('Mật khẩu không trùng khớp');
            $('#error-register').addClass("has-error")
        }

        if (username && email && password && password2 && password == password2) {
            $.ajax({
                type: "POST",
                url: "register-process.php",
                data: {
                    email,
                    password,
                    password2,
                    username
                },
                dataType: "JSON",
                success: function(response) {
                    if (response.trangthai) {
                        // $('#error-register').text("Đăng ký thành công")
                        window.location.href = "login.php";
                    } else {
                        if (response.code == 1) {
                            $('#error-register').text("Email đã tồn tại")
                            $('#error-register').addClass("has-error")
                        } else {
                            $('#error-register').text("sql lỗi")
                            $('#error-register').addClass("has-error")
                        }
                    }
                }
            });
        }
    })





})