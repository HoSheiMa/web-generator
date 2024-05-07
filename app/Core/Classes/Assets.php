<?php


namespace App\Core\Classes;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Assets
{
    public function __construct(public $folder)
    {
    }
    public function saveFile($name, $content)
    {
        File::ensureDirectoryExists($this->folder . '/storage');
        File::put($this->folder . '/storage/' . $name, $content);
        return  './storage/' . $name;
    }
    public function saveFileFromURL($url)
    {
        File::ensureDirectoryExists($this->folder . '/storage');
        $info =  parse_url($url, PHP_URL_PATH);
        $file_name =   basename($info);
        info('check file' . $file_name, [Storage::exists('images/' .  $file_name)]);
        // ? check if we have backup for this file in our system
        if (
            Storage::exists('public/images/' .  $file_name)
        ) {
            File::copy(storage_path() . '/app/public/images/' .  $file_name, $this->folder . '/storage/' . $file_name);
        } else {
            $contents = file_get_contents($url);
            Storage::put('public/images/' .  $file_name, $contents);
            File::put($this->folder . '/storage/' . $file_name, $contents);
        }
        return  './storage/' . $file_name;
    }
}
