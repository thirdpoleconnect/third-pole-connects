<html>
<head>
	<title>@yield('title')</title>

	  <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" media="all" href="css/daterangepicker-bs3.css" />
      <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/moment.min.js"></script>
      <script type="text/javascript" src="js/daterangepicker.js"></script>

</head>
<body>
<h1>hello</h1>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		
		<div class="navbar-header">
			<div class="navbar-brand">Kompany</div>
		</div>
		<ul class="nav navbar-nav">
				<li class='dropdown'><a href="#"><span class='glyphicon glyphicon-gbp'></span> Pay-Roll</a></li>
				<li><a href="#"><span class='glyphicon glyphicon-calendar'></span> Attendence</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href=""><span class="glyphicon glyphicon-bell"></span><span class="badge">3</span></a></li>
			<li><a href=""><span class="glyphicon glyphicon-envelope"></span></a></li>
			<li class='dropdown'>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<span class="glyphicon glyphicon-user"></span>  Aatish Rajkarnikar </a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="#"><span class="glyphicon glyphicon-briefcase"></span> Profile</a></li>
		            <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
		            <li class="divider"></li>
		            <li><a href="#"><span class='glyphicon glyphicon-log-out'></span> Log Out</a></li>
		          </ul>
			</li>
		</ul>
	</div>
</div>
<div class="container">

  <h4>Attendance</h4>
            <div>

               <form class="form-ili">
                  <div class="form-group">
                  	<div class="input-group">
                  		<span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span>
                  		<input type='text' class='form-control' id='reservation'>
                  	</div>
                  </div>	
               </form>

               <script type="text/javascript">
               $(document).ready(function() {
                  $('#reservation').daterangepicker();
               });
               </script>

            </div>
            <table class='table'>
            	<tr>
            		<th>Date</th>
            		<th>Status</th>
            		<th>Check-in</th>
            		<th>Check-out</th>
            		<th>Remarks</th>
            	</tr>
            </table>
    
</div>


</body>
</html>