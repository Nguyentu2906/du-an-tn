@extends('welcome')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chi tiết sản phẩm</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/ee4e184ac4.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <style>
    * {
      box-sizing: border-box;
    }
    /* Position the image container (needed to position the left and right arrows) */
    .container {
      position: relative;
    }
    
    /* Hide the images by default */
    .mySlides {
      display: none;
    }
    .numbertext ,.card-img-top{
      width: 540px;
      height: 540px;
      background-position: center center;
      background-size: cover;
      background-image: none;
      background-repeat: no-repeat;
      background-image: none;
    }
    /* mobile */
    @media only screen and (max-width:480px) {
      .numbertext ,.card-img-top{
      width: 100%;
      height: 345px;
      background-position: center center;
      background-size: cover;
      background-image: none;
      background-repeat: no-repeat;
      background-image: none;
      }
      .banner{
        display: none;
      }
      .banner_mobile img{
        width: 100%;
        margin: 0;
        padding: 0;
        overflow:visible;
      }
      .item-cart{
        margin: 0 !important;
      } 
      .btn-outline-info{
        display: block;
        margin-top: 10px !important;
      }
    }
    /* desktop */
    @media only screen and (min-width:1120px) {
      
      .banner_mobile {
       display: none;
      }
    }

    /* Add a pointer when hovering over the thumbnail images */
    .cursor {
      cursor: pointer;
    }
    
    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 40%;
      width: auto;
      padding: 16px;
      margin-top: -50px;
      color: white;
      font-weight: bold;
      font-size: 20px;
      border-radius: 0 3px 3px 0;
      user-select: none;
      -webkit-user-select: none;
    }
    
    /* Position the "next button" to the right */
    .next {
      right: 15px;
      border-radius: 3px 0 0 3px;
    }
    
    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }
    
    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }
    
    /* Container for image text */
    .caption-container {
      text-align: center;
      background-color: #222;
      padding: 2px 16px;
      color: white;
    }
    
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Six columns side by side */
    .column {
      float: left;
      width: 16.66%;
    }
    
    /* Add a transparency effect for thumnbail images */
    .demo {
      opacity: 0.6;
    }
    
    .active,
    .demo:hover {
      opacity: 1;
    }
    /* product*/
    .sale-sticky{
    color: #fff;
    display: block;
    background-color: #f90;
    text-align: center;
    position: absolute;
    width: 120px;
    top: 11px;
    right: -39px;
    transform: rotate(45deg);
  }
  .price-product span{
    margin: 15px;
    color: red;
}
.card-product{
    /* margin: 5px 0px 5px 0px; */
    overflow: hidden;
    width: 100%;
    position: relative;
}
.item-cart{
    width: 100%;
    margin-left: 15%;
}
.product-text {
    background-color: #bad8ff;
    padding: 10px;
    font-size: 1rem;
}
.btn-outline-info{
    margin: auto;
}
.del{
    font-size: 1.1rem;
}

.fa-facebook , .fa-facebook-messenger, .fa-link{
  font-size: 40px;
  padding: 10px;
}
.banner img{
  width: 100%;
  height: auto;
  object-fit:cover;
  overflow: hidden;
}

    </style>
</head>
<body>
  <!-- Container for the image gallery -->
  @foreach($detail_product as $key => $value)
<div class="container">
<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-12 mt-2">
        <div class="mySlides">
          <div class="numbertext">1 / 6</div>
            <img src="{{URL::to('uploads/'.$value->image)}}" class="card-img-top" alt="..." >
        </div>
        <div class="mySlides">
          <div class="numbertext">2 / 6</div>
            <img src="images/hinh-sp-meo/ald-meo1-4.jpg" class="card-img-top" alt="..." >
        </div>
        <div class="mySlides">
          <div class="numbertext">2 / 6</div>
            <img src="images/hinh-sp-meo/ald-meo1-3.jpg" class="card-img-top" alt="..." >
        </div>
          <fieldset>
              <legend>Hàng Liên Quan</legend>
              <div class="column">
              <img class="demo cursor" src="https://www.flowercorner.vn/image/cache/catalog/New_Dec/BOUQUET-5643-153x115.jpg" alt="" class='img-thumbnail' onclick="currentSlide(1)" style='height: 50px;max-width: 95%;'>
              </div>
              <div class="column">
                <img class="demo cursor" src="images/hinh-sp-meo/ald-meo1-4.jpg" alt="" class='img-thumbnail' onclick="currentSlide(2)" style='height: 50px;max-width: 95%;'>
              </div>
              <div class="column">
                <img class="demo cursor" src="https://www.flowercorner.vn/image/cache/catalog/New_Dec/BOUQUET-5643-153x115.jpg" alt="" class='img-thumbnail' onclick="currentSlide(3)" style='height: 50px;max-width: 95%;'>
              </div>
              
          </fieldset>     
          <div class="share mt-2">
            <h6>Chia sẻ với bạn bè:</h6>
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-facebook-messenger"></i></a>
            <a href=""><i class="fas fa-link"></i></a>
          </div>
          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div> 
      <div class="col-md-6 col-sm-6 col-12 mt-2">
        <div class=" card product-text">
          <h4 class="card-text">{{$value->title}}</h4>
          @if(auth()->guard('cus')->check())
          <div id="rateYo"></div>
          <form action="{{URL::to('/account-rating')}}" method="post" class="form-inline" role="form" id="formRating">
            @csrf
              <div class="form-group">
                <input type="hidden" class="form-control" name="rating_star" id="rating_star">
                <input type="hidden" class="form-control" name="product_id" value="{{$value->id_product}}">
                <input type="hidden" class="form-control" name="account_id" value="{{auth()->guard('cus')->user()->id}}">
              </div>
            </form>
          @else
          <div id="rateYo1"></div>
          @endif
            

          <p class="card-text">30/11/2021</p><span>{{$value->view}} lượt xem</span>
          <h3 class="card-text">Thông tin chi tiết</h3>
          <p class="card-text">Giống: {{$value->name}}</p>
          <?php
            if($value->render == Null){?>
              
              <p class="card-text">Thuong Hieu: {{$value->brand}}</p>
              <?php }else{ ?>
                <p class="card-text">Giới tính: {{$value->render}}</p>
                <?php } ?>
          
                <?php
            if($value->render == Null){?>
              
              <p class="card-text">So Luong: {{$value->quantity}}</p>
              <?php }else{ ?>
                <p class="card-text">Tuổi:{{$value->age}}</p>
                <?php } ?>
          
          <p class="card-text">Tình trạng:{{$value->status}}</p>
          <p class="card-text">Vận chuyển: có phí</p>
          
          <p class="card-text">Mô tả thêm: {{$value->description}}</p>
         
          <div class=" card  mt-2">
            <div class="card-body card-product">
              <h4 class="price-product"><span>{{number_format($value->price,0,',','.')}} VND</span></h4>
              <h5 class="sale-sticky">-20%</h5>
              <div class="item-cart mt-3 ml-2">
                <a href="#" class="btn btn-outline-info ">Đặt Hàng Ngay</a>
                <a href="#" class="btn btn-outline-info ">Inbox người bán</a>
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>
  </div>
</div>
</div>
<div class="banner">
  <img src="images/banner/banner1.jpg" alt="">
</div>
<div class="banner_mobile">
  <img src="images/banner/banner1_mobile.jpg" alt="">
</div>
<!-- slide -->
<div class="container mt-3">
  <div class="row">
    <div class="col-md-12">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/banner/banner4.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/banner/banner2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/banner/banner3.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        
      </div>
    </div>
  </div>
</div>
@endforeach

<!-- end slide -->
</body>
</html>
<script>
    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<script>
    $(function () {
 
        $("#rateYo").rateYo({
        rating: {{$rating}}
        }).on("rateyo.set", function (e, data) {
            $('#rating_star').val(data.rating);
            //alert("The rating is set to " + data.rating + "!");
            $('#formRating').submit();
        });
        $("#rateYo1").rateYo({
            rating: {{$rating}}
            }).on("rateyo.set", function (e, data) {
               
                alert("Bạn chưa đăng nhập, vui lòng đăng nhập để đánh giá!");
        });

});
</script>
@endsection