  <?php

include ('include/connect.php');
include_once('include/session.php');


?>
<div class="modal fade" id="add">
      <form  enctype="multipart/form-data" method="POST">
        <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                  <h5 class="modal-title text-center"><i class="fa fa-check-circle"></i> Survey Form</h5>

                
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>





</div>

        <br> <br> <p> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<b>The following questions ask about you over the past week. Please choose  which is closed to your conditions.  </p>
     <hr/>
                <div class="card card-primary">
                  <!-- form start -->
                       <div class="card-body">
                        <div  class="row" style="color:black;">
                            
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="fn">Name of Client: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="nameofclient"  placeholder="" size="5" autofocus required>
                                    </div>
                                </div>




<?php>

            <div class="contentSection">
    
                <span>1. All of the chores you have completed have taken far longer than usual.</span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>


                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat disagree"/>Somewhat disagree <br>
                  <input type="radio" name="yes" value="Completely disagree"/>Completely disagree 


                    </form>


</div>

<?php>
  <div class="contentSection">
 <hr/>
                <span>2. You are having trouble concentrating.</span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat disagree"/>Somewhat disagree <br>
                  <input type="radio" name="complete" value="Completely disagree"/>Completely disagree 


                    </form>

</div>

              
<?php>
  <div class="contentSection">
 <hr/>
                <span>3. You have the perception that your life is unhappy since there is no longer any joy in it. </span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat disagree"/>Somewhat disagree <br>
                  <input type="radio" name="yes" value="Completely disagree"/>Completely disagree 


                    </form>

</div>


<?php>
  <div class="contentSection">
 <hr/>
                <span>4. You have the impression that you have no future. </span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat disagree"/>Somewhat disagree <br>
                  <input type="radio" name="yes" value="Completely disagree"/>Completely disagree 


                    </form>

</div>

<?php>
  <div class="contentSection">
 <hr/>
                <span>5. You are having trouble making decisions. </span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat disagree"/>Somewhat disagree <br>
                  <input type="radio" name="complete" value="Completely disagree"/>Completely disagree 


                    </form>

</div>

<?php>
  <div class="contentSection">
 <hr/>
                <span>6. Recently, you have been frustrated and agitated. </span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat disagree"/>Somewhat disagree <br>
                  <input type="radio" name="yes" value="Completely disagree"/>Completely disagree 


                    </form>

</div>

<?php>
  <div class="contentSection">
 <hr/>
                <span>7. You believe you’ve failed in everything you have attempted. </span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat disagree"/>Somewhat disagree <br>
                  <input type="radio" name="yes" value="Completely disagree"/>Completely disagree 


                    </form>

</div>

<?php>
  <div class="contentSection">
 <hr/>
                <span>8. You have been feeling bad about everything you’ve done.  </span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat disagree"/>Somewhat disagree <br>
                  <input type="radio" name="yes" value="Completely disagree"/>Completely disagree 


                    </form>

</div>

<?php>
  <div class="contentSection">
 <hr/>
                <span>9. You have lost interest in all of the things that were once important to you.  </span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat disagree"/>Somewhat disagree <br>
                  <input type="radio" name="yes" value="Completely disagree"/>Completely disagree 


                    </form>

</div>

<?php>
  <div class="contentSection">
 <hr/>
                <span>10. You have been exhausted for a long time.  </span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat disagree"/>Somewhat disagree <br>
                  <input type="radio" name="yes" value="Completely disagree"/>Completely disagree 


                    </form>

</div>

<?php>
  <div class="contentSection">
 <hr/>
                <span>11. You are having suicidal thoughts.  </span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat disagree"/>Somewhat disagree <br>
                  <input type="radio" name="yes" value="Completely disagree"/>Completely disagree 


                    </form>

</div>

<?php>
  <div class="contentSection">
 <hr/>
                <span>12. You are having a lack of sleep?  </span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat disagree"/>Somewhat disagree <br>
                  <input type="radio" name="yes" value="Completely disagree"/>Completely disagree 


                    </form>

</div>

<?php>
  <div class="contentSection">
 <hr/>
                <span>13. Everyone around you is a source of distrust for you.  </span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat disagree"/>Somewhat disagree <br>
                  <input type="radio" name="yes" value="Completely disagree"/>Completely disagree 


                    </form>

</div>

<?php>
  <div class="contentSection">
 <hr/>
                <span>14. All of your relationships are causing you problems,(home as well as professional).  </span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat disagree"/>Somewhat disagree <br>
                  <input type="radio" name="yes" value="Completely disagree"/>Completely disagree 


                    </form>

</div>

<?php>
  <div class="contentSection">
 <hr/>
                <span>15. You have lost or gained weight without the use of any diet plans.  </span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat disagree"/>Somewhat disagree <br>
                  <input type="radio" name="yes" value="Completely disagree"/>Completely disagree 


                    </form>

</div>

<?php>
  <div class="contentSection">
 <hr/>
                <span>16. You have had a loss of appetite.  </span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat disagree"/>Somewhat disagree <br>
                  <input type="radio" name="yes" value="Completely disagree"/>Completely disagree 


                    </form>

</div>

<?php>
  <div class="contentSection">
 <hr/>
                <span>17. Other people may have seen you moving or speaking slowly. </span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat disagree"/>Somewhat disagree <br>
                  <input type="radio" name="yes" value="Completely disagree"/>Completely disagree 


                    </form>

</div>

<?php>
  <div class="contentSection">
 <hr/>
                <span>18. Thoughts that you would be better off dead, or of hurting yourself. </span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely Agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat Agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat Disagree"/>Somewhat disagree <br>
                  <input type="radio" name="yes" value="Completely disagree"/>Completely disagree 


                    </form>

</div>

<?php>
  <div class="contentSection">
 <hr/>
                <span>19. You have been moving about a lot more than usual because you’ve been fidgety or restless. </span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Completely agree"/>Completely agree <br>
                   <input type="radio" name="yes" value="Somewhat agree"/>Somewhat agree <br>
                  <input type="radio" name="yes" value="Neutral"/>Neutral <br>
                 <input type="radio" name="yes" value="Somewhat disagree"/>Somewhat disagree <br>
                  <input type="radio" name="yes" value="Completely disagree"/>Completely disagree 


                    </form>

</div>

<?php>
  <div class="contentSection">
 <hr/>
                <span>20.If you had agree with the issues above, how difficult have these problems made it for you at work, home, school, or with other people? </span>
                <span style=float:right"> 
                    <?php>

                
                   
                    </span>
                    <hr/>

                    <form action="text" method="post">
                    <input type="radio" name="yes" value="Not difficult at all"/>Not difficult at all <br>
                   <input type="radio" name="yes" value="Somewhat difficult"/>Somewhat difficult <br>
                  <input type="radio" name="yes" value="Very difficult"/>Very difficult <br>
                 <input type="radio" name="yes" value="Extremely difficult"/>Extremely difficult <br>
                    </form>

</div>
            <!-- /.card-body -->
             </div>
        <div class="modal-footer">
                  <div class="btn-group">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                 
         <button type="submit" name="submitbutton" class="btn btn-primary" > <i class="fa fa-check"></i> Submit  </button>

                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>


    
                  </div>


 </div>
