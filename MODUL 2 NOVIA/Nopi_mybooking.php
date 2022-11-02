<?php 
    $name = $_POST['name'];
    $date = $_GET['date'];
    $time = $_POST['start'];
    $masuk = date('d-m-yy', strtotime($date)) ." ". date('H:i:s');
    $duration = $_POST['duration'];
    $keluar = date('d-m-yy', strtotime($date)) ." ". date('H:i:s');
    $phone = $_POST['phone'];
    $mobil =$_POST['mobil'];
    $harga_service = 0;

    if (isset($_POST['service'])) {
        $service = $_POST['service'];
    }
    else {
        $service = '';
    }

    if($mobil == "Toyota ALphard"){
        $jumlah = $duration*1000000;
    }else if($mobil == "Honda Jazz"){
        $jumlah = $duration*350000;
    }else{
        $jumlah = $duration*150000;
    }    

?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  </head>

  <body>
      <div class="container text-center p-3">
          <h5>Thank you <?php echo $name?> for Reserving</h5>
          <h6>please double check your reservation details</h6>
      </div>

      <div class="container">
        <table class="table table-secondary">
            <tr >
                <th scope="col">Booking Number</th>
                <th scope="col">Name</th>
                <th scope="col">Check-in</th>
                <th scope="col">Check-out</th>
                <th scope="col">Car Type</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Service(s)</th>
                <th scope="col">Total Price</th>
            </tr>

            <tb>
              <tr>
                <td><?php echo rand();?></td>
                <td><?php echo $nama;?></td>
                <td><?php echo $masuk;?></td>
                <td><?php echo $keluar;?></td>
                <td> 
                    <?php echo $mobil?>
                </td>
                <td><?php echo $phone;?></td>
                <td>
                  <?php
                        if (!empty($service)) {
                            echo '<ul>';
                            foreach ($service as $myservice) {
                                if ($myservice == "health") {
                                    $harga_service += 50000;
                                    echo '<li>' . $myservice . '</li>';
                                }
                                else if($myservice == "driver") {
                                    $harga_service += 150000;
                                    echo '<li>' . $myservice . '</li>';
                                }
                                else {
                                    $harga_service += 300000;
                                    echo '<li>' . $myservice . '</li>';
                                }
                                
                            }
                            echo '</ul>';
                        } else {
                            echo 'Tidak ada service yang ditambahkan';
                        }
                      ?>
                </td>

                <td>
                    <?php echo 'Rp.' . ($jumlah+$harga_services)?>
                    
                    
                </td>
              </tr>
              
            </tb>
          </table>
        </div>
        
      <footer style= "background-color :rgb(212, 245, 212);text-align: center;">
        Nopi_1202204065  
      </footer> 
    </body>