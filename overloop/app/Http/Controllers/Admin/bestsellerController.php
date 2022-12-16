<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\bestseller;
use Illuminate\Http\Request;

class bestsellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $bestseller = bestseller::where('nama', 'LIKE', "%$keyword%")
                ->orWhere('tahun', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $bestseller = bestseller::latest()->paginate($perPage);
        }

        return view('admin.bestseller.index',[
            'title' => 'bestseller'
        ], compact('bestseller'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.bestseller.create',[
            'title' => 'bestseller'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        $validated = $request->validate([
            'nama' => 'required|max:50',
        ]);
        
        bestseller::create($requestData);

        return redirect('admin/bestseller')->with('flash_message', 'bestseller added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $bestseller = bestseller::findOrFail($id);

        return view('admin.bestseller.show', [
            'title' => 'bestseller'
        ], compact('bestseller'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $bestseller = bestseller::findOrFail($id);

        return view('admin.bestseller.edit',[
            'title' => 'bestseller'
        ], compact('bestseller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        $validated = $request->validate([
            'nama' => 'required|max:50',
        ]);
        
        $bestseller = bestseller::findOrFail($id);
        $bestseller->update($requestData);

        return redirect('admin/bestseller')->with('flash_message', 'bestseller updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        bestseller::destroy($id);

        return redirect('admin/bestseller')->with('flash_message', 'bestseller deleted!');
    }
}
