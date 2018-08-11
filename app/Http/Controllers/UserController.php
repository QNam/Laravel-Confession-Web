<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
	private $fileSavePlace = 'uploads/avatars';
    private $fileStoragePath = 'uploads\avatars\\';

    public function setAvatarParth($filename)
    {
    	$path = storage_path('app\\'.$this->fileStoragePath. $filename);

        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }
}
