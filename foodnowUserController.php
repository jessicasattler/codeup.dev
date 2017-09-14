<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Hash;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

// require_once "/vagrant/sites/foodnow.dev/vendor/twilio/sdk/vendor/autoload.php";

use Twilio\Rest\Client;




class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['users'] = ($request->has('search')) ? User::search($request->search)->paginate(6) :  User::paginate(20);
        return view('users.index')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['user'] = User::findOrFail($id);

        $data['friends'] = $data['user']->friends()
            ->where("user_id", '=', $data['user']->id)
            ->orWhere("friend_id", '=', $data['user']->id)
            ->paginate(10);

        return view('users.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = User::findOrFail($id);
        
        return view('users.edit')->with($data);
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
        $user = User::findOrFail($id);
        
        if(!empty($request->first_name)) {
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->save();
        }

        if (!empty($request->file('image'))) {
            if ($request->file('image')->isValid()) {

                $user->image = '/assets/img/profile/' . $user->id . $request->file('image')->getClientOriginalName();

                $request->file('image')->move(
                    base_path() . '/public/assets/img/profile/', $user->image
                );  
            };
        };

        $user->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Update Successful');

        return redirect()->action('UserController@show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->action('Auth\AuthController@getRegister');
    }

    public function setFriend(Request $request, $status) {
        $user = Auth::user();
        $user->friends()->sync([
            $request->input('friend_id')=>['action_id'=>$user->id]
            ], false);

        return back();
    }

    public function friendsList(Request $request)
    {
        return Friend::allFriends($request->user()->id);
    }

    //method for users to send text messages to friends
    public function sendText(Request $request)
    {
         // Step 2: set our AccountSid and AuthToken from https://twilio.com/console
        $AccountSid = env('TWILIO_ID');
        $AuthToken = env('TWILIO_TOKEN');


//          // Step 3: instantiate a new Twilio Rest Client
        $client = new Client($AccountSid, $AuthToken);

//         // Step 4: make an array of people we know, to send them a message. 
//     // Feel free to change/add your own phone number and name here.
//         //input rules


        // $rules = [
        //     'friendName1'=>'required|min:1',
        //     'friendPhone1'=>'required|numeric|min:11',
        //     'friendName2'=>'required|min:1',
        //     'friendPhone2'=>'required|numeric|min:11',
        // ];

        // $request->session()->flash('ERROR_MESSAGE','Text Message was not sent');

        // $this->validate($request, $rules);

        // $request->session()->forget('ERROR_MESSAGE');

    

        $people = array(
            // "+1(210)317-55-00" => "Snow White",
            // $request->friendPhone1 => $request->friendName1,
            // $request->friendPhone2 => $request->friendName2

        );

        foreach($request->mytext as $phonenumber)
        {
            $people[$phonenumber] = "name";
        }
        $request->session()->flash('SUCCESS_MESSAGE', 'Message sent succesfully');

//         $rules = [
//             'friendName1'=>'required|min:1',
//             'friendPhone1'=>'required|numeric|min:11',
//             'friendName2'=>'required|min:1',
//             'friendPhone2'=>'required|numeric|min:11',
//         ];

//         $request->session()->flash('ERROR_MESSAGE','Text Message was not sent');

//         $this->validate($request, $rules);

//         $request->session()->forget('ERROR_MESSAGE');


    // Step 5: Loop over all our friends. $number is a phone number above, and 
    // $name is the name next to it
    foreach ($people as $number => $name) {

        $sms = $client->account->messages->create(

            // the number we are sending to - Any phone number
            $number,

            array(
                // Step 6: Change the 'From' number below to be a valid Twilio number 
                // that you've purchased
                'from' => "+12108800682", 
                
                // the sms body
                'body' =>  $request->email_body

                // "Hey $name, we're going to Olive Garden at 7pm. Here's the location:https://goo.gl/maps/FN6mtQYign62  .See you then!"

            )
        );

//     //     // Display a confirmation message on the screen
        echo "Sent message to $name".PHP_EOL;
    }




        return view('restaurants.restaurant');
     }

     public function selectFriends(Request $request)
     {
        $data['user'] = Auth::user();

        $data['friends'] = $data['user']->friends()
            ->where("user_id", '=', $data['user']->id)
            ->orWhere("friend_id", '=', $data['user']->id)
            ->orderBy('last_name', 'asc')
            ->get();

        return view('restaurants.restaurant')->with($data);
    }    

 }
















