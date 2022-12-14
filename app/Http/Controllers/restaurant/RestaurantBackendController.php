<?php

namespace App\Http\Controllers\restaurant;

use App\Http\Controllers\Controller;
use App\Models\restaurant\Restaurant;
use App\Models\Inventory\Location;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;


class RestaurantBackendController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $index=Restaurant::all();
           $location=Location::all();
            return view('restaurant.restaurant.index', compact('index','location'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id']=auth()->user()->id;
        $restaurant= Restaurant::create($data);
        Toastr::success('New Restaurant Created Successfully','Success');
        return redirect(route('restaurants.index'));
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

        $data=Restaurant::find($id);
        $location=Location::all();
         return view('restaurant.restaurant.index', compact('data','location','id'));

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

        $restaurant=Restaurant::find($id);

        $data = $request->all();
        $restaurant->update($data);
        Toastr::success('Restaurant Updated Successfully','Success');
        return redirect(route('restaurants.index'));
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Restaurant::find($id)->delete();
        Toastr::success('Restaurant Deleted Successfully','Success');
        return redirect(route('restaurants.index'));
    }

 
}
