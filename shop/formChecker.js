function formCheck()
{
	var uName = document.getElementById("username").value;
	var pass = document.getElementById("password").value;
	var ffxiv = document.getElementById("ffxiv").value;
	var ow = document.getElementById("overwatch").value;
	var bloodborne = document.getElementById("bloodborne").value;
	var foundAtSign = false;
	var foundDot = false;
	
	if(uName == "" || password == "")
		document.write("Username and password fields cannot be blank!");
	else if(ffxiv == 0&&ow == 0&&bloodborne == 0)
		document.write("Please choose at least one game to buy!");
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