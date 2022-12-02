<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body{
      font-family: Verdana;
    }
    .mb-3 input{
      background-color: rgb(229, 233, 236);
    }
    .card{
      width: 80rem;
     
    }
   
  </style>
</head>
<body>
<div class="container ">
    <div class="card mt-5 border-success">
      <div class="card-body mt-3">
        <h5 class="card-title text-center">FORM REGISTER</h5>
      <form action="" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control " name="name" id="name" aria-describedby="emailHelp" placeholder="Input name here...">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control " id="email" aria-describedby="emailHelp" placeholder="Input email here...">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Input password here...">
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-success"  type="submit" style="width: 300px;">Register</button>
          
          </div>
      </form>
      </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>