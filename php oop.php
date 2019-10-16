<?php
class Subscribers(
 public $first_name;
 public $last_name;
 public $id_number;
 public $mobile_number;
 public function __construct($first_name, $last_name, $id_number, $mobile_number) {
     $this->first_name=$first_name;
     $this->last_name=$last_name;
     $this->id_number=$id_number;
     $this->mobile_number=$mobile_number;
}
public function getFirstname (
    return $this->first_name;
)
)
$customer= new Subscribers;
echo getFirstName();
?>