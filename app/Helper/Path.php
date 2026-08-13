<?php
 namespace App\Helper;
class Path{

    public static function dashboardPath($path)
    {
      return asset('assets/dashboard/'.$path);
    }

    public function dashboardImage()
    {
        return asset('assets/dashboard');
    }
}


?>
