function validate_fn()
	{
		var fn=document.getElementById('fullname');
		
		if(fn.value=="")
		{
			document.getElementById('fnvalidator').innerHTML="Your name is required";
			return false;
		}
		else
		{
			document.getElementById('fnvalidator').innerHTML= "correct";
				return true;
			}
			
	}
function validate_empno()
{
	
	var empno=document.getElementById('employnum');
		
		if(empno.value=="")
		{
			document.getElementById('empnovalidator').innerHTML="Youremploy number is required";
			return false;
		}
		else
		{
			document.getElementById('empnovalidator').innerHTML="correct";
				return true;
			}
			
	
	}
	
/*function validate_dob()
	{
		var dob=document.getElementById('dob');
		
		if(dob.value=="")
		{
			document.getElementById('dobvalidator').innerHTML="Date of Birth is required";
		}
		else
		{
			document.getElementById('dobvalidator').innerHTML="correct";
				return true;
			}
			
	}*/
	
	
	
	
	function validate_pn()
	{
		var pn=document.getElementById('phone');
		
		if(pn.value=="")
		{
			document.getElementById('pnvalidator').innerHTML="Phone number is required";
			return false;
		}
		else
		{
			if(document.form_signup.phone.value.length !=10 || isNaN(pn.value))
			{
			document.getElementById('pnvalidator').innerHTML="Invalid phone number   xxxxxxxxxx";
			return false;
			}
			else
			{
			document.getElementById('pnvalidator').innerHTML="correct";
				return true;
			}
		}
			
	}
	
	function validate_un()
	{
		var un=document.getElementById('username');
		
		if(un.value=="")
		{
			document.getElementById('unvalidator').innerHTML= "Username is required";
		}
		else
		{
			document.getElementById('unvalidator').innerHTML="correct";
				return true;
			}
			
	}
	
	function validate_em()
	{
		var em=document.getElementById('email');
		//atindex=em.indexOf("@");
		//dotindex=em.lastIndexOf(".");
		
		if(em.value=="" )
		//||(atindex<1)|| ((dotindex-atindex)<2))
			{
				document.getElementById('emvalidator').innerHTML="Email required";
				return false;
			}
		else
			{
				if((em.value.indexOf("@")<1)|| ((em.value.lastIndexOf(".")-em.value.indexOf("@"))<2))
				{
					document.getElementById('emvalidator').innerHTML="Invalid Email";
					return false;
				}
				else
				{
					document.getElementById('emvalidator').innerHTML="correct";
					return true;
				}
			}
			
	}
	
	function validate_pw()
	{
	
		var pw=document.getElementById('password');
			
		var minLength = 4;
		
		if(pw.value=="")
			{
				document.getElementById('pwvalidator').innerHTML="password is required";
				return false;
			}
			else
			{
				if(pw.value==""||document.form_signup.password.value.length < 4)
				{
				document.getElementById('pwvalidator').innerHTML="Invalid Password (password must be at least four characters long.)";
				return false;
				}
			
				else
				{
				document.getElementById('pwvalidator').innerHTML="correct";
				return true;
				}
			}

			
			
	}
	function validate_conpw()
	{
	
		var pw=document.getElementById('password');
		var conpw=document.getElementById('conpassword');
			
		
		
		if(conpw.value=="")
			{
				document.getElementById('conpwvalidator').innerHTML="password is required";
				return false;
			}
			else
			{
			if(pw.value!= conpw.value)
				{
				document.getElementById('conpwvalidator').innerHTML="password  not matching";
				return false;
				}
				else
				{
				document.getElementById('conpwvalidator').innerHTML="correct";
				return true;
			}
			
			
			}
			
			
	}
	
	
    function validate_level()
	{
        var secques=document.getElementById('select');
        if(secques.value!="default")
		{
   
              
            document.getElementById('levelvalidator').innerHTML="correct";
            return true;
        }
        else
		{
           
            document.getElementById('levelvalidator').innerHTML="select a employ level";
            return false;
        }
    }
 



	function validate()
	{
		
			var fn=document.form_signup.fullname;	
			var empno=document.form_signup.employnum;
			var pn=document.form_signup.phone;
			var email=document.getElementById("email").value;
			var un=document.form_signup.username;
			var pw=document.form_signup.password;
			var conpw=document.form_signup.conpassword;
			/*var football = document.getElementById('football').checked; 
			var cricket = document.getElementById('cricked').checked; 
			var rugby = document.getElementById('rugby').checked; 
			var tt = document.getElementById('tt').checked;
			
			var male = document.form_signup.radiob[1].checked;
			var female= document.form_signup.radiob[2].checked;*/
			
			
			
			atindex=email.indexOf("@");
			dotindex=email.lastIndexOf(".");
			
			var minLength = 4; // Minimum length
			
			if(fn.value=="")
			{
				document.getElementById('fnvalidator').innerHTML="Your name is required";		
			}
		
		
		/*if(male==false && female==false)
		{
			alert("try");
		}*/
			if(pn.value=="" || document.form_signup.phone.value.length !=10 || isNaN(pn.value))
			{
			document.getElementById('pnvalidator').innerHTML="Invalid phone number   xxxxxxxxxx";
			}
			
			if((atindex<1)|| ((dotindex-atindex)<2))
			{
				document.getElementById('emvalidator').innerHTML="Invalid Email   xxx@xxxxx.com";		
			}
			
			 
			/*if(tt==false&&rugby==false&&cricket==false&&football==false)
			{
				alert("at least one checkbox should be checked");
			}*/
			
			
			if(un.value=="")
			{
			document.getElementById('unvalidator').innerHTML= "Username is required";
			}
						
			if(pw.value==""||document.form_signup.password.value.length < 4)
			{
				document.getElementById('pwvalidator').innerHTML="Invalid Password (password must be at least four characters long.)";
				return false;
			}
			else
			return true;						
		}

// JavaScript Document