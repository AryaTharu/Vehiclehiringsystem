<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<style>
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100%;
        background: #edf1f5
    }
</style>
</body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top: 200px;">
            <form action="{{route('rent-request')}}" method="post">
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                    <hd> Almost done! Enter following details to complete your booking</hd>
                    <br>
                    <hr>

                <div class="form-group">
                    <label for="pick_up_location">Pick Up Location</label>
                    <input type="text" class="form-control" placeholder="" name="pick_up_location" value="">
                    <span class="text-danger">@error('pick_up_location'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="pick_up_date">Pick Up Date</label>
                    <input type="datetime-local" class="form-control" placeholder="" name="pick_up_date" value="">
                    <span class="text-danger">@error('pick_up_date'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="return_location">Return Location</label>
                    <input type="text" class="form-control" placeholder="" name="return_location" value="">
                    <span class="text-danger">@error('return_location'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="return_date">Return Date</label>
                    <input type="datetime-local" class="form-control" placeholder="" name="return_date" value="">
                    <span class="text-danger">@error('return_date'){{$message}} @enderror</span>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="age">Age</label>--}}
{{--                    <input type="number" class="form-control" placeholder="Enter your age" name="age" value="">--}}
{{--                    <span class="text-danger">@error('age'){{$message}} @enderror</span>--}}
{{--                </div>--}}
                <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit">Book</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>



