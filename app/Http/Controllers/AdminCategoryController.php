<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminCategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('dashboard.categories.index', [
      "categories" => Category::all()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('dashboard.categories.create', [
      'categories' => Category::all()
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Category::create([
      'name' => $request->name,
      'slug' => $request->slug
    ]);

    return redirect('/dashboard/categories')->with('success', 'Category Has Been Added!');
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
  public function edit($slug)
  {
    return view('dashboard.categories.edit', [
      'category' => Category::where('slug', $slug)->first()

    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $slug)
  {
    Category::where('slug', $slug)->update([
      'name' => $request->name,
      'slug' => $request->slug
    ]);

    return redirect('/dashboard/categories')->with('success', 'Post Has Been Updated!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Category::destroy($id);

    return redirect('/dashboard/categories')->with('success', 'Post Has Been Deleted!');
  }

  public function checkSlug(Request $request)
  {
    $slug = SlugService::createSlug(Post::class, 'slug', $request->name);
    return response()->json(['slug' => $slug]);
    dd($slug);
  }
}
