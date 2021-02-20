
 
<?php 
  $autonumber = New Autonumber();
  $res = $autonumber->set_autonumber('ordernumber'); 
?>


<form onsubmit="return orderfilter()" action="customer/controller.php?action=processorder" method="post" >   
<section id="cart_items">
    <div class="container">
      <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Order Details</li>
        </ol>
      </div>
      <div class="row">

    <div class="col-md-6 pull-right">
    <div class="col-md-10 col-lg-12 col-sm-8">
    <input type="hidden" value="<?php echo $res->AUTO; ?>" id="ORDEREDNUM" name="ORDEREDNUM">
      Order Number :<?php echo $res->AUTO; ?>
    </div>
    </div>
 </div>
      <div class="table-responsive cart_info"> 
 
              <table class="table table-condensed" id="table">
                <thead >
                <tr class="cart_menu"> 
                  <th style="width:12%; align:center; ">Product</th>
                  <th >Description</th>
                  <th style="width:15%; align:center; ">Quantity</th>
                  <th style="width:15%; align:center; ">Price</th>
                  <th style="width:15%; align:center; ">Total</th>
                  </tr>
                </thead>
                <tbody>    
                       
              <?php

              $tot = 0;
                if (!empty($_SESSION['gcCart'])){ 
                      $count_cart = @count($_SESSION['gcCart']);
                      for ($i=0; $i < $count_cart  ; $i++) { 

                      $query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
                           WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  and p.PROID='".$_SESSION['gcCart'][$i]['productid']."'";
                        $mydb->setQuery($query);
                        $cur = $mydb->loadResultList();
                        foreach ($cur as $result){ 
              ?>

                         <tr>
                         <!-- <td></td> -->
                          <td><img src="admin/products/<?php echo $result->IMAGES ?>"  width="50px" height="50px"></td>
                          <td><?php echo $result->PRODESC ; ?></td>
                          <td align="center"><?php echo $_SESSION['gcCart'][$i]['qty']; ?></td>
                          <td> <?php echo  $result->PRODISPRICE ?>DH</td>
                          <td> <output><?php echo $_SESSION['gcCart'][$i]['price']?></output>Dhs</td>
                        </tr>
              <?php
              $tot +=$_SESSION['gcCart'][$i]['price'];
                        }

                      }
                }
              ?>
            

                </tbody>
                
              </table>  
                <div class="  pull-right">
                  <p align="right">
                  <div > Total Price :    <span id="sum">0.00</span>Dhs</div>
                   <div > Delivery Fee :  <span id="fee">0.00</span>Dhs</div>
                   <div> Overall Price :  <span id="overall"><?php echo $tot ;?>DH</span></div>
                   <input type="hidden" name="alltot" id="alltot" value="<?php echo $tot ;?>"/>
                  </p>  
                </div>
 
      </div>
    </div>
  </section>
 
 <section id="do_action">
    <div class="container">
     
      <div class="row">
         <div class="row">
                   <div class="col-md-7">
              <div class="form-group">
                  <label> Payment Method : </label> 
                  <div class="radio" >
                      <label >
                          <input type="radio"  class="paymethod" name="paymethod" id="deliveryfee" value="Cash on Delivery" checked="true" data-toggle="collapse"  data-parent="#accordion" data-target="#collapseOne" >Cash on Delivery 
                        
                      </label>
                  </div> 
              </div> 
                        <div class="panel"> 
                                <div class="panel-body">
                                    <div class="form-group ">
                                      <label>Address where to deliver</label>

                                    
                                        <div class="col-md-12">
                                          <label class="col-md-4 control-label" for=
                                          "PLACE">Place(Brgy/City):</label>

                                          <div class="col-md-8">
                                           <select class="form-control paymethod" name="PLACE" id="PLACE" onchange="validatedate()"> 
                                           <option value="0" >Select</option>
                                              <?php 
                                            $query = "SELECT * FROM `tblsetting` ";
                                            $mydb->setQuery($query);
                                            $cur = $mydb->loadResultList();

                                            foreach ($cur as $result) {  
                                              echo '<option value='.$result->DELPRICE.'>'.$result->BRGY.' '.$result->PLACE.' </option>';
                                            }
                                            ?>
                                          </select>
                                          </div>
                                        </div>  
                                      
                                    </div>
    
                                </div>
                            </div> 
      
                        <input type="hidden"  placeholder="HH-MM-AM/PM"  id="CLAIMEDDATE" name="CLAIMEDDATE" value="<?php echo date('y-m-d h:i:s') ?>"  class="form-control"/>

                   </div>  
    
             
         
              </div>
<br/>
<hr>
      <div class="form-group ">
                <h4> <label  style="margin-left: px ; color:steelblue" >Les informations personnelles:  </label> </h4>
                  
                  </div> 
<!-- <form  class="form-horizontal span6" action="customer/controller.php?action=add" onsubmit="return personalInfo();" name="personal" method="POST" enctype="multipart/form-data"> -->
                                
                                <input class="proid" type="hidden" name="proid" id="proid" value="">
                                
            <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "FNAME">First Name:</label>
                  <div class="col-md-6 "style="margin-bottom: 10px">
                   <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                      "First Name" type="text" value="">
                </div>
              </div>
            </div>
             
           
            
            <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "LNAME">Last Name:</label>

                <div class="col-md-6">
                   <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                      "Last Name" type="text" value="">
                </div>
              </div>
            </div>
              

            <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "GENDER">Gender:</label>

              <div class="col-lg-6"> 
                <input  id="GENDER" name="GENDER"  type="radio" checked="true" placeholder= "Gender"   value="Male" /><b> Male </b>
                    <input   id="GENDER"   name="GENDER"  placeholder= "Gender" type="radio"  value="Female" /> <b> Female </b>
              </div>
            </div>
          </div>
            
             
             <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "CITYADD">Municipality/City:</label>

                <div class="col-md-6" style="margin-bottom: 10px">
                   <input class="form-control input-sm" id="CITYADD" name="CITYADD" placeholder=
                      "Municipality/City Address" type="text" value="">
                </div>
              </div>
            </div>

            


       
  

           
                <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for=
                  "PHONE">Contact:</label>

                  <div class="col-md-6">
                     <input class="form-control input-sm" id="PHONE" name="PHONE" placeholder=
                        "Contact Number" type="text" value="">
                  </div>
                </div>
              </div> 
           

            
     
          
          
              <br/>
              <div class="row">
                <div class="col-md-6">
                    <a href="index.php?q=cart" class="btn btn-default pull-left"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>View Cart</strong></a>
                   </div>
                  <div class="col-md-6">
                      <button type="submit" class="btn btn-pup  pull-right " name="btn" id="btn" onclick="return validatedate();"   /> Submit Order <span class="glyphicon glyphicon-chevron-right"></span></button> 
                </div>  
              </div>
             
      </div>
    </div>
  </section><!--/#do_action-->
</form>