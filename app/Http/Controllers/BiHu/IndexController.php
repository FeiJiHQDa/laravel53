<?php
/**
 * Created by PhpStorm.
 * User: HJKLI
 * Date: 2017/2/19
 * Time: 22:01
 */
namespace App\Http\Controllers\BiHu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller {

    public function __construct()
    {
    }

    public function index(Request $request) {

        return view('bihu.index.index', []);
    }
}