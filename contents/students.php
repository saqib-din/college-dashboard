<div class="container m-0 mt-4">
    <form class="p-4 border rounded">
      <h5 class="mb-4">Add Students</h5>
      <div class="row g-3">
        <div class="col-md-6">
          <label for="firstName" class="form-label">First Name</label>
          <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
        </div>
        <div class="col-md-6">
          <label for="lastName" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
        </div>
        <div class="col-md-6">
          <label for="dob" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" id="dob">
        </div>
        <div class="col-md-6">
          <label for="registrationDate" class="form-label">Registration Date</label>
          <input type="date" class="form-control" id="registrationDate">
        </div>
        <div class="col-md-6">
          <label for="idNumber" class="form-label">ID Number</label>
          <input type="text" class="form-control" id="idNumber" placeholder="Enter ID number">
        </div>
        <div class="col-md-6">
          <label for="mobileNumber" class="form-label">Mobile Number</label>
          <input type="text" class="form-control" id="mobileNumber" placeholder="Enter Mobile number">
        </div>
        <div class="col-md-6">
          <label for="gender" class="form-label">Gender</label>
          <select class="form-select" id="gender">
            <option selected>Female</option>
            <option value="male">Male</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="parentsName" class="form-label">Parents Name</label>
          <input type="text" class="form-control" id="parentsName" placeholder="Enter parents name">
        </div>
        <div class="col-md-6">
          <label for="parentsMobileNumber" class="form-label">Parents Mobile Number</label>
          <input type="text" class="form-control" id="parentsMobileNumber" placeholder="Enter parents mobile number">
        </div>
       
        <div class="col-md-6">
          <label for="bloodGroup" class="form-label">Blood Group</label>
          <input type="text" class="form-control" id="bloodGroup" placeholder="Enter blood group">
        </div>
       
        <div class="col-md-12">
          <label for="fileUpload" class="form-label">Choose File</label>
          <input type="file" class="form-control" id="fileUpload">
        </div>
      </div>
      <div class="mt-4 d-flex justify-content-end">
        <button type="submit" class="btn btn-primary ">Submit</button>
      </div>
    </form>
  </div>