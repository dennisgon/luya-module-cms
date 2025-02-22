<?php
use \luya\helpers\Html;
?>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <style>
        .center {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: auto;
            margin-top: auto;
        }

        .red {
            font-family: 'Tahoma';
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="hero-unit center">
                <?php if ($exception !== null): ?>
                    <h1><?php echo Html::encode($exception->getMessage()); ?>
                        <small><br/><br/>
                        <p class="red">Error <?php echo $exception->statusCode; ?></p></small>
                    </h1>
                <?php endif ?>
                <br/>
                <p>The above error occurred while the Web server was processing your request.</p>
                <p>Please contact us if you think this is a server error. Thank you.</p>
            </div>
            <br/>
        </div>
    </div>
</div>
</body>
</html>
