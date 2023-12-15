
@extends('admin.admindashboard')
@section('admin')
<div class="page-content">
    <h1>Assign Course Subjects to Combination</h1>
    <br><br><br>
    <form action="{{ url('admin/processForm') }}" method="post">
            @csrf
            
            <label for="Combination_name">Select Combination: </label>
            <select name="Combination_name" id="Combination_name">
                @foreach($combinations as $id => $combName)
                    <option value="{{ $combName }}">{{ $combName }}</option>
                @endforeach
            </select>



            <br><br><br>

            <label>Select Subject: </label>

            @foreach($subjects as $id => $sCode)
                <input type="checkbox" name="S_Codes[]" value="{{ $sCode }}">{{ $sCode }}
            @endforeach


            <br><br><br>

            <input type="submit" value="Submit">
        </form>
</div>
   
   @endsection

