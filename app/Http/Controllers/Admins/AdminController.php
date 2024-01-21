<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Diploma;
use App\Models\Membership;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * dashboard
     * 
     * @return view
     */
    public function dashboard()
    {   
        $total_membership = Membership::count();
        $total_diploma = Diploma::count();

        return view('dashboard', ['total_membership' => $total_membership, 'total_diploma' => $total_diploma]);
    }

    /**
     * diploma
     * 
     * @return view
     */
    public function diploma()
    {   
        
        $diplomas = Diploma::all();

        return view('diploma', ['diplomas' => $diplomas]);
    }

    /**
     * membership
     * 
     * @return view
     */
    public function membership()
    {   
        $memberships = Membership::all();
        

        return view('membership', ['memberships' => $memberships]);
    }
    /**
     * Delete diploma record
     * @param int $id
     * @return response
     */
    public function deleteDiploma($id)
    {
        $diploma = Diploma::firstWhere('id', $id);
        $diploma->delete();

        return response([
            'status' => true,
            'message' => 'Deleted successfully!',
        ], 200);
    }

    /**
     * Delete Membership record
     * @param int $id
     * @return response
     */
    public function deleteMembership($id)
    {
        $membership = Membership::firstWhere('id', $id);
        $membership->delete();

        return response([
            'status' => true,
            'message' => 'Deleted successfully!',
        ], 200);
    }
    /**
     * Download diploma resume
     * @param int $id
     */
    public function downloadDiplomaResume($id)
    {
        $resume = Diploma::where('id', $id)->firstOrFail();
        return Storage::download('/storage/diploma/' .$resume->resume);
    }
    /**
     * Download membership resume
     * @param int $id
     */
    public function downloadMemberResume($id)
    {
        
        $resume = Membership::where('id', $id)->firstOrFail();
        return Storage::download('/storage/members/resume/' .$resume->resume);
    }
    /**
     * Download membership passport
     * @param int $id
     */
    public function downloadMemberPassport($id)
    {
        $passport = Membership::select('passport')->where('id', $id)->first();
        return Storage::download('/storage/members/passport/' .$passport);
    }
}
