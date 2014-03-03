<?php
class FileController extends AppController {

	var $name = 'Galleries';
	var $components = array('Uploader.Uploader');
	
	function beforeFilter(){
        $this->Uploader->uploadDir = '\files\uploads\\'; //thu muc chua file upload
        $this->Uploader->enableUpload = true;
        $this->Uploader->maxFileSize = '2M'; // quy dinh dung luong duoc upload len toi da la 2 Megabytes
        $this->Uploader->maxNameLength = 25;//do dai cua ten file
        $this->Uploader->tempDir = TMP;
    }
	function upload() {
		if (!empty($this->data)) {
			 if ($data = $this->Uploader->upload('fileName')) {
				echo "Upload thanh cong";
			//do something;
			 }else{
			echo "Co loi xay ra! Vui long thu lai!";
		 }	
		}
	}
}
?>