$(document).ready(function(){

    $('#signupbtn').click('submit', function(e){ 
        e.preventDefault(); 
        let firstname = document.getElementById('inputfname').value;
        let lastname = document.getElementById('inputlname').value;
        let studentmail = document.getElementById('inputmail').value;
        let id = document.getElementById('inputid').value;
        let pass = document.getElementById('inputpin').value;
        let number = document.getElementById('inputnum').value;
        //console.log("Hello world")

        // validating input
        if(firstname == '' || lastname =='' ||studentmail =='' || id =='' || pass =='' || number ==' '){
            alert('All fields are recquired');
            return false;
        };
        if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(studentmail)) {}
		else {
			alert('Invalid Email');
		}

        if (number.lenght < 10){
            alert('Invalid number');
            return false;
        };


        //ajax call
        // jquery.ajax or
        $.ajax({
            type: 'POST',
            url : 'phpsignup.php',
            data : {
                // first variables goto sign up.php and the other variable collected from element id in the html above
                firstname  :  firstname, 
                lastname :  lastname,
                studentmail  : studentmail, 
                id : id,
                passcode : pass,
                number : number
            },
            beforeSend: function(){

            },
            success: function(data){
                $('form').trigger('reset');
				$('#msg').html(data);
                console.log('Successful from html form in js ');
            }
            
        });
    });

});

