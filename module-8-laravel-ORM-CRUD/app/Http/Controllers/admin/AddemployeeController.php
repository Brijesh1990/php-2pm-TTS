<?php
namespace App\Http\Controllers\admin;
use App\Models\AdminAddEmployee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddemployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('task.admin.addemployee');
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
              
          'name' => 'required|max:255',
          'age' => 'required|max:255',
          'phone' => 'required|min:10|max:10',
           'address' => 'required',
         ]);   

        //  create a ORM Elequent query builder for insert data in employee
        $data=array(
            "name"=>$request->name,
            "age"=>$request->age,
            "phone"=>$request->phone,
            "address"=>$request->address
        );
        // insert elequent ORM model
        AdminAddEmployee::create($data);
        //dd($data);
        return redirect('/admin-login/add-employee')->with('success','Thanks for contact with us');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=AdminAddEmployee::all();
        return view('task.admin.manageemployee',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit employee data 
        $data=AdminAddEmployee::where('id',$id)->first();
        return view('task.admin.editemployee',["data"=>$data]);


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
          $data=array(
            "name"=>$request->name,
            "age"=>$request->age,
            "phone"=>$request->phone,
            "address"=>$request->address
        );

        // create elequent query builder for update data
        AdminAddEmployee::where('id',$id)->update($data);
       
        return redirect('/admin-login/manage-employee')->with('success','Employee data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          // create elequent query builder for delete data 
        AdminAddEmployee::where('id',$id)->delete();
        return redirect('/admin-login/manage-employee/')->with('del','Employee successfully deleted');

    }
}
