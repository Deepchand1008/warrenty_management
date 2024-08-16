<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Uploads;
use Illuminate\Http\Request;

class ProductUploadController extends Controller
{
    public function index()
    {
        //$uploads = Uploads::all();
        $uploads = Uploads::where('status', false)->get();
        
        return view('admin.productupload.index', compact('uploads'));
    }

    public function register_Product()
    {
        //$uploads = Uploads::all();
        $uploads = Uploads::where('status', true)->get();
        
        return view('admin.productupload.approve', compact('uploads'));
    }

    public function add()
    {
        return view('admin.productupload.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xls,xlsx,pdf,doc,docx,jpg,jpeg,png',
            'invoice_date' => 'required|date',
        ]);

        // Handle the file upload
        if ($request->hasFile('excel_file')) {
            $file = $request->file('excel_file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->move(public_path('uploads'), $fileName);

            // Save data to database
            $productUpload = new Uploads();
            $productUpload->invoice_number = $fileName;
            $productUpload->invoice_date = $request->invoice_date;
            $productUpload->status = '1'; // Assuming 1 means the upload was successful
            $productUpload->save();

            return redirect()->route('productupload.add')->with('success', 'File uploaded successfully!');
        }

        return redirect()->route('productupload.add')->with('error', 'File upload failed!');
    }

    public function insert(Request $request)
    {
        $product_upload = new Uploads();

         $product_upload->invoice_number = $request->input('invoice_number');
         $product_upload->invoice_date = $request->input('invoice_date');
         $product_upload->status = '0';
 
         /* $invoice_number = $request->input('invoice_number');
          $invoice_date = $request->input('invoice_date');
        
          $data['form_data'] = [
             'invoice_number'=> $invoice_number, 
             'invoice_date'=>$invoice_date 
            ];
   */
        $product_upload->save();
        return redirect('/add-product')->with('status', "Invoice added successfully");
    }

    public function edit($id)
    {
        $upload = Uploads::find($id);
        return view('admin.productupload.edit', compact('upload'));
    }

    public function update(Request $request, $id)
    {
        $upload = Uploads::find($id);
        $upload->invoice_number = $request->input('invoice_number');
        $upload->invoice_date = $request->input('invoice_date');
        $upload->update();
        return redirect('dashboard')->with('status', 'Data updated successfully');
    }

    public function destroy($id)
    {
        $upload = Uploads::find($id);
        $upload->delete();
        return redirect('upload_products')->with('status', 'Data Deleted Successfully');
    }

    public function approve($id)
    {
        $product_upload = new Uploads();
        $upload = Uploads::find($id);
        $upload->status = '1';
        $upload->update();
        return redirect('upload_products')->with('status', 'Thank you for aprroving Data');
    }


}
