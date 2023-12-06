
@include('header')




<div id="carouselId" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li
            data-bs-target="#carouselId"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="First slide"
        ></li>
        <li
            data-bs-target="#carouselId"
            data-bs-slide-to="1"
            aria-label="Second slide"
        ></li>
        <li
            data-bs-target="#carouselId"
            data-bs-slide-to="2"
            aria-label="Third slide"
        ></li>
    </ol>
    <div class="carousel-inner products" role="">

        @foreach ($products as $item )

        <div class="carousel-item {{$item['id']==1?'active':''}}">
            <img
                src="{{$item['gallery']}}"
                class="slide-image "
                alt="First slide"
            />
            <div class="class-carousel-caption">
                <a href="detail/{{$item['id']}}"></a>
            <h1>{{$item['name']}}</h1>
            <p>{{$item['description']}}</p>
            </div>
        </div>

        @endforeach

    </div>
    <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselId"
        data-bs-slide="prev"
    >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselId"
        data-bs-slide="next"
    >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="trending-wrapper">

<h3>Trending Products</h3>

@foreach ($products as $item)


<div class="trending-item">
    <a href="detail/{{$item['id']}}">
    <img class="trending-image" src="{{$item['gallery']}}" alt="">
    <div class="trending-name">

            <h3 class="name">{{$item['name']}}</h3>

    </div>

    </a>
</div>



</div>
@endforeach

@include('footer')

<style>


    /* Style for the carousel container */
    .carousel-inner.products {
        position: relative;
        padding-top: 10px;
    }

    /* Style for each carousel item */
    .carousel-item {
        display: none;
    }

    .carousel-item.active {
        display: flex;
    }

    /* Style for the slide image */
    .carousel-item img.slide-image {
        width: 100%; /* Adjust the width as needed */
        height: 300px; /* Maintain aspect ratio */
    align-self: auto;
    }

    /* Style for the carousel caption */
    .carousel-item .class-carousel-caption {
        position: absolute;
        bottom: 25%; /* Adjust the distance from the bottom */
        left: 50%; /* Position the caption in the center */
        transform: translateX(-50%);
        text-align: center;
        background-color: rgba(100, 100, 100, 0.7); /* Adjust the background color and transparency */
        padding: 10px 20px; /* Adjust padding */
        color: #e3e3e3; /* Text color */
    }

    .carousel-item .class-carousel-caption h1 {
        font-size: 24px; /* Adjust the heading font size */
        margin-bottom: 5px; /* Adjust spacing */
    }

    .carousel-item .class-carousel-caption p {
        font-size: 10px; /* Adjust the paragraph font size */
        margin-bottom: 10px; /* Remove default margin */
    }

    .trending-image{

        height: 100px;
    }
    .trending-item{

        float: left;
        width: 20%;

    }
    .trending-wrapper{
        margin: auto;
    }
    .name{
        font-size: 15px
    }


    </style>
