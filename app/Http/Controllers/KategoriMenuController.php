<?php

namespace App\Http\Controllers;

use App\Http\Resources\kategoriMenu as ResourcesKategoriMenu;
use App\Models\kategoriMenu;
use Illuminate\Http\Request;

class KategoriMenuController extends Controller {
    /** API */
    public function getKetegoriMenu() {
        $kategoriMenu = kategoriMenu::all();
        return new ResourcesKategoriMenu(200, 'Success', $kategoriMenu);
    }

    /**
     * Display a listing of the resource.
     */
    public function index() {
        $kategori = kategoriMenu::all();
        dd($kategori);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(kategoriMenu $kategoriMenu) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kategoriMenu $kategoriMenu) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kategoriMenu $kategoriMenu) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kategoriMenu $kategoriMenu) {
        //
    }
}
