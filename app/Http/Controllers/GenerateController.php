<?php

namespace App\Http\Controllers;

use App\Traits\GenerateTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenerateController extends Controller
{
    use GenerateTrait;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('generate');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function generate(Request $request)
    {
        Validator::make($request->all(), [
            'lesson' => 'required|integer|in:' . implode(',', array_keys(config('constant.lessons')))
        ])->validate();

        return response()->json($this->generateWords($request->get('lesson')));
    }
}
