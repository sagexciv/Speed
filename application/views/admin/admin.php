

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
                              <a class="list-group-item " href="news">
                                  News
                              </a>
                              <a class="list-group-item" href="events">Events</a>
                              <a class="list-group-item" href="changepassword">Change Password</a>
                              <a class="list-group-item" href="">Sign Out</a>
                          </div>
                      </section>
    	</div>
    	
    	<div class="col-md-9 newsboxx2">
    		
    		<span class="pull-right label label-danger">Super Admin</span> <br />
    		
                <div class="row paddedrow2">
                	<div class="col-md-4 bordered">
                 	<h2 class="nomargint">News</h2>
                 	<hr class="hrmargin2" />
                 	<p><h1><?php echo $stats['posts'] ?></h1></p>
                 	<div class="btn-group">
                                <a href="news">   <button  class="btn btn-primary">
                                     Add News <i class="icon-plus"></i>
                                  </button></a>
                              </div>
                 	
                 </div>
                 
                 <div class="col-md-4 bordered">
                 	<h2 class="nomargint">Events</h2>
                 	<hr class="hrmargin2" />
                 	<p><h1><?php echo $stats['events'] ?></h1></p>
                 	<div class="btn-group">
                                <a href="events">   <button  class="btn btn-primary">
                                     Add Event <i class="icon-plus"></i>
                                  </button></a>
                              </div>
                 	
                 </div>
                 
                 <div class="col-md-3 bordered">
                 	<h2 class="nomargint">Users</h2>
                 	<hr class="hrmargin2" />
                 	<p><h1><?php echo $stats['admin'] ?></h1></p>
                 	<div class="btn-group">
                                <a href="users">   <button  class="btn btn-primary">
                                     Add User <i class="icon-plus"></i>
                                  </button></a>
                              </div>
                 	
                 </div>
                 
                </div> 
               
                
                </div>  
        </div>
        
    <!--container end-->