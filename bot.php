<?php

/*
* @PKG : BOT TELEGRAM SOURCE PHP
* @CRT : AMINRNGBR / https://github.com/aminrngbr1122
*
* کص ننت اصکی بری منبع نزنی (:
*
*/

ob_start();

error_log(0);

error_reporting(0);

date_default_timezone_set("Asia/Tehran");

define('API_KEY',"TOKEN"); // توکن شما :

// ==========================================================================
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
// ==========================================================================
function RandomString() {
$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$randstring = null;
for ($i = 0; $i < 9; $i++) {
$randstring .= $characters[
rand(0, strlen($characters))
];
}
return $randstring;
}
// ==========================================================================
function startdate($ghost){
while(0<1){
$ghost = bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$ghost,
'text'=>"<b>$dates</b>",
'parse_mode'=>"html",
])->result->message_id;
}
}
// ==========================================================================
function sendphoto($chat_id, $photo, $caction){
	bot('sendphoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'caction'=>$caction,
	]);
	}
// ==========================================================================
function sendaction($chat_id, $action){
 bot('sendchataction',[
 'chat_id'=>$chat_id,
 'action'=>$action
 ]);
 }
 // ==========================================================================
function senddocument($chat_id, $photo, $captionl){
 bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>$photo,
 'caption'=>$caption,
 ]);
 }
 // ==========================================================================
 function typetextsend($chat_id, $type){
 bot('senddocument',[
 'chat_id'=>$chat_id,
 'type'=>$type,
 ]);
 }
 // ==========================================================================
	function sendvideo($chat_id, $video, $caction){
	bot('sendvideo',[
	'chat_id'=>$chat_id,
	'video'=>$video,
	'caction'=>$caction
	]);
	}
// ==========================================================================
	function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }
// ==========================================================================
function check_channel_member($channel , $chat_id){
	$res = bot("getChatMember" , array("chat_id" => $channel , "user_id" => $chat_id));
	if(isset($res->result->user) && $res->result->status == "member"){
		return "yes";
	}if($res->result->status == "administrator"){
		return "yes";
	}if($res->result->status == "creator"){
		return "yes";
	}else{
	    return "no";
	}
}
// ==========================================================================
function save($filename,$TXTdata)
{
$myfile = fopen($filename, "w") or die("Unable to open file!");
fwrite($myfile, "$TXTdata");
fclose($myfile);
}
function editMessageText($chat_id, $message_id, $text, $parse_mode = null, $keyboard = null)
{
    BoFile('editMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => $text,
        'parse_mode' => $parse_mode,
        'reply_markup' => $keyboard,
        'disable_web_page_preview' => true,
    ]);
}
// ==========================================================================

@unlink("./error_log");

$update = json_decode(file_get_contents('php://input'));

$dates = date("h:i:s");

$linknet = $_SERVER['HTTP_HOST'];

// ==========================================================================
if(isset($update->message)){
$message = $update->message;
$message_id = $message->message_id;
$type = $message->chat->type;
$text = $message->text;
$chat_id = $message->chat->id;
$tc = $message->chat->type;
$first_name = $message->from->first_name;
$from_id = $message->from->id;
$username = $message->from->username;
}else{}
if(isset($update->callback_query)){
$callback_query = $update->callback_query;
$callback_query_id = $callback_query->id;
$data = $callback_query->data;
$fromid = $callback_query->from->id;
$messageid = $callback_query->message->message_id;
$chatid = $callback_query->message->chat->id;
$username = $update->callback_query->from->username;
$last_name = $update->callback_query->from->last_name;
$first_name = $update->callback_query->from->first_name;
$data = $update->callback_query->data;
$data_id = $update->callback_query->id;
$chat_id = $update->callback_query->message->chat->id;
$from_id = $update->callback_query->from->id;
$type = $update->callback_query->chat->type;
$message_id = $update->callback_query->message->message_id;
$query = $update->callback_query;
}else{}
// ==========================================================================

// کد های شما _____________ >

// ==========================================================================
?>