<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\property_type;
use App\Models\property;
use App\Models\unit_type;
use App\Models\unit;
use App\Models\tenant;
use App\Models\agreement;
use App\Models\Tax;
use App\Models\AccountGroup;
use App\Models\Account;

class masterController extends Controller
{
    //
    public function index()
    {

    }

    //Properties Types
    

    public function getProprtyTypeById($id)
    {
        return property_type::where('id', $id)->first();
    }

    public function listPropertyType()
    {
        $allPropertytypes = property_type::orderBy('id', 'desc')->get();
        return view('Admin.list_property_type', compact('allPropertytypes'));
    }
    public function deletePropertyType($id)
    {
        $Propertytypes = property_type::where('id', $id)->firstorfail()
            ->delete();
        return redirect()
            ->back()
            ->with('message', 'Data Deleted successfully!!');
    }

    public function storePropertyType(Request $request)
    {
        $property_type = new \App\Models\property_type;
        $property_type->fill($request->all());
        if ($property_type->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data added successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }

    }

    public function updatePropertyType($id, Request $request)
    {
        $property_type = new \App\Models\property_type;
        $property_type = property_type::find($id);
        $property_type->fill($request->all());
        // property_type::where('id',$id)->update($request->all());
        if ($property_type->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data Updated successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }

    }

    //Properties
    

    public function listProperty()
    {
        $getAllPropertiesType = property::getAllPropertiesType();
        $allProperty = property::with('allPropertiesWithTypes')->get();
        return view('Admin.list_property', compact('getAllPropertiesType', 'allProperty'));
    }

    //Using For Ajax
    public function getProprtyById($id)
    {

        $data = \DB::table('properties')->join('property_types', 'property_types.id', '=', 'properties.property_type_id')
            ->where('properties.id', '=', $id)->get();
        //dd($data);
        return $data;
    }

    public function storeProperty(Request $request)
    {

        $property = new \App\Models\property;
        $requestData = $request->all();

        if ($request->hasfile('photos'))
        {
            $imageName = time() . '.' . $request
                ->photos
                ->getClientOriginalName();
            $request
                ->photos
                ->move(public_path('photos') , $imageName);
            $requestData['photos'] = $imageName;
        }

        $property->fill($requestData);
        if ($property->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data added successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }

    }

    public function updateProperty($id, Request $request)
    {
        $property = new \App\Models\property;
        $property = property::find($id);
        $requestData = $request->all();
        if ($request->hasfile('photos'))
        {
            $imageName = time() . '.' . $request
                ->photos
                ->getClientOriginalName();
            $request
                ->photos
                ->move(public_path('photos') , $imageName);
            $requestData['photos'] = $imageName;
        }

        $property->fill($requestData);
        // property::where('id',$id)->update($request->all());
        if ($property->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data Updated successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }

    }

    public function deleteProperty($id)
    {
        $Property = property::where('id', $id)->firstorfail()
            ->delete();
        return redirect()
            ->back()
            ->with('message', 'Data Deleted successfully!!');
    }

    //UnitTypes
    

    public function unitTypes()
    {
        $getAllUnitTypes = unit_type::getAllUnitTypes();
        return view('Admin.unit_type', compact('getAllUnitTypes'));
    }

    public function getUnitTypeById($id)
    {
        return unit_type::find($id);
    }

    public function storeUnitType(Request $request)
    {
        $unit_type = new \App\Models\unit_type;

        $unit_type->fill($request->all());

        if ($unit_type->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data added successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }

    }

    public function updateUnitType($id, Request $request)
    {
        $unit_type = new \App\Models\unit_type;
        $unit_type = unit_type::find($id);
        $unit_type->fill($request->all());

        if ($unit_type->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data added successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }

    }

    public function deleteUnitType($id)
    {
        $unit_type = unit_type::where('id', $id)->firstorfail()
            ->delete();
        return redirect()
            ->back()
            ->with('message', 'Data Deleted successfully!!');
    }

    //Unit
    public function listUnit()
    {
        $getAllUnitTypes = unit_type::getAllUnitTypes();
        $allPropertytypes = property::getAllPropertiesType();
        $getAllProperties = property::getAllProperties();

        $getListRecordWithJoin = unit::with('hasOneUnitType', 'hasOneProperty', 'hasOnePropertType')->get();

        return view('Admin.list_unit', compact('getAllUnitTypes', 'allPropertytypes', 'getAllProperties', 'getListRecordWithJoin'));
    }

    public function storeUnit(Request $request)
    {
        $unit_type = new \App\Models\unit;
        $requestData = $request->all();
        if ($request->hasfile('photos'))
        {
            $imageName = time() . '.' . $request
                ->photos
                ->getClientOriginalName();
            $request
                ->photos
                ->move(public_path('unit_photos') , $imageName);
            $requestData['photos'] = $imageName;
        }
        //dd($imageName);
        $unit_type->fill($requestData);
        if ($unit_type->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data added successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }

    }

    public function updateUnit($id, Request $request)
    {
        $unit_type = new \App\Models\unit;
        $unit_type = unit::find($id);
        $requestData = $request->all();
        if ($request->hasfile('photos'))
        {
            $imageName = time() . '.' . $request
                ->photos
                ->getClientOriginalName();
            $request
                ->photos
                ->move(public_path('unit_photos') , $imageName);
            $requestData['photos'] = $imageName;
        }
        //dd($imageName);
        $unit_type->fill($requestData);
        if ($unit_type->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data added successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }

    }

    public function getUnitById($id)
    {

        $data = unit::with('hasOneUnitType', 'hasOneProperty', 'hasOnePropertType')->where('id', $id)->get();
        return $data;
    }
    public function deleteUnit($id)
    {
        $unit = unit::where('id', $id)->firstorfail()
            ->delete();
        return redirect()
            ->back()
            ->with('message', 'Data Deleted successfully!!');
    }

    //Tenant
    public function listTenant()
    {
        $getAllTenant = tenant::getAllTenantWithDecending();
        return view('Admin.list_tenant', compact('getAllTenant'));
    }

    public function getTenantById($id)
    {
        $getTenantById = tenant::find($id);
        return $getTenantById;
    }

    public function deleteTenant($id)
    {
        $tenant = tenant::where('id', $id)->firstorfail()
            ->delete();
        return redirect()
            ->back()
            ->with('message', 'Data Deleted successfully!!');
    }

    public function storeTenant(Request $request)
    {

        $tenant = new \App\Models\tenant;
        $requestData = $request->all();

        if ($request->hasfile('photo'))
        {
            $imageName = time() . '.' . $request
                ->photo
                ->getClientOriginalName();
            $request
                ->photo
                ->move(public_path('tenant') , $imageName);
        }
        $requestData['photo'] = $imageName;

        if ($request->hasfile('resident_card'))
        {
            $residentName = time() . '.' . $request
                ->resident_card
                ->getClientOriginalName();
            $request
                ->resident_card
                ->move(public_path('tenant') , $residentName);
        }
        $requestData['resident_card'] = $residentName;

        $tenant->fill($requestData);

        if ($tenant->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data added successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }
    }
    public function updateTenant($id, Request $request)
    {

        $tenant = new \App\Models\tenant;
        $requestData = $request->all();
        $tenant = tenant::find($id);
        if ($request->hasfile('photo'))
        {
            $imageName = time() . '.' . $request
                ->photo
                ->getClientOriginalName();
            $request
                ->photo
                ->move(public_path('tenant') , $imageName);
            $requestData['photo'] = $imageName;
        }

        if ($request->hasfile('resident_card'))
        {
            $residentName = time() . '.' . $request
                ->resident_card
                ->getClientOriginalName();
            $request
                ->resident_card
                ->move(public_path('tenant') , $residentName);
            $requestData['resident_card'] = $residentName;
        }

        $tenant->fill($requestData);

        if ($tenant->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data added successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }
    }

    //Agreements
    public function listAgreement()
    {
        $getAllPropertiesType = property_type::orderBy('id', 'desc')->get();
        $getAllProperties = property::getAllProperties();
        $getAllUnitTypes = unit_type::getAllUnitTypes();
        $getAllUnits = unit::getAllUnitWithDecending();
        $getAllTenant = tenant::getAllTenantWithDecending();

        //$getAllAgreements = agreement::with('hasOneProperty')->get();
        $getAllAgreements = agreement::with('hasOneUnitType', 'hasOneUnit', 'hasOneProperty', 'hasOnePropertType', 'hasOneTenant')->get();

        //dd($getAllAgreements);
        return view('Admin.list_agreement', compact('getAllPropertiesType', 'getAllProperties', 'getAllUnitTypes', 'getAllUnits', 'getAllTenant', 'getAllAgreements'));
    }

    public function storeAgreement(Request $request)
    {
        $agreement = new \App\Models\agreement;
        $requestData = $request->all();
        if ($request->hasfile('document_attach'))
        {
            $imageName = time() . '.' . $request
                ->document_attach
                ->getClientOriginalName();
            $request
                ->document_attach
                ->move(public_path('documents') , $imageName);
            $requestData['document_attach'] = $imageName;
        }

        $requestData['agreement_no'] = time() . rand();
        $agreement->fill($requestData);
        if ($agreement->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data added successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }
    }

    public function updateAgreement($id, Request $request)
    {

        $agreement = new \App\Models\agreement;
        $requestData = $request->all();
        $agreement = agreement::find($id);
        //dd($requestData);
        if ($request->hasfile('document_attach'))
        {
            $imageName = time() . '.' . $request
                ->document_attach
                ->getClientOriginalName();
            $request
                ->document_attach
                ->move(public_path('documents') , $imageName);
            $requestData['document_attach'] = $imageName;

        }

        $agreement->fill($requestData);

        if ($agreement->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data added successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }
    }

    public function getAgreementId($id)
    {
        return agreement::with('hasOneUnitType', 'hasOneUnit', 'hasOneProperty', 'hasOnePropertType', 'hasOneTenant')->where('id', $id)->get();

    }

    public function deleteAgreement($id)
    {
        $agreement = agreement::where('id', $id)->firstorfail()
            ->delete();
        return redirect()
            ->back()
            ->with('message', 'Data Deleted successfully!!');
    }

    // Taxes Module Functions
    public function listTaxes()
    {
        $taxes = new Tax;

        $getTaxes = $taxes->getAllTaxes();

        return view('Admin.list_taxes', compact('getTaxes'));
    }

    public function storeTaxes(Request $request)
    {
        $Tax = new \App\Models\Tax;
        $requestData = $request->all();
        $Tax->fill($requestData);
        if ($Tax->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data added successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }
    }

    public function getTaxById($id)
    {
        $getTaxById = Tax::find($id);
        return $getTaxById;
    }

    public function updateTax($id, Request $request)
    {
        $Tax = new \App\Models\Tax;
        $requestData = $request->all();
        $Tax = Tax::find($id);
        $Tax->fill($requestData);
        if ($Tax->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data Updated successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }
    }

    public function deleteTax($id)
    {
        $Tax = Tax::where('id', $id)->firstorfail()
            ->delete();
        return redirect()
            ->back()
            ->with('message', 'Data Deleted successfully!!');
    }

    //Account Group
    public function listAccountGroup()
    {
        $getAllAccountGroups = new AccountGroup;
        $getAllAccountGroups = $getAllAccountGroups->getAllAccountGroups();
        return view('Admin.list_account_group', compact('getAllAccountGroups'));
    }
    public function storeAccountGroup(Request $request)
    {
        $AccountGroup = new \App\Models\AccountGroup;
        $requestData = $request->all();
        $AccountGroup->fill($requestData);
        if ($AccountGroup->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data added successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }
    }
    public function getAccountGroupById($id)
    {
        $getAccountGroupById = AccountGroup::find($id);
        return $getAccountGroupById;
    }
    public function updateAccountGroup($id, Request $request)
    {
        $AccountGroup = new \App\Models\AccountGroup;
        $requestData = $request->all();
        $AccountGroup = AccountGroup::find($id);
        $AccountGroup->fill($requestData);
        if ($AccountGroup->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data Updated successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }
    }
    public function deleteAccountGroup($id)
    {
        $AccountGroup = AccountGroup::where('id', $id)->firstorfail()
            ->delete();
        return redirect()
            ->back()
            ->with('message', 'Data Deleted successfully!!');
    }

    //Accounts
    public function listAccount()
    {
        $Account = new Account;
        $getAllAccountGroups = AccountGroup::getAllAccountGroups();
        $getAllAccountsWithAccountGroup = $Account::with('hasOneAccountGroup')->get();
        return view('Admin.list_account', compact('getAllAccountGroups', 'getAllAccountsWithAccountGroup'));
    }

    public function storeAccount(Request $request)
    {
        $Account = new \App\Models\Account;
        $requestData = $request->all();
        $Account->fill($requestData);
        if ($Account->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data added successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }
    }
    public function getAccountById($id)
    {
        $getAccountById = Account::find($id);
        return $getAccountById;
    }
    public function updateAccount($id, Request $request)
    {
        $Account = new \App\Models\Account;
        $requestData = $request->all();
        $Account = Account::find($id);
        $Account->fill($requestData);
        if ($Account->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data added successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }
    }

    public function deleteAccount($id)
    {
        $Account = Account::where('id', $id)->firstorfail()
            ->delete();
        return redirect()
            ->back()
            ->with('message', 'Data Deleted successfully!!');
    }

}

