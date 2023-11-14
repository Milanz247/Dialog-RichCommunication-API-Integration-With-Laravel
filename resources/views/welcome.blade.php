<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Send SMS</title>
  </head>
  <body>
    <div class="d-flex justify-content-center">
      <div class="row">
        <div class="md-col-12">
    
                <h1>Rich Api</h1>
    
                <form action="{{ route('send-sms') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="numbers">Phone Numbers (with 94):</label>
                        <input type="text" name="numbers" value="947" id="numbers" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" class="form-control input-lg" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="mask">Sender ID (Mask):</label>
                        <input type="text" name="mask" id="mask" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="campaignName">Campaign Name:</label>
                        <input type="text" name="campaignName" id="campaignName" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Send SMS</button>
                </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>