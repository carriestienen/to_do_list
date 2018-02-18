<?php

class task {

	$completed = false;
	$task_text = "";

	function setTaskText($str){
		$this->$task_text = $str;
	}

	function markComplete(){
		$this->$completed = true;
	}
}