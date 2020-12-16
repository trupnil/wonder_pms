<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\property_type;
use App\Models\property;
use App\Models\unit_type;
use App\Models\unit;
use App\Models\tenant;

class masterController extends Controller
{
    //

    public function index()
    {

    }

    public function getProprtyTypeById($id)
    {
        return property_type::where('id',$id)->first();
    }

    public function listPropertyType()
    {
    	$allPropertytypes = property_type::orderBy('id', 'desc')->get();
    	return view('Admin.list_property_type',compact('allPropertytypes'));
    }

    public function storePropertyType(Request $request)
    {
    	$property_type = new \App\Models\property_type;
    	$property_type->fill($request->all());
    	if($property_type->save())
    	{
    		return redirect()->back()->with('message','Data added successfully!!');
    	}
    	else
    	{
    		return redirect()->back()->with('message','Something went wrong');
    	}

    }

    public function updatePropertyType($id,Request $request)
    {
        $property_type = new \App\Models\property_type;
        $property_type = property_type::find($id);
        $property_type->fill($request->all());
        // property_type::where('id',$id)->update($request->all());
       if($property_type->save())
        {
            return redirect()->back()->with('message','Data Updated successfully!!');
        }
        else
        {
            return redirect()->back()->with('message','Something went wrong');
        }

    }


    public function listProperty()
    {
    	$getAllPropertiesType =  property::getAllPropertiesType();
    	$allProperty = property::with('allPropertiesWithTypes')->get();
        return view('Admin.list_property',compact('getAllPropertiesType','allProperty'));
    }

    //Using For Ajax
    public function getProprtyById($id)
    {               
       return  \DB::table('properties')
         ->join('property_types','properties.property_type_id','=','property_types.id')
         ->where('properties.id', '=', $id)
         ->first();
        //return $data;
        // property::where('id',$id)->first();
    }

    public function storeProperty(Request $request)
    {

    	$property = new \App\Models\property;
        $requestData = $request->all();

       if($request->hasfile('photos'))
         {
               $imageName = time().'.'.$request->photos->getClientOriginalName();
               $request->photos->move(public_path('photos'), $imageName);
         }
         $requestData['photos'] = $imageName;
         $property->fill($requestData);
    	if($property->save())
    	{
    		return redirect()->back()->with('message','Data added successfully!!');
    	}
    	else
    	{
    		return redirect()->back()->with('message','Something went wrong');
    	}

    }

       public function unitTypes()
    {
        $getAllUnitTypes = unit_type::getAllUnitTypes();
        return view('Admin.unit_type',compact('getAllUnitTypes'));
    }

    public function storeUnitType(Request $request)
    {
        $unit_type = new \App\Models\unit_type;
        $unit_type->fill($request->all());

        if($unit_type->save())
        {
            return redirect()->back()->with('message','Data added successfully!!');
        }
        else
        {
            return redirect()->back()->with('message','Something went wrong');
        }

    }

      public function listUnit()
    {
         $getAllUnitTypes = unit_type::getAllUnitTypes();
         $allPropertytypes = property::getAllPropertiesType();
         $getAllProperties =  property::getAllProperties();

         $getListRecordWithJoin = unit::with('hasOneUnitType','hasOneProperty','hasOnePropertType')->get();

         return view('Admin.list_unit',compact('getAllUnitTypes','allPropertytypes','getAllProperties','getListRecordWithJoin'));
    }


    public function storeUnit(Request $request)
    {
        $unit_type = new \App\Models\unit;
        $requestData = $request->all();
        if($request->hasfile('photos'))
         {
               $imageName = time().'.'.$request->photos->getClientOriginalName();
               $request->photos->move(public_path('unit_photos'), $imageName);
         }
        $requestData['photos'] = $imageName;
        $unit_type->fill($request->all());
        if($unit_type->save())
        {
            return redirect()->back()->with('message','Data added successfully!!');
        }
        else
        {
            return redirect()->back()->with('message','Something went wrong');
        }

    }


    public function listTenant()
    {
        $getAllTenant = tenant::getAllTenantWithDecending();
        return view('Admin.list_tenant',compact('getAllTenant'));
    }

    public function storeTenant(Request $request)
    {

        $tenant = new \App\Models\tenant;
        $requestData = $request->all();

        if($request->hasfile('photo'))
         {
               $imageName = time().'.'.$request->photo->getClientOriginalName();
               $request->photo->move(public_path('tenant'), $imageName);
         }
         $requestData['photo'] = $imageName;

         if($request->hasfile('resident_card'))
         {
               $residentName = time().'.'.$request->resident_card->getClientOriginalName();
               $request->resident_card->move(public_path('tenant'), $residentName);
         }
         $requestData['resident_card'] = $residentName;

         $tenant->fill($requestData);

        if($tenant->save())
        {
            return redirect()->back()->with('message','Data added successfully!!');
        }
        else
        {
            return redirect()->back()->with('message','Something went wrong');
        }

   


    }



}
