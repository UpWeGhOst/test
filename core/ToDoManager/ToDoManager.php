<?php
namespace ToDoManager;

class ToDoMgr {
	protected $fileName;
	
	function construct($fileName) {
		$this->fileName = $fileName;
	}
	
	function toString() {
		$result = '';

        $fileHandler = fopen($this->fileName, "rt");
        while($i = fread($fileHandler, filesize($filename)))
        {
            $result .= $i . "<br />";
        }
		fclose($this->fileName);
        return $result;
    }
	
	function addTask($task)
    {
        $file =  fopen($this->fileName, "at");
        fwrite($file, $task . "\n");
        fclose($file);
    }
}

?>