<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="teacherModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="teacherModalLabel">Add Teacher</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="teacherForm">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" required>
          </div>
          <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" class="form-control" id="surname" placeholder="Enter surname" required>
          </div>
          <div class="mb-3">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter phone number" required>
          </div>
          <div class="mb-3">
            <label for="subjects" class="form-label">Subjects</label>
            <input type="text" class="form-control" id="subjects" placeholder="Enter subjects" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="teacherForm" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>