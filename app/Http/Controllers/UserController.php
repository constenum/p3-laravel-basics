<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Faker\Factory as Faker;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index')->with('results', session('results'));
    }

    /**
     * Show a newly created resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        # Form Data
        $number = $request->input('numberOfUsers');

        # Validation
        $this -> validate($request, [
                'numberOfUsers' => 'required|integer|min:1|max:20',
                'firstName' => 'required',
                'lastName' => 'required'
            ]);

        # Logic
        $faker = Faker::create();

        $results = [];
        $userArray = [];

        for ($i=0; $i < $number; $i++) {
            if ($request->has('firstName')) {
                $userArray['First Name'] = $faker->firstName;
            }
            if ($request->has('lastName')) {
                $userArray['Last Name'] = $faker->lastName;
            }
            if ($request->has('username')) {
                $userArray['Username'] = $faker->username;
            }
            if ($request->has('password')) {
                $userArray['Password'] = $faker->password;
            }
            if ($request->has('streetAddress')) {
                $userArray['Street Address'] = $faker->streetAddress;
            }
            if ($request->has('city')) {
                $userArray['City'] = $faker->city;
            }
            if ($request->has('state')) {
                $userArray['State'] = $faker->stateAbbr;
            }
            if ($request->has('postcode')) {
                $userArray['Zip Code'] = $faker->postcode;
            }
            if ($request->has('company')) {
                $userArray['Company'] = $faker->company;
            }
            if ($request->has('phoneNumber')) {
                $userArray['Phone Number'] = $faker->phoneNumber;
            }
            if ($request->has('email')) {
                $userArray['Email Address'] = $faker->email;
            }
            if ($request->has('domainName')) {
                $userArray['Website'] = $faker->domainName;
            }

            array_push($results, $userArray);
        }

        return \Redirect::to('user')->with('results', $results);
    }
}
