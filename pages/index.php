<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day_14</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="" class="nav-link">String</a></li>
            <li><a href="" class="nav-link">Series</a></li>
        </ul>
        </div>
    </div>
</nav>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">String Word Count</div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Your String</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="string" value="<?php echo isset($result['string']) ? $result['string'] : ' '; ?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Total Word</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="<?php echo isset( $result['word']) ? $result['word'] : ' '; ?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Total Character</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  value="<?php echo isset( $result['character']) ? $result['character'] : ' '; ?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" name="btn" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script src="../assets/js/jquery-3.6.0.js"></script>
<script src="../assets/js/bootstrap.js"></script>
</body>
</html>
