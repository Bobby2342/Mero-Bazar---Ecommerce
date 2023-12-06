
@include('header')

<div class="container">

    <div class="trending-wrapper col-sm-4">

        <h3>Search Results</h3>

        @foreach ($products as $item)


        <div class="trending-item">
            <a href="detail/{{$item['id']}}">
            <img style="height:200px" class="trending-image" src="{{$item['gallery']}}" alt="">
            <div class="trending-name">

                    <h3 class="name">{{$item['name']}}</h3>

            </div>

            </a>
        </div>



        </div>
        @endforeach


</div>


@include('footer')
















