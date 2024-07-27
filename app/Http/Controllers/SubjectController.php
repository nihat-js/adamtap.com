<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function all()
  {

  }

  public function list()
  {
    $subjects = Subject::all();
    return view("subject/list", compact('subjects'));
  }

  public function details($id)
  {
    $subject = Subject::find($id);
    return response()->json($subject);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(Request $request)
  {
    $data = $request->validate([
      "name" => ["required", "min:6"],
      // "about" => ["min:-1"]
    ]);

    $subject = new Subject();
    $subject->name = $request->name;
    $subject->about = $request->about;

    $subject->save();

    return response()->json([
      "message" => "OK"
    ], 201);
  }

  public function update(Request $request, $id)
  {
    $subject = Subject::find($id);
    $subject->name = $request->name;
    $subject->about = $request->about;
    $subject->save();

    return response()->json([
      "message" => "OK"
    ]);
  }
  public function delete($id)
  {
    Subject::destroy($id);

    return response()->json(["message" => "OK"]);
  }
}
