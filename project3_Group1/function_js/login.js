 $(document).ready(function(){
	$('#loginbtn').click('submit', function(e){
		e.preventDefault();

		let stId = document.getElementById('inputid').value;
		let stPin = document.getElementById('inputpin').value;

		if(stId == "" || stPin == ""){
			alert("All fields recquired!")
			console.log('All fields required')
		};
		if(stId.length < 8){
			alert("Invalid Student ID!")
		};
		if(stPin.length < 8){
			alert("Invalid Student Pin!")
		};

		// since the datatype for the control field, the datatype has been specified already no need verify andchecking datatype
		$.ajax({
			type: 'POST',
			url : 'login.php',
			data : {
				stId : stId,
				stPin :  stPin,
			},
			beforeSend: function(){
 
            },
            success: function(data){
				$('form').trigger('reset');
				$('#msg').html(data);
            	console.log('login values  from html to Javascript Done!')
			}
		});
	});
	
});

