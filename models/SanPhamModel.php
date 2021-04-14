<?php
class SanPhamModel {
   
    public $id;
    public $name;
    public $price;
    public $status;
    public $description;

    // $data la mot array
    function __construct($data) {
        $this->id = $data['SP_ID'];
        $this->name = $data['SP_TEN'];
        $this->price = $data['SP_GIA'];
        $this->status = $data['SP_TRANG_THAI'];
        $this->description = $data['SP_MO_TA'];
    }

}