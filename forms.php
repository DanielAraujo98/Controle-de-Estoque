<!DOCTYPE html>
<html>


<head>
	<title>SGA - Cadastro</title>
	<link rel="icon" type="image/png" href="images/icons/almox.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<form action="solicita_cadastro.php" method="post">

<div class="container-login100" style="background-image: url('images/est.png');">	
	<div class="container">
 	
<!-- Label Email--> 		
 <div class="row justify-content-center">	
	<div class="wrap-login100">
    	<span class="login100-form-title validate-input p-b-10 p-t-11" data-validate="Email é necessário!">Email Corporativo</span>
    		<input type="email" class="input100" name="email" placeholder="Email Corporativo">
    			</div>
  					</div>

<!-- Label Nome-->
 <div class="row justify-content-center">
   <div class="wrap-login100">
 	   <span class="login100-form-title validate-input p-b-10 p-t-11" data-validate="Nome completo é necessário!">Nome</span>
 		   <input type="name" class="input100" name="nome" placeholder="Nome completo">
			  </div>
			  	</div>

<!--Label Senha-->
 <div class="row justify-content-center">
 	  <div class="wrap-login100">
 	   <span class="login100-form-title p-t-10 p-b-10" data-validate="Senha é necessário!">Senha</span>
   		  <input type="password" class="input100" name="pass" placeholder="Senha">
 			 <p style="color: #FFFFFF">
 			 *Mínimo 6 digitos !</p>
  				 </div>
 				 	</div>

  <div class="row justify-content-center">
 	  <div class="wrap-login100">
 	   <span class="login100-form-title p-t-10 p-b-10" data-validate="Ramal é necessário!">Ramal</span>
   		  <input type="text" class="input100" name="tel" placeholder="Ramal">
 			 <p style="color: #FFFFFF">
 			 *Apenas os 4 ultimos números !</p>
 				<button class="btn btn-dark text-center">		
					Cadastrar
						</button>

 			 <input type="hidden" name="status" value="0">						
	 			<input type="hidden" name="nivel" value="1">
 			 	
  				 </div>
 				 	</div>			 		
 					   </div>
 						
 						


  <!--<div class="wrap-login100">
    <div class="form-group col-md-10">
      <span class="login100-form-title p-b-10 p-t-15">Ramal</span>
      	<input type="text" class="input100" id="tel" placeholder="Ramal">
   		 </div> -->

</form>	
	</body>
		</html> 