<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Comics;
use App\Http\Requests\ComicRequest;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comics::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {

        $data = $request->all();

        $new_comic = new Comics;
        // $new_comic->title = $data['title'];
        // $new_comic->image = $data['image'];
        // $new_comic->type = $data['type'];
        // $new_comic->slug = Str::slug($data['title'],'-');

        $data['slug'] = Str::slug($data['title'],'-');
        $new_comic->fill($data);
        $new_comic->save();

        return redirect()->route('Comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic=Comics::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Comic= Comics::find($id);
        return view('comics.edit', compact('Comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comics $Comic)
    {
        // dd($request->all(),$up_comic->id);
        $data = $request->all();
        $data['slug'] = Str::slug($data['title'],'-');
        $Comic->update($data);

        return redirect()->route('Comics.show',$Comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comics $Comic)
    {

        $Comic->delete();

        return redirect()->route('Comics.index');
    }

}
