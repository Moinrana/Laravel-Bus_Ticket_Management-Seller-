<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellerController extends Controller
{
    public function index(){

        //$users = User::all();

        //var_dump($users);

    	return view('seller.index');
    }
    
    public function store(Request $req){
        $name = $req->input('name');
        $email = $req->input('email');
        $mobile = $req->input('mobile');
        $username = $req->input('username');
        $password = $req->input('password');

        if($password == $req->repass){
            $data = array('name'=> $name , 'email'=> $email , 'mobile'=> $mobile,
         'username'=> $username , 'password'=> $password, 'type'=>'seller');

          DB::table('sellerstable')->insert($data);
          return redirect()->route('login');
        }
    }

    public function profile(Request $req){
        $user = $req->session()->get('uname');
        $userfromname = DB::table('sellerstable')->where('username' , $user)->first();

        return view('seller.profile')->with('profile', $userfromname);
    }

    public function editview(Request $req){
        $user = $req->session()->get('uname');

        $userfromname = DB::table('sellerstable')->where('username' , $user)
        ->first();

        return view('seller.edit')->with('profile', $userfromname);

 
    }

    public function edit(Request $req){
        $name = $req->input('name');
        $mobile = $req->input('mobile');
        $username = $req->input('username');
        $password = $req->input('password');

            $data = DB::table('sellerstable')->where('username',$req->session()->get('uname'))
            ->where('password',$req->session()->get('password'))
            ->first();

            DB::table('sellerstable')->where('id', $data->id)
            ->update(['name'=>$name , 'mobile'=>$mobile , 'username'=>$username , 'password' =>$password]);

            $req->session()->put('uname',$username);
            $req->session()->put('password' , $password);


            return redirect()->route('seller.profile');
    }

    public function history(Request $req){
        $data['data']= DB::table('tickethistory')->get();
        return view('seller.history')->with($data);
    }

    public function approve($id){
        $data = DB::table('tickethistory')->where('historyid', $id)
        ->first();

        $user = $data->user;
        $fromstation = $data->fromstation;
        $tostation = $data->tostation;
        $date = $data->date;
        $id = $data->historyid;
        $seatno = $data->seatno;

        $ticket = array('user'=> $user , 'fromstation' =>$fromstation ,'tostation' =>$tostation ,
         'date' =>$date , 'id' =>$id , 'seatno' =>$seatno);

        DB::table('finalticket')->insert($ticket);
        DB::delete('delete from tickethistory where historyid = ?',[$id]);
        return redirect()->route('seller.history');
    }

    public function delete($id){

        DB::delete('delete from tickethistory where historyid = ?',[$id]);
        return redirect()->route('seller.history');
    }

    public function sellticket(Request $req){
        $data['data']= DB::table('finalticket')->get();
        return view('seller.sellticket')->with($data);
    }

     public function searchview(Request $req){
        return view('seller.searchticket');
    }

    public function search(Request $req){
        $user = $req->input('username');
        $id   = $req->input('ticketid');
        $data['data'] = DB::table('finalticket')->where('user' ,$user)
        ->where('id', $id)->get();
    
        if($data!="null"){
        return view('seller.findticket')->with($data);
        }
        else{
            return "none";
        }
    }

    public function send($user){
       
    }


  /*  public function verify(Request $req){


/*        $user = User::where('username', $req->username)
            ->where('password', $req->password)
            ->first();*/

      /*  $user = DB::table('user')->where('username', $req->username)
            ->where('password', $req->password)
            ->first();

    	if($user){
            $req->session()->put('uname', $user->username);
            if ($user->type=="admin") {
              return redirect()->route('admin.index');
            }

            if ($user->type=="seller") {
              return redirect()->route('seller.index');
            }
            if ($user->type=="user") {
              return redirect()->route('user.index');
            }
    		return redirect()->route('admin.index');
        //echo $user->username;
      //echo session('uname');
    	}else{

            $req->session()->flash('msg', "Invalid username/password");
    		return redirect('/login');
            //return view('login.index');
    	}
    }*/
}
