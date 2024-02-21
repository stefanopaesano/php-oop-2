<?php
class OssoPerCani extends Product {
    public $materiali;
    public $provenienza;

    
    public function __construct($IDdelprodotto, $name, $description, $price, $categories, $materiali, $provenienza) {
        
        parent::__construct($IDdelprodotto, $name, $description, $price, $categories);
       
        $this->materiali = $materiali;
        $this->provenienza = $provenienza;
    }

    
    public function get_info() {
        
        $info = parent::get_info();
        
        $info .= '<br>Materiali: ' . $this->materiali;
        $info .= '<br> provenienza: ' . $this->provenienza;
        return $info;
    }
}


$ossoPerCani = new OssoPerCani("i456xyz", "Osso per cani", "Osso resistente per cani di taglia grande", 19.99, "Cani", "gomma", "nazzaret");

?>
?>
