<?php

namespace App\Help;
use Intervention\Image\Facades\Image;

class Imageupload{

	public $storage_path='';
	public $prev_name='';
	//$file_name is the file input field name, $filepath is the folder name
    public function __construct($file_name, $filepath, $prevname){
				//$file_name===file field, $filepath=="folder", $prevname=previous name
				$url="http://$_SERVER[HTTP_HOST]";
				//$img=Image::make($file_name);
                ///name with extension
               // $nameext=$file_name->getClientOriginalName();
                //only file name
                //$filename=pathinfo($nameext,PATHINFO_FILENAME);
                //only extension
                //$ext=$file_name->guessExtension();
                //$ext=strtolower($ext);
                //$storage=uniqid().".".$ext;
				//$path="../storage/app/public/$filepath";
                //$gals = $file_name->move($path,$storage);
				//$this->storage_path="$url/storage/$filepath/".$storage;
				//$this->prev_name = $prevname;*
				/**
					Just uncomment the code to use. 
				
				*/
				
				//$width = Image::make($file_name)->width();
				//$height = Image::make($file_name)->height();
				$path = uniqid().'.'.$file_name->getClientOriginalExtension();
				/*if($height >400){
					$resize_image = Image::make($file_name);
					$resize_image->orientate();
					$resize_image->resize(350, null, function ($constraint) {
						$constraint->aspectRatio();
					});
					$resize_image->save("../storage/app/public/$filepath/img".$path);
				}else{*/
					$resize_image = Image::make($file_name);
					$resize_image->save("../public/$filepath/img".$path);
				//}
				$storage="img".$path;
				//$this->storage_path=$width; 
				//dd($storage);
				//$this->storage_path="$url/storage/$filepath/".$storage;
				$this->storage_path=$storage;
				$this->prev_name = $prevname;
				
				
				
    }
}

?>