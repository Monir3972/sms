<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  </head>
  <body>
    <div class="container mt-3">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="card rounded-0">
            <div class="card-body">
               <form action="" method="POST" id="add_student">
                <div class="row g-3">
                  <div class="col">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control form-control-sm" name="name" id="name">
                  </div>
                  <div class="col">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="text" placeholder="DOB" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control form-control-sm" id="dob" name="dob">
                  </div>
                </div>
                <div class="row g-3">
                  <div class="col">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-sm" name="email" id="email">
                  </div>
                   <div class="col">
                    <label for="contact" class="form-label">Contact</label>
                    <input type="contact" class="form-control form-control-sm" name="contact" id="contact">
                  </div>
                  <div class="col">
                    <label for="address" class="form-label">Address</label>
                      <textarea class="form-control form-control-sm" name="address" id="address" ></textarea>
                  </div>
                </div>
                <div class="row g-3">
                  <div class="col">
                    <label for="dept" class="form-label">Department</label>
                     <select class="form-select js-example-basic-single form-control-sm" id="dept" name="dept" >
                      
                    </select>
                  </div>
                   <div class="col">
                    <label for="section" class="form-label">Section</label>
                      <select class="form-select js-example-basic-single form-control-sm" id="section" name="section" >
                       
                    </select>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm float-end mt-2">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-8 mx-auto">
          <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Date of Birth</th>
              <th scope="col">Email</th>
              <th scope="col">Contact</th>
              <th scope="col">Address</th>
              <th scope="col">Department</th>
              <th scope="col">Section</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody id="student_data">
            
          </tbody>
        </table>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/student.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
        $('.js-example-basic-single').select2();
      });
    </script>
  </body>
</html>