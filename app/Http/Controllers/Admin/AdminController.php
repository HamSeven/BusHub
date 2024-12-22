<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function bus(){
        return view('admin.bus');
    }

  
    public function location(Request $request)
    {
        $locations = Location::all();
    
        // Check if the request is an AJAX call
        if ($request->ajax()) {
            return view('admin.partials.locations_table', compact('locations'))->render();
        }
    
        return view('admin.location', compact('locations'));
    }
    
   
    public function route(){
        return view('admin.route');
    }

    public function status(){
        return view('admin.status');
    }

  
    public function addLocation(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|unique:locations',
            'price' => 'required|numeric',
        ], [
            'name.required' => 'Location Name is Required',
            'name.unique' => 'Location Already Exists',
            'price.required' => 'Price is Required',
            'price.numeric' => 'Price must be a valid number',
        ]);

        // Create and save the new location
        $locations = new Location();
        $locations->name = $request->name;
        $locations->price = $request->price;
        $locations->save();

        // Return a success message
        return response()->json(['success' => 'Location added successfully']);
    }

   //update location
   public function updateLocation(Request $request)
   {
       // Validate the incoming request
       $request->validate([
           'up_name' => 'required|unique:locations,name,'.$request->up_id,
           'up_price' => 'required|numeric',
       ], [
           'up_name.required' => 'Location Name is Required',
           'up_price.unique' => 'Location Already Exists',
           'up_price.required' => 'Price is Required',
           'price.numeric' => 'Price must be a valid number',
       ]);

       // Create and save the new location
      Location::where('id',$request->up_id)->update([
        'name'=>$request->up_name,
        'price'=>$request->up_price,
      ]

      );

       // Return a success message
       return response()->json(['success' => 'Location updated successfully']);
   }

// delete

   public function deleteLocation(Request $request)
{
    $location = Location::find($request->location_id);
    if ($location) {
        $location->delete();
        return response()->json(['status' => 'success', 'message' => 'Location deleted successfully']);
    }

    return response()->json(['status' => 'error', 'message' => 'Location not found'], 404);
}


    
}
