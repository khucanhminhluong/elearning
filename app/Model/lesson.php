<?php 
class Lesson extends AppModel {
	public $useTable = 'lessons';
	public $name = 'Lesson';
	public $primaryKey = 'LessonId';

	public $belongsTo = array(
		'Author' => array(
			'className' => 'User',
			'foreignKey' => 'UserId',

			// 'conditions' => array(
			// 	'AND' => array(
			// 		'User.UserType' => "2",
			// 		"`Lesson`.`UserId` = `User`.`UserId`"
			// 		),
			// 	),
		
			'fields' => array(
				'Author.Username',
				'Author.Status',
				'Author.UserId'
				),
		),
	);
}

?>