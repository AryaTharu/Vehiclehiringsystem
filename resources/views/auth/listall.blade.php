<div class="container">
    <div class="row">
        {{$cars->links()}}
    </div>
</div>

<div class="container_one">
@foreach($cars as $item)
<div class="row_one">
    <div class="row_one_first" style="">
        <img class="card" src="/images/{{$item->image}}" alt="">
        <div class="card-body">
            <h4 class="card-title">{{$item->brand .' '. $item->model}}</h4>
            <p class="card-text">{{$item->details}}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><img src="/images/car-seat.png"> {{$item->seats}} Seat</li>
            <li class="list-group-item"><img src="/images/gear-stick.png" width="24"> {{$item->isAutomatic ? 'Automatic' : ' Manuel'}} Quick</li>
            <li class="list-group-item"><img src="/images/fuel.png"> {{$item->isDiesel ? ' Diesel ' : 'petrol'}}</li>
            <li class="list-group-item"><img src="/images/price-tag.png"> {{$item->dailyPrice }} TL/day</li>
        </ul>
        <div class="footer">
            <a href="{{route('rent',['id' => $item->id])}}" class="btn btn-primary">Rent now!</a>
        </div>
    </div>
</div>
    @endforeach
    <div class="container_two">
        <div class="row_two">
            {{ $cars->links() }}
        </div>
    </div>
</div>
