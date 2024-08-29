<?php 
class makanan{
public $nama;
  public $warna;

  public function __construct($nama, $warna){
    $this->nama = $nama;
    $this->warna = $warna;
  }
}

$bakso = new makanan("bakso", "nasi goreng");
$bakso = new makanan("bakso", "nasi goreng");
print_r($bakso);
print"<p>";
print_r ($bakso);

print_r("<p><strong>by: syarifah nayla rizky");
