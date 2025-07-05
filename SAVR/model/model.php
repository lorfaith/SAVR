<?php
// File: Model/model.php

class Model
{
    public $db = null;

    function __construct()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        try {
            $this->db = new mysqli('localhost', 'root', '', 'SAVR');
        } catch (mysqli_sql_exception $e) {
            exit('Database connection could not be established: ' . $e->getMessage());
        }
    }
}
?>
