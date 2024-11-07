<?php 

    namespace App\School\Repositories;

    use App\School\Entities\Teacher;

    interface TeacherRepository{
        public function save(Teacher $teacher);
        public function findById($id);
        
    }