<?php
class Student_history extends AppModel {
    public $useTable = "Student_histories";
    public $primarykey = array('UserId', 'LessonId', 'StartDate');
    
}
?>