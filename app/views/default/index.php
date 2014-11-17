<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/../../favicon.ico">

        <title>Ricky Reed Quiz</title>

        <!-- Bootstrap core CSS -->
        <link href="/css/libs/bootstrap.min.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Salestream</a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div>
                <form action="/comments" method="post" id="commentForm">
                    <div>
                        <label for="name">Name</label><br>
                        <input type="text" name="name" id="form-name" required>
                    </div>

                    <div>
                        <label for="comment">Comment</label><br>
                        <textarea name="comment" required id="form-comment"></textarea>
                    </div>

                    <div>
                        <input type="submit" value="Create Comment" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <div>
                <h2>Comments</h2>
                <div id="comment-list">
                <?php
                foreach ($comments as $comment) { ?>
                     <div id="comment-<?php echo $comment->getId(); ?>">
                         <hr>
                         <a href="#" class="btn btn-danger delete" id="comment-<?php echo $comment->getId(); ?>">Remove</a>
                         <h4><?php echo htmlentities($comment->getName()); ?></h4>
                         <p><?php echo htmlentities($comment->getComment()); ?></p>
                    </div>
                <?php }?>
                </div>
            </div>
        </div><!-- /.container -->
        <!-- JavaScript -->
        <script src="/js/libs/jquery-1.11.1.min.js"></script>
        <script src="/js/libs/bootstrap.min.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
