
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Clean Blog</title>
  
   <!-- Generate Token-->
	<meta name="_token" id="csrf_token" content="{{ csrf_token() }}" />

  <!-- CSS  -->
  <link href="/assets/admin/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/assets/admin/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/assets/admin/css/jquery.rtnotify.css" type="text/css" rel="stylesheet"/>
    <!--  Scripts-->
  <!--<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
  <script src="/assets/front_end/material/js/jquery-2.1.1.min.js"></script>
  <script src="/assets/admin/js/jquery.rtnotify.js"></script>
  <script src="/assets/admin/js/home.js"></script>
  <script src="/assets/admin/js/about.js"></script>
  <script src="/assets/admin/js/contact.js"></script>
  <script src="/assets/admin/js/menu.js"></script>
  <script src="/assets/admin/js/post.js"></script>
  
  
</head>
<body>
	
	  <header>
      <div class="container blue topnavcontainer"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle"><i class="mdi-navigation-menu"></i></a>
     <a href="/logout" class="waves-effect waves-light btn red right" style="margin-top:0.7rem;">Logout</a>
      
      </div>
      <ul id="nav-mobile" class="side-nav fixed blue">
        <li class="logo"><a id="logo-container" href="/admin/dashboard" class="brand-logo"><img src="{{URL::to('assets/admin/img/images.jpeg')}}"height="62px" width="100%"></img>
          </a></li>
        <li class="bold"><a href="/admin/dashboard" class="waves-effect waves-teal white-text">Dashboard</a></li>
        <li class="bold"><a href="/admin/home" class="waves-effect waves-teal white-text">Home</a></li>
        <li class="bold"><a href="/admin/about" class="waves-effect waves-teal white-text">About</a></li>
        <li class="bold"><a href="/admin/contact" class="waves-effect waves-teal white-text">Contact</a></li>
        <li class="bold"><a href="/admin/post" class="waves-effect waves-teal white-text">Post</a></li>
        <li class="bold"><a href="/admin/menu" class="waves-effect waves-teal white-text">menu</a></li>
      </ul>
    </header>
    <main>
			@yield('content')
			@include('includes.notifications')
	</main>
    
    
   		
  <!--  Scripts-->
  <!--<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
  <script src="/assets/admin/js/materialize.js"></script>
  <script src="/assets/admin/js/init.js"></script>
  
  <script>
	$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
     
  
  </script>
<script>
$(function() {
    var loc = window.location.href.split('/');
    var page = loc[loc.length - 1];
    $('ul.side-nav a').each(function (i) {
		var href = $(this).attr('href');
		 if (href.indexOf(page) !== -1) {
                 $('ul.side-nav li.active').removeClass('active');
                 $(this).parent().addClass('active');
             }
	});
   
});
</script>
  </body>
</html>
