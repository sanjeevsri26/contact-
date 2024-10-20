<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Form; // Ensure this is the correct model name
use Illuminate\Http\Request;

class loginController extends Controller
{
    /**
     * Display the login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Frontend.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email|unique:forms,email',
            'password' => 'required|string|min:8',
        ]);

        // Create a new record in the database
        $form = new Form();
        $form->name = $request->input('name');
        $form->phone = $request->input('phone');
        $form->email = $request->input('email');
        $form->password = bcrypt($request->input('password')); // Encrypt the password
        $form->save();

        // Redirect to the thank-you page
        return redirect()->route('thankyou');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form = Form::findOrFail($id);
        return view('Frontend.edit', compact('form')); // Ensure you have an 'edit' view in the 'Frontend' directory
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
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email|unique:forms,email,' . $id,
            'password' => 'nullable|string|min:8',
        ]);

        // Find the record and update it
        $form = Form::findOrFail($id);
        $form->name = $request->input('name');
        $form->phone = $request->input('phone');
        $form->email = $request->input('email');

        // Update password only if provided
        if ($request->filled('password')) {
            $form->password = bcrypt($request->input('password'));
        }

        $form->save();

        // Redirect to index or any other page
        return redirect()->route('form.index')->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form = Form::findOrFail($id);
        $form->delete();

        // Redirect to index or any other page
        return redirect()->route('form.index')->with('success', 'Record deleted successfully.');
    }

    /**
     * Display the thank you page.
     *
     * @return \Illuminate\Http\Response
     */
    public function thankyou()
    {
        return view('Frontend.thankyou'); // Ensure you have a 'thankyou' view in the 'Frontend' directory
    }
}
