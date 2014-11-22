


function displayAbout()
{
	document.getElementById("about_content").style.display="block";
	document.getElementById("leftcontent").style.display="none";
	document.getElementById("about_rightcontent").style.display="block";
	document.getElementById("rightcontent").style.display="none";


}



function displayHome()
{
	document.getElementById("about_content").style.display="none";
	document.getElementById("leftcontent").style.display="block";
	document.getElementById("about_rightcontent").style.display="none";
	document.getElementById("rightcontent").style.display="block";


}

function displayResume()
{
alert("hello");
	//create a new request object
	xmlhttp=new XMLHttpRequest(); 		

	//create url string with file destination, value with name `q`
	var url="resume.php";

	url=url + "&sid=" + Math.random();  		//disable caching

	xmlhttp.onreadystatechange=stateChanged_Resume; //call function when returned

	xmlhttp.open("GET",url,true);  			//open url connection

	xmlhttp.send(null);	 //send value to the php page


}//checkID()

function stateChanged_Resume()//called when the php page responds 
{
	if (xmlhttp.readyState==4)
	{			
		//display returned image
		document.getElementById("resume").innerHTML=xmlhttp.responseText;
	}
}//stateChanged()