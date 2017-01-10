<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;

class ChatController extends Controller
{
    public function submitChat(Request $request){
    	$taskId = $request->input('task_id');
    	$check = $this->checkMessages($request->input('task_id'));
    	$count = count($check);
    	if($count == 0 || $count == ''){
    		$date = date("Y-m-d h:i:sa");
	    	$task_id = $request->input('task_id');
	    	/*$name = $request->input('message')['name'];
	    	$id = $request->input('message')['id'];
	    	$text = $request->input('message')['text'];
	    	$array = [
	    		"name"=>"".$name."",
	    		"id"=>"".$id."",
	    		"text"=>"".$text."",
	    		"date"=>$date
	    	];*/
	    	$array = [];
	    	$incomingMessage = [$request->input('message')];
	    	$merged = array_merge($array, $incomingMessage);
	    	$req = new Chat;
	    	$req->task_id = $taskId;
	    	$req->messages = $merged;
	    	$req->save();
	    	return $count;
    	}else{
    		$incomingMessage = [$request->input('message')];
    		//$array = array_push($check, $request->input('message'));
    		$array = $check[0]['messages'];
    		$merged = array_merge($array, $incomingMessage);
    		$req = Chat::where('task_id', $taskId)
    					->update(['messages' => json_encode($merged)]);
    		return $count;
    	}
    }

    protected function checkMessages($taskId){
    	$check = Chat::select('messages')
    				->where('task_id', '=', $taskId)
    				->get();
    	return $check;
    }

    public function getMessages(Request $request){
    	return $this->checkMessages($request->input('task_id'));
    }
}
