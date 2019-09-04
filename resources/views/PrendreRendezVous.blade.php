<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('css1/bootstrap.min.css')}}" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('css1/style.css')}}" />
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery-ui.min.css')}}" rel="stylesheet">
    

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	

</head>

<body  >
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<br>
							<br>
							<h1>Rendez-vous</h1>
						</div>
						<form  action="{{url('enregistrer')}}" method="post">
							 {{csrf_field()}}
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Nom</span>
										<input class="form-control" name="nom" type="text" placeholder="Entez votre name" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" name="email" type="email" placeholder="Enter votre email" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
						    	<div class="form-group">
								  <span class="form-label">Téléphone</span>
								  <input class="form-control" type="tel" placeholder="Entez votre numéro de téléphone" name="tel" required>
							    </div>
								</div>	
								<div class="col-sm-6">
						    	<div class="form-group">
								  <span class="form-label">Marque_Vehicule </span>
								  <input class="form-control" type="tel" placeholder="Entez la marque de votre vehicule" name="marque" required>
							    </div>
								</div>	
							</div>	
							<input class="form-control" type="hidden"  name="nomService" value="{{$service}}"  >
	             @if($service=='lavage') 
							<div class="form-group">
										<span class="form-label">SERVICE</span>
										<select id="pet-select" class="form-control" name="type">
														<option value="">Type de lavage</option>
														
														   <option value="EXTERIEUR">EXTERIEUR </option>
															 <option value="INTERIEUR">INTERIEUR</option>
															 <option value="MOTEUR">MOTEUR</option>
															 <option value="STICKAGE">STICKAGE</option>
															 <option value="SIEGE">SIEGE</option>
															 <option value="CHASSIS">CHASSIS</option>
																					
										</select>

										<!-- <input class="form-control" autocomplete="off" type="text"  name="service"    required /> -->
									 </div>
									 @endif
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Date </span>
										<input class="form-control datepicker1" autocomplete="off" type="text"  name="date"  id="debut" value=""  required />
									 </div>
								</div>	
								<div class="col-sm-6">
									<div class="form-group"> 
										<span class="form-label">Heure</span>
										
										<input class="form-control " data-name="timepicker" type="time"  data-toggle="timepicker" autocomplete="off" type="text"  name="Heure"    required/>
										</div>
										
								</div>
								<!-- @if(session()->has('DateVerification')) 
                                   <div class="alert alert-danger col-md-5" style="text-align: center;margin-left:30%" id="div_a_cacher" >
                                   {{ session()->get('DateVerification') }}
                                   <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                   </div>
                 @endif -->
								<div class="col-sm-10">
								<div class="form-group">
							
								<input  type="text" readonly name="msg" id="msg"  id="msg" required class="alert alert-danger" role="alert" style="    width: 121% !important;">
							</div>
	            </div>
						
							</div>
							<div class="row">
								

								
							</div>
						
					
							<div class="form-btn">
								<button class="submit-btn" id="sub" >Reserver</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.css"></script>

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="/js/jquery.timepicker.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
		
 
  $( function() {
		$("#msg").hide();
    $( "#datepicker" ).datepicker();
    $( ".datepicker1" ).datepicker();

		$( ".datepicker1" ).change(function(){


				
					console.log('hhhh',$("#debut"));	
					var prixTotal=$("#prixTotal");
					var prix=$("#prix").val();
          var msg=$("#msg");
					var date1 = $("#debut")  ;
					var date2 =  $("#fin");
					ddate1 = new Date(date1.val());
					 
					 var  ddate2 = new Date(date2.val());
					 console.log('date2.attr ', ddate1);
					 console.log('ddate2 ',ddate2);

					 if(ddate2<ddate1){
					 console.log('ff');
					  msg.val('Merci de vérifier les dates');
						msg.show();
						document.getElementById("sub" ).disabled = true;
						// document.getElementById("autre").style.display = "block";
					 }
			
			    else{
						document.getElementById("sub" ).disabled = false;
						msg.hide();
					 var res =parseFloat(Math.abs(ddate1 - ddate2)) / 1000;
					 console.log('NaN 1',isNaN(res));

					 var days = Math.floor(res / 86400);
					 console.log('NaN  2',isNaN(days));
				
					var pret=parseInt(days)* parseInt(prix);
					console.log('NaN  3',isNaN(pret));
					if(!isNaN(pret))
					{
					
					
						console.log('diffDays ',days);
						prixTotal.val(pret.toString()+'   DH');
					}}
		})
  } );

 </script>
 <script>
	document.addEventListener("DOMContentLoaded", function(event)

{

    timepicker.load({

      interval: 15

    });

});
</script>


			
				
 

  


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>