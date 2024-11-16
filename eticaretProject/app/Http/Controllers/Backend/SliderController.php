<?php

namespace App\Http\Controllers\Backend;


use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $sliders = Slider::all();
        return view("backend.pages.slider.index", compact("sliders"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.pages.slider.edit");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {
        $imagePath = null;

        if ($request->hasFile("image")) {
            $resim = $request->file("image");
            $uzanti = $resim->getClientOriginalExtension();
            $dosyadi = time() . "-" . Str::slug($request->name);

            // Dosyanın geçerli uzantısı olup olmadığını kontrol et
            if (in_array($uzanti, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                $imagePath = $resim->storeAs('public/sliders', $dosyadi . '.' . $uzanti);  // Storage diskini kullanıyoruz
            }
        }

        Slider::create([
            "name" => $request->name,
            "link" => $request->link,
            "content" => $request->content,
            "status" => $request->status,
            "image" => $imagePath ? basename($imagePath) : null,  // Yalnızca dosya adını kaydediyoruz
        ]);

        return back()->withSuccess("Başarıyla oluşturuldu.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::where("id", $id)->first();
        return view("backend.pages.slider.edit", compact("slider"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $imagePath = null;

        if ($request->hasFile("image")) {
            $resim = $request->file("image");
            $uzanti = $resim->getClientOriginalExtension();
            $dosyadi = time() . "-" . Str::slug($request->name);

            // Geçerli uzantıları kontrol et
            if (in_array($uzanti, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                $imagePath = $resim->storeAs('public/sliders', $dosyadi . '.' . $uzanti);
            }
        }

        Slider::where("id", $id)->update([
            "name" => $request->name,
            "link" => $request->link,
            "content" => $request->content,
            "status" => $request->status,
            "image" => $imagePath ? basename($imagePath) : null,
        ]);

        return back()->withSuccess("Başarıyla güncellendi.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::where("id", $id)->firstOrFail();


        $slider->delete();
        return back()->withSuccess("Başarıyla silindi.");
    }
}
