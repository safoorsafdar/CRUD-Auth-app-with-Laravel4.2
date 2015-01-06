<?php

class ProductController extends \BaseController {
    function __construct() {
         $this->beforeFilter('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
        // echo "You are here:".__METHOD__;
        //$Products = Product::all();
        //var_dump($Products);
        // get all the nerds
        $nerds = Product::all();

        // load the view and pass the nerds
        return View::make('product.index')
                        ->with('products', $nerds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
        return View::make('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('product/create')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $nerd = new Product;
            $nerd->name = Input::get('name');
            $nerd->save();

            // redirect
            Session::flash('message', 'Successfully created Product!');
            return Redirect::to('product');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $nerd = Product::find($id);

        // show the view and pass the nerd to it
        return View::make('product.show')
            ->with('product_detail', $nerd);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $nerd = Product::find($id);

        // show the edit form and pass the nerd
        return View::make('product.edit')
            ->with('product_detail', $nerd);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
       // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('product/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $nerd = Product::find($id);
            $nerd->name = Input::get('name');
            $nerd->save();
            // redirect
            Session::flash('message', 'Successfully created Product!');
            return Redirect::to('product');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        // delete
        $nerd = Product::find($id);
        $nerd->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::to('product');
    }

}
