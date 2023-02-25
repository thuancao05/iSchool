<?php
    include('./maininclude/header.php');
?> 

<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/literature.jpg" alt="course"
        style="height: 500px; width: 100%; object-fit: cover;
        box-shadow: 10px">
    </div>
</div>

<!--Start main content-->
<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form action="post" action="">
        <div class="form-gourp row">
            <label class="offset-sm-3 col-form-label">Order ID: </label>
            <div>
                <input type="text" class="form-control mx-3">
            </div>
            <div>
                <input type="text" class="btn btn-primary mx-4" value="View">
            </div>
        </div>
    </form>
</div>
<!--End main content-->

<!--Start contact us-->
    <?php
        include('./contact.php');
    ?>
<!--End contact us-->




<?php
    include('./maininclude/footer.php');
?> 