<html>
    <head>
        <title>Madlib Redux by Omar Ismail</title>
<style type="text/css">
form {text-align: right;}
	
.madlibbox {       
	background: #50BB8B;
	border: #25201A 1px solid;
	border-radius:8px;
	padding: 10px;
	font-size: medium;
	margin: auto;
	width: 340px;
	font-family: Verdana, "Myriad Web", Syntax, sans-serif;

        }  

body	{	
	padding: 0;
	border: 0;
	background: #B4FFB2;
	width:	auto;
	text-align: center;
	}		

	
h1 {padding: 10px; text-align: center; text-transform: uppercase; color: green;}

h3 {padding: 10px; text-align: center; color: green;}
p {padding: 2px; text-align: center; color: green;}
</style>

           </head>
    <body>
		
<div class = "content">
     <h1> Madlib Redux</h1>
    <h3> Here is your story.</h3>
	
<div class = "madlibbox">   
    
</br> 
<a href="index.html" > <button style= "text-align: center; color: green; border-style: groove;"> << Start Over</button></a>
</br>
</br>


    
<?php

If (isset($_POST["madlib"]))
          			 {     
          				
          			 	$name=$_POST["name"]; 
          			 	$noun=$_POST["noun"];
          			 	$verb=$_POST["verb"];
                  $adjective=$_POST["adjective"];
                  $adverb=$_POST["adverb"];
    

$line= "$name story:Ladies and Gentlemen, on this $adjective occasion, we come together to say good bye to our friend Mr.$noun
who passed away yesterday in a car accident. We $verb together to remember the $adverb soul who wil be never with us anymore.";	


if(ctype_alnum("$name"."$noun"."$adjective". "$verb"."$adverb")){
echo $line;}
else {
        die ("Please input alphanumeric characters");
    }


    
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = $line;
fwrite($myfile, $txt);

fclose ($myfile); 
}

		
	


If (isset($_POST["lazy"]))	
					{
$name=$_POST["name"]; 
$name='Fearless Frank';

if ($_POST['name'] != NULL){$name = $_POST['name'];}
 
    $f_contents = file("nouns.txt"); 
    $noun = $f_contents[rand(0, count($f_contents) - 1)];
    
    
    $f_contents = file("adjective.txt"); 
    $adjective = $f_contents[rand(0, count($f_contents) - 1)];

    
    $f_contents = file("verb.txt"); 
    $verb = $f_contents[rand(0, count($f_contents) - 1)];
    
    
    $f_contents = file("adverb.txt"); 
    $adverb = $f_contents[rand(0, count($f_contents) - 1)];

$line= "$name story:Ladies and Gentlemen, on this $adjective occasion, we come together to say good bye to our friend Mr.$noun
who passed away yesterday in a car accident. We $verb together to remember the $adverb soul who wil be never with us anymore.;	

echo $line;		

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = $line;
fwrite($myfile, $txt);

fclose ($myfile); 
    
					}

					 	 
					 
?>


</br>
</br>


<a  href="newfile.txt" download="yourstory.txt"><button style= "text-align: center; color: purple; border-style: groove;"> Save as Text File</button></a>
</div>
</div>
</body>

  
</html>
