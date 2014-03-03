<?php

class File extends AppModel {

	public $actsAs = array(
		'Uploader.Attachment' => array(
			// Do not copy all these settings, it's merely an example
			'FileLink' => array(
				'nameCallback' => '',
				'append' => '',
				'prepend' => '',
				'tempDir' => TMP,
				'uploadDir' => '',
				'transportDir' => '',
				'finalPath' => '',
				'dbColumn' => 'FileLink',
				'metaColumns' => array(),
				'defaultPath' => '',
				'overwrite' => false,
				'stopSave' => true,
				'allowEmpty' => true,
				'transforms' => array(),
				'transformers' => array(),
				'transport' => array(),
				'transporters' => array(),
				'curl' => array()
			)
		)
	);
}

?>