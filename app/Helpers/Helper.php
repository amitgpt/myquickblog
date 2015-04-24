<?php namespace App\Helpers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
 
class Helper {
 
    public static function uploadImageFile() {
 
				$file = Input::file('file');
				$destinationPath = 'images/';
				$extension = $file->getClientOriginalExtension(); 
				$filename = str_random(6).".".$extension;
				$upload_success = $file->move($destinationPath, $filename);
				if($upload_success)
				{
					return $filename;
				}
				else{
						return 'uploding fail';
				}
				
    }
    //home content validation
    public static function homeValidation(){
			$validator = Validator::make(
					[
						'title'     => Input::get('title'),
						'sub_title' => Input::get('sub_title')
					],
					[
						'title'     => 'required',
						'sub_title' => 'required'
					]
           );
          if(Input::hasFile('file')){
			  $validator = Validator::make(
					[
						'file'     =>Input::file('file')
					],
					[
						'file'     => 'required|image|mimes:jpeg,jpg,png,bmp'
						
					]);
			}
			
			return $validator;
	
	}
	
	//abount content validation
	public static function aboutValidation(){
			
			$validator = Validator::make(
					[
						'title'     => Input::get('title'),
						'sub_title' => Input::get('sub_title'),
						'content'   => Input::get('content')
					],
					[
						'title'     => 'required',
						'sub_title' => 'required',
						'content'   => 'required'
					]
           );
            if(Input::hasFile('file')){
			  $validator = Validator::make(
					[
						'file'     =>Input::file('file')
					],
					[
						'file'     => 'required|image|mimes:jpeg,jpg,png,bmp'
						
					]);
			}
		return $validator;
	
	}
	
	//contact validation
	public static function contactValidation(){
			$validator = Validator::make(
					[
						'title'     => Input::get('title'),
						'sub_title' => Input::get('sub_title'),
						'content'   => Input::get('content')
					],
					[
						'title'     => 'required',
						'sub_title' => 'required',
						'content'   => 'required'
					]
           );
            if(Input::hasFile('file')){
			  $validator = Validator::make(
					[
						'file'     =>Input::file('file')
					],
					[
						'file'     => 'required|image|mimes:jpeg,jpg,png,bmp'
						
					]);
			}
		return $validator;
	}
	
	//post validation
	public static function postValidation(){
		$validator = Validator::make(
					[
						'title'     => Input::get('title'),
						'sub_title' => Input::get('sub_title'),
						'content'   => Input::get('content')
					],
					[
						'title'     => 'required',
						'sub_title' => 'required',
						'content'   => 'required'
					]
           );
           if(!Input::get('hiddentitle')){
					$validator = Validator::make(
						[
							'title'     => Input::get('title'),
						],
						[
							'title'     => 'required|unique:post',
							
						]
					);
			}
            if(Input::hasFile('file')){
			  $validator = Validator::make(
					[
						'file'     =>Input::file('file')
					],
					[
						'file'     => 'required|image|mimes:jpeg,jpg,png,bmp'
						
					]);
			}
		return $validator;
	
	}
	
	
	
	//add and update Success Notification
	public static function successNotification(){
		$notification[]=array(
				  'message'  => 'Add or Update successfully',
				  'type'   =>'success',
				  'timeout'  =>'5'
				);
		return $notification;
	
	}
	//delete Success Notification
	public static function deleteNotification(){
		$notification[]=array(
				  'message'  => 'Delete successfully',
				  'type'   =>'success',
				  'timeout'  =>'5'
				);
		return $notification;
	
	}
	//fail Notification
	public static function failNotification(){
		$notification[]=array(
				  'message'  => '!Opps, fail ',
				  'type'   =>'error',
				  'timeout'  =>'5'
				);
		return $notification;
	
	}
 
}
 
?>
