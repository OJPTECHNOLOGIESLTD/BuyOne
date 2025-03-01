<?php include_once('includes/header.php'); ?>
<script src="assets/plugins/ckeditor/ckeditor.js"></script>

<?php

if (isset($_POST["submit"])) {
    $type = clean($_POST["type"]);
    if ($type == "url") {
        $url = clean($_POST["url"]);
        $urlDark = clean($_POST["url_dark"]);
        $content = "";
    } else {
        $url = clean("");
        $urlDark = clean("");
        $content = $_POST["content"];
    }

    $name = clean($_POST["name"]);
    $target = clean($_POST["target"]);

    $image = time() . "_" . $_FILES["image"]["name"];
    $imageTmp = $_FILES["image"]["tmp_name"];
    $filePath = "upload/" . $image;
    copy($imageTmp, $filePath);

    $data = [
        "name" => $name,
        "image" => clean($image),
        "type" => $type,
        "url" => $url,
        "url_dark" => $urlDark,
        "content" => $content,
        "target" => $target,
    ];

    $qry = insert("tbl_menu", $data);

    $_SESSION["msg"] = "Menu added successfully...";
    header("Location: navigation-add.php");
    exit();
}

?>

<script type="text/javascript">

	$(document).ready(function(e) {

		$("#type").change(function() {
			var type = $("#type").val();

			if (type == "url") {
				$("#url_type").show();
				$("#content_type").hide();
			}

			if (type == "content") {
				$("#url_type").hide();
				$("#content_type").show();
			}                    
		});

		$( window ).load(function() {
			var type=$("#type").val();

			if (type == "url")  {
				$("#url_type").show();
				$("#content_type").hide();
			}

			if (type == "content") {
				$("#url_type").hide();
				$("#content_type").show();
			}

		});

	});

</script>

<section class="content">

	<ol class="breadcrumb">
		<li><a href="dashboard.php">Dashboard</a></li>
		<li><a href="navigation.php">Navigation</a></li>
		<li class="active">Add</a></li>
	</ol>

	<div class="container-fluid">

		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<form id="form_validation" method="post" enctype="multipart/form-data">
					<div class="card corner-radius">
						<div class="header">
							<h2>ADD NAVIGATION</h2>
						</div>
						<div class="body">

							<?php if (isset($_SESSION["msg"])) { ?>
							<div class='alert alert-info alert-dismissible corner-radius' role='alert'>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>&nbsp;&nbsp;</button>
								<?php echo $_SESSION["msg"]; ?>
							</div>
							<?php unset($_SESSION["msg"]);} ?>                            

							<div class="row clearfix">

								<div class="col-md-12">
									<div class="form-group">
										<div class="form-line">
											<div class="font-12">Name</div>
											<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
										</div>
									</div>

									<div style="width: 50%;">
										<div class="form-group">
											<div class="font-12 ex1">Image ( JPG, JPEG, PNG)</div>
											<input type="file" name="image" id="image" class="dropify-image" data-max-file-size="3M" data-allowed-file-extensions="jpg jpeg png" required/>
										</div>
									</div>

									<div class="form-group">
                                        <div class="font-12">Type</div>
                                        <select class="form-control show-tick" name="type" id="type">
                                                <option value="url">WEB URL</option>
                                                <option value="content">HTML TAG</option>
                                        </select>
                                    </div>

                                    <div id="url_type">
                                    	<div class="form-group">
											<div class="form-line">
												<div class="font-12">Url</div>
												<input type="text" class="form-control" name="url" id="url" placeholder="Url" required>
											</div>
										</div>

										<div class="form-group">
											<div class="form-line">
												<div class="font-12">Url Dark (Optional)</div>
												<input type="text" class="form-control" name="url_dark" id="url_dark" placeholder="Url Dark">
											</div>
										</div>

										<div class="form-group">
	                                        <div class="font-12">Target</div>
	                                        <select class="form-control show-tick" name="target" id="target">
	                                                <option value="internal">Internal</option>
	                                                <option value="external">External</option>
	                                        </select>
	                                    </div>

                                    </div>

                                    <div id="content_type">
	                                    <div class="form-group">
	                                        <div class="form-line">
	                                            <div class="font-12 ex1" style="margin-bottom: 6px;">Html Tag</div>
	                                            <textarea class="form-control" name="content" id="content" class="form-control" cols="60" rows="10" required></textarea>

	                                            <?php if (
                                                 $ENABLE_RTL_MODE == "true"
                                             ) { ?>
	                                            <script>                             
	                                                CKEDITOR.replace('content');
	                                                CKEDITOR.config.contentsLangDirection = 'rtl';
	                                            </script>
	                                            <?php } else { ?>
	                                            <script>                             
	                                                CKEDITOR.replace('content');
	                                                CKEDITOR.config.height = 300; 
	                                            </script>
	                                            <?php } ?>

	                                        </div>
	                                    </div>                                    	
                                    </div>

									<button class="button button-rounded waves-effect waves-float pull-right" type="submit" name="submit">SUBMIT</button>
									
									</div>

								</div>

							</div>
						</div>
					</div>
				</form>

			</div>
		</div>

	</div>

</section>

<?php include_once('includes/footer.php'); ?>