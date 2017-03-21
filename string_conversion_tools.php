<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Php String Conversions</title>
		<meta charset="UTF-8" />
		<meta name="Tool" content="Made By An0n 3xPloiTeR :)" />
		<meta name="Working" content="Php String Conversions" />
		<meta name="revised" content="Php String Conversions, 26-12-2016" />
		<meta name="description" content="Check It Out Once :D" />
		<meta http-equiv="refresh" content="" /><!-- This Will Refresh Page After Every ___ Seconds -->
		<meta name="Base64 Encode" content="Will Convert The Given Text Of Your into Base64" />
		<meta name="Base64 Decode" content="Will Convert The Given Base64 Of Your into Text" />
		<meta name="URL Encode" content="Will Convert The Given Text Of Your into Url Encoding" />
		<meta name="URL Decode" content="Will Convert The Encoded URL Of Your into Text" />
		<meta name="UU Encode" content="Will Convert The Given Text Of Your into UU" />
		<meta name="UU Decode" content="Will Convert The Given Encoded UU Of Your into Text" />
		<meta name="MD5 Hashes" content="Will Convert The Given Text Of Your into MD5 Hash" />
		<meta name="SHA1 Hashes" content="Will Convert The Given Text Of Your into SHA1 Hash" />
		<script language="Javascript1.2">
			function njs_nodroit() {
				alert("Script Made By An0n 3xPloiTeR :)");
				alert("Although There Are No Copy Rights");
				alert("But Dont Copy Code :-)");
				return ('false');
			} document.oncontextmenu = njs_nodroit;
		</script>
		<style>
			body {
				background-color: black;
			}
			textarea {

				color: white;
				font-size: 100%;
				font-weight: bold;
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: black;
			}
			input {

				color: white;
				font-size: 100%;
				font-weight: bold;
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: black;
			}
			select {

				color: white;
				font-size: 100%;
				font-weight: bold;
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: black;
			}
			option {
				color: white;
				font-size: 80%;
				font-weight: bold;
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: black;
			}
			.heading {
				margin-top: 2vh;
				text-align: center;
			}
			.subheading {
				margin-top: 2vh;
				text-align: center;
				color: white;
				font-family: Comic Sans Ms;
				text-transform: capitalize;
			}
			.content {
				text-align: center;
				color: white;
				font-family: Comic Sans Ms;
			}
			.phpresults {
				text-align: center;
				color: white;
				font-family: Comic Sans Ms;
				font-size: 100%;
			}
			.footer {
				left: 0px;
				right: 0px;
				bottom: 4px;
				position: fixed;
				text-align: center;
				color: teal;
				font-family: Comic Sans Ms;
				font-size: 100%;
			}
		</style>
	</head>
	<body>
		<div class="heading">
			<font color="red" size="300%" face="Comic Sans Ms">Php String Conversions By
				<font color="lawngreen" size="300%" face="Comic Sans Ms"><a href="https://www.google.com/search?q=An0n 3xPloiTeR" style="text-decoration: none; color: lawngreen;">An0n 3xPloiTeR</a></font>
			</font>
		</div>
		<div class="subheading">
			<h5>this tool can be used to perform text to uppercase, lowercase, base64 encoding, base64 decoding, URL Encoding, URL decoding, UU encoding, UU decoding, MD5 and SHA1 Hashes :) </h5>
		</div>
		<div class="content">
			<form action="" method="POST">
				<textarea style="font-family: Comic Sans Ms; font-size: 100%" type="text" name="value" placeholder="Text Here :)" rows="10" cols="80"></textarea><br><br>
				<select name="conversion" style="font-family: Comic Sans Ms; font-size: 100%">
					<option>String To UpperCase</option>
					<option>String To LowerCase</option>
					<option>Base64 Encoding</option>
					<option>Base64 Decoding</option>
					<option>Url Encoding</option>
					<option>Url Decoding</option>
					<option>Reverse String</option>
					<option>StrRot-13</option>
					<option>GzDeflate And Base64 Encoding</option>
					<option>GzInflate And Base64 Decoding</option>
					<option>GzCompress And Base64 Encoding</option>
					<option>GzUnCompress And Base64 Decoding</option>
					<option>UU Encode</option>
					<option>UU Decode</option>
					<option>MD5 Encryption</option>
					<option>Sha1 Encryption</option>
				</select>
				<input style="font-family: Comic Sans Ms; font-size: 100%;" type="submit" name="submit" value="Submit">
			</form>
		</div>
		<div class="phpresults">
			<?php
				if (isset($_POST['submit'])) { // Will Get Submit Sign
				$value = htmlspecialchars($_POST['value']); // Will Get The Value And Store iT in $value variable
				$conversion = htmlspecialchars($_POST['conversion']); // Will Perform Conversions
				switch ($conversion) { // Got iT :D 

					case 'String To UpperCase': // Will Convert String To UpperCase
						$uppercase = strtoupper($value);
						echo '<br><textarea style="font-family: Comic Sans Ms; font-size: 100%" type="text" name="value" placeholder="Results Will Come Here :D" rows="9" cols="80">';echo $uppercase; echo '</textarea>';
					break;

					case 'String To LowerCase': // Will Convert String To LowerCase
						$lowercase = strtolower($value);
						echo '<br><textarea style="font-family: Comic Sans Ms; font-size: 100%" type="text" name="value" placeholder="Results Will Come Here :D" rows="9" cols="80">';echo $lowercase; echo '</textarea>';
					break;

					case 'Base64 Encoding': // Will Convert Given Text To Base64
						$base64_encoding = base64_encode($value);
						echo '<br><textarea style="font-family: Comic Sans Ms; font-size: 100%" type="text" name="value" placeholder="Results Will Come Here :D" rows="9" cols="80">';echo $base64_encoding; echo '</textarea>';
					break;

					case 'Base64 Decoding': // Will Convert Given Base64 To Text
						$base64_decoding = base64_decode($value);
						echo '<br><textarea style="font-family: Comic Sans Ms; font-size: 100%" type="text" name="value" placeholder="Results Will Come Here :D" rows="9" cols="80">';echo $base64_decoding; echo '</textarea>';
					break;

					case 'Url Encoding': // Will Convert Given Text To URL Encode :P 
						$url_encoding = urlencode($value);
						echo '<br><textarea style="font-family: Comic Sans Ms; font-size: 100%" type="text" name="value" placeholder="Results Will Come Here :D" rows="9" cols="80">';echo $url_encoding; echo '</textarea>';
					break;

					case 'Url Decoding': // Will Convert Given Encoded URL To Text :P 
						$url_decoding = urldecode($value);
						echo '<br><textarea style="font-family: Comic Sans Ms; font-size: 100%" type="text" name="value" placeholder="Results Will Come Here :D" rows="9" cols="80">';echo $url_decoding; echo '</textarea>';
					break;

					case 'GzDeflate And Base64 Encoding': 
						$GzDeflate = base64_encode(gzdeflate($value));
						echo '<br><textarea style="font-family: Comic Sans Ms; font-size: 100%" type="text" name="value" placeholder="Results Will Come Here :D" rows="9" cols="80">';echo $GzDeflate; echo '</textarea>';
					break;

					case 'GzInflate And Base64 Decoding': 
						$GzInflate = gzinflate(base64_decode($value));
						echo '<br><textarea style="font-family: Comic Sans Ms; font-size: 100%" type="text" name="value" placeholder="Results Will Come Here :D" rows="9" cols="80">';echo $GzInflate; echo '</textarea>';
					break;

					case 'GzCompress And Base64 Encoding':
						$GzCompress = base64_encode(gzcompress($value));
						echo '<br><textarea style="font-family: Comic Sans Ms; font-size: 100%" type="text" name="value" placeholder="Results Will Come Here :D" rows="9" cols="80">';echo $GzCompress; echo '</textarea>';
					break;

					case 'StrRot-13':
						$decoded = htmlspecialchars_decode($value);
						$strrot13 = str_rot13($decoded);
						echo '<br><textarea style="font-family: Comic Sans Ms; font-size: 100%" type="text" name="value" placeholder="Results Will Come Here :D" rows="9" cols="80">';echo $strrot13; echo '</textarea>';
					break;

					case 'GzUnCompress And Base64 Decoding':
						$GzDecompress = gzuncompress(base64_decode($value));
						echo '<br><textarea style="font-family: Comic Sans Ms; font-size: 100%" type="text" name="value" placeholder="Results Will Come Here :D" rows="9" cols="80">';echo $GzDecompress; echo '</textarea>';
					break;

					case 'Reverse String': // Will Convert Given Text To UU Encoding :P 
						$reversed_string = strrev($value);
						echo '<br><textarea style="font-family: Comic Sans Ms; font-size: 100%" type="text" name="value" placeholder="Results Will Come Here :D" rows="9" cols="80">';echo $reversed_string; echo '</textarea>';
					break;

					case 'UU Encode': // Will Convert Given Text To UU Encoding :P 
						$uuencode = convert_uuencode($value);
						echo '<br><textarea style="font-family: Comic Sans Ms; font-size: 100%" type="text" name="value" placeholder="Results Will Come Here :D" rows="9" cols="80">';echo $uuencode; echo '</textarea>';
					break;

					case 'UU Decode': // Will Convert Encoded UU To Text :P 
						$uudecode = convert_uudecode($value);
						echo '<br><textarea style="font-family: Comic Sans Ms; font-size: 100%" type="text" name="value" placeholder="Results Will Come Here :D" rows="9" cols="80">';echo $uudecode; echo '</textarea>';
					break;

					case 'MD5 Encryption': // Will Convert String To MD5 Hash
						$md5 = md5($value);
						echo '<br><textarea style="font-family: Comic Sans Ms; font-size: 100%" type="text" name="value" placeholder="Results Will Come Here :D" rows="9" cols="80">';echo $md5; echo '</textarea>';
					break;

					case 'Sha1 Encryption': // Will Convert String To SHA1 Hash 
						$sha1 = sha1($value);
						echo '<br><textarea style="font-family: Comic Sans Ms; font-size: 100%" type="text" name="value" placeholder="Results Will Come Here :D" rows="9" cols="80">';echo $sha1; echo '</textarea>';
					break;
					}
				}
			?>
		</div>
		<div class="footer">
			<footer><hr><font>Developed By <a href="https://www.google.com/search?q=An0n 3xPloiTeR" style="color:teal; text-decoration: none;">An0n 3xPloiTeR</a></font><hr></footer><!--  Give a Visist :D  -->
		</div>
	</body>
</html>