<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class OwnersController extends Controller
{
    public function getOwners()
    {
        $owners = Owner::all();

        return view('owners.list')->with('owners', $owners);
    }

    public function submitOwner(Request $request)
    {
        $name = $request->input('ownerName');

        $owner = new Owner;
        $owner->name = $name;

        $owner->save();

        return redirect('/owners/add')->with('success', 'Owner added');
    }

    public function saveOwner(Request $request)
    {
        $name = $request->input('ownerName');
        $id = $request->input('ownerId');

        $owner = new Owner;
        $owner->name = $name;

        $owner->save();

        return redirect('/owners/add')->with('success', 'Owner added');
    }

    public function addOwner()
    {
        return view('owners.add');
    }

    public function editOwner(Owner $owner)
    {
        return view('owners.edit')->with('owner', $owner);
    }
}
