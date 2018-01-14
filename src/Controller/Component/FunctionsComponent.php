<?php 

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\Controller;

class FunctionsComponent extends Component
{
  public function  uploadProductImage($image, $dir = 'img', $model){
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
            $uploadOk = 0;
            }

            if ($uploadOk == 0) {
            $this->Flash->error('Sorry, your file was not uploaded.');

            } else {
            if (move_uploaded_file($image["tmp_name"], $target_file)) {
                $link = $this->loadModel($model);
                $file = $this->$link->newEntity();

                $file->link = basename($image["tmp_name"]["name"]);
                $file->product_id = $product_id_create;
                $file->feature = 1;
                // var_dump($image);
                if ($this->ProductImages->save($image)) {

                    $this->Flash->success('The image has been saved.');
                     return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error('The image could not be saved. Please, try again.');
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
            }

            }
    }

}
?>
