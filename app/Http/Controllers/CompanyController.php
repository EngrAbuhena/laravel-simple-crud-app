<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $data['companies'] = Company::orderBy('id', 'desc')->paginate(5);

        return view('companies.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image'=>'required|mimes:jpg,png,jpeg|max:2048',
            'name' => 'required',
            'email' => 'required',
            'address' => 'required'
        ]);

        // upload image
        if (request()->hasFile('image')){
            $uploadedImage = $request->file('image');
            $imageName = time() .'_'.$request->name. '.' . $request->image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/images/');
            $uploadedImage->move($destinationPath, $imageName);
//            dd($request->all());
        }

        $company = new Company;

        $company->image = $imageName;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;


        $company->save();


        return redirect()->route('home')
            ->with('success', 'Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param Company $company
     * @return View
     */
    public function show(Company $company): View
    {
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Company $company
     * @return View
     */
    public function edit(Company $company): View
    {
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        if (request()->hasFile('image')){
            $uploadedImage = $request->file('image');
            $imageName = time() .'_'.$request->name. '.' . $request->image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/images/');
            $uploadedImage->move($destinationPath, $imageName);
//            dd($request->all());
        }

//        $imageName = time().'.'.$request->image->getClientOriginalExtension();
//        $destinationPath = public_path('/storage/images/');
//        $request->image->move($destinationPath,$imageName);

        $company = Company::find($id);

        $company->image = $imageName;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;

        $company->save();

        return redirect()->route('home')
            ->with('success', 'Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Company $company
     * @return RedirectResponse
     */
    public function destroy(Company $company): RedirectResponse
    {
        $company->delete();

        return redirect()->route('home')
            ->with('success', 'Company has been deleted successfully');
    }
}
