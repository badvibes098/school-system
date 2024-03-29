<?php

namespace App\Http\Controllers\Admin;

//use App\Models\Admin\Sections;

use App\Http\Controllers\Controller;

//use App\Models\Admin\Teachers;

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

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        if (Gate::allows('admin-access')){
            return Inertia::render('Admin/Sections/Sections', [
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sections $sections)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sections $sections)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sections $sections)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sections $sections)
    {
        //
    }
}
