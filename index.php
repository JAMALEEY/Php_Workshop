<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactformphp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min/js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-9 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="img/iconhome.svg" alt="imagetyperwriter">
                    <div class="col-12 form-input">
                        <form name="form" method="POST">
                            <div class="form-group">
                                <input type="textarea" name="email"  placeholder="Enter Destinations Emails Please">
                                

                            </div>
                            <div class="form-textarea">
                                <input type="textarea" name="msg" placeholder="Enter Your Message Please" maxlength="500">
                            </div>
                            <button type="submit" name="submit" class="btn btn-succes"> Send Message </button>
                            <?php
                           

                            if (isset($_POST['submit'])) {
                                    $dest = $_POST['email'];
                                    $corp = "test";
                                    $sujet = $_POST['msg'];
                                    if (mail($dest, $corp, $sujet)) {
                                        echo "<h5> Email envoyé avec succès à '$dest'  </h5>";
                                    } else {
                                        echo "<h5> Échec de l'envoi de l'email à '$dest'  </h5>";
                                    }
                                // formcontrolinphp
                                $regex = '/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';
                                if (preg_match($regex, $dest)) {
                                    echo "";
                                } else {
                                    echo "Invalid E-mail.";
                                }
                                }
                            


                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
