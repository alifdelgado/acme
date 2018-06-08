<?php
namespace Acme\Classes;

use Respect\Validation\Validator as Valid;

class Validator{
  public function isValid($validation_data){
    $errors = [];

    foreach($validation_data as $key => $value){
      $rules = explode("|", $value);
      foreach($rules as $rule){
        if(isset($_REQUEST[$key])){
          $exploded = explode(":", $rule);
          switch($exploded[0]){
            case 'min':
              $min = $exploded[1];
              if(Valid::string()->length($min)->Validate($_REQUEST[$key]) == false){
                $errors[] = $key . " must be at least " . $min . " characters long!";
              }
            break;
            case 'email':
              if(Valid::email()->Validate($_REQUEST[$key])==false){
                $errors[] = $key . " must be a valid email address!";
              }
            break;
            case 'equalTo':
              if(Valid::equals($_REQUEST[$key])->Validate($_REQUEST[$exploded[1]]) == false){
                $errors[] = "Value does not match verification value!";
              }
            break;
            default:
          }
        }else{
          $errors[] = "No value found!";
        }
      }
    }
  }
}
