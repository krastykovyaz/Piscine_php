<?php

require_once('Ship.class.php');

class ImperatorDeus extends Ship
{

    public static function doc()
    {
        return file_get_contents(get_called_class().'.doc.txt');
    }

    public function __construct($pos_x, $pos_y, $angle, $color)
    {
        parent::__construct($pos_x, $pos_y, $angle, $color);
        $this->size_x = 2;
        $this->size_y = 7;
    }
   
}

?>