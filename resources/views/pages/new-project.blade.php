<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='{{ asset('css/style.css') }}' type='text/css' rel='stylesheet' />
</head>
<body>

  <form action="{{ url('/add-project') }}" method='post' class='container p-4 m-auto'>
    @csrf
     <h2 class="text-bold p-4">New Project</h2>
       <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" >Customer ID</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name='customer_id' >
   </div>
   <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" >Project Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name='project_name' >
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Project Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='project_description'></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" >Project Status</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name='status' >
   </div>
 <button class='btn btn-info text-white' type='submit'>
   Add Project
 </button>
</form>
</body>
</html>
