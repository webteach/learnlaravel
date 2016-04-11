<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display the account for the user
     * 
     * @param Request $request
     * @return Response
     */
     public function index(Request $request)
     {
         $accounts = Account::where('user_id', $request->user()->id)->get();
         
         return view('accounts.account' , [
             'accounts' => $accounts,
             
        ]);
     }
     
     public function store(Request $request)
     {
         $this->validate($request, [
             'district_name' => 'required|max:255',
             'grade' => 'required',
             'subject' => 'required',
         ]);
         
         $request->user()->accounts()->create([
             'district_name' => $request->district_name,
             'grade' => $request->grade,
             'subject' => $request->subject,
             ]);
         
         return redirect('/account');
    }
    
    /**
    * Update the given task.
    *
    * @param  Request  $request
    * @param  Account  $account
    * @return Response
    */
    public function update(Request $request, Account $account)
        {
            $this->authorize('update', $account);
        
            $account->update();
            
            return redirect('/account');
        }
        
    /**
    * Delete the given task.
    *
    * @param  Request  $request
    * @param  Account  $account
    * @return Response
    */
    public function destroy(Request $request, Account $account)
        {
            $this->authorize('destroy', $account);
        
            $account->delete();
            
            return redirect('/account');
        }    
}