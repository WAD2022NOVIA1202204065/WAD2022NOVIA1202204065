<?php 
  $namamobil = isset($_POST['mobil']) ? $_POST['mobil'] : " ";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>

  <body>
      <div class="container mt-4">
        <h6 class="text-center p-2 bg-dark text-white">
            Rent Car Now!
        </h6>
      </div>

      <div class="container mb-6">
          <div class="card mt-3">
            <div class="row">

                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                  <div>
                    <img src="
                          <?php
                            if($namamobil == "Toyota Alphard"){
                              echo "Toyota Alphard.png";
                            }
                            else if ($namamobil == "Honda Jazz"){
                              echo "Honda Jazz.png";
                            }
                            else{
                              echo "Toyota Sienta.png";
                            }
                          ?>
                          
                      " class="img-fluid rounded">
                  </div>
                </div>
  
  
                <div class="col-md-6">
                    <form class="m-4" method="POST" action="Nopi_mybooking.php" >
                        <div class="mb-3">
                          <label for="nameinput" class="form-label">Name</label>
                          <input type="text" class="form-control" name="name" id="nameinput" readonly="readonly" value="Nopi_1202204065">
                        </div>

                        <div class="mb-3 ">
                            <label for="dateinput" class="form-label">Book Date</label>
                            <input type="date" class="form-control" name="date" id="dateinput">
                        </div>

                        <div class="mb-3 ">
                            <label for="time" class="form-label">Start Time</label>
                            <input type="time" class="form-control" name="masuk" id="time">
                        </div>

                        <div class="mb-3 ">
                            <label for="duration" class="form-label">Duration (Days)</label>
                            <input type="number" class="form-control" name="duration" id="duration">
                        </div>

                        <div class="mb-3 ">
                          <label for="selection" class="form-label">Car Type</label>
                          <select name="mobil" class="form-select" aria-label="Default select example">
                                <option selected disabled>Choose...</option>
                                <option <?php if($namamobil == "Toyota Alphard"){echo "selected";}?> value="Toyota Alphard">Toyota Alphard</option>
                                <option <?php if($namamobil == "Honda Jazz"){echo "selected";}?> value="Honda Jazz">Honda Jazz</option>
                                <option <?php if($namamobil == "Toyota Sienta"){echo "selected";}?> value="Toyota Sinte">Toyota Sienta</option>
                              </select>

                        </div>

                        <div class="mb-3 ">
                          <label for="phone" class="form-label">Phone Number</label>
                          <input type="number" class="form-control" name="phone" id="phone">
                        </div>
                        
                        <div class="mb-3">
                          <label for="service" class="form-label">Add Service(s)</label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service[]" value="health" id="health">
                            <label class="form-check-label" for="health">
                             Health Protocol / Rp.50.000
                            </label>
                          </div>
  
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service[]" value="driver" id="driver">
                            <label class="form-check-label" for="driver">
                              Driver / Rp.150.000
                            </label>
                          </div>
  
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service[]" value="fuel" id="fuel" >
                            <label class="form-check-label" for="fuel">
                              Fuel Filled / Rp.300.000
                            </label>
                          </div>
                        </div>


                        <div class="d-grid gap-2 mb-3">
                          <button type="submit" name="submit" class="btn btn-primary ">Book</button>
                        </div>
                    </form>
                </div>
            </div>
          </div>
      </div>
      <footer style= "background-color :rgb(212, 245, 212);text-align: center;">
        Nopi_1202204065 
      </footer> 
  </body>
</html>