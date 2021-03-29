<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>GRADE-Input</title>
  </head>
  <body>
    <div class="container">
        <form action="grade.php" method="POST">
            <h1>GRADE-Form</h1>
            <input class="form-control" type="text" placeholder="Name" name = "name"  >
            <input class="form-control" type="text" placeholder="ID" name = "id"  >
            <input class="form-control" type="text" placeholder="Assigment" name = "assigment"   >
            <input class="form-control" type="text" placeholder="Project" name = "project"  >
            <input class="form-control" type="text" placeholder="Midterm" name = "midterm"  >
            <input class="form-control" type="text" placeholder="Final" name = "final"  >
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>