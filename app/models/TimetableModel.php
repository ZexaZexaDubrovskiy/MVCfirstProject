<?php

require_once 'database.php';

class TimetableModel
{
    public function objectsTimetable()
    {
        $db = new database();
        $object = $db->queryDB();
        return $object->query("SELECT * FROM timetable");
    }
}