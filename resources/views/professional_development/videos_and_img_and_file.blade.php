<section class="videos_and_img_and_file">
    <div class="container">
        <h1 class="ribbon-title--a">
            <i class="fa fa-star"></i>  جميع الوسائط   المرئيه الخاصه بالطالب  </h1>

        <div class="row">

        @foreach($items as $item)
            @if( $item->url != null )
            <div class=" col-md-4 ">
                <div class="card" style="width:auto;">
                    <img class="card-img-top" src="{{asset('vendors/images/video.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->title}}</h5>
                        <p class="card-text">{{$item->description}}</p>

                        <a class="video-icon" href=
                        "{{$item->url}}"
                           data-lity="">">


                            <p class="content_icon_play">
                                <span class="fa-2x ">play </span> <i class="fab fa-youtube     fa-2x">  </i>
                            </p>

                        </a>
                    </div>
                </div>
            </div><!--./col-md-4-->
            @elseif( $item->pdf != null && $item->pdf !='[]' )
            <div class=" col-md-4 ">
                <div class="card" style="width:auto;">
                    <img class="card-img-top" src="{{asset('vendors/images/pdf.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->title}}</h5>
                        <p class="card-text">{{$item->description}}</p>




                        <p class="content_icon_play">
                            <?php $x=json_decode($item->pdf);
                                    $x[0]->download_link 
                            ?>
                            <a href="{{asset('storage/'.$x[0]->download_link)}}" target="_blank"> <span class="fa-2x ">Downlode file </span> <i class="fas fa-file-download fa-2x"></i></a>  </i>
                        </p>


                    </div>
                </div>
            </div><!--./col-md-4-->
            @else
            <div class=" col-md-4 ">
                <div class="card" style="width:auto;">
                    <img class="card-img-top" src="{{asset('storage/'.$item->image)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->title}}</h5>
                        <p class="card-text">{{$item->description}}</p>

                        <p class="content_icon_play">
                            <a href="{{asset('storage/'.$item->image)}}"target="_blank" > <span class="fa-2x ">Downlode image </span> <i class="fas fa-file-download fa-2x"></i></a>  </i>
                        </p>


                    </div>
                </div>
            </div><!--./col-md-4-->
            @endif
        @endforeach
            {{$items->links()}}
     
        </div><!--./row-->

        
    </div><!--./container-->
</section><!--./videos_and_img_and_file-->
