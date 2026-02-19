<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('task.register');
    }

    // create function to load login
    public function login()
    {
        return view('task.login');
    }

    // create a function to load dashboard
    public function dashboard()
    {
        return view('task.content');
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
         //create a validations
         $validated = $request->validate([
              
          'file' => 'required|max:255',
          'fullname' => 'required|max:255',
          'email' => 'required|email|max:255',
          'phone' => 'required|min:10|max:10',
          'password' => 'required|max:255',
          'confirmpassword' => 'required|max:255',
        
          
         ]);   

        //  upload image
        $filename=rand().'.'.$request->file->extension();
        $request->file->move(public_path('uploads/customers'),$filename);
        //  create a ORM Elequent query builder for insert data
        $data=array(
            "photo"=>$filename,
            "fullname"=>$request->fullname,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "password"=>$request->password
           
        );
        // insert elequent ORM model
        User::create($data);
        return redirect('/login')->with('success','You are  successfully created your account');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('task.managetask');
    }

     public function manageuser()
    {
        $data=User::all();
        return view('task.admin.manageusers',["data"=>$data]);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
          User::where("id",$id)->delete();
          return redirect('/admin-login/manage-users')->with('success','Users Data  successfully deleted');

    }
}
