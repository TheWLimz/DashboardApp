<table class="table table-striped table-success">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Project</th>
      <th scope="col">Description</th>
      <th scope='col'>Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($projects as $project)
    <tr>
      <th scope="row">{{ $project->id }}</th>
      <td>{{ $project->customers->name }}</td>
      <td>{{ $project->project_name }}</td>
      <td>{{ $project->project_description }}</td>
      <td>
        @if($project->status == '0')
           <p class="text-info">Pending</p>
        @elseif($project->status == '1')
           <p class="text-success">Approved</p>
        @endif
      </td>
      <td class= 'w-25'>
        <a href="#" class="btn btn-warning text-white">Edit</a>
        <a href="{{ url('/delete', $project->id) }}" class="btn btn-danger text-white">Delete</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
