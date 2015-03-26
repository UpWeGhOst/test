<?php
class addToDoTask extends \Task
{
    public $task;

    public function setTask($task)
    {
        $this->task = $task;
    }
    /**
     *  Called by the project to let the task do it's work. This method may be
     *  called more than once, if the task is invoked more than once. For
     *  example, if target1 and target2 both depend on target3, then running
     *  <em>phing target1 target2</em> will run all tasks in target3 twice.
     *
     *  Should throw a BuildException if someting goes wrong with the build
     *
     *  This is here. Must be overloaded by real tasks.
     */
    public function main()
    {
        $manager = new ToDoManager\ToDoMgr("todo.xml");
        $manager->addTask($this->option);
    }
}
?>