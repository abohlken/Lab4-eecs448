function formCheck()
{
	var uName = document.getElementById("username").value;
	var pass = document.getElementById("password").value;
	var foundAtSign = false;
	var foundDot = false;
	
	if(uName == "" || password == "")
		document.write("Username and password fields cannot be blank!");
	else
	{
		for(let i=0;i<uName.length;i++)
		{
			//check if valid email address
			if(!foundAtSign)
			{
				if(uName.charAt(i)=="@")
					foundAtSign = true;
			}
			else
			{
				if(!foundDot)
				{
					if(uName.charAt(i)==".")
					{
						if(uName.substring(i,i+4) == ".com")
							foundDot = true;
						else
							document.write("Username must end in .com! ");
					}
				}
			}
		}
		
		if(!(foundDot&&foundAtSign))
		{
			document.write("Invalid username!");
		}
	}
}