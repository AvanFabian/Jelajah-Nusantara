{{-- Change 404 Error default display --}}

{{-- Change 404 Error default display --}}
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Error Occured</title>
   {{-- Bootstrap CDN --}}
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="error-template">
               <h1>
                  Oops!</h1>
               <h2>
                  404 Not Found</h2>
               <div class="error-details">
                  Sorry, an error has occured, Requested page not found!
               </div>
               <div class="error-actions">
                  <a href="/home" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                  Take Me Home </a><a href="" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
               </div>
            </div>
         </div>
      </div>
</body>
</html>