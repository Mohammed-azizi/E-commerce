                      <?php 
                       if (!isset($_SESSION['USERID'])){
                          redirect(web_root."admin/index.php");
                         }

                      // $autonum = New Autonumber();
                      // $res = $autonum->single_autonumber(2);

                       ?> 
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST">

           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Ajouter un nouvel utilisateur</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
                   
                    <!-- <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_id">User Id:</label>

                      <div class="col-md-8"> --> 
                        <!--  <input class="form-control input-sm" id="user_id" name="user_id" placeholder=
                            "Account Id" type="hidden" value="<?php echo $res->AUTO; ?>"> -->
                    <!--   </div>
                    </div>
                  </div> -->           
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "U_NAME">Nom:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="U_NAME" name="U_NAME" placeholder=
                            "Nom du compte" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "U_USERNAME">Nom d'utilisateur:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="U_USERNAME" name="U_USERNAME" placeholder=
                            " Address Email" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "U_PASS">Mot de passe:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="U_PASS" name="U_PASS" placeholder=
                            "Mot de passe du compte" type="Password" value="" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "U_ROLE">Rôle:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="U_ROLE" id="U_ROLE">
                          <option value="Administrator"  >Administrateur</option>
                          <option value="Staff"  >Personnel</option> 
                          <!-- <option value="Customer">Customer</option> -->
                          <option value="Encoder" >Encodeur</option>
                        </select> 
                      </div>
                    </div>
                  </div>


            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Ajouter</button> 
                          <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
                       </div>
                    </div>
                  </div>

               
        <div class="form-group">
                <div class="rows">
                  <div class="col-md-6">
                    <label class="col-md-6 control-label" for=
                    "otherperson"></label>

                    <div class="col-md-6">
                   
                    </div>
                  </div>

                  <div class="col-md-6" align="right">
                   

                   </div>
                  
              </div>
              </div>
          
        </form>
       