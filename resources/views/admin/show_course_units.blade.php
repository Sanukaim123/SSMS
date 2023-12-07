<!DOCTYPE html>
<html lang="en">
<head>
    <@include('layouts.head')
</head>
<body>
    <navbar>
	@include('layouts.nav')
   </navbar>
   
    <h1>Course Units</h1>
        <div>
        <h2>
            <table  border="1">
                <tr>

                    <th>ID</th>
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Credit Value</th>
                    <th>Discription</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                @foreach($courses as $course)
                <tr>
                    <td>{{$course->id}}</td>
                    <td>{{$course->Course_Code}}</td>
                    <td>{{$course->Course_Name}}</td>
                    <td>{{$course->Credit_Value}}</td>
                    <td>{{$course->Description}}</td>

                    <td>
                        <form method="post" action="{{route('course.destroy',['course'=>$course])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete"/>
                        </form>

                    </td>
                    <td>
                        <a href ="{{route('course.edit',['course'=>$course])}}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </table>
    </h2>
    </div>
</body>
</html>