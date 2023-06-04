<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Teachers;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Illuminate\Support\Facades\Gate;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        if (Gate::allows('admin-access')){
            //$list = Teachers::where('role', 2)->orderBy('position')->paginate(8);
            $list = Teachers::where('role', 2)->orderBy('name')->get();
            return Inertia::render('Admin/Teachers', [
                'teachers' => $list,
            ]);
        }
        else{
            return abort(403);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        if (Gate::allows('admin-access')){
            $keyword = $request->input('keyword');
            $query = [  'field' => 'value',
                        'another_field' => 'another_value',
                    ];
            $list = Teachers::where('role', 2)
                                ->where('name', 'like', '%'.$keyword.'%')
                                //->orWhere('email', 'like', '%'.$keyword.'%')
                                ->get();
                return Inertia::render('Admin/Teachers', [
                    'teachers' => $list,
                ]);
        }
        else{
            return abort(403);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teachers $teachers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teachers $teachers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teachers $teachers)
    {
        //
    }
}
