// JavaScript Document

$('document').ready(function()
{ 
     /* validation */
	 $("#register-form").validate({
      rules:
	  {
			password: {
			required: true,
			minlength: 8,
			maxlength: 15
			},
			user_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            password:{
                      required: "Entrez un mot de passe",
                      minlength: "Entrez 8 caractères minimum"
                     },
            user_email: "Entrez un email valide",
			cpassword:{
						required: "Re-tapez votre mot de passe",
						equalTo: "Les mots de passe sont différents"
					  }
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   function submitForm()
	   {		
				var data = $("#register-form").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'registerajax',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success :  function(data)
						   {
							   console.log(data);
								if(data==1){
									
									$("#error").fadeIn(100, function(){

											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Email déjà utilisé !</div>');
									});
																				
								}
								else if(data=="registered")
								{

									$("#error").fadeIn(100, function(){

										$("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Compte créé !</div>');

									});

								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
										
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */

	/* validation */
	$("#login-form").validate({
		rules:
		{
			password: {
				required: true,
				minlength: 8,
				maxlength: 15
			},
			user_email: {
				required: true,
				email: true
			},
		},
		messages:
		{
			password:{
				required: "Entrez un mot de passe",
				minlength: "Entrez 8 caractères minimum"
			},
			user_email: "Entrez un email valide",
		},
		submitHandler: submitForm1
	});
	/* validation */

	/* form submit */
	function submitForm1()
	{
		var data = $("#login-form").serialize();

		$.ajax({

			type : 'POST',
			url  : 'loginajax',
			data : data,
			beforeSend: function()
			{
				$("#error1").fadeOut();
				$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
			},
			success :  function(data)
			{

				console.log(data);
				if(data==1){

					$("#error1").fadeIn(100, function(){

						$("#error1").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp;Identifiants inconnus !</div>');
					});

				}
				else {

					$("#error1").fadeIn(100, function(){

						$("#error1").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp;Connexion réussie</div>');
						var delay = 1100; //Your delay in milliseconds
						setTimeout(function(){ window.location.href = "index"; }, delay);
					});

				}

			}
		});
		return false;
	}
	/* form submit */




});