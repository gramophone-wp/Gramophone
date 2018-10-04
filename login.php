
		<div class="container">
		    <div class="row">
		    	<div class="col-md-4"></div>
		        <div class="col-md-4">
		        	<div id="notifications">
						<?php echo $this->session->flashdata('msg'); ?>
					</div> 
		            <div id="box" class="panel panel-default" style="margin-top: 120px;">
		                <div class="panel-heading">
		                    <span class="glyphicon glyphicon-lock"></span> Login
		                </div>
		                <form method="post" id="form-login" action="<?php echo base_url(); ?>Login/ceklogin">
		                	<div class="panel-body">
			                    <div class="form-group">
			                        <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
			                        <div class="col-sm-9">
			                            <input type="text" class="form-control" id="user" name="user" placeholder="Username" value="<?php echo $this->session->userdata('username'); ?>" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
			                        </div>
			                    </div>
			                    <div class="form-group">
			                        <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
			                        <div class="col-sm-9">
			                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
			                        </div>
			                    </div>
			                    <div class="form-group">
			                        <div class="col-sm-offset-3 col-sm-9">
			                            <div class="checkbox">
			                                <label>
			                                    <input type="checkbox"/>
			                                    Remember me
			                                </label>
			                            </div>
			                        </div>
			                    </div>
			                    <div class="form-group last">
			                        <div class="col-sm-offset-3 col-sm-9">
			                            <button type="submit" class="btn btn-primary btn-sm btn-login" name="login" id="btn-login">
			                                Sign in</button>
			                            <button type="reset" class="btn btn-default btn-sm">
			                                Reset</button>
			                        </div>
			                    </div>
		               		</div>
	               		</form>
	               		<div class="panel-footer">
                    		<span class="link">Belum Registrasi? <a href="<?php echo base_url(); ?>register">Register Disini</a></span>
                    		<span class="link_1"><a href="home">Kembali</a></span>
                    	</div>
		            </div>

		        </div>
		        <div class="col-md-4"></div>
		    </div>
		</div>



		