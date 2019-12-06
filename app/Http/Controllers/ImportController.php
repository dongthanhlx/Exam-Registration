<?php

namespace App\Http\Controllers;

use App\Imports\LocationImport;
use App\Imports\RoomImport;
use App\Imports\StudentAccountImport;
use App\Imports\StudentInfoImport;
use App\Imports\StudentListOfSubjectImport;
use App\Imports\SubjectListImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends AdminController
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function importStudentAccount()
    {
        $this->import(new StudentAccountImport());
    }

    public function importStudentInfo()
    {
        $this->import(new StudentInfoImport());
    }

    public function importStudentListOfSubject()
    {
        $this->import(new StudentListOfSubjectImport());
    }

    public function importSubjectList()
    {
        $this->import(new SubjectListImport());
    }

    public function importRoom()
    {
        $this->import(new RoomImport());
    }

    public function importSubjectInfo()
    {
        $this->import(new SubjectListImport());
    }
}
