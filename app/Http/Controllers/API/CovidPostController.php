<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CovidAPI;

class CovidPostController extends Controller
{
    public $successStatus = 200;

    public function getAllPosts(Request $request)
    {
        $token = $request['t']; //t = token
        $userid = $request['u'];// u-userid

        $user = User::where('id',$userid)->where('remember_token',$token)->first();


        if($user != null){
            $covidPost = CovidAPI::all();
            return response()->json($covidPost,$this->successStatus);
        }else{
            return response()->json(['response'=>'Bad call'],501);
        }
    }


    public function getPost(Request $request)
    {

        $id = $request['pid']; //old post id

        $token = $request['t']; //t = token
        $userid = $request['u'];// u-userid

        $user = User::where('id',$userid)->where('remember_token',$token)->first();


        if($user != null){

            $covidPost = CovidAPI::where('id',$id)->first();
            if($user != null){
                return response()->json($covidPost,$this->successStatus);
            }else{
                return response()->json(['response'=>'Posts not found'],404);
            }

        }else{
            return response()->json(['response'=>'Bad call'],501);
        }
    }


    // this method searches the country
    public function searchPost(Request $request)
    {

        $params = $request['p']; //p = params

        $token = $request['t']; //t = token
        $userid = $request['u'];// u-userid

        $user = User::where('id',$userid)->where('remember_token',$token)->first();


        if($user != null){

            $covidPost = CovidAPI::where('country','LIKE','%' .$params . '%')->GET();
            if($user != null){
                return response()->json($covidPost,$this->successStatus);
            }else{
                return response()->json(['response'=>'Posts not found'],404);
            }

        }else{
            return response()->json(['response'=>'Bad call'],501);
        }
    }
}
