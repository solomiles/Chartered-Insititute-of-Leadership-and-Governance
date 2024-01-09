<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Membership;
use App\Traits\EmailTrait;
use Illuminate\Support\Facades\Storage;


class MembershipController extends Controller
{
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
            'passport' => 'required',
            'country' => 'required'
        ]);

        if ($validate->fails()) {
            return response([
                'status' => false,
                'errors' => $validate->errors()->messages(),
            ], 400);
        }

        $resume_file = $request->resume;
        $stored_resume = Storage::put('/public/members/resume', $resume_file);
        if ($stored_resume) {
            $resume = basename($stored_resume);
        } else {
            return response([
                'status' => false,
                'message' => 'Error while Uploading file'
            ], 400);
        }

        $passport_file = $request->passport;
        $stored_passport = Storage::put('/public/members/passport', $passport_file);
        if ($stored_passport) {
            $passport = basename($stored_passport);
        } else {
            return response([
                'status' => false,
                'message' => 'Error while Uploading file'
            ], 400);
        }

        $membership = new Membership;
        $membership->firstname = $request->firstname;
        $membership->lastname = $request->lastname;
        $membership->email = $request->email;
        $membership->resume = $resume;
        $membership->passport = $passport;
        $membership->country = $request->country;

        $membership->save();

        //membership registration
        $this->sendSingleEmail('Welcome to Chartered Institute of Leadership and Governance', $request->email, ['firstname' => $request->firstname], 'welcome');
        // admin notification

        $this->sendSingleEmail('Chartered Institute of Leadership and Governance', 'info@cilgglobal.org', ['header' => 'New Membership Registration'], 'registration-notification');
        return response([
            'status' => true,
            'message' => 'Application success'
        ], 200);

    }
}
