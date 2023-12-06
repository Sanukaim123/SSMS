<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
</head>
<body>
   <navbar>
	@include('layouts.nav')
   </navbar>
   <h1><center> Subjects</center> </h1>
   <br>
   <div>
    <h2>
    <table  border="1">
        <tr>
            <th>ID</th>
            <th>Subject Code</th>
            <th>Subject Name</th>
            <th>Delete</th>
        </tr>
        @foreach($subjects as $subject)
        <tr>
        <td>{{$subject->id}}</td>
            <td>{{$subject->S_Code}}</td>
            <td>{{$subject->S_Name}}</td>
            <td>
                <form method="post" action="{{route('subject.destroy',['subject'=>$subject])}}">
                @csrf
                @method('delete')
                <input type="submit" value="Delete"/>
                </form>

            </td>
        </tr>
        @endforeach
    </table>
   </h2>
   </div>

   <!--footer-->
<footer>
 	
</footer>


</body>
</html>