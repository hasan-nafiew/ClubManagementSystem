
        <!-- PAGE CONTAINER-->
        @extends('layouts.admin')
        @section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row m-t-30">
                    <h1 class="text-center all-heading">All Members</h1>
                    
                        <div class="col-md-12">
                            <div class="row">                               
                                                        
                                <div class="col-md-4">
                                    <a href="{{url('admin/member/add')}}">
                                    <p class="text-center btn-custom"><input type="submit" value="Add" class="btn btn-success"/></p>
                                    </a>
                                </div>
                             
                            </div>                           
                            <!-- DATA TABLE-->
                            <div class="table-responsive m-b-40">
                            
                                <table class="table table-borderless table-data3">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Id</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Contact</th>
                                            <th class="text-center">Profession</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Date of Birth</th>
                                            <th class="text-center">Update</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allMembers as $data)
                                        <tr>
                                            <td>{{$data->member_id}}</td>
                                            <td>{{$data->member_name}}</td>
                                            <td>{{$data->member_email}}</td>
                                            <td>{{$data->member_contact}}</td>
                                            <td>{{$data->member_profession}}</td>
                                            <td>{{$data->member_status}}</td>
                                            <td>{{$data->member_date_of_birth}}</td>
                                            <td>{{$data->updated_at}}</td>
                                            <td>
                                                <button class=" btn btn-primary" >View</button>
                                                <button class=" btn btn-success" >Edit</button>
                                                <button class=" btn btn-danger" >Del</button>
                                            </td>
                                        
                                            <!-- <td>
                                                <a href="{{url('admin/contactus/view/'.$data->contactus_id)}}"><i class="fa fa-plus-square fa-lg"></i></a>                                                   
                                                <a href="{{url('admin/contactus/softdelete/'.$data->contactus_id)}}"><i class="fa fa-trash fa-lg"></i></a>
                                            </td> -->
                                        
                                        </tr>   
                                        @endforeach                                 
                                    </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE-->
                        </div>
                    </div>
                                        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © <script>document.write(new Date().getFullYear())</script> All rights reserved. Developed by <a href="http://nafiewsoftltd.ml" target="_blank">Nafiew Software Ltd.</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>                                
                </div>
            </div>
        </div>
    </div>
    @endsection

    