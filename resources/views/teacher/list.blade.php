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


<div class="flex  justify-content-between mt-5">
  <h1 class="text-3xl font-bold underline">
    {{ __("all.teacher") }}
  </h1>
  <button class="btn btn-success" data-bs-target="#addModal" data-bs-toggle="modal"> {{ __("all.add_teacher") }}
  </button>
</div>





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
  let currentEditedTeacherId
  select("#addModal .save").addEventListener('click', async function () {
    let response = await axios.post("/subjects", {
      name: select("#addModal [name='name'] ").value,
      surname: select("#addModal [name='surname'] ").value
      phoneNumber: select("#addModal [name='phoneNumber'] ").value
    })
    if (response.code == 201) {
      window.location.reload()
    }

  })

  delegateEvent('click', "tbody .edit", async function () {
    // console.log({ currentEditedTeacherId })
    currentEditedTeacherId = event.target.closest("tr").dataset.id
    showLoading()
    let response = await axios.get(`/subjects/${currentEditedTeacherId}`)
    select("#editModal [name='name'] ").value = response.data.name
    select("#editModal [name='about'] ").value = response.data.about
    hideLoading()
  })

  select("#editModal .save").addEventListener("click", async function () {
    let response = await axios.put(`/subjects/${currentEditedTeacherId}`, {
      name: select("#editModal [name='name'] ").value,
      about: select("#editModal [name='about'] ").value
    })
    if (response.statusText == "OK") {
      select("#editModal .close").click()
    }
  })

  delegateEvent('click', "tbody .delete", async function () {
    let answer = confirm("Are you sure to delete it")
    let id = event.target.closest("tr").dataset.id
    if (!answer) {
      return
    }
    let response = await axios.delete(`/ subjects / ${id}`)
    window.location.reload()
    // console.log(response)
    // axios
    // conole.log("add-modal")
  })


</script>



@endsection