<?php
  define('TITLE', 'Payment Status');
  define('PAGE', 'paymentstatus');
  include('../dbConnection.php');
  include('./adminInclude/header.php'); 
  $ORDER_ID = "";
	
	if (isset($_POST["ORDER_ID"]) && $_POST["ORDER_ID"] != "") {
		$ORDER_ID = $_POST["ORDER_ID"];
	}

?>  
   <div class="container">
     <h2 class="text-center my-4">Payment Status </h2>
     <form method="post" action="">
     <div class="form-group row">
        <label class="offset-sm-3 col-form-label">Order ID: </label>
        <div>
          <input class="form-control mx-3" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo $ORDER_ID ?>">
        </div>
        <div>
          <input class="btn btn-primary mx-4" value="View" type="submit"	onclick="">
        </div>
      </div>
     </form>
    </div>
    <div class="container">
    <?php
      if (isset($_POST['ORDER_ID']))
      { 
        $sql = "SELECT * FROM courseorder WHERE order_id = '$ORDER_ID'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
          if($_POST["ORDER_ID"] == $row["order_id"]){ ?>
            <div class="row justify-content-center">
              <div class="col-auto">
                <h2 class="text-center">Payment Receipt</h2>
                <table class="table table-bordered">
                  <tbody>
                      <tr >
                        <td><label>Order ID</label></td>
                        
                          <?php if (isset($row["order_id"]))
                        {echo '
                            <th scope="row">'.$row["order_id"].'</th> ' ;
                        } 
                        ?>
                        
                        
                      </tr>
                      <tr >
                        <td><label>Sudent Email</label></td>
                        
                          <?php if (isset($row["order_id"]))
                        {
                              echo '
                                  <th scope="row">'.$row["stu_email"].'</th>                                  
                              ';
                        } 
                        ?>
                      </tr>
                      <tr >
                        <td><label>Crouse ID</label></td>
                        
                          <?php if (isset($row["order_id"]))
                        {
                              echo '
                                  <th scope="row">'.$row["course_id"].'</th>                                  
                              ';
                        } 
                        ?>
                      </tr>
                      <tr >
                        <td><label>Amount</label></td>
                        
                          <?php if (isset($row["order_id"]))
                        {
                              echo '
                                  <th scope="row">'.$row["amount"].'</th>                                  
                              ';
                        } 
                        ?>
                      </tr>
                      <tr >
                        <td><label>Status</label></td>
                        
                          <?php if (isset($row["order_id"]))
                        {
                              echo '
                                  <th scope="row">'.$row["status"].'</th>                                  
                              ';
                        } 
                        ?>
                      </tr>
                      <tr >
                        <td><label>Order date</label></td>
                        
                          <?php if (isset($row["order_id"]))
                        {
                              echo '
                                  <th scope="row">'.$row["order_date"].'</th>                                  
                              ';
                        } 
                        ?>
                      </tr>
                      
                      <tr>
                        <td></td>
                          <td><button class="btn btn-primary" onclick="javascript:window.print();">Print Receipt</button></td>
                      </tr>
                    </tbody>
                  </table>      
                </div>
              </div>
      <?php
      } } } ?>
      
      </div>
      </div>

    </div> 
    </div>  <!-- div Row close from header -->
</div>  <!-- div Conatiner-fluid close from header -->
<?php
include('./adminInclude/footer.php'); 
?> 
