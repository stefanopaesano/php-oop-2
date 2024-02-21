<?php


class nuovoprodotto extends Product {
    public $discount;

    public function __construct($IDdelprodotto, $name, $description, $price, $categories, $discount) {
        parent::__construct($IDdelprodotto, $name, $description, $price, $categories);
        $this->discount = $discount;
    }

    public function get_info() {
        $info = parent::get_info();
        $info .= '<br>Sconto: ' . $this->discount;
        return $info;
    }
}

?>