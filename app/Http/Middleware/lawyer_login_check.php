<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use App\lawer_type;
use App\register_lawer_table;
use App\career_detail_table;

class lawyer_login_check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        if(!Session::get('username'))
        {
            return redirect('/');
        }
        else
        {

            $type_check = DB::table('register_lawer_tables')->where('username',Session::get('username'))->first();
            if($type_check->type == 'admin')
            {
                return $next($request);
            }else
            {
                return redirect('/');
            }
            // print_r($type_check);
            // die();
        }

    }
}
