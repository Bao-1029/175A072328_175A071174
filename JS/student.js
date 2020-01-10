$(document).ready(function() {

    $('#btn-student').click(function() {
        const Masv = $('#Masv').val();
        const SCMT = $('#SCMT').val();
        if (!Masv || !SCMT) {
            $('#error-student').text('Chưa nhập đầy đủ thông tin');
            $('#error-student').addClass("has-error")
        }
<<<<<<< HEAD
        if (Masv && SCMT) {
=======
        if (Masv && SCMT){
>>>>>>> 5ba8143877d5a7c43a860b5226645bc551969479
            $.ajax({
                type: "GET",
                url: "student-process.php",
                data: {
                    Masv,
                    SCMT
                },
                dataType: "JSON",
<<<<<<< HEAD
                success: function(res) {
                    console.log(res);
                    if (res.status) {
=======
                success:function(res){
                    console.log(res);
                    if(res.status) {
>>>>>>> 5ba8143877d5a7c43a860b5226645bc551969479
                        $("#dataStudent").html(res.output);
                        $("#name-student").text(res.tensv)
                    } else {
                        alert('Sinh viên không tồn tại')
                    }
                }
            })
        }
<<<<<<< HEAD
    })
})
=======
        }
        )
    })
>>>>>>> 5ba8143877d5a7c43a860b5226645bc551969479
