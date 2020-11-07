<?php

namespace App\Http\Controllers;

use App\AdminUsers;
use App\UserInfo;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

use DB;
use Session;
class UserInfoController extends Controller
{

    public function index()
    {
        return view('admin.admin_user_page');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = array();
        $data['admin_name'] = $request['admin_name'];
        $data['admin_phone'] = $request['admin_phone'];
        $data['admin_email'] = $request['admin_email'];
        $data['admin_password'] = md5($request['admin_password']);
        $data['admin_address'] = $request['admin_address'];
        $data['admin_status'] = $request['admin_status'];

        $result = DB::table('user_infos')->insert($data);
        return json_encode(array(
            "statusCode"=>200,
            "statusMsg"=>"New User Added Successfully"
        ));
    }

    public function show($id)
    {
        $singleEducation = DB::table('user_infos')
            ->where('id', $id)
            ->get();
        return $singleEducation;
    }

    public function edit(UserInfo $userInfo)
    {
        //
    }

    public function update(Request $request, UserInfo $userInfo)
    {
        //
    }

    public function destroy($id)
    {
        DB::table('user_infos')
            ->where('id', $id)
            ->delete();
        return json_encode(array(
            "statusCode"=>200
        ));
    }

    public function getAllAdminUsers()
    {
        $contactInfo = UserInfo::all();

        return DataTables::of($contactInfo)
            ->addColumn('action', function ($contactInfo){
                $buttton='
                <a onclick="showSlidereData('.$contactInfo->id.')"  class="btn btn-success btn-sm" >Show</a>
                <a onclick="deleteSliderData('.$contactInfo->id.')" class="btn btn-danger btn-sm"  >Delete</a>';
                return $buttton;})
            ->rawColumns(['action'])
            ->toJson();
    }
}
