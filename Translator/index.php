

<!DOCTYPE html>
<html>
<head>
	<title>Translator using Google API</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	

<form class="form-style-9" name="frm_translator" action="something.php" method="GET">
	<ul>
		<li><center><h2>Translator </h2></center></li>
		<li>
			<textarea name="source" class="field-style" placeholder="Your Text"></textarea>
		</li>
		<li>
			<h3>Select Language</h3><br>
	<select name="languages">
		<option>Hindi</option>
		<option>Gujrati</option>
		<option>Kannada</option>
		<option>Tamil</option>
		<option>Telugu</option>
		<option>Urdu</option>
		<option>Punjabi</option>
		<option>Marathi</option>
		<option>Malayalam</option>
		<option>Sindhi</option>
		<option>Arabic</option>
		<option>Croatian</option>
		<option>Dutch</option>
		<option>German</option>
		<option>Japanese</option>
		<option>Nepali</option>
	</select>
		</li>
		<li>
			<input type="submit" name="submit" value="Translate" />
		</li>
<li>

<?php if (isset($_GET['submit'])) {
	
    //tra('gu');
   	//tra('hi');
   	 $lang  = $_GET['languages'];
   	  $original=$_GET['languages'];///original for printing at the top like this: Tamil : xyz, Telugu : xyz etc.....
   	 switch ($lang) {
   	 	case 'Hindi'	:	$lang="hi";
   	 	tra($lang,$original);
   	 	break;
   	 	
   	 	case 'Gujrati'	:	$lang="gu";
   		tra($lang,$original);
   	 	break;

   	 	case 'Bengali'	:	$lang="bn";
   	 	tra($lang,$original);
   	 	break;

   	 	case 'Kannada'	:	$lang="kn";
   	 	tra($lang,$original);
   	 	break;

   	 	case 'Tamil'	:	$lang="ta";
   	 	tra($lang,$original);
   	 	break;

   	 	case 'Telugu'	:	$lang="te";
   	 	tra($lang,$original);
   	 	break;

   	 	case 'Urdu'	:	$lang="ur";
   	 	tra($lang,$original);
   	 	break;

   	 	case 'Punjabi'	:	$lang="pa";
   	 	tra($lang,$original);
		break;

		case 'Marathi'	:	$lang="mr";
		tra($lang,$original);
		break;
   		
   		case 'Malayalam'	:	$lang="ml";
   		tra($lang,$original);		
		break;

		case 'Sindhi'	:	$lang="sd";
		tra($lang,$original);
		break;

		case 'Arabic'	:	$lang="ar";
		tra($lang,$original);
		break;
   		
   		case 'Croatian'	:	$lang="hr";
   		tra($lang,$original);
   		break;

   		case 'Dutch'	:	$lang="nl";
   		tra($lang,$original);
		break;

		case 'German'	:	$lang="de";
		tra($lang,$original);	
		break;

		case 'Japanese'	:	$lang="ja";
		tra($lang,$original);
		break;

		case 'Nepali'	:	$lang="ne";
		tra($lang,$original);
		break;

   	 }
   	
}?>

</li>
<li><h3>Created By :Viral using Google Translate API</h3></li>
</ul>
</form>
</body>
</html>
















