<?php
class addToDoTask extends \Task
{
    public $task;

    public function setTask($task)
    {
        $this->task = $task;
    }
    
    public function main()
    {
        $manager = new ToDoManager\ToDoMgr('todo.xml');
        $manager->addTask($this->task);
    }
}
?>