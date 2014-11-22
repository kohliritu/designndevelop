//AJAXTester.js

var xmlhttp; //declere a public object pointer for security

function displayResume()
{
alert("hello");
	

	//create a new request object
	xmlhttp=new XMLHttpRequest(); 		

	
	xmlhttp.onreadystatechange=stateChanged_Resume; //call function when returned

	xmlhttp.open("GET","resume.php",true);  			//open url connection

	xmlhttp.send();	 //send value to the php page


}//checkID()

function stateChanged_Resume()       //called when the php page responds 
{
	if (xmlhttp.readyState==4)
	{			
		//display returned image
		document.getElementById("resumediv").innerHTML=xmlhttp.responseText;
	}
}//stateChanged()