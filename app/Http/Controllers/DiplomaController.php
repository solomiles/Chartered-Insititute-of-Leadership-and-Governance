<?php

namespace App\Http\Controllers;

use App\Models\Diploma;
use App\Traits\EmailTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DiplomaController extends Controller
{
    //
    use EmailTrait;
    /**
     * create/submit membership form
     * @param Request $request
     * @return Response
     */

     public function create(Request $request)
     {
         
         //validation rules
         $validate = Validator::make($request->all(), [
             'firstname' => 'required',
             'lastname' => 'required',
             'email' => 'required|email',
             'resume' => 'required',
             'program' => 'required',
             'country' => 'required'
         ]);
 
         if ($validate->fails()) {
             return response([
                 'status' => false,
                 'errors' => $validate->errors()->messages(),
             ], 400);
         }

        $file = $request['resume'];
        $stored = Storage::put('/public/diploma', $file);
        if ($stored) {
            $resume = basename($stored);
        } else {
            return response([
                'status' => false,
                'message' => 'Error while Uploading file'
            ], 400);
        }

         $diploma = new Diploma;
         $diploma->firstname = $request->firstname;
         $diploma->lastname = $request->lastname;
         $diploma->email = $request->email;
         $diploma->resume = $resume;
         $diploma->program = $request->program;
         $diploma->country = $request->country;
 
         $diploma->save();
        //  membership notification
         $this->sendSingleEmail('Welcome to Chartered Institute of Leadership and Governance', $request->email, ['firstname' => $request->firstname], 'welcome');
        // admin notification

        $this->sendSingleEmail('Chartered Institute of Leadership and Governance', 'info@cilgglobal.com', ['header' => 'New Diploma Registration'], 'registration-notification');
         return response([
             'status' => true,
             'message' => 'Application success'
         ], 200);
 
     }
}
