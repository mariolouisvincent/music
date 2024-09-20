<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Add Music</title>
    </head>
    <body>
        <div style="width: 400px; height: 600px; margin: 10px;">
            <form action="{{ url('music/add') }}" method="POST">
                @csrf
                {{-- @method('PUT') --}}

                <div class="form-group">
                    <label for="inputTitle">Title</label>
                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Enter Title" required>
                </div>
                <div class="form-group">
                    <label for="inputArtist">Artist</label>
                    <input type="text" name="artist" class="form-control" id="inputArtist" placeholder="Enter Artist"  required>
                </div>
                <div class="form-group">
                    <label for="inputAlbum">Album</label>
                    <input type="text" name="album" class="form-control" id="inputAlbum" placeholder="Enter Album" >
                </div>
                <div class="form-group" style="margin-top: 10px">
                    <a href="{{ url('/') }}" type="button" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>