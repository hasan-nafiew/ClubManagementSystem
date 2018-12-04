
        <!-- PAGE CONTAINER-->
        @extends('layouts.admin')
        @section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="row m-t-30">
                    <h1 class="text-center all-heading">Members Add</h1>
                            <div class="col-md-12">                           
                             <form action="{{url('admin/member/submit')}}" method="post" class="form-horizontal">
                             @csrf
                               <div class="form-group row">
                                        <label class="control-label col-sm-2" for="name">Name</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="member_name" id="name" placeholder="Enter Member Name">
                                        </div>
                                </div>  
                                <div class="form-group row">
                                        <label class="control-label col-sm-2" for="email">Email</label>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control" name="member_email" id="email" placeholder="Enter email">
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="control-label col-sm-2" for="phone">Contact No</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="member_contact" class="form-control" id="phone" placeholder="Enter your Contact Number">
                                        </div>
                                </div> 
                                <div class="form-group row">
                                        <label class="control-label col-sm-2" for="phone">Blood Group</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="member_blood" class="form-control" id="phone" placeholder="Enter Your Blood Group">
                                        </div>
                                </div>   
                                <div class="form-group row">
                                        <label class="control-label col-sm-2" for="nid">NID No.</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="member_nid"class="form-control" id="nid" placeholder="National Indentification Number">
                                        </div>
                                </div>   
                                <div class="form-group row">
                                        <label class="control-label col-sm-2" for="phone">Profession</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="member_profession" class="form-control" id="phone" placeholder="Enter Profession">
                                        </div>
                                </div>   
                                <div class="form-group row">   
                                <label class="control-label col-sm-2" for="phone">Date Of Birth</label>                           
                                    <div class='input-group date col-sm-6' id='datetimepicker1'>
                                                            <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>                                           
                                    <script type="text/javascript">
                                        $(function () {
                                            $('#datetimepicker1').datetimepicker();
                                        });
                                    </script>      
                                                                             
                                    
                                </div>   
                                <div class="form-group row">
                                        <label class="control-label col-sm-2" for="paddress">Present Address</label>
                                        <div class="col-sm-6">
                                         <textarea type="text" name="member_paddress" id="paddress" class="md-textarea form-control" rows="3"></textarea>
                                        </div>
                                </div>  
                                <div class="form-group row">
                                        <label class="control-label col-sm-2" for="praddress">Permanent Address</label>
                                        <div class="col-sm-6">
                                         <textarea type="text" name="member_pmaddress" id="praddress" class="md-textarea form-control" rows="3"></textarea>
                                        </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-6 btn-member-add">
                                        <button type="button" class="btn btn-danger ">Cancel</button>
                                        <input type="submit" value="Save" class="btn btn-success">
                                    </div>
                                </div>                               
                             </form>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Nafiew Software Ltd.</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    