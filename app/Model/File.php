<?php

class File extends AppModel {

public $actsAs = array(
    'Uploader.Attachment' => array(
        'image' => array(
            'overwrite' => false,
            'uploadDir' => 'uploads/jugyou',
            'finalPath' => '',
            'dbColumn' => 'image'
        )
    ),
    'Uploader.FileValidation' => array(
		'image' => array(
			'minWidth' => 100,
			'minHeight' => 100,
			'extension' => array('gif', 'jpg', 'png', 'jpeg', 'pdf'),
			'filesize' => 5242880,
			'required' => true
		)
	)
);
}

?>