<?php

namespace App\Http\Controllers;

use App\Faq;
use App\Product;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $data['faqs'] = Faq::all();
        $data['products'] = Product::all();

        if ($request->get('product') && $request->get('product') != "All") {
            $data['faqs'] = Faq::where('product_id', $request->get('product'))->get();
        }

        return view('server.manage-product.faqs.index', ['data' => $data]);
    }

    public function create()
    {
        $data['products'] = Product::all();
        return view('server.manage-product.faqs.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'product_id' => 'required',
        ]);

        $faq = new Faq();

        $faq->question = $validateData['question'];
        $faq->answer = $validateData['answer'];
        $faq->product_id = $validateData['product_id'];

        $faq->save();

        return redirect()->route('faqs.index')->with(['create' => 'Faq added successfully!']);
    }

    public function edit($id)
    {
        $data['faq'] = Faq::findOrFail($id);
        $data['products'] = Product::all();
        return view('server.manage-product.faqs.edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'product_id' => 'required',
        ]);

        $faq = Faq::findOrFail($id);

        $faq->question = $validateData['question'];
        $faq->answer = $validateData['answer'];
        $faq->product_id = $validateData['product_id'];

        $faq->save();

        return redirect()->route('faqs.index')->with(['update' => 'Faq edited successfully!']);
    }

    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();

        return redirect()->route('faqs.index')->with(['delete' => 'Faq deleted successfully!']);
    }
}
