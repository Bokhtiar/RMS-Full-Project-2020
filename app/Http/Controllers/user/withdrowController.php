<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\withdrow;
use Auth;

class withdrowController extends Controller
{
    public function withdrow(Request $request){
        $withdrow=new withdrow;
          $withdrow['user_id']=Auth::id();
          $withdrow['email']=$request->email;
          $withdrow['bank']=$request->bank;
        $withdrow->save();
        return view('user.profile.single_profile');
    }
}
