<?php
    class students{
        public $std_name="代成鑫";
        public $std_class="计算机17-1";
        public $std_no=1704010103;
        public function getA(){
            echo $this->std_name.' '.$this->std_class.' '.$this->std_no;
        }
    }
    $s1=new students();
    $s1->getA();
?>