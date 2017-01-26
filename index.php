<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="/jquery.bxslider/jquery.bxslider.js"></script>
    <!-- bxSlider CSS file -->
    <link href="/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <ul class="bxslider">
        <li>
            <img class="hidden-xs" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=1145%C3%97400&w=1145&h=400" />
            <img class="visible-xs" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=450%C3%97300&w=450&h=300" />
        </li>

        <li>
            <img class="hidden-xs" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=1145%C3%97400&w=1145&h=400" />   
            <img class="visible-xs" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=450%C3%97300&w=450&h=300" />
        </li>
    </ul>
<script>
    
$(document).ready(function(){
  $('.bxslider').bxSlider();
});

</script>

</body>
</html>