<?php

class LoginController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        if (Auth::check()) 
            return Redirect::to('/Dashboard');
        return View::make('login.index');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $request  = Request::create('api/login', 'POST');
        $response = Route::dispatch($request)->getData();
        // User Authenticated
        if(isset($response->error) && $response->error != 1) {
            $users = User::getUserByUsername(Input::get('username'));
            if (!Session::has('is_verified')) {
                //
                Session::put('is_verified', $users);
            }
            if (Auth::check()) {
                return Redirect::to('/Dashboard');
            }
        } else {
            // Authentication failed
            return View::make('login.index')
                ->with('error_message', $response->data);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}
