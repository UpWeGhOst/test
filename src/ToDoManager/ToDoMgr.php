<?php
namespace ToDoManager;

class ToDoMgr {
	protected $fileName;
	
	function __construct($fileName) {
		$this->fileName = $fileName;
	}
	
	function __toString() {
		$result = '';

		if (file_exists($this->fileName)) {
			$xml = simplexml_load_file($this->fileName);
			foreach($xml->task as $task) {
				$result .= $task.'<br />';
			}
		}
		
        return $result;
    }
	
	function addTask($task) {
		$dom = new \DomDocument;
		if (file_exists($this->fileName)) {
			$dom->load($this->fileName);
			$dom->formatOutput = true;
			
			$root = $dom->documentElement;
		} else {
			$dom = new \DomDocument('1.0');
			$dom->formatOutput = true;
			
			$root = $dom->createElement('todo');
			$root = $dom->appendChild($root);
		}			
		
		$task_element = $dom->createElement('task');
		$task_element = $root->appendChild($task_element);
				
		$text = $dom->createTextNode($task);
		$text = $task_element->appendChild($text);
				
		$dom->save($this->fileName);
    }
}

?>