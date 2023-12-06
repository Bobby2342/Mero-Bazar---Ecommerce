@include('header')


<div class="container">

<div class="row">


 <div class="col-sm-6">

<img class="detail-img" style="height: 200px" src="{{$product['gallery']}}" alt="" srcset="">
 </div>

<div class="col-sm-6">
<a href="/" class="">Go back</a>
<h1 style="font-size: 20px">{{$product['name']}}</h1>
<h2>Rs.{{$product['price']}}</h2>
<h3 style="font-size: 16px "  >{{$product['description']}}</h3>
<h4 style="text-align: left">{{$product['category']}}</h4>

<br>
<br>
<form action="/add_to_cart" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{$product['id']}}">
<button  class="btn btn-dark">Add to Cart</button>

</form>


<button class="btn btn-primary">Buy Now</button>



</div>

</div>













</div>



















@include('footer')
