
        <!-- PAGE CONTAINER-->
        @extends('layouts.admin')
        @section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container">
                    <div class="row m-t-30">
                    <h1 class="text-center all-heading">Members Add</h1>                          
                            <div class="col-md-12">                           
                             <form action="{{url('admin/member/submit')}}" method="post" class="form-horizontal">
                             @csrf
                               <div class="form-group">
                                        <label class="control-label col-sm-2" for="name">Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="member_name" id="name" >
                                        </div>
                                </div>  
                                <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" name="member_email" id="email" >
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-sm-2" for="phone">Contact No</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="member_contact" class="form-control" id="phone" >
                                        </div>
                                </div> 
                                <div class="form-group">
                                        <label class="control-label col-sm-2" for="phone">Blood Group</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="member_blood" class="form-control" id="phone" >
                                        </div>
                                </div>   
                                <div class="form-group">
                                        <label class="control-label col-sm-2" for="nid">NID No.</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="member_nid"class="form-control" id="nid" >
                                        </div>
                                </div>   
                                <div class="form-group">
                                        <label class="control-label col-sm-2" for="phone">Profession</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="member_profession" class="form-control" id="phone" >
                                        </div>
                                </div>   
                                <div class="form-group">   
                                <label class="control-label col-sm-2" for="datetimepicker">Date Of Birth</label>                           
                                  
                                <div class="col-sm-8">
                                            <input type="text" name="member_date_of_birth" class="form-control" id="datetimepicker" >
                                 </div>                                   
                                                                                                                   
                                    
                                </div>   
                                <div class="form-group">
                                        <label class="control-label col-sm-2" for="paddress">Present Address</label>
                                        <div class="col-sm-8">
                                         <textarea type="text" name="member_paddress" id="paddress" class="md-textarea form-control" rows="3"></textarea>
                                        </div>
                                </div>  
                                <div class="form-group">
                                        <label class="control-label col-sm-2" for="praddress">Permanent Address</label>
                                        <div class="col-sm-8">
                                         <textarea type="text" name="member_pmaddress" id="praddress" class="md-textarea form-control" rows="3"></textarea>
                                        </div>
                                </div> 
                                <div class="form-group">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8 btn-member-add">
                                        <a href="{{url('admin/member')}}">
                                        <button type="button" class="btn btn-danger ">Cancel</button>
                                        </a>
                                        <input type="submit" value="Save" class="btn btn-success">
                                    </div>
                                </div>                               
                             </form>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © <script>document.write(new Date().getFullYear())</script> All rights reserved. Template by <a href="https://colorlib.com">Nafiew Software Ltd.</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    