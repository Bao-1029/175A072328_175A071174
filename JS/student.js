$(document).ready(function() {

    $('#btn-student').click(function() {
        const Masv = $('#Masv').val();
        const SCMT = $('#SCMT').val();
        if (!Masv || !SCMT) {
            $('#error-student').text('Chưa nhập đầy đủ thông tin');
            $('#error-student').addClass("has-error")
        }
        if (Masv && SCMT){
            $.ajax({
                type: "GET",
                url: "student-process.php",
                data: {
                    Masv,
                    SCMT
                },
                dataType: "JSON",
                success:function(res){
                    console.log(res);
                    if(res.status) {
                        $("#dataStudent").html(res.output);
                        $("#name-student").text(res.tensv)
                    } else {
                        alert('Sinh viên không tồn tại')
                    }
                }
            })
        }
        }
        )
    })
