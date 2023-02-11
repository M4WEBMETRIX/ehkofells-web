<!-- Carousel Start -->
<?php 

$carousel = [
    [
        'id' => 1,
        'sub_title' => 'Luxury Living',
        'title' => 'Discover A Brand Luxurious Hotel',
        'image' => 'asset/img/carousel-1.jpg',
    ],
     [
        'id' => 2,
        'sub_title' => 'Luxury Living',
        'title' => 'Discover A Brand Luxurious Hotel',
        'image' => 'asset/img/carousel-2.jpg',
    ],
];
$carouselData = json_decode(json_encode($carousel));


 ?>
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($carouselData as $key)
                        
                    
                    <div class="carousel-item active">
                        <img class="w-100" src="{{asset($key->image)}}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">{{$key->sub_title}}</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">{{$key->title}}</h1>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->