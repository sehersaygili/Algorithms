
<?php

$todoList = array(
    array('task' => 'shopping', 'date' => '2023-08-05', 'priority' => 'High', 'done' => false),
    array('task' => 'wash the dishes', 'date' => '2023-08-06', 'priority' => 'Medium', 'done' => false),
);

function displayToDoList($todoList) {
    echo "Yapılacak İşler Listesi:\n";
    foreach($todoList as $index => $task) {
        $status = ($task['done']) ? "[X]" : "[ ]";
        echo $status . " " . $task["task"] . " " . $task["date"] . " Öncelik : " . $task['priority'] . "\n";
    }
}

function addTaskToList(&$todoList,$task, $priority,$date) {
    $newTask =[
        'task' => $task, 'priority' => $priority, 'date' =>$date, 'done' =>false
    ];
    array_push($todoList,$newTask);
}

function markTaskAsDone(&$todoList, $taskIndex) {
    if(isset($todoList[$taskIndex])){
        $todoList[$taskIndex]['done'] = true;
    }
}
function removeTaskFromList(&$todoList, $taskIndex) {
    if(isset($todoList[$taskIndex])) {
        array_splice($todoList,$taskIndex,1,null);
    }
}

displayToDoList($todoList);
addTaskToList($todoList, 'Toplantıya katıl', '2023-08-07', 'High');
displayToDoList($todoList);
markTaskAsDone($todoList, 0);
displayToDoList($todoList);
removeTaskFromList($todoList,2);
displayToDoList($todoList);
?>