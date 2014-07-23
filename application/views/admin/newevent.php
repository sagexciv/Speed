		<!--breadcrumbs start-->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-sm-4">
						<h1>Admin</h1>
					</div>
					<div class="col-lg-8 col-sm-8">
						<ol class="breadcrumb pull-right">
							<li>
								Welcome, Username
							</li>
                         <li>|</li>
                         <li><a href="">Sign Out</a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!--breadcrumbs end-->

		<div class="row paddedrow">
			<div class="col-md-3">

				<section class="panel">
					<header class="panel-heading">
						<a href="admin.html">DASHBOARD</a>
					</header>
					<div class="list-group">
						<a class="list-group-item " href="news"> News </a>
						<a class="list-group-item active" >Events</a>
						<a class="list-group-item" href="changepassword">Change Password</a>
						<a class="list-group-item" href="">Sign Out</a>
					</div>
				</section>
			</div>

			<div class="col-md-9 newsboxx2">
				<h3 class="nomargint">Add Event</h3>
				<form  class="">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Enter Event Title Here...">
					</div>

					<!--<div class="form-group">

					<textarea class="form-control" rows="10"> Enter Event Description Here...</textarea>
							
					</div> -->
					
					<div class="form-group">
							<ul class="wysihtml5-toolbar" style="">
								<li class="dropdown">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#"> <i class="icon-font"></i>&nbsp;<span class="current-font">Normal text</span>&nbsp; <i class="icon-angle-down"></i></a>
									<ul class="dropdown-menu">
										<li>
											<a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="div" tabindex="-1" href="javascript:;" unselectable="on">Normal text</a>
										</li>
										<li>
											<a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" tabindex="-1" href="javascript:;" unselectable="on">Heading 1</a>
										</li>
										<li>
											<a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" tabindex="-1" href="javascript:;" unselectable="on">Heading 2</a>
										</li>
										<li>
											<a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h3" tabindex="-1" href="javascript:;" unselectable="on">Heading 3</a>
										</li>
										<li>
											<a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h4" href="javascript:;" unselectable="on">Heading 4</a>
										</li>
										<li>
											<a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h5" href="javascript:;" unselectable="on">Heading 5</a>
										</li>
										<li>
											<a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h6" href="javascript:;" unselectable="on">Heading 6</a>
										</li>
									</ul>
								</li>
								<li>
									<div class="btn-group">
										<a class="btn btn-default" data-wysihtml5-command="bold" title="CTRL+B" tabindex="-1" href="javascript:;" unselectable="on">Bold</a>
										<a class="btn btn-default" data-wysihtml5-command="italic" title="CTRL+I" tabindex="-1" href="javascript:;" unselectable="on">Italic</a>
										<a class="btn btn-default" data-wysihtml5-command="underline" title="CTRL+U" tabindex="-1" href="javascript:;" unselectable="on">Underline</a>
									</div>
								</li>
								<li>
									<div class="btn-group">
										<a class="btn btn-default" data-wysihtml5-command="insertUnorderedList" title="Unordered list" tabindex="-1" href="javascript:;" unselectable="on"> <i class="icon-list"></i></a><a class="btn btn-default" data-wysihtml5-command="insertOrderedList" title="Ordered list" tabindex="-1" href="javascript:;" unselectable="on"> <i class="icon-th-list"></i></a><a class="btn btn-default" data-wysihtml5-command="Outdent" title="Outdent" tabindex="-1" href="javascript:;" unselectable="on"> <i class="icon-indent-right"></i></a>
										<a class="btn btn-default" data-wysihtml5-command="Indent" title="Indent" tabindex="-1" href="javascript:;" unselectable="on"> <i class="icon-indent-left"></i></a>
									</div>
								</li>
								<li>
									<div class="bootstrap-wysihtml5-insert-link-modal modal fade">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<a class="close" data-dismiss="modal"></a>
													<h4 class="modal-title">Insert link</h4>
												</div>
												<div class="modal-body">
													<input type="text" value="http://" class="bootstrap-wysihtml5-insert-link-url1 form-control large">
													<label style="margin-top:5px;">
														<input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="">
														Open link in new window</label>
												</div>
												<div class="modal-footer">
													<a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
													<a href="#" class="btn btn-primary" data-dismiss="modal">Insert link</a>
												</div>
											</div>
										</div>
									</div>
									<a class="btn btn-default" data-wysihtml5-command="createLink" title="Insert link" tabindex="-1" href="javascript:;" unselectable="on"> <i class="icon-share"> </i> </a>
								</li>
								<li>
									<div class="bootstrap-wysihtml5-insert-image-modal modal fade">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<a class="close" data-dismiss="modal"></a>
													<h4 class="modal-title">Insert image</h4>
												</div>
												<div class="modal-body">
													<input type="text" value="http://" class="bootstrap-wysihtml5-insert-image-url form-control large">
												</div>
												<div class="modal-footer">
													<a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
													<a href="#" class="btn btn-primary" data-dismiss="modal">Insert image</a>
												</div>
											</div>
										</div>
									</div>
									<a class="btn btn-default" data-wysihtml5-command="insertImage" title="Insert image" tabindex="-1" href="javascript:;" unselectable="on"> <i class="icon-picture"></i> </a>
								</li>
							</ul>
							<textarea class="wysihtml5 form-control" rows="10" style="display: none;"></textarea>
							<input type="hidden" name="_wysihtml5_mode" value="1">
							<iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style="background-color: rgb(255, 255, 255); border-collapse: separate; border: 1px solid rgb(226, 226, 228); clear: none; display: block; float: none; margin: 0px; outline: rgb(194, 194, 194) none 0px; outline-offset: 0px; padding: 6px 12px; position: static; top: auto; left: auto; right: auto; bottom: auto; z-index: auto; vertical-align: middle; text-align: start; -webkit-box-shadow: none; box-shadow: none; border-top-right-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px; border-top-left-radius: 4px; width: 814.5px; height: 214px;"></iframe>
						
					</div>
					
					<div class="form-group">
						<div class="row">
							
						<div class="col-md-3">
							<p align="right">Pick A Date Range</p>
						</div>
						
						<div class="col-md-6">

						<div class="input-group input-large" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                                          <input type="text" class="form-control dpd1" name="from">
                                          <span class="input-group-addon">To</span>
                                          <input type="text" class="form-control dpd2" name="to">
                          </div> 
                         </div>
                                      
                       <div class="col-md-3"></div>               
							
					</div>
					</div>

<hr class="hrmargin"/>
					<div class="row">
						<div class="col-md-9"></div>
						<div class="col-md-3">
					<div class="form-group">
						
						<button class="btn btn-success btn-lg pull-right">Publish Event</button>
					</div>	
					</div>
					</div>

				</form>
			</div>
			</footer>
			<!--footer end-->

			<!-- js placed at the end of the document so the pages load faster -->
			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
			<script src="js/jquery.scrollTo.min.js"></script>
			<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
			<script src="js/respond.min.js" ></script>

			<!--this page plugins-->

			
			<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
			<script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
			<script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
			<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
			<script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
			<script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
			<script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
			<script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script>
			<script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>
			<script src="assets/jquery-knob/js/jquery.knob.js"></script>

			<!--common script for all pages-->
			<script src="js/common-scripts.js"></script>
			<!--this page  script only-->
			<script src="js/advanced-form-components.js"></script>

	<script>

      //knob
      $(".knob").knob();

  </script>
	
	
	</body>
</html>
