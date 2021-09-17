<!DOCTYPE html>
<html lang="en"> <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webprint</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="../webprint/stylesheet.css" rel="stylesheet" type="text/css">
	<link href="../webprint/hover.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>	
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
	
		
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container" style="padding-bottom: 0px;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mr-auto">
		 <li class="nav-item">
          <a class="nav-link hvr-underline-from-center text-light" href="#">Home
          <span class="sr-only">(current)</span>
          </a>
		  </li>
        <li class="nav-item active">
          <a class="nav-link hvr-underline-from-center text-light" href="#">Link
          <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light hvr-underline-from-center font-weight-bold" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light hvr-underline-from-center font-weight-bolder" href="#">Link</a>
        </li>
		      </ul>
    </div>
	  <div class="navbar-brand">
		<form id="lookingforbook" class="form-inline ml-auto" action="https://wflpl.tlcdelivers.com">
      <div class="md-form my-0">
        <input class="form-control border-light" type="text" name="term" id="searchfor" value="" rel-"Search Term" placeholder="Search Catalog..." aria-label="Search">
		 <input type="hidden" name="section" value="search">
		 <input type="hidden" name="config" value="pac"> 
      </div>
      <button action="https://wflpl.tlcdelivers.com" class="btn btn-light btn-md my-0 ml-sm-2 hvr-grow-shadow" type="submit">Search</button>
    </form>
							  </div>
  </div>
</nav>
<body class="d-flex flex-column min-vh-100">
<div class="container-fluid bg-light pt-4 pb-5">
	
	
	
	<div class="container">
        <div class="row">
           
                <div class="bg-dark p-4 my-5 dropshadow mr-auto ml-auto">
                    <div class=" mr-auto ml-auto text-white">
                        <h3 class="card-title text-center">Remote Printing</h3>                       
                           <form class="form-group" method="post" action="upload.php" enctype="multipart/form-data" id="emailForm">
                            <div class="form-group ">
                                <input type="text" name="patron" id="patron" class="form-control" placeholder="Name" >
                                <div id="nameError" style="color: red;font-size: 14px;display: none">nameError</div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email address" >
                                <div id="nameError" style="color: red;font-size: 14px;display: none">emailError</div>
                            </div>
							<div class="form-group">
                                <input type="phone" name="phone" id="phone" class="form-control" placeholder="Phone Number" >
                                <div id="emailError" style="color: red;font-size: 14px;display: none">emailError</div>
                            </div>
							<div class="form-group">
                                <input type="text" name="copies" id="copies" class="form-control" placeholder="How many copies?" >
                                <div id="coppiesError" style="color: red;font-size: 14px;display: none">emailError</div>
                            </div>
							<div class="form-group">
                                <input name="libnumber" id="libnumber" class="form-control" placeholder="Library Card Number (optional)">
                                <div id="messageError" style="color: red;font-size: 14px;display: none">messageError</div>
                            </div>
							    <div class="form-group">
								<label>Pickup Location:</label>
                                <select id="location" class="form-control" name="location">
						   <option value="Main">Main Branch</option>
						   <option value="Argenta">Argenta Branch</option>
							</select>
                            </div>
							 <div class="form-group">
								<label>BW or Color:</label>
                                <select id="color" class="form-control" name="color">
						   <option value="Black and White">Black and White</option>
						   <option value="Color">Color</option>
							</select>
                            </div>
											
                            <div class="form-group text-white">
                                <input class="pl-0 form-control no-border text-light bg-dark" type="file" id="files" name="uploaded_file"><br>
        						<button type="button" 
								class="dropshadow btn btn-success btn-lg float-right" 
								data-toggle="modal" 
								data-target="#confirmModal"
								id="submit">
								Submit
								</button>
                                <div id="attachmentError" style="color: red;font-size: 14px;display: none">attachmentError</div>
                            </div>
                        </form>
                    </div>
                </div>
            
        </div>
    </div>
	
	</div>
	
	</body>

<footer class="text-white mt-auto bg-dark" role="contentinfo">
	<div class="row">
		<div class="col-md-12 copy">
			<p class="text-center">&copy; Copyright 2020 - Adam Branscum All rights reserved.</p>
		</div>
	</div>
</footer>
<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>
</head>
<body>
<div id="myModal" class="modal fade" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Remote Assisted Printing Agreement</h4>
            </div>
            <div class="modal-body">
                <p>By clicking "I agree," you agree to terms and conditions.</p>
				<ul>
				<li>No more than 20 pages per request per day.</li>
				<li>Accepted file types: pdf, doc*, txt, jpg and png.</li>
				<li>No pornographic or obscene images.</li>
				<li>We will contact you when your print job is complete to schedule a pickup time.</li>
				<li>We cannot guarantee same day delivery of printed materials.</li>
				<li>Your information and submitted print job will be deleted from our systems immediately after printing.</li>
				</ul>
                <form>
                    <button type="button" class="bg-dark btn text-light" data-dismiss="modal" aria-hidden="true">I agree</button>
                </form>
            </div>
        </div>
    </div>
	</div>
	<!-- modal -->
        <div class="modal fade" id="confirmModal" 
            tabindex="-1" 
            aria-labelledby="exampleModalLabel" 
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-dark">
                    <div class="modal-header">
                        <h5 class="modal-title text-light" 
                            id="exampleModalLabel">
                           Confirm Print
                        </h5>
                          
                        <button type="button" 
                            class="close" 
                            data-dismiss="modal" 
                            aria-label="Close">
  
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                    </div>
  
                    <div class="modal-body text-light bg-dark">
  
                          <form class="form-group" method="post" action="upload.php" enctype="multipart/form-data" id="emailForm">
                            <div class="form-group ">
                                <input type="text" name="patron" id="patronc" class="form-control" placeholder="Name" >
                                <div id="nameError" style="color: red;font-size: 14px;display: none">nameError</div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" id="emailc" class="form-control" placeholder="Email address" >
                                <div id="nameError" style="color: red;font-size: 14px;display: none">emailError</div>
                            </div>
							<div class="form-group">
                                <input type="phone" name="phone" id="phonec" class="form-control" placeholder="Phone Number" >
                               
                            </div>
							 <div class="row">
							<div class="form-group col-6">
								<label>Copies:</label>
                                <input type="text" name="copies" id="copiesc" class="form-control" placeholder="How many copies?" >
                               
                            </div>
							<div class="form-group col-6">
								<label>Pages:</label>
                                <input type="text" name="pages" id="pages" class="form-control" placeholder="" >
                                <div id="coppiesError" style="color: red;font-size: 14px;display: none">emailError</div>
                            </div>	
							   </div>
							    <div class="form-group">
                                <input name="libnumber" id="libnumberc" class="form-control" placeholder="Library Card Number (optional)">
                                <div id="messageError" style="color: red;font-size: 14px;display: none">messageError</div>
                            </div>
							<div class="row">
							<div class="form-group col-6">
								<label>Location</label>
                                <input type="text" name="location" id="locationc" class="form-control" placeholder="" >
                                
                            </div>	
							<div class="form-group col-6">
								<label>Type:</label>
                                <input type="text" name="color" id="colorc" class="form-control" placeholder="" >
                                
                            </div>
							   </div>
							 <div class="form-group">
								 <label>Cost:</label>
                                <input type="text" name="cost" id="cost" class="form-control" readonly >
                               
                            </div>  
                            <div class="form-group text-white">
                                <input class="form-control no-border bg-dark text-white" type="file" id="filesc" name="uploaded_file"><br>        						
                                <div id="attachmentError" style="color: red;font-size: 14px;display: none">attachmentError</div>
								<input class="btn btn-success mt-4 float-right dropshadow" type="submit" value="Upload file">
                                <div id="attachmentError" style="color: red;font-size: 14px;display: none">attachmentError</div>
                            </div>
                        </form>
  
                        
                    </div>
                </div>
	<script>
	 $("#submit").click(function () {
            var textPatron = document.getElementById("patron").value;
            document.getElementById("patronc").value = textPatron;
		 	var textEmail = document.getElementById("email").value;
		 	document.getElementById("emailc").value = textEmail;
		 	var textPhone = document.getElementById("phone").value;
		 	document.getElementById("phonec").value = textPhone;
		 	var textCopies = document.getElementById("copies").value;
		 	document.getElementById("copiesc").value = textCopies;
		 	var textLibNumber = document.getElementById("libnumber").value;
		 	document.getElementById("libnumberc").value = textLibNumber;
		   	var textFiles = document.getElementById("files").files;
		 	document.getElementById("filesc").files = textFiles;
		 		    
		 	var e = document.getElementById("location");
    		var textLocation = e.options[e.selectedIndex].value;
		 	document.getElementById("locationc").value = textLocation;
		 	
		 	var b = document.getElementById("color");
    		var textColor = b.options[b.selectedIndex].value;b
		 	document.getElementById("colorc").value = textColor;
		 	
		 	var input = document.getElementById("files");
			var reader = new FileReader();
			reader.readAsBinaryString(input.files[0]);
			reader.onloadend = function (){
			var count = reader.result.match(/\/Type[\s]*\/Page[^s]/g).length;			
		    document.getElementById('pages').value = count;
			
			if (textColor == "Color") {
				var color = .25;
			}	else {
				var color = .15;
			}
			
			var cost = count * textCopies * color;
			document.getElementById('cost').value = "$" + cost;	
			}		 	
		 	
        });			
				
				
				
</script>
				</html>