<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css\tenantProfileSettings.css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head >
<body>
    <div class="container rounded bg-white mt-0 mb-0">
      <div class="row">
          <div class="col-md-3 border-right">
              <div class="d-flex flex-column align-items-center text-center p-2 py-3">
                <img class="rounded-circle mt-0" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <div class="mt-0 text-center">
                  <button class="btn btn-secondary profile-button p-1.5 mb-2" type="button" style="font-size: 11px;">Upload Image<input type="file"></button>
                </div>
                <span class="font-weight-bold" style="font-size: 18px;">Elmer Watapampam</span>
                <span class="text-black-50">elmer_watapampa@gmail.com</span><span> </span>
              </div>
          </div>
          <div class="col-md-5 border-right">
              <div class="p-2 py-4">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4 class="text-right" style="color:#009d63">Profile Settings</h4>
                  </div>
                  <div class="row mt-2">
                      <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder=" " value=""></div>
                      <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder=" "></div>
                  </div>
                  <div class="row mt-3">
                      <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder=" " value=""></div>
                      <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder=" " value=""></div>
                      <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder=" " value=""></div>
                      <div class="col-md-12"><label class="labels">Occupation</label><input type="text" class="form-control" placeholder=" " value=""></div>
                  </div>
                  <div class="row mt-3">
                      <div class="col-md-6"><label class="labels">Gender</label><input type="text" class="form-control" placeholder=" " value=""></div>
                      <div class="col-md-6"><label class="labels">Birthdate</label><input type="text" class="form-control" value="" placeholder=" "></div>
                  </div>
                  <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Update</button>
                  <a href="tenantDashboard.php"><button class="btn btn-primary profile-button" type="button">Cancel</button></a>
                </div>
              </div>
          </div>
      </div>
  </div>
  </div>
  </div>
</body>
</html>