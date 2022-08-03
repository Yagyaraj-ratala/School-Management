<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\create;


class StudentController extends Controller
{
    function studentregister(){
      
        return view('studentregister');
    
}
function signin(){
    return view('signin');
}

    function sign_up(){
        return view('sign_up');
          }
        function saveStudRegister(Request $req){
            $r=new Register;
            $r->First_Name=$req->input('First_Name');
            $r->Last_Name=$req->input('Last_Name');
            $r->Birthday_Month=$req->input("Birthday_Month");
            $r->Birthday_Year=$req->input("Birthday_Year");
            $r->Email_Id=$req->input("Email_Id");
            $r->Mobile_Number=$req->input("Mobile_Number");
            $r->Gender=$req->input("Gender");
            $r->Address=$req->input("Address");
            $r->City=$req->input("City");
            $r->Pin_Code=$req->input("Pin_Code");
            $r->State=$req->input("State");
            $r->Country=$req->input("Country");
            $r->Hobby_Drawing=$req->input("Hobby_Drawing");
            $r->Hobby_Singing=$req->input("Hobby_Singing");
            $r->Hobby_Dancing=$req->input("Hobby_Dancing");
            $r->Hobby_Cooking=$req->input("Hobby_Cooking");
            $r->Hobby_Other=$req->input("Hobby_Other");
            $r->Other_Hobby=$req->input("Other_Hobby");
            $r->ClassX_Board=$req->input("ClassX_Board");
            $r->ClassX_Percentage=$req->input("ClassX_Percentage");
            $r->ClassX_YrOfPassing=$req->input("ClassX_YrOfPassing");
            $r->ClassXII_Board=$req->input("ClassXII_Board");
            $r->ClassXII_Percentage=$req->input("ClassXII_Percentage");
            $r->ClassXII_YrOfPassing=$req->input("ClassXII_YrOfPassing");
            $r->Graduation_Board=$req->input("Graduation_Board");
            $r->Graduation_Percentage=$req->input("Graduation_Percentage");
            $r->Graduation_YrOfPassing=$req->input("Graduation_YrOfPassing");
            $r->Masters_Board=$req->input("Masters_Board");
            $r->Masters_Percentage=$req->input("Masters_Percentage");
            $r->Masters_YrOfPassing=$req->input("Masters_YrOfPassing");
            $r->Course_BCA=$req->input("Course_BCA");
            $r->Course_BCom=$req->input("Course_BCom");
            $r->Course_BSc=$req->input("Course_BSc");
            $r->Course_BA=$req->input("Course_BA");
            $r->save();

           return view('admindashboard',['msg'=>'Data submitted']);

}
function submitLogin(Request $r){
    $un=$r->input('email');
    $pw=$r->input('psw');
    //echo $un;
    if($un == 'yagya' && $pw == '123'){
        $r->session()->put('user',$un);
        $r->session()->put('pwd',$pw); 
        return view('admindashboard');
    }
    return view('admindashboard');
   
}
function createstudent(){
    return view('createstudent');
}

function StudentDetail(){
    return view('StudentDetail');
}

function saveSignup(Request $req){
    $s=new Student;
    $s->fname=$req->input('fname');
    $s->lname=$req->input('lname');
    $s->email=$req->input('email');
    $s->psw=$req->input('psw');
    $s->cnfpsw=$req->input('cnfpsw');
    $s->save();

    return view('signin',['msg'=>'Data submitted']);

}
function saveStudentDetail(Request $req){
    $s=new create;
    $s->fname=$req->input('fname');
    $s->roll=$req->input('roll');
    $s->section=$req->input('section');
    $s->email=$req->input('email');
    $s->phone=$req->input('phone');
    $s->save();

    return view('admindashboard',['msg'=>'Data submitted']);

}
function ListStudent(){
    $stud=create::all();
    return view('studentdetail',['studentdata'=>$stud]);
    
}
function DeleteStud($id){
    $s=create::find($id);

    $s->delete();
    return redirect('studentdetail');

}
function UpdateStudById(Request $r){
$s=create::find($r->input('id'));
$s->fname=$r->input('fname');
$s->roll=$r->input('roll');
$s->section=$r->input('section');
$s->email=$r->input('email');
$s->phone=$r->input('phone');
$s->save();
return redirect ('studentdetail');
}

}