<?php 

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\Controller;

class FunctionsComponent extends Component
{
  public function  uploadProductImage($image, $dir = 'img'){
        $result = [
            'status' => 'fail',
            'link' => '',
            'message' =>''
        ];
     if (!empty($image["name"])) {
            $target_dir = WWW_ROOT . $dir.DS;
            $target_file = $target_dir . basename($image["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            $check = getimagesize($image["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
             $result['message'] = 'Sorry, your file was not uploaded.';
            $uploadOk = 0;
            }

            if ($uploadOk == 0) {
                $result['message'] = 'Sorry, your file was not uploaded.';

            } else {
            if (move_uploaded_file($image["tmp_name"], $target_file)) {
                 $result['status'] = 'success';
                $result['data'] = DS.$dir.$image["tmp_name"];
            } else {
                return -1;
            }
            }

            }
            else  $result['status'] = 'fail';
    }
     return $result;

}
?>
