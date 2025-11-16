<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use App\Http\Responses\response;
use App\Services\ComplaintWebService;
// use App\Http\Requests\Complaint\AddComplaintRequest;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class ComplaintsWebController extends Controller
{
    private ComplaintWebService $complaintWebService;

    public function __construct(ComplaintWebService  $complaintWebService){
        $this->complaintWebService = $complaintWebService;
    }

    // // add new complaint
    // public function addComplaint(): JsonResponse {
    //     $data = [] ;
    //     try{
    //         $data = $this->complaintWebService->addComplaint($request);
    //        return Response::Success($data['complaint'], $data['message']);
    //     }
    //     catch(Throwable $th){
    //         $message = $th->getMessage();
    //         $errors [] = $message;
    //         return Response::Error($data , $message , $errors);
    //     }
    // }
}
