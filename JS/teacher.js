$(document).ready(function() {

    $('#btn-timkiem').click(function() {
        const NamHoc = $('#NamHoc :selected').text();
        const TenLop = $('#TenLop :selected').text();
        const TenMH = $('#TenMH :selected').text();
<<<<<<< HEAD
        console.log('Năm học: ', NamHoc, 'Lớp: ', TenLop, 'Môn: ', TenMH);

        if (!NamHoc || !TenLop || !TenMH || NamHoc == "---" || TenLop == "---" || !TenMH == "---") {
            $('#error-teacher').text('Chưa nhập đầy đủ thông tin');
            $('#error-teacher').addClass("has-error")
        }
        if (NamHoc && TenLop && TenMH) {
=======
        console.log('Năm học: ',NamHoc, 'Lớp: ', TenLop, 'Môn: ',TenMH);
        
        if (!NamHoc || !TenLop || !TenMH || NamHoc=="---" || TenLop=="---" || !TenMH=="---" ) {
            $('#error-teacher').text('Chưa nhập đầy đủ thông tin');
            $('#error-teacher').addClass("has-error")
        }
        if (NamHoc && TenLop && TenMH){
>>>>>>> 5ba8143877d5a7c43a860b5226645bc551969479
            $.ajax({
                type: "GET",
                url: "teacher-process.php",
                data: {
                    NamHoc,
                    TenLop,
                    TenMH
                },
                dataType: "JSON",
<<<<<<< HEAD
                success: function(res) {
=======
                success:function(res){   
>>>>>>> 5ba8143877d5a7c43a860b5226645bc551969479
                    $("#data-teacher").html(res.output);
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
