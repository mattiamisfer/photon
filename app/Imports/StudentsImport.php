<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'role_id'     =>   @$row['roll_number'],
            'name'    => @$row['name'],
            'class' =>  @$row['class'],
            'school' => @$row['school'],
            'district' => @$row['district']
        ]);
    }
}
