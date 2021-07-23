<?php

namespace App\Validation;

class CustomRules
{
	 public function date_check(string $str, string $error=null): bool
	 {
	     if ($str < date('y-m-d')){

             return false;
         }

         return true;
	 }
}
