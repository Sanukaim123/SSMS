<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resu; // Import the Resu model

class ResuController extends Controller
{
    public function showForm()
    {
        return view('resu'); // Display the form view
    }

    public function store(Request $request)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'student_name' => 'required|string|max:255',
            'student_number' => 'required|string|max:50',
            'course_unit' => 'required|string|max:100',
            'grade' => 'required|string|max:5',
            'credit_value' => 'required|numeric',
            'department' => 'nullable|string|max:100', 
        ]);
    
        // Calculate GPA based on the grade received in the request
        $gpa = $this->calculateGPA($validatedData['grade']); // Calculate GPA based on grade
    
        // Store the data in the database
        $result = Resu::create([
            'student_name' => $validatedData['student_name'],
            'student_number' => $validatedData['student_number'],
            'course_unit' => $validatedData['course_unit'],
            'grade' => $validatedData['grade'],
            'credit_value' => $validatedData['credit_value'],
            'gpa_value' => $gpa, // Assign calculated GPA to the database field
            'department' => $validatedData['department'],
        ]);
    
        // Redirect with success message
        return redirect()->route('enter-student-data')->with('success', 'Student data has been successfully stored!');
    }

    public function viewResultsForm()
    {
        return view('view_results_form');
    }

    // Method to display results based on the provided student number
    public function viewResults(Request $request)
{
    $studentNumber = $request->input('student_number');

    // Retrieve results for the given student number
    $results = Resu::where('student_number', $studentNumber)->get(['course_unit', 'grade']);

    // Pass the results to a view for display
    return view('view_results')->with('results', $results);
}


private function calculateGPA($grade)
{
    // Define your mapping of grades to GPA values
    $gradeMapping = [
        'A+' => 4.0,
        'A' => 4.0,
        'A-' => 3.7,
        'B+' => 3.3,
        'B' => 3.0,
        'B-' => 2.7,
        'C+' => 2.3,
        'C' => 2.0,
        'C-' => 1.7,
        'D+' => 1.3,
        'D' => 1.0,
        'E*' => 0.0,
        'E' => 0.0,
        'MC' => 0.0,
        // Add other grades and their corresponding GPA values here...
    ];

    // Calculate GPA based on the provided grade
    return $gradeMapping[$grade] ?? 0; // Return 0 if grade is not found in the mapping
}
public function viewStudentData(Request $request)
    {
        $studentNumber = $request->input('student_number');

        // Retrieve all results for the given student number
        $results = Resu::where('student_number', $studentNumber)->get();

        // Calculate sum of credit values and sum of GPA totals
        $sumCreditValues = $results->sum('credit_value');
        $sumGpaTotals = $results->sum('gpa_total');

        // Calculate the overall GPA by dividing the sum of GPA totals by the sum of credit values
        $overallGpa = ($sumCreditValues > 0) ? $sumGpaTotals / $sumCreditValues : 0;

        return view('student_data')->with([
            'results' => $results,
            'sumCreditValues' => $sumCreditValues,
            'sumGpaTotals' => $sumGpaTotals,
            'overallGpa' => $overallGpa,
        ]);
    }

    // Inside ResuController.php

public function displayStudentData($studentNumber)
{
    $results = Resu::where('student_number', $studentNumber)->get();
    
    // Calculate sum of credit values and sum of GPA total values
    $sumCreditValues = $results->sum('credit_value');
    $sumGPATotals = $results->sum('gpa_total');

    // Calculate average GPA by dividing sum of GPA totals by sum of credit values
    $averageGPA = $sumCreditValues !== 0 ? $sumGPATotals / $sumCreditValues : 0;

    return view('student_data', [
        'sumCreditValues' => $sumCreditValues,
        'sumGPATotals' => $sumGPATotals,
        'averageGPA' => $averageGPA,
        'results' => $results,
    ]);
}

public function showStudentNumberForm()
{
    return view('enter_student_number_form');
}

public function processStudentNumber(Request $request)
{
    // Retrieve the student number from the form
    $studentNumber = $request->input('student_number');

    // Retrieve data based on the student number
    $results = Resu::where('student_number', $studentNumber)->get();

    // Calculate sum of credit values and GPA totals
    $sumCreditValues = $results->sum('credit_value');
    $sumGPATotals = $results->sum(function ($result) {
        return $result->credit_value * $result->gpa_value;
    });

    // Calculate average GPA
    $averageGPA = $sumGPATotals / $sumCreditValues;

    // Pass the data to a view for display
    return view('student_data')->with([
        'sumCreditValues' => $sumCreditValues,
        'sumGPATotals' => $sumGPATotals,
        'averageGPA' => $averageGPA,
        'results' => $results, // You can also pass the individual results for display if needed
    ]);
}
public function processStudentData(Request $request)
    {
        $studentNumber = $request->input('student_number');
        $subject = $request->input('subject');

        // Fetch results for the entered subject and student number
        $results = Resu::where('student_number', $studentNumber)
            ->where('course_unit', $subject)
            ->get();

        // Calculate sum of credit value, sum of GPA totals, and average GPA
        $sumCreditValues = $results->sum('credit_value');
        $sumGPATotals = $results->sum(function ($result) {
            return $result->credit_value * $result->gpa_value;
        });
        $averageGPA = ($sumCreditValues != 0) ? $sumGPATotals / $sumCreditValues : 0;

        // Pass the calculated data to a view for display
        return view('display_student_data', [
            'sumCreditValues' => $sumCreditValues,
            'sumGPATotals' => $sumGPATotals,
            'averageGPA' => $averageGPA,
        ]);
    }
    public function showStudentNumberAndDeoartmentForm()
{
    return view('enter_student_number_and_department');
}
// Inside ResuController.php

public function processStudentDepartmentData(Request $request)
{
    $studentNumber = $request->input('student_number');
    $department = $request->input('department');

    // Fetch results for the entered department and student number
    $results = Resu::where('student_number', $studentNumber)
        ->where('department', $department)
        ->get();

    // Calculate sum of credit value, sum of GPA totals, and average GPA for the entered department
    $sumCreditValues = $results->sum('credit_value');
    $sumGPATotals = $results->sum(function ($result) {
        return $result->credit_value * $result->gpa_value;
    });
    $averageGPA = ($sumCreditValues != 0) ? $sumGPATotals / $sumCreditValues : 0;

    // Pass the calculated data to a view for display
    return view('display_student_department_data', [
        'sumCreditValues' => $sumCreditValues,
        'sumGPATotals' => $sumGPATotals,
        'averageGPA' => $averageGPA,
    ]);
}

}


