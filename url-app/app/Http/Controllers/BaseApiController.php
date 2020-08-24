<?php
/**
 * Created by: Ogaga Agi (aogaga).
 * Github: https://github.com/aogaga
 * Twitter: @aogaga
 * Date: 8/23/20
 * Time: 1:58 PM
 * Project url-app
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BaseApiController extends Controller
{
    public  $request;

    function __construct(Request $request)
    {
        $this->request = $request;
    }
}
