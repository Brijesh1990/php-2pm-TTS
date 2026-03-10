<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
use App\Mail\ContactMail;
class ContactController extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
return view('ecomm.contact');
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
//create a validation rules 
$validated = $request->validate([
'fullname' => 'required|max:255',
'email' => 'required|max:255',
'mobile' => 'required',
'subject' => 'required',
'message' => 'required',
]);

$data=array(
"fullname"=>$request->fullname,
"email"=>$request->email,
"mobile"=>$request->mobile,
"subject"=>$request->subject,
"message"=>$request->message,
);
// send emails 
Contact::create($data);
Mail::to('brijeshpandey.tops@gmail.com')->send(new ContactMail($data));
return redirect('/contact-us')->with('success','Thanks for contact with us our one of admin contact with you Soon');

}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show()
{
// show all data of contacts in admin 
$data=Contact::all();
return view('ecomm.admin.managecontacts',["data"=>$data]);
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
Contact::where("id",$id)->delete();
return redirect('/admin-login/manage-contacts')->with('del','Your data successfully deleted');

}
}
