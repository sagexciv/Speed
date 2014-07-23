    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                 <h1>Admin</h1>  
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                         <li>Welcome, Username</li>
                         
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
                              <a href="dashboard">DASHBOARD</a>
                          </header>
                          <div class="list-group">
                              <a class="list-group-item " href="news">News</a>
                              <a class="list-group-item" href="events">Events</a>
                              <a class="list-group-item active" href="changepassword">Change Password</a>
                              <a class="list-group-item" href="">Sign Out</a>
                          </div>
                      </section>
    	</div>
    	
    	<div class="col-md-9 newsboxx2">
    		
                <div class="row paddedrow2">
                	
    	<h3 class="nomargint">Change Password</h3>
                    <hr class="hrmargin2"/><br />
                    
    		<div class="col-md-3"></div>
    		
    		<div class="col-md-6">
    			
    		<form method="post" action="">
                   
                   <div class="form-group">
                   <input type="password" name="oldpassword" class="form-control" placeholder="Old Password">
                   </div>
                   
                   <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="New Password">
                   </div>
                   
                   <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Retype Password">
                   </div>
                   
                   <div class="form-group pull-right">
                    	<button class="btn btn-primary btn-md ">Update</button>
                    </div>
                    
                    
                </form>	
    			
    		</div>
    		
    		<div class="col-md-3"></div>
                 
                </div> 
               
                
                </div>  
        </div>
        
    <!--container end-->

     <!--footer start-->
     <footer class="footer">
         <div class="container">
             <div class="row">
                 <div class="col-lg-3 col-sm-3">
                     <h1>contact info</h1>
                     <address>
                         <p>Address: No.28-63877 street</p>
                         <p>lorem ipsum city, Country</p>

                         <p>Phone : (123) 456-7890</p>
                         <p>Fax : (123) 456-7890</p>
                         <p>Email : <a href="javascript:;">support@vectorlab.com</a></p>
                     </address>
                 </div>
                 <div class="col-lg-5 col-sm-5">
                     <h1>latest tweet</h1>
                     <div class="tweet-box">
                         <i class="icon-twitter"></i>
                         <em>Please follow <a href="javascript:;">@nettus</a> for all future updates of us! <a href="javascript:;">twitter.com/vectorlab</a></em>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-3 col-lg-offset-1">
                     <h1>stay connected</h1>
                     <ul class="social-link-footer list-unstyled">
                         <li><a href="#"><i class="icon-facebook"></i></a></li>
                         <li><a href="#"><i class="icon-google-plus"></i></a></li>
                         <li><a href="#"><i class="icon-dribbble"></i></a></li>
                         <li><a href="#"><i class="icon-linkedin"></i></a></li>
                         <li><a href="#"><i class="icon-twitter"></i></a></li>
                         <li><a href="#"><i class="icon-skype"></i></a></li>
                         <li><a href="#"><i class="icon-github"></i></a></li>
                         <li><a href="#"><i class="icon-youtube"></i></a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </footer>
     <!--footer end-->

   <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/respond.min.js" ></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
          } );
      </script>
      
      <script>

      //knob
      $(".knob").knob();
 </script>
	
	
      
  </body>
</html>