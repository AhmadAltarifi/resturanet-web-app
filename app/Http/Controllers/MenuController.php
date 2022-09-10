<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        //
        $menu = Menu::all();
        return view('Menu.index')->with(compact('menu'));
    }

    public function control()
    {
        //
        $menu = Menu::all();
        return view('Menu.control')->with(compact('menu'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menu = Menu::all();
        return view('Menu.create')->with(compact('menu'));
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
        $menu = New Menu;

        $menu->item_name = $request->item_name;
        $menu->item_price = $request->item_price;

        if ($request->hasFile('item_image')) {
            $filenamewithExtension = $request->file('item_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithExtension, PATHINFO_FILENAME);
            $extension = $request->file('item_image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $request->file('item_image')->storeAs('public/uploads/menu_items_images', $fileNameToStore);
            $menu->item_image = $fileNameToStore;
        }


        if ( $menu->save() ) {
            return redirect()->route('Menu.index')->with('Succes, Added a new Menu Item');
        }

        return redirect()->route('Menu.index')->with('error', 'Item Addition failed');

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
        $menu = Menu::find($id);
        return view('Menu.edit')->with(compact(['menu']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //


        $menu->item_name = $request->item_name;
        $menu->item_price = $request->item_price;

        if ($request->hasFile('item_image')) {
            $filenamewithExtension = $request->file('item_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithExtension, PATHINFO_FILENAME);
            $extension = $request->file('item_image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $request->file('item_image')->storeAs('public/uploads/menu_items_images', $fileNameToStore);
            $menu->item_image = $fileNameToStore;
        }


        if ( $menu->save() ) {
            return redirect()->route('Menu.index')->with('Succes, Added a new Menu Item');
        }

        return redirect()->route('Menu.index')->with('error', 'Item Addition failed');
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
