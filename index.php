<!--
Author : Jenson M John (http://jenson.in/iblog/about-2/)

Please note : The folder should have write permission enabled. This is for creation of new file. 

-->

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="PHP Fiddle Space" />
<meta name="keywords" content="PHP fiddle, fiddle php, PHP Code fiddle" />
<meta name="author" content="Jenson M John" />
<link rel="stylesheet" href="css/codemirror.css">
    <script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/codemirror.js"></script>
    <script src="js/matchbrackets.js"></script>
    <script src="js/htmlmixed.js"></script>
	<script src="js/clike.js"></script>
    <script src="js/xml.js"></script>
    <script src="js/javascript.js"></script>
    <script src="js/css.js"></script>
         <script src="js/php.js"></script>
      <style type="text/css">.CodeMirror {border-top: 1px solid black; border-bottom: 1px solid black;}</style>
    <link rel="stylesheet" href="css/docs.css">

<title>PHP </title>
<script>
$(document).ready(function(){

  	  $("#submitForm").on("click",function(){
	    var code = editor.getValue();
		
				
		$.post('process.php', {codesrc: code}, function(data){
             
            
            $.get( "scriptarea.php", function(data) {
			      $("#output").show();
				  $('#compiledResult').html(data);
				  $("#compiledResult").show();
				});
             
        }).fail(function() {
         
            alert("Oh man! Smething kinda pblm!");
             
        });
	  
	  });

  });
</script>
<style>
#srcDiv{

border:1px solid; width:703px; float:left; margin-right:10px;

}

.btn {
  background: #0057CC;
  background-image: -webkit-linear-gradient(top, #0057CC, #0057CC);
  background-image: -moz-linear-gradient(top, #0057CC, #0057CC);
  background-image: -ms-linear-gradient(top, #0057CC, #0057CC);
  background-image: -o-linear-gradient(top, #0057CC, #0057CC);
  background-image: linear-gradient(to bottom, #0057CC, #0057CC);
  -webkit-border-radius: 10;
  -moz-border-radius: 10;
  border-radius: 10px;
  text-shadow: 6px 1px 3px #666666;
  font-family: Arial;
  color: #f2f2f5;
  font-size: 18px;
  padding: 5px 10px 5px 10px;
  text-decoration: none;
}

.btn:hover {
  background: #0057CC;
  text-decoration: none;
}
</style>
</head>
 
<body>
<div id="wrap">
 

<div id="contentwide">
 
  <h2 align="center" style="color:#0057CC; border: 1px solid rgb(200, 200, 200)">PHP/HTML/JavaScript Code Playground</h2>
  
	<div id="mainDiv">

	<div id="srcDiv">
		<form name="phpfiddle" id="phpfiddle">
		<table width="100%" border="0" align="center">
		<tr>
		<td width="100%" valign="top"><h4 style="color:#0057CC; padding:3px;">Enter Code Below.</h4> 
		<textarea name="code" id="code" cols="55" rows="20" placeholder=""><?php if(isset($code)) echo $code; ?></textarea></td>
		</tr>
		<tr>

		<td align="center" valign="top"><input type="button" class="btn" id="submitForm" name="submitForm" value="Execute My Code!"/></td>

		</tr>
		</table>
		</form>
	</div>

	<div style="padding:5px; height:100%; width:100%">
	
	<p id="egCode">
	 Eg. <br/><?php
	highlight_string('<?php echo "This Is Awesome..:)"; ?>');
	 ?>
	</p>
	
	<h3 id="output" align="center" style="display:none;">Output</h3>
	
	<p id="compiledResult">
	
	</p>
	</div>

	</div>

</div>
 

 
</div>

<script>
      var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "application/x-httpd-php",
        indentUnit: 4,
        indentWithTabs: true,
        enterMode: "keep",
        tabMode: "shift"
      });
</script>
	
	<div style="clear:both; border: 1px solid rgb(200, 200, 200)" align="center"><a style="color:blue;" href="http://jenson.in/iblog/about-2/" target="_blank">Jenson.in</a></div>
</body>
</html>
