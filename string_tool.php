<?php
error_reporting(0);
if (isset($argv[0])) {
	echo "
+----------------------------------------+\n
|        String Conversion Tool          |\n
| Coded By: Umar Arfeen (An0n 3xPloiTeR) |\n
+----------------------------------------+\n\nUsage: php cli.php command string\n";
}
if (empty($argv[1]) || $argv[1] == "--help" || $argv == "help") {
	echo "  General Options(Commands): \n";
	echo "\t-h, --help\t\t For Showing Help\n";
	echo "\n  For Encoding && Decoding in Base64:\n";
	echo "\t--be, base64_encode\t For Base64 Encoding\n";
	echo "\t--bd, base64_decode\t For Base64 Decoding\n";
	echo "\n  For Encoding && Decoding in Url:\n";
	echo "\t--ue, uu_encode\t\t For UU Encoding\n";
	echo "\t--ud, uu_decode\t\t For UU Decoding\n";
	echo "\n  For Encoding in MD5:\n";
	echo "\t--md5, md5\t\t For MD5 Encoding\n";
	echo "\n  For Encoding in Sha1:\n";
	echo "\t--sha1, sha1\t\t For Sha1 Encoding\n";
}
if ($argv[1] == "--be" || $argv[1] == "base64_encode") {
	$base64_encode = base64_encode($argv[2]);
	echo "Base64 Encoding\nResult: ".$base64_encode."\n";
}
if ($argv[1] == "--bd" || $argv[1] == "base64_decode") {
	$base64_decode = base64_decode($argv[2]);
	echo "Base64 Decoding\nResult: ".$base64_decode."\n";
}
if ($argv[1] == "--ue" || $argv[1] == "uu_encode") {
	$uu_encode = convert_uuencode($argv[2]);
	echo "UU Encoding\nResult: ".$uu_encode."\n";
}
if ($argv[1] == "--ud" || $argv[1] == "uu_decode") {
	$uu_decode = convert_uudecode($argv[2]);
	echo "UU Decoding\nResult: ".$uu_decode."\n";
}
if ($argv[1] == "--md5" || $argv[1] == "md5") {
	$md5_conversion = md5($argv[2]);
	echo "MD5 Conversion\nResult: ".$md5_conversion."\n";
}
if ($argv[1] == "--sha1" || $argv[1] == "sha1") {
	$sha1 = sha1($argv[2]);
	echo "Sha1 Conversion\nResult: ".$sha1."\n";	
}
if (empty(isset($argv[1])) || empty(isset($argv[2]))) {
	echo "\nThere Is Some Problem In Your Input\n";
}
?>