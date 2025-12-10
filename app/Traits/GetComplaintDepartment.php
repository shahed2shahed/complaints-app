<?php

namespace App\Traits;

use Storage;
use App\Models\IndCompaign;
use App\Models\IndCompaigns_photo;
use App\Models\ComplaintDepartment;

trait GetComplaintDepartment
{

public function getComplaintDepartment():array{
    $departments = ComplaintDepartment::all();
    foreach ($departments as $department) {
        $dep [] = ['id' => $department->id  , 'department_name' => $department->department_name];
    }
    $message = 'all departments are retrived successfully';

    return ['departments' =>  $dep , 'message' => $message];
    }




}
