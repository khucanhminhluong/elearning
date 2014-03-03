<?php
   echo $form->create('Gallery', array('type' => 'file'));
   echo $form->input('fileName', array('type' => 'file'));
   echo $form->end('Upload');
?>