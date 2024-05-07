<?php


namespace App\Export;

use FilesystemIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class Zip
{
    private function addContent(\ZipArchive $zip, string $path)
    {
        /** @var SplFileInfo[] $files */
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator(
                $path,
                FilesystemIterator::FOLLOW_SYMLINKS
            ),
            RecursiveIteratorIterator::SELF_FIRST
        );

        while ($iterator->valid()) {
            if (!$iterator->isDot()) {
                $filePath = $iterator->getPathName();
                $relativePath = substr($filePath, strlen($path) + 1);

                if (!$iterator->isDir()) {
                    $zip->addFile($filePath, $relativePath);
                } else {
                    if ($relativePath !== false) {
                        $zip->addEmptyDir($relativePath);
                    }
                }
            }
            $iterator->next();
        }
    }
    public function create($folder_path, $output_path, $zip_file_name = "test.zip")
    {
        $filePath = $output_path .  '/' . $zip_file_name;
        $zip = new \ZipArchive();

        if ($zip->open($filePath, \ZipArchive::CREATE) !== true) {
            throw new \RuntimeException('Cannot open ' . $filePath);
        }

        $this->addContent($zip, ($folder_path));
        $zip->close();
    }
}
