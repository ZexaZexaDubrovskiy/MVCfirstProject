<?php

$path = __DIR__ . '/../models/TimetableModel.php';
require_once($path);

class timetableController extends Controller
{
    public function index()
    {
        $object = new TimetableModel();
        $objects = $object->objectsTimetable();
        //сделать обращение к модели через метод, но у меня круче
        //$timetable = $this->model('Timetable');
        $this->view('home/timetable', $objects);
    }
}