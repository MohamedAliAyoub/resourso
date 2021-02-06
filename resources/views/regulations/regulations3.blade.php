@extends('layouts.app')
@section('content')  
    <section class="login-page">
        <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
            <div class="container">
                <h1 class="ribbon-title--a">       <i class="fa fa-star"></i>  انتاج الدروس </h1>

                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-7">
                        <img src="{{asset('vendors/images/uplode1.png')}}" class="img_uplode_file" alt="img_uplode_file">
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="login-box bg-white box-shadow border-radius-10">
                            <div class="login-title">
                                <h2 class="text-center text-primary"> <span>Uplode File</span>
                                    <i class="fas fa-photo-video"></i>
                                    <i class="fa fa-file-pdf-o"></i>
                                </h2>
                            </div>
                            <form action="" name="" >
                                <div class="select-role d-none">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn active">
                                            <input type="radio" name="options" id="admin">
                                            <div class="icon"><img src="{{asset('vendors/images/briefcase.svg')}}" class="svg" alt=""></div>
                                            <span>I'm</span>
                                            Manager
                                        </label>
                                        <label class="btn">
                                            <input type="radio" name="options" id="user">
                                            <div class="icon">
                                                <i class="fas fa-photo-video  " ></i>
                                            </div>
                                            <span>I'm</span>
                                            Employee
                                        </label>
                                    </div>
                                </div>
                                <div class="input-group custom">
                                    <input type="text" class="form-control form-control-lg" placeholder="video pdf photo ">
                                    <div class="input-group-append custom">
                                        <span class="input-group-text">
                                        <!--- <i class="fas fa-photo-video"></i>-->
                                        </span>
                                        <input type="file" name="file" id="file" class="inputfile" />
                                        <label for="file" class="text-primary ">Choose a file <i class="fas fa-cloud-upload-alt"></i>  </label>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group mb-0">

                                            <a class="btn btn-primary btn-lg btn-block" href="index.blade.php">uplode  file  <i class="fas fa-cloud-upload-alt"></i></a>
                                        </div>


                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    @include('regulations.videos_and_img_and_file')
@endsection