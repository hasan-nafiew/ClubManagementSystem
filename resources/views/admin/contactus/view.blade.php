
        <!-- PAGE CONTAINER-->
        @extends('layouts.admin')
        @section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="row m-t-30">
                    <h1 class="all-heading">Contactus Message</h1>
                            <div class="col-md-12">                           
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-strip table-data3">
                                      
                                            <tr>
                                                <td class="text-right"><strong style="font-size:20px">Name</strong></td> 
                                                <td>:</td>                                   
                                                 <td class="text-left"><strong style="font-size:20px">{{$view_data->contactus_name}}</strong></td>    
                                               
                                            </tr>
                                       
                                            <tr>
                                                <td class="text-right"><strong>Email Address</strong></td>
                                                <td>:</td>  
                                                <td class="text-left">{{$view_data->contactus_email}}</td>
                                            </tr>  
                                             <tr>
                                                <td class="text-right"><strong>Subject</strong></td>
                                                <td>:</td>  
                                                <td class="text-left">{{$view_data->contactus_subject}}</td>
                                             </tr>  
                                             <tr>
                                                <td class="text-right"><strong>Messages</strong></td>
                                                <td>:</td>  
                                                <td class="text-left">{{$view_data->contactus_message}}</td>
                                             </tr>
                                             <tr>
                                                <td class="text-right"><strong>Data Time</strong></td>
                                                <td>:</td>  
                                                <td class="text-left">{{$view_data->created_at}}</td>
                                             </tr> 
                                             <tr>
                                             <td class="text-right">
                                                <a href="{{url('admin/contactus/')}}">
                                                        <button class="btn btn-success">Back</button>
                                                </a>
                                             </td>
                                                <td></td>  
                                                <td class="text-left">
                                                    <a href="{{url('admin/contactus/softdelete/'.$view_data->contactus_id)}}">
                                                        <button class="btn btn-danger">Delete</button>                           
                                                   </a>
                                                </td>
                                             </tr>                       
                                       
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
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

    