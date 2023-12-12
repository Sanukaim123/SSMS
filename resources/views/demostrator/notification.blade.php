<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Notifications</title>
        <link rel="stylesheet" href="{{asset('CSS/notification/custom.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    </head>
    <body>
    <!--<img src={{asset('images/image.jpg')}} alt=""/>-->
   
       <div class="hero">
            
<form method="post" action="{{route('notification.store')}}">
    @csrf
    @method('post')
          
    <div class="input-group">
        <input type="file" id="file"  name="file" required>     
         <label for="file"><i class="bi bi-file-earmark-text-fill"></i> 
        
        Add Tutorial</label>
    </div>
    
    <div class="input-group">
    
        <textarea id="add_description" name="add_description" rows="3" required></textarea>
        <label for="message"><i class="bi bi-chat-text"></i> Add Description </label>
        
    </div>
<br>
<br>
    <div class="select-group"> 
    <label for="subject"> </label>
    <select id="subject" name="subject" required>
    <option value="mathematics">Mathematics</option>
            <option value="applied mathematics">Applied Mathematics</option>
            <option value="computer science">Computer Science</option>
            <option value="chemistry">Chemistry</option>
            <option value="physics">Physics</option>
</select>
    </select>
</div>
<br>
<br>

    <div class="row"> 
      <div class="select-group" >
            <label for="level"> </label>
            <select id="level" name="level" required>
            <option value="level1">Level 1</option>
            <option value="level2">Level 2</option>
            <option value="level3">Level 3</option>
</select>
</div> 
    
        <div class="select-group">
            <label for="course"></label>
            <select id="course" name="course">
            <option value="course1">Course 1</option>
            <option value="course2">Course 2</option>
            <option value="course3">Course 3</option>
</select>
        </div>
    </div>
    
<br>
<br>

    <div class="input-group">
    <input type="datetime-local" id="final_submission_date" name="final_submission_date" required>
    <label for="final submission date"><i class="bi bi-calendar-event"></i> Final Submission Date</label>  
    
    </div>
<br>
<br>
    <div class="row">
     
    <button type="submit">SUBMIT</button>
    <button type="submit">EDIT</button>
    </div>
    </div>
</form>

    </body>
</html>