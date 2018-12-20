<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UploadFileController extends Controller {
    public function index() {
        return view('uploadfile');
    }
    public function showUploadFile(Request $request) {
        public function store(Request $request)
        {
            if($request->hasFile('profile_image')) {

                //get filename with extension
                $filenamewithextension = $request->file('profile_image')->getClientOriginalName();

                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                //get file extension
                $extension = $request->file('profile_image')->getClientOriginalExtension();

                //filename to store
                $filenametostore = $filename.'_'.time().'.'.$extension;

                //Upload File to s3
                Storage::disk('s3')->put($filenametostore, fopen($request->file('profile_image'), 'r+'), 'public');

                //Store $filenametostore in the database
                return redirect('image')-> with('status','File Uploaded Successfully');




            }
        }
}