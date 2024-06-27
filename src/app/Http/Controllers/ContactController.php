<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index');
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'deteil']);
        Contact::create($contact);
        return view('thanks');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'content', 'detail']);
        return view('confirm', compact('contact'));
    }

    public function destroy($request)
    {
        Contact::find($request->id)->delete();
        return redirect('/');
    }

    public function admin()
    {
        $contacts = Contact::Paginate(7);
        return view('admin', compact('contacts'));
    }

    public function search(Request $request)
    {
        $contacts = Contact::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->get();
        $categories = Category::all();
        return view('admin', compact('contacts', 'categories'));
    }

    public function downloadCsv()
    {
        $contacts = Contact::with('category');
        $csvHeader = ['first_name', 'last_name', 'email', 'content', 'detail'];
        $csvData = $users->toArray();

        $response = new StreamedResponse(function () use ($csvHeader, $csvData) {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, $csvHeader);

            foreach ($csvData as $row) {
                fputcsv($handle, $row);
            }

            fclose($handle);
        }, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="users.csv"',
        ]);

        return $response;
    }

}
