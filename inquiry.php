<?php
include('header.php');

if(!isset($customer_id)){
    header("location: login.php");
}
?>
      
        <section class="py-2 border-bottom">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Hi, Welcome!</h2>
                    <p class="lead mb-0">How Are You Today?</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-12">
                        <a name="" id="" class="btn btn-success" href="inquiry_create.php" role="button">
                            Message
                        </a>
                        <hr>
                      
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Subject</th>
                                    <th>Created date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $page = 'inquiry';
                                $query = mysqli_query($conn, "SELECT * FROM inquiry WHERE customer_id='$customer_id' ") or die(mysqli_error($conn));
                                if(mysqli_num_rows($query)>0){
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['subject']; ?></td>
                                    <td><?php echo date("d-F-Y", strtotime($row['created_date']))?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a name="" id="" class="btn btn-primary" href="inquiry_details.php?id=<?php echo $row['id']; ?>"  role="button">
                                                View
                                            </a>
                                          <form action="delete.php" method="post">
              <input type="hidden" name="inquery_id" value="<?php echo $row['id']; ?>">
              <button type="submit" name="btn_inquire" class="btn btn-danger btn-md"><i class='fas fa-trash-alt'></i> Delete</button>
              </form>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++; }}else{ ?>
                                    <tr>
                                        <td colspan="4">
                                            <div class="alert alert-warning text-center">
                                                No data available
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </section>
       
