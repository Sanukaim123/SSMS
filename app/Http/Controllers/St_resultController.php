<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\St_result;
use Spatie\PdfToText\Pdf;
class St_resultController extends Controller
{



    public function store(Request $request)
    {
        // Validate the request (e.g., check if the uploaded file is a PDF).

        $request->validate([
            'pdf' => 'required|mimes:pdf|max:10240', // Adjust the validation rules as needed.
        ]);


        $pdfPath = $request->file('pdf')->storeAs('pdfs', 'st_results.pdf');

        // Logic to extract data from the PDF and store it in the database

        // Example logic (you need to implement this based on your PDF structure):
        $data = $this->extractDataFromPdf($pdfPath);

        foreach ($data as $st_resultData) {
            St_result::create($st_resultData);
        }

        return redirect()->route('st_results.index')->with('success', 'Data imported successfully.');
    }

    // Additional methods as needed

    private function extractDataFromPdf($pdfPath)
    {
        // Implement logic to extract data from the PDF
        $text = Pdf::getText($pdfPath);

        // Implement logic to extract data from the text
        $lines = explode("\n", $text);
        $data = [];

        foreach ($lines as $line) {
            // Example: Assuming a CSV-like structure with name, student_number, result1, result2
            $fields = str_getcsv($line, ',', '"');

            if (count($fields) === 4) {
                $data[] = [
                    'name' => $fields[0],
                    'student_number' => $fields[1],
                    'result1' => $fields[2],
                    'result2' => $fields[3],
                    // Add other result fields as needed
                ];
            }
        }

        // Return an array of student data (name, student_number, results, etc.)
        // Skip the first line if it contains headers
        $startFrom = 0;
        if (isset($lines[0]) && strpos($lines[0], 'Name') !== false) {
            $startFrom = 1;
        }

        for ($i = $startFrom; $i < count($lines); $i++) {
            $fields = str_getcsv($lines[$i], ',', '"');

            // Assuming a CSV-like structure with name, student_number, result1, result2
            if (count($fields) >= 3) {
                $studentData = [
                    'name' => $fields[0],
                    'student_number' => $fields[1],
                    'results' => array_slice($fields, 2), // Assuming results start from index 2
                ];

                $data[] = $studentData;
            }
        }

        return $data;
    
    }

}
