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

  <title>ThinkSoft Belgium: Admin Login</title>

  <!-- Bootstrap core CSS -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
      <a class="navbar-brand"    href="#">ThinkSoft</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
   <style type="text/css">
            .button {
              background-color: #17A2B8; 
              border-radius: 12px;
              color: white;
              padding: 15px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              font-family: comfortaa;
              margin: 4px 2px;
              cursor: pointer;
              transition-duration: 0.4s;
            }
            .button1:hover {
              box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
            }


          </style>

  <!-- Page Content -->
  <div class="container">
  <div class="container-fluid" style="color:#858796">

          <!-- Page Heading -->
          <br>
          <br>
          <br>
           &nbsp;
           &nbsp;
           

                    <?php         
                $cid=intval($_GET['cid']);
                $sql="SELECT * from candidate where id=:cid";
                $query=$dbh->prepare($sql);
                $query-> bindParam(':cid',$cid, PDO::PARAM_STR);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query->rowCount() > 0)
                {
                foreach($results as $result)
                {               
                  ?> 
                  <br>
                   <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary" >Candidate Profile</h6>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" style="color: #858796">
                            <tr>
                              <td style="width: 300px;">Name</td>
                              <td><?php echo htmlentities($result->name);?></td>
                            </tr>
                            <tr>
                              <td>Experience</td>
                              <td><?php echo htmlentities($result->experience);?></td>
                            </tr>
                            <tr>
                              <td>Roll</td>
                              <td><?php echo htmlentities($result->roll);?></td>
                            </tr>
                            <tr>
                              <td>Specific Technical Skills</td>
                              <td><?php echo htmlentities($result->technology);?></td>
                            </tr>
                            <tr>
                              <td>Availability</td>
                              <td><?php echo htmlentities($result->availability);?></td>
                            </tr>
                            <tr>
                              <td>Rate</td>
                              <td><?php echo htmlentities($result->rate);?></td>
                            </tr>
                <?php }} ?>
                   </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="btn-group row col-12" role="group" aria-label="Basic example">
          <button class="button button1 col-3" onclick="goBack()"><i class="fa fa-arrow-left"></i> Back</button>
           <a href="content/thinksoft_resumes/<?php echo htmlentities($result->cv);?>" style="text-decoration:none;" download><button class="button button1 col-3" style="position: absolute; right: 0;"><i class="fa fa-download"></i> Download CV</button></a>
         </div>
          <script>
          function goBack() {
            window.history.back();
          }
          </script>
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
