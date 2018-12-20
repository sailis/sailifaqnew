<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
$my_file = 'file.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = 'Test data to see if this works!';
fwrite($handle, $data);

$storagePath = Storage::disk('s3')->put("uploads", $my_file, 'public');
}



