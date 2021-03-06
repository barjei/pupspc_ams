<?php
date_default_timezone_set("Asia/Manila");
?> 
<ol class="breadcrumb">
  <li>
    <i class="fa fa-users"></i><a href="#view-students"> Students </a>
  </li>
  <li class="active">
    <i class="fa fa-user-plus"></i> {{ header }}
  </li>
</ol>

<div class="row">
  <div class="col-md-6">
   <h1 class="page-header">
    {{ header }} <small></small>
  </h1>
</div>
<div class="col-md-6">
 <div>
  <div class="panel-heading">
   <div class="row">
    <div class="col-xs-3">
     <i class=""></i>
   </div>
   <div class="col-xs-9 text-right">
    <div class="huge">
     <span id="clock">&nbsp</span>
   </div>
   <div><?php echo date("D, j M Y"); ?></div>
 </div>
</div>
</div>
</div>
</div>
<!-- clock -->
</div>
<!-- row -->

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3 class="panel-title"><i class="fa fa-table"></i> Student Details </h3>
      </div>
      <div class="panel-body">
        <form ng-submit="submitAdd(newUser)" accept-charset="utf-8">
          <fieldset>

            <div class="row form-group">
              <div class="col-md-3 primary-text">
                <label>
                  Student No.
                </label>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control thin-font" name="email" id="email" ng-model="newUser.studNo" placeholder="2011-00150-SP-0" required autofocus>
              </div>
            </div>
            <br>
            <!-- /.row -->

            <div class="row form-group">
              <div class="col-md-3 primary-text">
                <label>
                  First Name
                </label>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control thin-font" name="firstName" id="firstName" ng-model="newUser.firstName" required>
              </div>
            </div>
            <br>
            <!-- /.row -->

            <div class="row form-group">
              <div class="col-md-3 primary-text">
                <label>
                  Middle Name
                </label>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control thin-font" name="lastName" id="lastName" ng-model="newUser.middleName">
              </div>
            </div>
            <br>
            <!-- /.row -->

            <div class="row form-group">
              <div class="col-md-3 primary-text">
                <label>
                  Last Name
                </label>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control thin-font" name="lastName" id="lastName" ng-model="newUser.lastName" required>
              </div>
            </div>
            <br>
            <!-- /.row -->

            <div class="row form-group">
              <div class="col-md-3 primary-text">
                <label>
                  Course
                </label>
              </div>
              <div class="col-md-9">
                <button type="button" 
                class="btn btn-default" 
                ng-model="newUser.course" 
                data-html="1"
                data-toggle="true"
                bs-options="obj.value as obj.label for obj in courses"
                placeholder="Select"
                bs-select>Action <span class="caret"></span></button>
              </div>
            </div>
            <br>
            <!-- /.row -->

            <div class="row form-group">
              <div class="col-md-3 primary-text">
                <label>
                  Year Level
                </label>
              </div>
              <div class="col-md-9">
                <button type="button" 
                class="btn btn-default" 
                ng-model="newUser.yearLevel" 
                data-html="1"
                data-toggle="true"
                bs-options="obj.label as obj.label for obj in yearLevels"
                placeholder="Select"
                bs-select>Action <span class="caret"></span></button>
              </div>
            </div>
            <br>
            <!-- /.row -->

            <div class="row form-group">
              <div class="col-md-3 primary-text">
                <label for="viewAs" class="primary-text">
                  Student Role
                </label>
              </div>
              <div class="col-md-9">
                <button type="button" 
                class="btn btn-default" 
                ng-model="newUser.userType" 
                data-html="1"
                data-toggle="true"
                bs-options="obj.value as obj.label for obj in userTypes"
                placeholder="Select"
                bs-select>Action <span class="caret"></span></button>
              </div>
            </div>
            <br/>
            <!-- /.row -->

            <div class="row form-group">
              <div class="col-md-3 primary-text">
                <label>
                  R.F.I.D.
                </label>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control thin-font blink_me" name="rfid" id="rfid-create" ng-model="newUser.rfid" placeholder="Scan R.F.I.D. Card..." required>
              </div>
            </div>
            <!-- /.row -->

            <input type="submit" id="submit" name="submit" class="display-none">

          </fieldset>

        </form>
      </div>
    </div>
  </div>
</div>


