<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: PlusBusiness
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<meta charset="utf-8">
<link rel="icon" type="image/jpg" href="image/logo.jpg" />

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Create</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

    <link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />

    <!-- END SCRIPT -->
</head>
<body id="top" background="bg.jpg">
<!-- ####################################################################################################### -->
<div class="wrapper col1">
    <div id="header">
        <div id="logo">
            <h1><a href="index.php">Panta</a></h1>
            <h2><p>******  Article  ******</p></h2>
        </div>
        <div id="topnav">
            <ul>
                <li class="active"><a href="index.php">Home</a>
                </li>
                <li><a href="index.php" target="_blank">         show</a>
                </li>
               
                
                <ul>
                    

                </ul>        </li>

            </ul>
        </div>
        <br class="clear" />
    </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="container">
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <form action="create.php" method="post">
            
            <h2>Create blog</h2>
            <textarea type="text" class="form-control" placeholder="Title"></textarea>
            <h2>Content</h2>
            <textarea class="summernote" name="editordata"></textarea>
        </form>
            <input class="btn btn-sm btn-outline-secondary" value="Submit">

    </div>
 
<script type="text/javascript">
    $(document).ready(function () {
        $('.summernote').summernote({
            placeholder: 'Content',
            height: 500
        });
    });
</script>


</div>



</body>
</html>