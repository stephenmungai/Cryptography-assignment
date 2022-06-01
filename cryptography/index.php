<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offsett-md-2 bg-light p-4 mt-5 rounded"></div>
            <form action="action.php" method="POST">
                <div class="form-group">
                <h3> Securely send your message securely </h3>
                <label for="message">Message:</label>
            
                  <textarea name="text" class="form-control" id="msg" cols="150" rows="10" 
                            placeholder="Enter message here"></textarea>
                        
                <label for="phone"> Enter recipients phone number:</label>
                <input type="tel" class="form-control" id="phone" name="phone" cols="30" rows="15"></input type>

                <label for= "email address"> Enter recipients email address:</label>
                <input type="text" class="form control" id="email" name="email"></input type>
            
                 <button type= "submit" name="encrypt" class="btn btn-primary"> Encrypt </button>
                    

                </div>
            </form>

        </div>
    </div>
</body>