<?php 

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\Controller;

class FunctionsComponent extends Component
{
    public function test(){
        return 'hihi';
    }
  public function  uploadImage($image, $path = 'img'){
        $result = [
            'status' => 'fail',
            'message' =>''
        ];
     if (!empty($image["name"])) {
            $target_dir = WWW_ROOT . $path.DS;
            $target_file = $target_dir . basename($image["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            $check = getimagesize($image["tmp_name"]);
            if($check !== false) {
                $result['message'] = "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $result['message'] = 'File is not an image.';
                $uploadOk = 0;
            }
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            $result['message'] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
            $uploadOk = 0;
            }

            if ($uploadOk == 1) {
            if (move_uploaded_file($image["tmp_name"], $target_file)) {
                 $result['status'] = 'success';
                 $result['data'] = '/'.$path.$image["name"];
            } else {
                $result['message'] = 'can upload';
            }
            }

            }
            else   $result['message'] = 'empty';
          return $result;
    }
   

}
?>
