<?php

namespace ThemeCustomizer\Http\Controllers;
use App\Http\Controllers\Controller;
use Request;
use Response;
use App\Models\User;

class ThemeCustomizerController extends Controller
{
    public function index(){
        $excluded_user_columns = ['remember_token', 'password', 'updated_at','email_verified_at'];
        $path = app_path() . "/Models";
        if(in_array('User', $this->getModels($path))){
            $user = new User;
            $filtercolumns = [];
            $usercolumns = \Schema::getColumnListing($user->getTable());

            foreach($usercolumns as $key => $column){
                if(in_array($column, $excluded_user_columns)){
                    unset($usercolumns[$key]);
                }
            }

            $users = $user->select($usercolumns)->paginate(10);
            return view('ThemeCustomizer::index')->with('users',$users)->with('usercolumns',$usercolumns);
        } else {
            return view('ThemeCustomizer::index');
        }
    }

    public function store(Request $request){
        return ['Demo','store'];
    }

    public function show(Request $request){
        return ['Demo','show'];
    }

    public function update(Request $request){
        return ['Demo','update'];
    }

    public function destroy(Request $request){
        return ['Demo','destroy'];
    }

    public function getModels($path){
        $out = [];
        foreach(glob($path.'/*.*') as $file) {
            $out[] = str_replace(".php","",basename($file));
        }
        return $out;
    }
}
