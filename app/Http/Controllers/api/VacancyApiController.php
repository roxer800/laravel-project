<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\vacansy;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;


class VacancyApiController extends Controller
{
    public function index(Request $request)
    {
        $authorizationHeader = $request->header('Authorization');

        $token = substr($authorizationHeader, 7);
        $account = User::where('token', $token)->first();

        if (!$account) {
            return response()->json(['error' => 'Unauthorized: Token missing or invalid'], Response::HTTP_UNAUTHORIZED);
        }

        $vacancies = vacansy::all();
        return response()->json($vacancies);
    }

    public function show($id)
    {
        $vacancy = vacansy::findOrFail($id);
        return response()->json($vacancy);
    }
}
