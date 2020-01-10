<?php
include("headerAD.php");
?>

<div class="right_col" role="main">
    <div style="padding: 50px;">
        <div class="x_title">
            <p class="card-category">Create a new post</p>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-12">
            <form action="" method="post" class="form-horizontal form-label-left">
                <div class="form-group">
                    <label class="col-form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" />
                    <div class="invalid-feedback" id="titleErr" style="font-size: 12px">Title is required.</div>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Catetory</label>
                    <input type="text" class="form-control" name="Catetory" id="category" />
                    <div class="invalid-feedback" id="titleErr" style="font-size: 12px">Catetory is required.</div>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Description</label>
                    <input type="text" name="description" id="description" class="form-control" />
                    <div class="invalid-feedback" style="font-size: 12px">Description is required.</div>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Content</label>
                    <textarea rows="10" cols="150" name="contentPost" id="contentPost" class="form-control" placeholder="Here can be your description" value=""></textarea>
                    <div class="invalid-feedback" style="font-size: 12px">Content is required.</div>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Author</label>
                    <input type="text" class="form-control" name="author" id="author" />
                    <div class="invalid-feedback" style="font-size: 12px">Author is required.</div>
                </div>
                <div class="card-bottom">
                    <input type="button" class="btn btn-info d-block ml-auto" id="newPostBtn" name="newPostBtn" value="ADD NEW" />
                </div>
            </form>
        </div>
    </div>
</div>


<?php
include("footerAD.php");
?>