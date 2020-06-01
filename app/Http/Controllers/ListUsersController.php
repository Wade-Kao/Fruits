<?php

namespace App\Http\Controllers;

use App\BranchListUser;
use App\ListUser;
use Illuminate\Http\Request;

class ListUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test($id)
    {
        $ListUser = ListUser::find($id);
        $BranchListUser = BranchListUser::findorFail($ListUser);

        // $ListUser->branchlistusers()->save($BranchListUser);
        return $BranchListUser;
        //return $ListUser->$BranchListUser;

        // $ListUser = ListUser::find($id);
        // return $ListUser;
    }
    public function index(ListUser $ListUser)
    {
        $User = ListUser::find($ListUser)->UserBranchList;
        // $UserBranchList = UserBranchList::findorFail(21);

        // $UserList->userbranchlists()->save($UserBranchList);
        return $User;

        // $UserList = UserList::find($id);
        // return $UserList;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ListUser $ListUser)
    {
        $BranchListUser = BranchListUser::findorFail(21);

        $ListUser->branchlistusers()->save($BranchListUser);
        return $ListUser->$BranchListUser;

        // $UserBranchList = UserBranchList::findorFail(21);
        //  return $UserBranchList;
        // $UserList->userlists()->save($UserBranchList);
        // return $UserList->$UserBranchList;

        // $UserList = UserList::find(21);
        //
        //         //修改關聯主鍵
        //         $UserList->UserBranchList()->asssociate($another_cgy);

        // //移除關聯
        //         $UserList->UserBranchList()->dissociate();

        // //取用關聯表格的資料
        //         $UserList->UserBranchList->id;
        // return $UserList;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $ListUser = ListUser::find($id);
        $ListUser->UName = "www";
        $ListUser->save();
        return "Done";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $ListUser = ListUser::find($id);
        // $ListUser->delete();
        //
        //使用資料參考來刪除
        // $ListUser->delete();

        // //使用主鍵來刪除
        ListUser::destroy($id);
        //   return "Done";
    }
}
