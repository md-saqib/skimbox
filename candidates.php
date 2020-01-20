<?php  
include( dirname(__FILE__) . DIRECTORY_SEPARATOR . 'config.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ThinkSoft Belgium: Candidates</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor-1/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
    <div class="container">
      <a class="navbar-brand" style="font-family: comfortaa;" href="#">ThinkSoft</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- Page Content -->

  <div class="container-fluid">

          <!-- Page Heading -->
           &nbsp;

          <h1 class="h3 mb-2 text-gray-800" >View Candidates</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" >You can view the candidates here</h6>
            </div>
            <div class="card-body" >
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%"  cellspacing="0" style="color: #858796">
                  <thead > 
                    <tr >
                      <th>#</th>
                      <th>Name</th>
                      <th>Roll</th>
                      <th>Technology</th>
                      <th>Availability</th>
                      <th>Rate</th>
                      <th>More Information</th>
                    </tr>
                  </thead>
                  
                  <tbody style="white-space: nowrap;">
                <?php $sql = "SELECT candidate.id, candidate.name,candidate.roll,candidate.technology,candidate.availability,candidate.rate from  candidate";
                $query = $dbh-> prepare($sql);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                  if($query->rowCount() > 0)
                    {
                      foreach($results as $result)
                        {               ?>                                      
                        
                          <tr >
                            <td class="center"><?php echo htmlentities($cnt);?></td>
                            <td class="center"><?php echo htmlentities($result->name);?></td>
                            <td class="center"><?php echo htmlentities($result->roll);?></td>
                            <td class="center"
                            style="width: 100px;
                            text-overflow: ellipsis;
                            max-width: 300px; /* add this */
                            white-space: nowrap;
                            overflow: hidden;">
                            <?php echo htmlentities($result->technology);?>
                            </td>
                            <td class="center"><?php echo htmlentities($result->availability);?></td>
                            <td class="center"><?php echo htmlentities($result->rate);?></td>
                            <td class="center">
                            <a href="desc.php?cid=<?php echo htmlentities($result->id);?>"><button class="btn btn-primary">View More <i class="fa fa-external-link"></i></button>
                            </td>
                          </tr>
                            <?php $cnt=$cnt+1;}} ?>                                      
                 </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

  </div>
  <!-- /.container -->


  <!-- Bootstrap core JavaScript -->
  <script src="vendor-1/jquery/jquery.min.js"></script>
  <script src="vendor-1/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
</body>

</html>
