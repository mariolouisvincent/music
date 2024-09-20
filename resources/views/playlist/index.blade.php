<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Linefy</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div style="margin: auto; width: 50%; padding: 10px; text-align: center;">
            <h1> Linefy </h1>
            <a href="{{ url('/add') }}" class="btn btn-success" style="width: 100px; height: 50px; display: inline-flex; align-items:center; justify-content:center;">
                Add
            </a>
        </div>
        <div class="container text-center">
            <div class="row align-items-start">
                <?php foreach ($music as $info): ?>
                    <div class="card" style="width: 288px; margin: 10px">
                        <div style="padding-top: 10px;">
                            <img src="{{ asset('images/guitar.jpg') }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body" >
                            <h5 class="card-title"><?php echo $info->title ?></h5>
                            <p class="card-text"><?php echo $info->artist ?></p>
                            <a href="{{ url('/edit/' . $info->id) }}" class="btn btn-primary " style="width: 100px; height: 50px; display: inline-flex; align-items:center; justify-content:center;">
                                <i class="bi-pen" style="font-size: 20px; color: white;"></i>
                            </a>
                            <a href="{{ url('/music/delete/' . $info->id) }}" class="btn btn-success" style="width: 100px; height: 50px; display: inline-flex; align-items:center; justify-content:center;">
                                <i class="bi-play" style="font-size: 35px; color: white;"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>