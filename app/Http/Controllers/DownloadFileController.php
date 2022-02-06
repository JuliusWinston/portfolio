<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class DownloadFileController extends Controller
{
    public function downloadFile(){
        return Storage::download('public/files/pdfs/cv.pdf');
    }
}
