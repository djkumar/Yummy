<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jcf\Geocode\Geocode;
use App\User;
use App\Profiles;
use App\Subscriptions;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $profile_data = Profiles::where('userid',auth()->user()->id)->first();
    return view('home')->with('profiles',$profile_data);
    }
    
    public function welcome()
    {

        $response_data = Geocode::make()->latLng(13.0827,80.2707);

        return view('welcome')->with('response_data', $response_data->formattedAddress());
    }
    
    public function userprofile(){
        $user = auth()->user();


        $userid =  $user->id;
        $profile = Profiles::where('userid',$userid)->first();

           return view('profile-edit')->with('profile', $profile);
    }
    
    public function saveprofile(Request $request){ 
 $user = auth()->user();
        $profile = Profiles::findOrFail($user->id);
       
        $profile->update($request->all());
         if($request->hasFile('user_avatar'))
        {
            $avatar = $request->file('user_avatar');
            $filename_e = time().'.'.$avatar->getClientOriginalExtension();
                        $profile->user_avatar=$filename_e;

            $avatar->move(public_path('/uploads/avatar/'), $filename_e);
        $profile->update(['user_avatar' => $filename_e]);

            
        }
        
                $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Updated Successfully!');

         return redirect()->back();
    }
    
    
    public function pricingplan(){ 
    $profile_data = Profiles::where('userid',auth()->user()->id)->first();
$subscription_plans = Subscriptions::get();
     return view('pricing-plan')->with('profiles',$profile_data)->with('subscription_plans',$subscription_plans);
     
    }
    public function pricingplan_buy($request){ 

            $profile_data = Profiles::where('userid',auth()->user()->id)->first();
$subscription_plans = Subscriptions::where('id',$request)->first();
     return view('pricing-plan-buy')->with('profiles',$profile_data)->with('subscription_plans',$subscription_plans);
    }
    
}
