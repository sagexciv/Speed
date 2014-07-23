    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                   
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <!-- <li><a href="#">Home</a></li>
                        <li class="active">News</li> -->
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->
    
    <div class="row paddedrow">
    	<div class="col-md-3"></div>
    	
    	<div class="col-md-6 newsboxx">
    		<h2 class="text-center">Sign In</h2>
                    <hr>
    		<div class="col-md-3"></div>
    		
    		<div class="col-md-6">
    			
    		<form method="post" action="<?php echo base_url('signin') ?>">
                   
                   <div class="form-group">
                   <input type="text" name="admin_name" class="form-control" placeholder="Username">
                   </div>
                   
                   <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                   </div>
                   
                   <div class="form-group pull-right">
                    	<input name="signin" type="submit" class="btn btn-primary btn-md " value="Sign In" />
                    </div>
                    
                    <div class="form-group"> 
                   	<a href="forgot.html"><small>Forgot Your Password?</small></a>
                   </div>
                    
           </form>	
    			
    		</div>
    		
    		<div class="col-md-3"></div>
                
              </div>
    	
    	<div class="col-md-3"></div>
    	
    </div>