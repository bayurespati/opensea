<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('admin.faq.index', ['faqs' => $faqs]);
    }

    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        $faq->pertanyaan = $request->pertanyaan;
        $faq->jawaban = $request->jawaban;
        $faq->save();
        return redirect('/admin/faq');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        return view('admin.faq.edit', ["faq" => $faq]);
    }
}
