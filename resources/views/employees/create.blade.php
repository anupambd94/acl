@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Employee Details </h3>
            </div>
            <div class="panel-body">
                <!-- START Form Wizard -->
                <form class="form-horizontal form-bordered" action="#" id="wizard-validate">
                        
                    <!-- Wizard Container 1 -->
                    <div class="wizard-title"> Basic Information</div>
                    <div class="wizard-container">
                            
                                    <fieldset class="col-md-9">    	
                                            <legend>
                                                    <div class="form-group">
                                                            <div class="col-md-12">
                                                                <h4 class="text-primary"> <i class="fa fa-user"></i> Step-1 Basic Information </h4>
                                                                {{-- <p class="text-muted"> Enter Your Login Details </p> --}}
                                                            </div>
                                                        </div>
                                            </legend>
                                            
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                        
                                                            <div class="form-group ">
                                                                <label class="control-label"> Name: </label>
                                                                <div class="col-sm-4">
                                                                    <input class="form-control" name="firstName" type="text" placeholder="First Name" required />
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input class="form-control" name="lastName" type="text" placeholder="Last Name" required />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label"> Login Details : </label>
                                                                <div class="col-sm-4">
                                                                    <input class="form-control" name="email" type="email" placeholder="Email" />
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input class="form-control" name="password" type="password" id="password" placeholder="Password" data-parsley-minlength="4" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label>Gender: </label>
                                                                            <select class="form-control" name="gender" id="gender">
                                                                                <option value="MALE">Male</option>
                                                                                <option value="FEMALE">Female</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label>Marital Status: </label>
                                                                            <select class="form-control" name="meritalStatus" id="meritalStatus">
                                                                                <option value="SINGLE">Single</option>
                                                                                <option value="MARRIED">Married</option>
                                                                                <option value="DEVORCED">Devorced</option>
                                                                                
                                                                            </select>
                                                                        </div>
                                                                    <div class="col-md-4">
                                                                        <label>Phone #:</label>
                                                                        <input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control" />
                                                                    </div>
                                                                    {{-- <div class="col-md-4">
                                                                        <label>Date of birth:</label>
                                                                        <input type="text" placeholder="99/99/9999" data-mask="99/99/9999" class="form-control" />
                                                                    </div> --}}
                                                                    
                                                                </div>
                                                            </div>
                                                                <div class="form-group">
                                                                        <div class="row">
                                                                               
                                                                            <div class="col-md-4">
                                                                                <label>Expected join date:</label>
                                                                                <input type="date"  class="form-control" />
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label>Confirmation date:</label>
                                                                                <input type="date"  class="form-control" />
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label>Termination date:</label>
                                                                                <input type="date"  class="form-control" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label>Probation (Months): </label>
                                                                                <input class="form-control" type="number" name="probation" type="number" id="probation"   />
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                    {{-- 'SPASS', 'WP', 'PR', 'CITIZENSHIP', 'EP' --}}
                                                                                <label>ID type: </label>
                                                                                <select class="form-control" name="idType" id="idType">
                                                                                    <option value="SPASS">SPASS</option>
                                                                                    <option value="WP">WP</option>
                                                                                    <option value="PR">PR</option>
                                                                                    <option value="CITIZENSHIP">CITIZENSHIP</option>
                                                                                    <option value="EP">EP</option>
                                                                                    
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label>NRIC/FIN/WP: </label>
                                                                                <input class="form-control" name="wp" type="text" id="wp" />
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                                
                                                                            <div class="col-md-4">
                                                                                <label>Leave calculated from:</label>
                                                                                <input type="date"  class="form-control" />
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label>FIN/WPN Expiry date:</label>
                                                                                <input type="date"  class="form-control" />
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label>Birth date:</label>
                                                                                <input type="date"  class="form-control" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </fieldset>	
                                        <fieldset class="col-md-3">    	
                                                <legend>
                                                        <div class="form-group">
                                                                <div class="col-md-12">
                                                                    {{-- <h4 class="text-primary"> <i class="fa fa-photo"></i> Image</h4> --}}
                                                                    {{-- <p class="text-muted"> Enter Your Login Details </p> --}}
                                                                    <br>
                                                                </div>
                                                            </div>
                                                </legend>
                                                
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                            
                                                                <div class="form-group">
                                                                    <label class="col-sm-offset-2 col-sm-10 "> <i class="fa fa-photo"></i> Upload Photo </label>
                                                                    <div class="col-sm-12">
                                                                        {{-- <input class="form-control" name="name" type="text" placeholder="Type your Name" data-parsley-range="[4, 10]" data-parsley-group="order" data-parsley-required /> --}}
                                                                        <div class="imgUp">
                                                                                <div class="imagePreview"></div>
                                                                            <label class="btn btn-primary">
                                                                                Upload
                                                                                <input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                                                            </label>
                                                                        </div><!-- col-2 -->
                                                                    </div>
                                                                </div>
                                                               
                                                    </div>
                                                </div>
                                                
                                            </fieldset>				
                                        
                                        <div class="clearfix"></div>
                    </div>
                    <!--/ Wizard Container 1 -->
                    <!-- Wizard Container 2 -->
                    <div class="wizard-title"> General information </div>
                    <div class="wizard-container">
                            
                        <fieldset class="col-md-12">    	
                                <legend>
                                        <div class="form-group">
                                                <div class="col-md-12">
                                                    <h4 class="text-primary"> <i class="fa fa-user"></i> Step-2 General Information </h4>
                                                    {{-- <p class="text-muted"> Enter Your Login Details </p> --}}
                                                </div>
                                            </div>
                                </legend>
                                
                                <div class="panel panel-default">
                                    <div class="panel-body">    
                                        <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3" id="departmentSelectBox">
                                                        <label>Department: </label>
                                                        
                                                        <select class="form-control" name="department" id="department">
                                                            <option value="">Select Department</option>
                                                            <option value="addNew" class="fa">&oplus; Add new Department                                                         
                                                            </option>
                                                        </select>
                                                     
                                                    </div>
                                                    <div class="col-md-3" id="departmentAddBox">
                                                        <label>Add New Department: </label>
                                                        <input class="form-control" type="text" name="newDepartment" id="newDepartment" placeholder="Enter department name"/>                                                            
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary" type="button" id="addDepartment"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
                                                            <button class="btn btn-outline-danger bg-danger" type="button" id="closeAddDepartment" style="background: #B51313;"><i class="fa fa-times-circle" ></i>&nbsp;Cancel</button>
                                                        
                                                        </div>   
                                                                     
                                                    </div>

                                                        <div class="col-md-3" id="sectionSelectBox">
                                                                <label>Section: </label>
                                                                <select class="form-control" name="section" id="section">
                                                                    <option value="">Select Section</option>
                                                                    <option value="addNew" class="fa">&oplus; Add new Section</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-3" id="sectionAddBox">
                                                                <label>Add New Section: </label>
                                                                <input class="form-control" type="text" name="newSection" id="newSection" placeholder="Enter section name"/>                                                            
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-secondary" type="button" id="addSection"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
                                                                </div>                
                                                            </div>

                                                        <div class="col-md-3">
                                                            <label>Designation: </label>
                                                            <select class="form-control" name="designation" id="designation">
                                                                <option value="">Select Designation</option>
                                                            </select>
                                                        </div>
                                                        {{-- 'PH', 'MC', 'LOCAL', 'SINGAPUR' --}}
                                                        <div class="col-md-3">
                                                            <label>Holiday Type: </label>
                                                            <select class="form-control" name="holidayType" id="holidayType">
                                                                <option value="PH">PH</option>
                                                                <option value="MC">MC</option>
                                                                <option value="LOCAL">LOCAL</option>
                                                                <option value="SINGAPUR">SINGAPUR</option>
                                                            </select>
                                                        </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>Working Day Per Hour: </label>
                                                        <input class="form-control" type="number" name="workingDayPerhour" id="workingDayPerhour" type="number" />                                                            
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Days Per Week: </label>
                                                        <input class="form-control" type="number" name="daysPerWeek" id="daysPerWeek" type="number" />                                                            
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Total Hours Per Year: </label>
                                                        <input class="form-control" type="number" name="hoursPerYear" id="hoursPerYear" type="number" />                                                            
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Rate Per Hour: </label>
                                                        <input class="form-control" type="number" name="ratePerHour" id="ratePerHour" type="number" />                                                            
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- 'FIXED', 'HOURLY', 'DAILY', 'NONE' --}}
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>Salary Type: </label>
                                                        <select class="form-control" name="salaryType" id="salaryType">
                                                            <option value="">Select salary type</option>
                                                            <option value="FIXED">FIXED</option>
                                                            <option value="HOURLY">HOURLY</option>
                                                            <option value="DAILY">DAILY</option>
                                                            <option value="NONE">NONE</option>
                                                        </select>
                                                    </div>
                                                    {{-- 'FULLTIME', 'PARTTIME', 'FLEXI', 'NONE' --}}
                                                    <div class="col-md-3">
                                                        <label>Job Type: </label>
                                                        <select class="form-control" name="jobType" id="jobType">
                                                            <option value="">Select job type</option>
                                                            <option value="FULLTIME">FULLTIME</option>
                                                            <option value="PARTTIME">PARTTIME</option>
                                                            <option value="FLEXI">FLEXI</option>
                                                            <option value="NONE">NONE</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                                    
                                    </div>
                                </div>
                            </fieldset>	
                            <div class="clearfix"></div>
                    </div>
                    <!--/ Wizard Container 2 -->
                    <!-- Wizard Container 3 -->
                    <div class="wizard-title"> Personal Information </div>
                    <div class="wizard-container">
                        
                        
                        <fieldset class="col-md-12">    	
                            <legend>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <h4 class="text-primary"> <i class="fa fa-book"></i> Current Address </h4>
                                        <p class="text-muted"> Your Current Address </p>
                                    </div>
                                </div>
                            </legend>
                            
                            <div class="panel panel-default">
                                <div class="panel-body">    
                                    <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Adddress 1: </label>
                                                    <textarea class="form-control" type="text" name="address1" id="address1" cols="30" rows="3" required></textarea>                                                           
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Address 2: </label>
                                                    <textarea class="form-control" type="text" name="address2" id="address2" cols="30" rows="3"></textarea>                                                           
                                                                                                                
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>City: </label>
                                                    <input class="form-control" type="text" name="city" id="ciry"/>                                                            
                                                </div>
                                                <div class="col-md-3">
                                                    <label>State: </label>
                                                    <input class="form-control" type="text" name="state" id="state" />                                                            
                                                </div>
                                                <div class="col-md-3">
                                                        <label>Country: </label>
                                                        <select class="form-control" name="country" id="country">
                                                            <option value="">Select Country</option>
                                                        </select>
                                                </div>
                                                    <div class="col-md-3">
                                                    <label>Postal Code: </label>
                                                    <input class="form-control" type="number" name="postCode" id="postCode" />                                                            
                                                </div>
                                            </div>
                                        </div>     
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="col-md-12">    	
                                <legend>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <h4 class="text-primary"> <i class="fa fa-book"></i> Permanent Address </h4>
                                        <p class="text-muted"> Your Permanent Address </p>
                                    </div>
                                </div>
                                </legend>
                                
                                <div class="panel panel-default">
                                    <div class="panel-body">    
                                        <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Adddress 1: </label>
                                                        <textarea class="form-control" type="text" name="paddress1" id="paddress1" cols="30" rows="3" required></textarea>                                                           
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Address 2: </label>
                                                        <textarea class="form-control" type="text" name="paddress2" id="paddress2" cols="30" rows="3"></textarea>                                                           
                                                                                                                  
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>City: </label>
                                                        <input class="form-control" type="text" name="pcity" id="pciry"/>                                                            
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>State: </label>
                                                        <input class="form-control" type="text" name="pstate" id="pstate" />                                                            
                                                    </div>
                                                    <div class="col-md-3">
                                                            <label>Country: </label>
                                                            <select class="form-control" name="pcountry" id="pcountry">
                                                                <option value="">Select Country</option>
                                                            </select>
                                                    </div>
                                                        <div class="col-md-3">
                                                        <label>Postal Code: </label>
                                                        <input class="form-control" type="number" name="ppostCode" id="ppostCode" />                                                            
                                                    </div>
                                                </div>
                                            </div>     
                                    </div>
                                </div>
                            </fieldset>                                                
                            <fieldset class="col-md-12">    	
                                <legend>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <h4 class="text-primary"> <i class="fa fa-book"></i> Education </h4>
                                        <p class="text-muted"> Your Highest Qualification </p>
                                    </div>
                                </div>
                                </legend>
                                <div class="panel panel-default">
                                    <div class="panel-body">    
                                        <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>Highest Degree: </label>
                                                        <input class="form-control" type="text" name="degree" id="degree" required/>                                                            
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Cirtificate 1: </label>
                                                        <input class="form-control" type="text" name="cirtificate1" id="cirtificate1" />                                                            
                                                    </div>
                                                    <div class="col-md-3">
                                                            <label>Cirtificate 2: </label>
                                                            <input class="form-control" type="text" name="cirtificate2" id="cirtificate2" />                                                            
                                                    </div>
                                                        <div class="col-md-3">
                                                        <label>Special qualification/Telent: </label>
                                                        <input class="form-control" type="number" name="qualification" id="qualification" />                                                            
                                                    </div>
                                                </div>
                                            </div>     
                                    </div>
                                </div>
                            </fieldset>  
                    </div>
                    <!--/ Wizard Container 3 -->
                   
                </form>
                <!--/ END Form Wizard -->
            </div>
        </section>
    </div>
</div>   
@endsection

@section('script')
    <script>

        $(document).ready(function(){
            // hiding the adding forms on pase load 
            $("#departmentAddBox").hide();
            $("#sectionAddBox").hide();


            // chacking the add new option is selected or not 
            function IsAddNew(param) {
                if(param == "addNew"){
                    return true;
                }
                return false;
            }
            // for creating the id of Select box 
            function getHidingPartIdName(param) {
                var Id = param+"SelectBox";
                return Id;
            }
            //for creating the id of add box
            function getShowingPartIdName(param) {
                var Id = param+"AddBox";
                return Id;
            }

            // for adding new data 
            function AddNewIfNeeded(Id){
                var myId = "#"+Id;
                var addNew = IsAddNew($(myId).val());
                
                if(addNew){
                    var hideId = getHidingPartIdName(myId);
                    var showId = getShowingPartIdName(myId);
                    $(hideId).hide();
                    $(showId).show();
                }
            }
            // for hiding the adding form after added new data 

            function hideAddNewPart(Id){
                var myId = "#"+Id;
                    var hideId = getHidingPartIdName(myId);
                    var showId = getShowingPartIdName(myId);
                    $(showId).hide();
                    $(hideId).show();
                    $(myId).prop('selectedIndex',"");
                
            }

            // for Add new departments
            $("#department").on("change",function(){
                AddNewIfNeeded($(this).attr('id'));
            });
            $("#addDepartment").on("click",function(){
                $("#newDepartment").val("");
                hideAddNewPart("department");
            });
            $("#closeAddDepartment").on("click",function(){
                $("#newDepartment").val("");
                hideAddNewPart("department");
            });

            // for add new sections
            $("#section").on("change",function(){
                AddNewIfNeeded($(this).attr('id'));
            });
            $("#addSection").on("click",function(){
                $("#newSection").val("");
                hideAddNewPart("section");
            });
            $("#closeAddSection").on("click",function(){
                $("#newSection").val("");
                hideAddNewPart("section");
            });
            
        });
        
        
        // $(document).on("change","#department", function(){
        //     // var selectedValue = $(this).val();
        //     // console.log(selectedValue);
        //     function IsAddNew(param) {
        //      if(param == "addNew"){
        //          return true;
        //      }
        //      return false;
        //     }
        //     function getHidingPartIdName(param) {
        //      var Id = param+"SelectBox";
        //      return Id;
        //     }

        //     var addNew = IsAddNew($(this).val());
        //     if(addNew){
        //         var hideId = getHidingPartIdName($(this).val());
        //     console.log(hideId);

        //     }

        // });
        

        $(".imgAdd").click(function(){
        $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
        });
        $(document).on("click", "i.del" , function() {
            $(this).parent().remove();
        });
        $(function() {
            $(document).on("change",".uploadFile", function()
            {
                    var uploadFile = $(this);
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
                if (/^image/.test( files[0].type)){ // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file
        
                    reader.onloadend = function(){ // set image data as background of div
                        //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
        uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
                    }
                }
            
            });
        });
    </script>
@endsection