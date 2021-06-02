<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Bootstrap 4 Blog Template For Developers</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
    
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/styles/monokai-sublime.min.css">
    
    <!-- Theme CSS -->  
    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

</head> 

<body>
<header>
        <nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-dark">
                <div class="collapse navbar-collapse" id="navbar1">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('ho')}}">Home</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">            
                        @if(Auth::check() && Auth::user()->role == 1 )
                       
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('ad')}}">User</a>
                        <a class="dropdown-item" href="{{route('ap')}}">Post</a>
                        <a class="dropdown-item" href="{{route('ac')}}">Comment</a>
                    </li>
                        @endif
                            @if(Auth::check())
                        <li class="nav-item dropdown mx-5 x-5 my-sm-0">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{Auth::user()->name}}
                            </a>
                            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <form method="post" action="{{route('logout')}}">
                                @csrf
                            <button type="submit" class="dropdown-item " >Log out</a>
                            </form>
                            </div>            
                        </li>
                        @endif	
                        @if(!Auth::check())	
                        <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('logi')}}">Login</a>
                        </li>
                    </ul>
                        @endif
                    </ul>
                </div>
        </nav>
</header>
<div class="main-wrapper">      
	    <article class="blog-post px-3 py-5 p-md-5">
       
		    <div class="container">
			    <header class="blog-post-header">
				    <h2 class="title mb-2">{{$list_post->title}} </h2>
			    </header>	    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				      <img class="img-fluid" src="../{{$list_post->image}}" height="800px" width="800px" alt="image">
	
				    </figure>
				    <p>{{$list_post->description}}</p>
				    
                </div>
            </div><!--//container-->
          
	    </article>
</div>
<section class="content-item" id="comments">
<div class="container"> 
	
    	<div class="row">
            <div class="col-sm-8"> 
		@if(Auth::check())  
		 @if(session('message'))
       		     {{session('message')}}
        
       		 @endif    
                <form method="POST">
			@csrf
                	<h3 class="pull-left">New Comment</h3>
                	<button type="submit" class="btn btn-normal pull-right">Submit</button>
                    <fieldset>
                        <div class="row row-space">  
                            <div class="col-sm-3 col-lg-2 hidden-xs">
                            	<img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar1.png" width="127px" height="100px" alt="">
                            </div>
                            <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                <textarea class="form-control" id="message"name="content" placeholder="Your message" required=""></textarea>
                            </div>
                        </div>  	
                    </fieldset>
                </form>
		@endif
                
                <h3>Comments</h3>
                
                <!-- COMMENT 1 - START -->
 		@foreach($list_comment as $lc)
                <div class="media">
                    <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
                    <div class="media-body">
                        <h4 class="media-heading">{{$lc -> name}}</h4>
                        <p> {{$lc -> content}}</p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li> <p class="pull-right"><small>{{date('d/m/Y H:i',strtotime($lc->created_at))}}</small></p></li>
              
                        </ul>
                      
                    </div>
                </div>
               @endforeach
               <div class="clearfix" >			
				{{$list_comment->links()}}
			    </div>
            
            </div>
        </div>
    </div>
</section>
<style>
body{margin-top:20px;}

.content-item {
    padding:30px 0;
	background-color:#FFFFFF;
}

.content-item.grey {
	background-color:#F0F0F0;
	padding:50px 0;
	height:100%;
}

.content-item h2 {
	font-weight:700;
	font-size:35px;
	line-height:45px;
	text-transform:uppercase;
	margin:20px 0;
}

.content-item h3 {
	font-weight:400;
	font-size:20px;
	color:#555555;
	margin:10px 0 15px;
	padding:0;
}

.content-headline {
	height:1px;
	text-align:center;
	margin:20px 0 70px;
}

.content-headline h2 {
	background-color:#FFFFFF;
	display:inline-block;
	margin:-20px auto 0;
	padding:0 20px;
}

.grey .content-headline h2 {
	background-color:#F0F0F0;
}

.content-headline h3 {
	font-size:14px;
	color:#AAAAAA;
	display:block;
}


#comments {
    box-shadow: 0 -1px 6px 1px rgba(0,0,0,0.1);
	background-color:#FFFFFF;
}

#comments form {
	margin-bottom:30px;
}

#comments .btn {
	margin-top:7px;
}

#comments form fieldset {
	clear:both;
}

#comments form textarea {
	height:100px;
}

#comments .media {
	border-top:1px dashed #DDDDDD;
	padding:20px 0;
	margin:0;
}

#comments .media > .pull-left {
    margin-right:20px;
}

#comments .media img {
	max-width:100px;
}

#comments .media h4 {
	margin:0 0 10px;
}

#comments .media h4 span {
	font-size:14px;
	float:right;
	color:#999999;
}

#comments .media p {
	margin-bottom:15px;
	text-align:justify;
}

#comments .media-detail {
	margin:0;
}

#comments .media-detail li {
	color:#AAAAAA;
	font-size:12px;
	padding-right: 10px;
	font-weight:600;
}

#comments .media-detail a:hover {
	text-decoration:underline;
}

#comments .media-detail li:last-child {
	padding-right:0;
}

#comments .media-detail li i {
	color:#666666;
	font-size:15px;
	margin-right:10px;
}
</style>
  
        </body>
</html> 