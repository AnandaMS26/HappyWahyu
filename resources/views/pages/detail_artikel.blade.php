<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ url('frontend/css/style1.css') }}" />
</head>
<body>
    <div class="header">
        @include('../includes/navbar')
    </div>
    <div class="main">
        <div class="card border-warning mb-3">
            <div class="card-header">
                <h3>{{ $item->title }}</h3>
                <p>{{ $item->writer }} | {{ $item->publish }}</p>
            </div>
            <div class="card-body">
              <img class="imgcenter" src="{{ Storage::url($item->artikel_galleries->first()->image) }}" alt="Happy Meat" style="display: flex; width:80%">
                <p class="card-text mt-3">
                    {{$item->desc}}
                </p>  
            </div>
        </div>
        <a href="/article"><button style="width: 10%;">Back</button></a>
        
    </div>
    @include('../includes/footer')
</body>
</html>