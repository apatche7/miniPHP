
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Profile</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
			   <div class="col-sm-2 col-lg-2"></div>
               <div class="col-sm-8 col-lg-8">
					<div class="panel panel-default">
                        <div class="panel-heading">
                           <i class="fa fa-pencil"></i> Update Profile
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="#" id="form-profile-info" method="post" >
										<div class="form-group">
											<div class="block-section text-center">
												<img src="<?= $info["image"];?>" class="img-circle profile-pic-lg">
												<h3><strong><?= $info["name"];?></strong></h3>
												<h4>
													<span class="label label-primary"><?= ucfirst($info["role"]);?></span>
												</h4>
											</div>
										</div>
                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input dir="auto" type="text" name="name" value="<?= $info["name"];?>" class="form-control" required maxlength="30" placeholder="Your Name..">
											<p class="help-block"><em>The maximum number of characters allowed is <strong>30</strong></em></p>
                                        </div>
										<div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                            <p class="help-block">Please enter a complex password</p>
                                        </div>
										<div class="form-group">
                                            <label>Email</label>
                                             <input type="email" name="email" value="<?= $this->encodeHTML($info["email"]); ?>" class="form-control" maxlength="50" placeholder="Your Email..">
                                        </div>
										<div class="form-group form-actions text-right">
											<button type="submit" name="submit" value="submit" class="btn btn-md btn-primary">
												<i class="fa fa-check"></i> Update
											</button>
										</div>
                                    </form>
									<!-- END Update Profile -->
									
									<hr>
									<!-- Upload Profile Picture -->
                                    <form action="#" id="form-profile-picture" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label>Profile Picture</label>
											<input type="file" name="file" required>
											<p class="help-block"><em> Only JPEG, JPG, PNG & GIF Files</em></p>
											<p class="help-block"><em> Max File Size: 2MB</em></p>
										</div>
										<!-- Hidden By default-->
										<div class="progress progress-striped active display-none">
											<div class="progress-bar progress-bar-success" style="width: 0%"></div>
										</div>
										<div class="form-group form-actions text-right">
											<button type="submit" value="submit" class="btn btn-md btn-primary">
												<i class="fa fa-upload"></i> Upload
											</button>
										</div>
									</form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
				</div>
			<!-- END Profile Block -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
