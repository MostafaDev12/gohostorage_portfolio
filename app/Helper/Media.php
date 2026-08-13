<?php

namespace App\Helper;

use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class Media
{
    // Make storeImage static
    public static function storeImage($imageFile, $folder)
    {
        try {
            // Generate a unique filename
            $name_gen = hexdec(uniqid()) . '.' . $imageFile->getClientOriginalExtension();

            // Define the full path
            $path = public_path('uploads/' . $folder);

            // Ensure the directory exists
            if (!file_exists($path)) {
                mkdir($path, 0755, true); // Create directory if it does not exist
            }

            // Initialize ImageManager
            $manager = new ImageManager(new Driver());

            $image = $manager->read($imageFile);

            // Save the image
            $image->save($path . '/' . $name_gen);

            return $name_gen;
        } catch (\Exception $e) {

            return null;
        }
    }

    public static function uploadAndAttachImage($imageFile, $folder = 'uploads')
    {
        return self::storeImage($imageFile, $folder);
    }

    public static function removeFile($folder, $file)
    {
        $path = public_path('uploads/' . $folder . '/' . $file);

        if (file_exists($path)) {
            try {
                unlink($path);
            } catch (\Exception $e) {

                throw new \Exception("Failed to Delete {$file}.");
            }
        }
    }
}
