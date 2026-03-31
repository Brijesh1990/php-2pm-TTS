<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleController extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
$locations = [

['Mumbai', 19.0760, 72.8777],
['Pune', 18.5204, 73.8567],
['Bhopal', 23.2599, 77.4126],
['Agra', 27.1767, 78.0081],
['Delhi', 28.7041, 77.1025],
['Rajkot', 22.2734719, 70.7512559],

['Ahmedabad', 23.0225, 72.5714],
['Vadodara', 22.3072, 73.1812],
['Surat', 21.1702, 72.8311],
['Morbi', 22.8173, 70.8377],
['Junagadh', 21.5222, 70.4579],
['Jamnagar', 22.4707, 70.0577],

];
return view('googleAutocomplete',["locations"=>$locations]);
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
public function show($id)
{
//
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
//
}
}
