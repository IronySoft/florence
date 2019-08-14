<?php

namespace App\Http\Controllers;

use App\Address;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        return view('admin.address.index', ['addresses' => Address::all()]);
    }

    public function create()
    {
        return view('admin.address.create');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
            'address' => 'required',
            'email' => 'required|email',
        ]);

        Address::create($request->all());
        return redirect(route('address.index'))->with(['message' => 'Address added Successfully']);

    }

    public function show($id)
    {
        return view('admin.address.show' ,['our_address'=> Address::find($id)]);
    }

    public function edit(Address $address)
    {
        //
    }


    public function update(Request $request, Address $address)
    {
        $check = Address::findOrFail($address->id);
        if (!is_null($check)) {
            $check->name = $request->name;
            $check->title = $request->title;
            $check->phone1 = $request->phone1;
            $check->phone2 = $request->phone2;
            $check->address = $request->address;
            $check->email = $request->email;
            $check->update();
            return redirect(route('address.index'))->with(['message' => 'Address UPDATED Successfully']);

        }
        return redirect(route('address.index'))->with(['message' => 'Something is wrong!']);


    }


    public function destroy(Address $address)
    {
        Address::destroy($address->id);
        return redirect(route('address.index'))->with(['message' => 'Address DELETED Successfully']);
    }
}
