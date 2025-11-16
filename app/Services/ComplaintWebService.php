<?php


namespace App\Services;

use App\Models\User;
use App\Models\Complaint;
use App\Models\ComplaintAttachment;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Auth;
use Throwable;
use Exception;
use Storage;
use Illuminate\Support\Facades\File;


class ComplaintWebService
{
        // // show my complaints
        // public function viewMyComplaints(): array{
        //     $user = Auth::user();
        //     $complaints =  Complaint::with('complaintType' , 'complaintDepartment' , 'complaintStatus')->where('user_id' , $user->id)->get();

        //     $complaint_det = [];

        //     foreach ($complaints as $complaint) {
        //         $complaint_det [] = [
        //             'complaint_type' => ['id' => $complaint->complaintType['id'] , 'type' => $complaint->complaintType['type']],
        //             'complaint_department' => ['id' => $complaint->complaintDepartment['id'] , 'department_name' => $complaint->complaintDepartment['department_name']],
        //             'location' => $complaint['location'],
        //             'complaint_status' => ['id' => $complaint->complaintStatus['id'] , 'status' => $complaint->complaintStatus['status']],
        //         ]; 
        //     }

        //      $message = 'your complaints are retrived succesfully';
        //      return ['complaints' => $complaint_det , 'message' => $message];
        // }

        // // show complaint details
        // public function viewComplaintDetails($complaintId): array{
        //     $user = Auth::user();
        //     $complaint =  Complaint::with('complaintType' , 'complaintDepartment' , 'complaintStatus' , 'complaintAttachments')->find($complaintId);

        //     $attachments = [] ;

        //         foreach ($complaint->complaintAttachments as $complaintAttachment) {
        //             $attachments [] = [
        //                 'id' => $complaintAttachment->id , 
        //                 'attachment' => url(Storage::url($complaintAttachment->attachment))
        //             ];
        //         }

        //         $complaint_det = [
        //             'complaint_type' => ['id' => $complaint->complaintType['id'] , 'type' => $complaint->complaintType['type']],
        //             'complaint_department' => ['id' => $complaint->complaintDepartment['id'] , 'department_name' => $complaint->complaintDepartment['department_name']],
        //             'location' => $complaint['location'],
        //             'problem_description' => $complaint['problem_description'],
        //             'complaint_status' => ['id' => $complaint->complaintStatus['id'] , 'status' => $complaint->complaintStatus['status']],
        //             'attachments' => $attachments
        //         ]; 

        //      $message = 'complaint details are retrived succesfully';
        //      return ['complaint' => $complaint_det , 'message' => $message];
        // }
}