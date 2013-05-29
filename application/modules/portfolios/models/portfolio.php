<?php
class Portfolio extends ORM {

    var $table = 'portfolios';

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>