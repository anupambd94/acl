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
                                                                <label class="control-label"> Name : </label>
                                                                <div class="col-sm-4">
                                                                    <input class="form-control" name="name" type="text" placeholder="First Name" data-parsley-range="[4, 10]" data-parsley-group="order" data-parsley-required />
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input class="form-control" name="name" type="text" placeholder="Last Name" data-parsley-range="[4, 10]" data-parsley-group="order" data-parsley-required />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label"> Login Details : </label>
                                                                <div class="col-sm-4">
                                                                    <input class="form-control" name="name" type="email" placeholder="Email" data-parsley-group="order" data-parsley-required />
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input class="form-control" name="name" type="password" id="passwordinput" placeholder="Password" data-parsley-minlength="6" data-parsley-group="order" data-parsley-required />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <div class="row">
                                                                            <div class="col-md-4">
                                                                                    <label>Gender: </label>
                                                                                    <select class="form-control" id="source">
                                                                                        <option value="MALE">Male</option>
                                                                                        <option value="FEMALE">Female</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                        <label>Marital Status: </label>
                                                                                        <select class="form-control" id="source">
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
                                                                                <input class="form-control" type="number" name="name" type="number" id="passwordinput" data-parsley-minlength="6" data-parsley-group="order" data-parsley-required />
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                    {{-- 'SPASS', 'WP', 'PR', 'CITIZENSHIP', 'EP' --}}
                                                                                <label>ID type: </label>
                                                                                <select class="form-control" id="source">
                                                                                    <option value="SPASS">SPASS</option>
                                                                                    <option value="WP">WP</option>
                                                                                    <option value="PR">PR</option>
                                                                                    <option value="CITIZENSHIP">CITIZENSHIP</option>
                                                                                    <option value="EP">EP</option>
                                                                                    
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label>NRIC/FIN/WP: </label>
                                                                                <input class="form-control" name="name" type="password" id="passwordinput" data-parsley-minlength="6" data-parsley-group="order" data-parsley-required />
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
                        <div class="form-group">
                            <div class="col-md-12">
                                <h4 class="text-primary"> <i class="fa fa-user"></i> General information </h4>
                                <p class="text-muted"> General information about applicant </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name: <span class="text-danger">*</span> </label>
                                    <input type="text" name="First name" class="form-control" placeholder="First Name" data-parsley-group="information" data-parsley-required />
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name: <span class="text-danger">*</span> </label>
                                    <input type="text" name="Last name" class="form-control" placeholder="Last Name" data-parsley-group="information" data-parsley-required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone #:</label>
                                    <input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control" />
                                </div>
                                <div class="col-md-6">
                                    <label>Date of birth:</label>
                                    <input type="text" placeholder="99/99/9999" data-mask="99/99/9999" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Select State: </label>
                                    <select class="form-control" id="source">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Wizard Container 2 -->
                    <!-- Wizard Container 3 -->
                    <div class="wizard-title"> Personal Information </div>
                    <div class="wizard-container">
                        <div class="form-group">
                            <div class="col-md-12">
                                <h4 class="text-primary"> <i class="fa fa-book"></i> Education </h4>
                                <p class="text-muted"> Where and when did you get your degree </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>University: </label>
                                    <input type="text" name="University" class="form-control" placeholder="University Name" data-parsley-group="payment" data-parsley-required />
                                </div>
                                <div class="col-md-6">
                                    <label> Country: </label>
                                    <input type="text" name="University-Country" class="form-control" placeholder="Choose a Country" data-parsley-group="payment" data-parsley-required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label> Degree level: </label>
                                    <input type="text" name="Bachelor, Master etc.." class="form-control" placeholder="Bachelor, Master etc.." data-parsley-group="payment" data-parsley-required />
                                </div>
                                <div class="col-md-3">
                                    <label> From: </label>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <select name="month" class="form-control" data-parsley-group="payment" data-parsley-required>
                                                <option value="">Month</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="University-Country" class="form-control" placeholder="Year" data-parsley-group="payment" data-parsley-required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label> To: </label>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <select name="month" class="form-control" data-parsley-group="payment" data-parsley-required>
                                                <option value="">Month</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="University-Country" class="form-control" placeholder="Year" data-parsley-group="payment" data-parsley-required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Wizard Container 3 -->
                    <!-- Wizard Container 4 -->
                    <div class="wizard-title"> Work experience </div>
                    <div class="wizard-container">
                        <div class="form-group">
                            <div class="col-md-12">
                                <h4 class="text-primary"> <i class="fa fa-cog"></i> Work experience </h4>
                                <p class="text-muted"> Let us know about your work experience </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Company: </label>
                                    <input type="text" name="Work experience" class="form-control" placeholder="Work experience" data-parsley-group="experience" data-parsley-required />
                                </div>
                                <div class="col-md-6">
                                    <label> Country: </label>
                                    <input type="text" name="Country" class="form-control" placeholder="Choose a Country" data-parsley-group="experience" data-parsley-required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label> Position: </label>
                                    <input type="text" name="Your Position" class="form-control" placeholder="Your Position" data-parsley-group="experience" data-parsley-required />
                                </div>
                                <div class="col-md-3">
                                    <label> From: </label>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <select name="month" class="form-control" data-parsley-group="experience" data-parsley-required>
                                                <option value="">Month</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="University-Country" class="form-control" placeholder="Year" data-parsley-group="experience" data-parsley-required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label> To: </label>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <select name="month" class="form-control" data-parsley-group="experience" data-parsley-required>
                                                <option value="">Month</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="University-Country" class="form-control" placeholder="Year" data-parsley-group="experience" data-parsley-required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Wizard Container 4 -->
                </form>
                <!--/ END Form Wizard -->
            </div>
        </section>
    </div>
</div>   
@endsection

@section('script')
    <script>
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