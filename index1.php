<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1 class="text-primary text-uppercase text-center">Add Expertise Area with Training Rates</h1>
	</div>
	<div class="d-flex justify-content-end">
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
	</div>

	<div class="justify-content-start">
	<a href="details.php"></a>	
		<h2 class="text-danger"> All records</h2>
	<div id="records_content">
		<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Expertise Area with Training Rates</h4>
      </div>

      <!-- modal body -->
      <div class="modal-body">
        <div class="form-group">
        	<label>Expertise Area</label>
        	<input type="text" name="" id="Expertise" class="form-control " placeholder="Expertise Area">
      </div>
      <div class="form-group">
        	<label>Experience</label>
        	<input type="text" name="" id="Years" class="form-control " placeholder="Years">
        	<input type="text" name="" id="Months" class="form-control" placeholder="months">
      </div>

        <div class="form-group">
        	<label>Training / Teaching Rates:</label>
        	<input type="text" name="" id="Remote" class="form-control " placeholder="Remote">
        	 <div class="dropdown">
   			 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Box
   				 <span class="caret"></span></button>
   					 <ul class="dropdown-menu">
     					 <li><a href="#">Per hr</a></li>
     					 <li><a href="#">Per Chapter</a></li>
     					 <li><a href="#">Per Topic</a></li>
   					 </ul>
  				</div>
  				<input type="text" name="" id="Centre" class="form-control " placeholder="Centre">
        	 <div class="dropdown">
   			 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Box
   				 <span class="caret"></span></button>
   					 <ul class="dropdown-menu">
     					 <li><a href="#">Per Week</a></li>
     					 <li><a href="#">Per Month</a></li>
     					 
   					 </ul>
  				</div>

  				<input type="text" name="" id="LearnerPlace" class="form-control " placeholder="Learner's Place">
        	 <div class="dropdown">
   			 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Box
   				 <span class="caret"></span></button>
   					 <ul class="dropdown-menu">
     					 <li><a href="#">Per class</a></li>
     					 <li><a href="#">Per Hour</a></li>
     					 
   					 </ul>
  				</div>

  				<input type="text" name="" id="Myplace" class="form-control " placeholder="My place">
        	 <div class="dropdown">
   			 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Box
   				 <span class="caret"></span></button>
   					 <ul class="dropdown-menu">
     					 <li><a href="#">Per hr</a></li>
     					 <li><a href="#">Per Class</a></li>
     					 
   					 </ul>
  				</div>
  				 <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         <button type="button" class="btn btn-default justify-content-start" >Submit</button>
      </div>

     

  			</div>
  		</div>
  	</div>
  </div>
</div>
</div>






      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	</div>


	<script type="text/javascript">
		
		function addRecord(){
			var Expertise = $('#Expertise').val();
			var Years = $('#Years').val();
			var Month = $('#Months').val();
			var Remote = $('#Remote').val();
			var Centre = $('#Centre').val();
			var LearnersPlace = $('#LearnerPlace').val();
			var My place = $('#My place').val();

			$.ajax({
				url:"backend1.php",
				type:'post',
				data:{ Expertise : Expertise,
					Years : Years,
					Month : Month,
					Remote : Remote,
					Centre : Centre,
					LearnersPlace : LearnersPlace
					Myplace : Myplace
				},
				success:function(data,status){
					readrecords();


				}







			});





		}






	</script>








<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>















<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	



</body>   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</html>