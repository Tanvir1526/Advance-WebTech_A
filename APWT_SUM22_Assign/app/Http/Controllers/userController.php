<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class userController extends Controller
{
   public function welcome()
   {
    return view('Pages.welcome');
   }
// ___________________login___________________
   public function login()
   {
    return view('Pages.login');
   }
   function logSubmit(Request $req)
   {

    $this->validate($req,
        [
         "email"=>'required|email',
         "password"=>"required|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/",
        ],
        [
         "email.required"=> "Please provide your Email",
         "email.email"=> "Please provide your valid Email",
         "password.required"=> "Please provide your Password",
         "password.regex"=>"Password nust contain a Spacial Char ,a Num and an upercase latter",
         ]
        
    );
   $users=user::where('email',$req->email)->
                where('password',$req->password)->first();

         if($req->email==$users->email && $req->password==$users->password)
         {
            if($users->type=='User')
            {

            return redirect()->route('user.dashboard');
            }
            else
            {

            return redirect()->route('admin.dashboard');
            }
         }
   //       elseif  ($req->email!=$users->email || $req->password!=$users->password)
   //       {
   //          $this->validate($req,
   //      [
   //       "email"=>'required|email',
   //       "password"=>"required|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/",
   //      ],
   //      [
   //       "email.required"=> "Please provide your Email",
   //       "email.email"=> "Please provide your valid Email",
   //       "password.required"=> "Please provide your Password",
   //       "password.regex"=>"Password nust contain a Spacial Char ,a Num and an upercase latter",
   //       ]
        
   //  );
         }
   
// ___________________Register___________________
   public function registration()
   {
    return view('Pages.registration');
   }
   function regSubmit(Request $req){

    $this->validate($req,
         [
            "name"=>"required|max:20",
            "email"=>'required|email',
            "password"=>"required|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/",
            "con_password"=>"required|same:password",
            "type"=>"required"
         ],
         [
             "name.required"=> "Please provide your name",
             "name.max"=> "Name should not exceed 20 characters",
             "email.required"=> "Please provide your Email",
             "email.email"=> "Please provide your valid Email",
             "password.required"=> "Please provide your Password",
             "password.regex"=>"Password nust contain a Spacial Char ,a Num and an upercase latter",
             "con_password.required"=> "Please provide your Password",
             "con_password.same"=> "Please provide same as Password",
             "type.required"=> "Please provide your User Type",


         ]
        );

        $s1 = new user();
       
        $s1->name = $req->name;
        $s1->email = $req->email;
        $s1->password = $req->password;
        $s1->type = $req->type;
        $s1->save();

   //  return "Submitted with valid value";
   return redirect()->route('admin.dashboard');
}

// ___________________Dashboard___________________
public function admindashboard()
   {
      $users = user::all();
       
        return view('Pages.adminDashboard')
                ->with('users',$users);
   
   }
   public function userdashboard()
   {
      $users=user::all();

    return view('Pages.userDashboard')
               ->with('users',$users);
   }
// ___________________Details___________________

function details(Request $req)
    {
        $users = user::where('id', '=', $req->id)
                                ->select('id','name','email','type')
                                ->first();
        return view('Pages.userdetails')
                    ->with('users', $users);
    }



   }