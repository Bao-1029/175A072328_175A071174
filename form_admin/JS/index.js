$(document).ready(function() {



    $("#newPostBtn").click(function() {
        console.log("YYYYYYYY");
        const title = $("#title").val();
        const description = $("#description").val();
        const category = $("#category").val();
        const content = CKEDITOR.instances['contentPost'].getData();
        const author = $("#author").val();




        if (!title.length) {
            $("#title").addClass("is-invalid");
        } else {
            $("#title").removeClass("is-invalid");
        }
        if (!category.length) {
            $("#category").addClass("is-invalid");
        } else {
            $("#category").removeClass("is-invalid");
        }
        if (!content.length) {
            $("#contentPost").addClass("is-invalid");
        } else {
            $("#contentPost").removeClass("is-invalid");
        }
        if (!author.length) {
            $("#author").addClass("is-invalid");
        } else {
            $("#author").removeClass("is-invalid");
        }
        if (!description.length) {
            $("#description").addClass("is-invalid");
        } else {
            $("#description").removeClass("is-invalid");
        }

        if (category.length && title.length && description.length && content.length && author.length) {
            $.ajax({
                type: "POST",
                url: "ProPost.php",
                data: {
                    category: category,
                    title: title,
                    description: description,
                    content: content,
                    author: author
                },
                dataType: "json",
                //hàm callback sau khi xử lý xong url
                success: function(res) {
                    if (res.status) {
                        $('.notify-success').text("Thêm thành công.");
                        $('input[type="text"], #category').val('');
                        CKEDITOR.instances['contentPost'].setData('');
                        alert('Thêm thành công')
                    } else {

                        alert('Thêm không thành công')

                    }
                }
            })
        }
    })

})