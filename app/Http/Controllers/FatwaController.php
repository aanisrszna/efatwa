<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Fatwa;
use App\Models\Question;

class FatwaController extends Controller
{
    public function index()
    {
        $quest = Question::whereNotNull('answer')->get();
        return view('fatwas.landing', compact('quest'));

    
    }

    public function submitQuery(Request $request)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'message' => 'required',   
            'phonenum' => 'required',
        ]);

        // Check for validation failure
        if ($validator->fails()) {
            return redirect()->back();
        }

      Question::create([
            'inquery' => $request->message,
            'phonenum' => $request->phonenum,

        ]);
        
        return 'ok';
    }

    public function report($year = null)
    {
        $categories = ['Akidah', 'Ibadah', 'Wakaf', 'Muamalat', 'Munakahat', 'Faraid', 'Masjid', 'Perubatan', 'Lain-lain'];
    
        $tmpArr = array_map(function ($category) use ($year) {
            $query = Fatwa::where('kategori', $category);
    
            if ($year !== 'ALL') {
                $query->where('tarikh_diwartakan', 'LIKE', $year . '%');
            }
    
            return $query->count();
        }, $categories);
    
        return view('fatwas.report', compact('tmpArr'));
    }
    

    // Display the form to add a new Fatwa
    public function create()
    {
        return view('fatwas.create');
    }

    public function answer($id)
    {
        $quest = Question::find($id);
        return view('fatwas.answerfaq', compact('quest'));
    }

    public function answerstore(Request $request)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'jawapan' => 'required',
            'id' => 'required'
        ]);

        // Check for validation failure
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create Fatwa
        Question::find($request->id)->update([
            'answer' => $request->input('jawapan'),
            'phonenum' => $request->phonenum,

        ]);

        $whatsappController = new WhatsappController();
    $whatsappController->sendWhatsappMessage($request, $request->id);

        return redirect()->route('fatwas.managefaq')->with('success', 'Jawapan Soal Jawab telah berjaya ditambah.');
    }

    public function store(Request $request)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'tajuk' => 'required',
            'status_pewartakan' => 'required',
            'kategori' => 'required',
            'tarikh_keputusan' => 'required|date',
            'tarikh_diwartakan' => 'required|date',
            'keputusan' => 'required',
            'fail' => 'required|mimes:pdf',
        ]);

        // Check for validation failure
        if ($validator->fails()) {
            return redirect()->route('fatwa.create')
                ->withErrors($validator)
                ->withInput();
        }

        // File Upload (store in the 'public/Fail' directory)
        $failPath = $request->file('fail')->store('Fail', 'public');

        // Create Fatwa
        Fatwa::create([
            'tajuk' => $request->input('tajuk'),
            'status_pewartakan' => $request->input('status_pewartakan'),
            'kategori' => $request->input('kategori'),
            'tarikh_keputusan' => $request->input('tarikh_keputusan'),
            'tarikh_diwartakan' => $request->input('tarikh_diwartakan'),
            'keputusan' => $request->input('keputusan'),
            'fail' => $failPath,
        ]);

        return redirect()->route('fatwas.create')->with('success', 'Fatwa telah ditambah.');
    }

    // Display a list of all Fatwas
    public function view(Request $request)
    {


        $recordsPerPage = 10;

        // Fetch fatwas from the database
        $fatwas = Fatwa::paginate($recordsPerPage);
    
        // Calculate total pages based on the fetched fatwas
        $total_pages = $fatwas->lastPage();
    
        // Get the current page number from the request
        $pageno = $request->input('page', 1);
    
        return view('fatwas.view', compact('fatwas'));
    }

    // Display details of a specific Fatwa
    public function show($id)
    {
        $fatwa = Fatwa::findOrFail($id);
        return view('fatwas.show', compact('fatwa'));
    }
    
// FatwaController.php

public function manage(Request $request)
{
    // Assuming you have 10 records per page
    $recordsPerPage = 10;

    // Fetch fatwas from the database
    $fatwas = Fatwa::paginate($recordsPerPage);

    // Calculate total pages based on the fetched fatwas
    $total_pages = $fatwas->lastPage();

    // Get the current page number from the request
    $pageno = $request->input('page', 1);

    return view('fatwas.manage', compact('fatwas', 'total_pages', 'pageno'));
}

public function delete($id)
{
    $fatwa = Fatwa::findOrFail($id);
    $fatwa->delete();

    return redirect()->route('fatwas.manage')->with('success', 'Fatwa telah dihapus.');
}




public function edit(Request $request, $id)
{
    // Retrieve the fatwa with the given ID
    $fatwa = Fatwa::findOrFail($id);

    // If it's a POST request, handle the form submission
    if ($request->isMethod('post')) {
        $this->validate($request, [
            'tajuk' => 'required',
            'status_pewartakan' => 'required',
            'kategori' => 'required',
            'tarikh_keputusan' => 'required|date',
            'tarikh_diwartakan' => 'required|date',
            'keputusan' => 'required',
            'newPdfFile' => 'nullable|mimes:pdf|max:10240', // Add file validation
        ]);

        // Update the fatwa with the submitted data
        $fatwa->update($request->except('newPdfFile'));

        // Update PDF file if a new one is uploaded
        if ($request->hasFile('newPdfFile')) {
            $newPdfFile = $request->file('newPdfFile');
            $newPdfFileName = time() . '_' . $newPdfFile->getClientOriginalName();
            $newPdfFile->storeAs('pdf_files', $newPdfFileName, 'public');

            // Remove the old PDF file
            Storage::disk('public')->delete('pdf_files/' . $fatwa->pdf_file);

            // Update the model with the new file name
            $fatwa->pdf_file = $newPdfFileName;
        }

        $fatwa->save();

        // Redirect to the manage route with a success message
        return redirect()->route('fatwas.manage')->with('success', 'Konten Fatwa telah dikemaskini.');
    }

    // If it's a GET request, display the edit form with the current PDF file
    $pdfFileUrl = asset('storage/Fail/' . $fatwa->pdf_file);
    return view('fatwas.edit', compact('fatwa', 'pdfFileUrl'));
    
}


        
            public function update(Request $request, $id)
            {
                // Retrieve the fatwa with the given ID
                $fatwa = Fatwa::findOrFail($id);
        
                // Validate the request
                $this->validate($request, [
                    'tajuk' => 'required',
                    'status_pewartakan' => 'required',
                    'kategori' => 'required',
                    'tarikh_keputusan' => 'required|date',
                    'tarikh_diwartakan' => 'required|date',
                    'keputusan' => 'required',
                ]);
        
                // Update the fatwa with the submitted data
                $fatwa->update($request->all());
        
                // Redirect to the manage route with a success message
                return redirect()->route('fatwas.manage')->with('success', 'Konten Fatwa telah ditambahbaik.');
            }

            public function searchManage(Request $request)
            {
                $query = Fatwa::query();
        
                // Check if there's a search query
                $search = $request->query('search');
                if ($search) {
                    $query->where('tajuk', 'like', "%$search%")
                        ->orWhere('keputusan', 'like', "%$search%");
                }
        
                // Check if there's a kategori filter
                $kategori = $request->query('kategori');
                if ($kategori) {
                    $query->where('kategori', $kategori);
                }
        
                // Check if there's a status_pewartakan filter
                $statusPewartakan = $request->query('status_pewartakan');
                if ($statusPewartakan) {
                    $query->where('status_pewartakan', $statusPewartakan);
                }
        
                // Check if there's a sort order for kategori
                $sortByKategori = $request->query('sort_by_kategori');
                if ($sortByKategori) {
                    $query->orderBy('kategori', $sortByKategori);
                }
        
                // Check if there's a sort order for status_pewartakan
                $sortByStatusPewartakan = $request->query('sort_by_status_pewartakan');
                if ($sortByStatusPewartakan) {
                    $query->orderBy('status_pewartakan', $sortByStatusPewartakan);
                }
        
                // Fetch fatwas based on the filters and sort order
                $fatwas = $query->paginate(10);
        
                return view('fatwas.manage', compact('fatwas'));
            }
        
            public function searchView(Request $request)
            {
 

                
                $query = Fatwa::query();
        
                // Check if there's a search query
                $search = $request->query('search');
                if ($search) {
                    $query->where('tajuk', 'like', "%$search%")
                        ->orWhere('keputusan', 'like', "%$search%");
                }
        
                // Check if there's a kategori filter
                $kategori = $request->query('kategori');
                if ($kategori) {
                    $query->where('kategori', $kategori);
                }
        
                // Check if there's a status_pewartakan filter
                $statusPewartakan = $request->query('status_pewartakan');
                if ($statusPewartakan) {
                    $query->where('status_pewartakan', $statusPewartakan);
                }
        
                // Check if there's a sort order for kategori
                $sortByKategori = $request->query('sort_by_kategori');
                if ($sortByKategori) {
                    $query->orderBy('kategori', $sortByKategori);
                }
        
                // Check if there's a sort order for status_pewartakan
                $sortByStatusPewartakan = $request->query('sort_by_status_pewartakan');
                if ($sortByStatusPewartakan) {
                    $query->orderBy('status_pewartakan', $sortByStatusPewartakan);
                }
        
                // Fetch fatwas based on the filters and sort order
                $fatwas = $query->paginate(10);
                return view('fatwas.view', compact('fatwas'));
            }
            public function viewFAQ()
            {
                $quest = Question::all(); // Replace YourModel with the actual model you're using
                return view('fatwas.viewfaq', compact('quest'));
            }
            public function searchFAQ(Request $request)
            {
 

                
                $query = Question::query();
        
                // Check if there's a search query
                $search = $request->query('search');
                if ($search) {
                    $query->where('inquery', 'like', "%$search%")
                        ->orWhere('answer', 'like', "%$search%");
                }
        
                // Check if there's a kategori filter

        
                // Fetch fatwas based on the filters and sort order
                $questions = $query->paginate(10);
                return view('fatwas.managefaq', compact('questions'));
            }


                public function managefaq(Request $request)
                {
                    // Assuming you have 10 records per page
                    $recordsPerPage = 10;

                    // Fetch questions from the database
                    $questions = Question::paginate($recordsPerPage);

                    // Calculate total pages based on the fetched questions
                    $total_pages = $questions->lastPage();

                    // Get the current page number from the request
                    $pageno = $request->input('page', 1);

                    return view('fatwas.managefaq', compact('questions', 'total_pages', 'pageno'));
                }

                public function deletefaq($id)
                {
                    $question = Question::findOrFail($id);
                    $question->delete();

                    return redirect()->route('fatwas.managefaq')->with('success', 'Soal Jawab telah dihapus.');
                }
                public function editfaq(Request $request, $id)
                {
                    // Retrieve the question with the given ID
                    $question = Question::findOrFail($id);
                
                    // If it's a POST request, handle the form submission
                    if ($request->isMethod('post')) {
                        // Validate the request data
                        $validator = Validator::make($request->all(), [
                            'soalan' => 'required',
                            'jawapan' => 'required',
                            'id' => 'required'
                        ]);
                
                        // Check for validation failure
                        if ($validator->fails()) {
                            return redirect()->back()
                                ->withErrors($validator)
                                ->withInput();
                        }
                
                        // Update both soalan and jawapan
                        Question::find($request->id)->update([
                            'inquery' => $request->input('soalan'),
                            'answer' => $request->input('jawapan')
                        ]);
                
                        // Redirect to the editfaq route with a success message
                        return redirect()->route('fatwas.editfaq', $id)->with('success', 'Soal Jawab telah dikemaskini.');
                    }
                
                    // If it's a GET request, display the editfaq form
                    return view('fatwas.editfaq', compact('question'));
                }
                
                public function updatefaq(Request $request, $id)
                {
                    // Retrieve the question with the given ID
                    $question = Question::findOrFail($id);
                
                    // Validate the request data
                    $validator = Validator::make($request->all(), [
                        'soalan' => 'required',
                        'jawapan' => 'required',
                    ]);
                
                    // Check for validation failure
                    if ($validator->fails()) {
                        return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
                    }
                
                    // Update the question with the submitted data
                    $question->update([
                        'inquery' => $request->input('soalan'),
                        'answer' => $request->input('jawapan'),
                    ]);
                
                    // Redirect to the managefaq route with a success message
                    return redirect()->route('fatwas.managefaq')->with('success', 'Soal Jawab telah ditambahaik.');
                }
                public function searchFAQuser (Request $request)
                {
     
    
                    
                    $query = Question::query();
            
                    // Check if there's a search query
                    $search = $request->query('search');
                    if ($search) {
                        $query->where('inquery', 'like', "%$search%")
                            ->orWhere('answer', 'like', "%$search%");
                    }
            
                    // Check if there's a kategori filter
    
            
                    // Fetch fatwas based on the filters and sort order
                    $quest = $query->paginate(10);
                    return view('fatwas.viewfaq', ['quest' => $quest]);                }



            
        
}
