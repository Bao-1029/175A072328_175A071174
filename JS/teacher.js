$(document).ready(function() {

    $('#btn-timkiem').click(function() {
        const NamHoc = $('#NamHoc :selected').text();
        const TenLop = $('#TenLop :selected').text();
        const TenMH = $('#TenMH :selected').text();
        console.log('Năm học: ', NamHoc, 'Lớp: ', TenLop, 'Môn: ', TenMH);

        if (!NamHoc || !TenLop || !TenMH || NamHoc == "---" || TenLop == "---" || !TenMH == "---") {
            $('#error-teacher').text('Chưa nhập đầy đủ thông tin');
            $('#error-teacher').addClass("has-error")
        }
        if (NamHoc && TenLop && TenMH) {
            $.ajax({
                type: "GET",
                url: "teacher-process.php",
                data: {
                    NamHoc,
                    TenLop,
                    TenMH
                },
                dataType: "JSON",
                success: function(res) {
                    $("#data-teacher").html(res.output);
                }
            })
        }
    })
})