

<form action="{{ route('student.upload') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="pdf" accept=".pdf">
    <button type="submit">Upload PDF</button>
</form>
