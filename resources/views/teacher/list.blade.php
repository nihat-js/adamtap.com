@extends("layouts/default")


@section("container")
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a href="" class="nav-link active" id="home-tab" role="tab" aria-controls="teachers" aria-selected="true">Teachers
    </a>
  </li>
  <li class="nav-item" role="presentation">
    <a href="/subjects/list" class="nav-link" id="profile-tab" type="button" role="tab" aria-controls="subjects"
      aria-selected="false">Subjects</a>
  </li>
</ul>



<button data-bs-target="#addModal" data-bs-toggle="modal"> Elave et </button>


<table class="table table-dark mt-5">
  <thead>
    <tr>
      <td> Ad </td>
      <td> Soyad </td>
      <td> Telefon nomresi </td>
      <td> Emeliyyatlar </td>
    </tr>
  </thead>
  <tbody class="table-secondary">
    @foreach ($teachers as $teacher)
    <tr data-id="{{ $teacher->id }} ">
      <td> {{ $teacher->name }} </td>
      <td> {{ $teacher->surname }} </td>
      <td> {{ $teacher->phone_number }} </td>
      <td>
      <button class="btn btn-secondary view" data-bs-toggle="modal" data-bs-target="#viewModal">View</button>
      <button class="btn btn-warning edit" data-bs-toggle="modal" data-bs-target="editModal"
        data-toggle="modal">Edit</button>
      <button class="btn btn-danger delete">Delete</button>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection

@include("./teacher/add_modal")
@include("./teacher/details_modal")
@include("./teacher/edit_modal")


@section("scripts")
<script>
  let x = []
  let currentEditedTeacherId
  select("#addModal .save").addEventListener('click', function () {
    conole.log("add-modal")
  })

  select("tbody .edit").addEventListener('click', function () {
    currentEditedTeacherId = event.target.parent("tr").dataset.id
    console.log({ currentEditedTeacherId })
  })

  select("tbody .delete").addEventListener('click', function () {
    let answer = prompt("Are you sure to delete it")
    if (!answer) {
      retun
    }
    // axios
    // conole.log("add-modal")
  })


</script>


@endsection