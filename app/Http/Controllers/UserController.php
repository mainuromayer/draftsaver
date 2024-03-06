<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Mockery\Exception;
use function Laravel\Prompts\alert;

class UserController extends Controller
{
    function formPage(): view
    {
        return view('content.formcontent');
    }

    function editPage(): view
    {
        return view('content.editcontent');
    }

    function listPage(): view
    {
        return view('content.listcontent');
    }








    function Store(Request $request)
    {
        try {
            User::create([
                'name' => $request->input('name'),
                'fathers_name' => $request->input('fathers_name'),
                'mothers_name' => $request->input('mothers_name'),
                'birthday' => $request->input('birthday'),
                'gender' => $request->input('gender'),
                'ug_degree_name' => $request->input('ug_degree_name'),
                'ug_admission_session' => $request->input('ug_admission_session'),
                'ug_id_no' => $request->input('ug_id_no'),
                'ug_batch_no' => $request->input('ug_batch_no'),
                'ug_passing' => $request->input('ug_passing'),
                'ug_session' => $request->input('ug_session'),
                'ug_cgpa' => $request->input('ug_cgpa'),
                'g_degree_name' => $request->input('g_degree_name'),
                'g_admission_session' => $request->input('g_admission_session'),
                'g_id_no' => $request->input('g_id_no'),
                'g_batch_no' => $request->input('g_batch_no'),
                'g_passing' => $request->input('g_passing'),
                'g_session' => $request->input('g_session'),
                'g_cgpa' => $request->input('g_cgpa'),
                'address' => $request->input('address'),
                'mobile' => $request->input('mobile'),
                'email' => $request->input('email'),
                'status' => $request->input('status')
            ]);

            return response()->json([
                'status' => 'successfull',
                'message' => 'Submit Successful'
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failed',
                'message' => $exception->getMessage()
            ], 401);
        }
    }



    function userProfile(Request $request)
    {
        try {
            $userId = $request->input('id');

            $user = User::where('id','=',$userId)->first();
            return view('content.editcontent',['user' => $user]);

        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failed',
                'message' => $exception->getMessage()
            ], 401);
        }
    }




    function ListUser(Request $request)
    {
        try {
            $users = User::all();
            return response()->json([
                    'status' => 'successfull',
                    'data' => $users
                ],200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failed',
                'message' => $exception->getMessage()
            ], 401);
        }
    }


    public function updateProfile(Request $request)
    {
        try {
            $userId = $request->input('id');
            $user = User::where('id','=',$userId)->first();

            $user->update([
                'name' => $request->input('name'),
                'fathers_name' => $request->input('fathers_name'),
                'mothers_name' => $request->input('mothers_name'),
                'birthday' => $request->input('birthday'),
                'gender' => $request->input('gender'),
                'ug_degree_name' => $request->input('ug_degree_name'),
                'ug_admission_session' => $request->input('ug_admission_session'),
                'ug_id_no' => $request->input('ug_id_no'),
                'ug_batch_no' => $request->input('ug_batch_no'),
                'ug_passing' => $request->input('ug_passing'),
                'ug_session' => $request->input('ug_session'),
                'ug_cgpa' => $request->input('ug_cgpa'),
                'g_degree_name' => $request->input('g_degree_name'),
                'g_admission_session' => $request->input('g_admission_session'),
                'g_id_no' => $request->input('g_id_no'),
                'g_batch_no' => $request->input('g_batch_no'),
                'g_passing' => $request->input('g_passing'),
                'g_session' => $request->input('g_session'),
                'g_cgpa' => $request->input('g_cgpa'),
                'address' => $request->input('address'),
                'mobile' => $request->input('mobile'),
                'email' => $request->input('email'),
                'status' => $request->input('status')
            ]);

            return response()->json([
                'status' => 'successfull',
                'message' => 'Profile updated successfully'
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failed',
                'message' => $exception->getMessage()
            ], 401);
        }
    }


}
