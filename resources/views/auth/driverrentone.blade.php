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
<style>
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100%;
        background: #edf1f5
    }
</style>
<body>

</body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top: 200px;">
            <hd> Details</hd>
            <hr>
            <form action="{{route('driver-request-one')}}" method="post">
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <a> Sita Thapa</a>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <a> sita@gmail.com</a>
                </div>
                <div class="form-group">
                    <label for="license">License No:</label>
                    <a> 78754210</a>
                </div>
                <div class="form-group">
                    <label for="phone">Phone No:</label>
                    <a> 9877411000</a>
                </div>
                <div class="form-group">
                    <label for="remarks">Remarks:</label>
                    <input type="text" class="form-control" placeholder="" name="remarks" value="At 7.00am sharp">
                </div>
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




