<?php
$mobile="9664149754";
$message="hello dear";
$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9664149754&Password=Piet17cs078@&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=choudurZ5qgQ1j7DTv9L") ,true);
if ($json["status"]==="success") {
    echo $json["msg"];
    //your code when send success
}else{
    echo $json["msg"];
    //your code when not send
}
?>