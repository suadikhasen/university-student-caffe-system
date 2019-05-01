<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
	<script type="text/javascript" src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bootstrap/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript" src="{{  asset('/vue/vue.js') }} "></script>
	
</head>
<body>
	<div id="hasen-app">
		<div v-bind:style="{'fontSize':postsize+'em','background-color':redcolor}">
			<blog-post v-for="post in posts" v-bind:key="post.id" v-bind:post="post" v-on:enlarge="postsize+=1">
			
		   </blog-post>
		</div>
		<p>@{{postsize}}</p>
	</div>

<script type="text/javascript" src="{{ asset('/js/momi.js') }}"></script>
</body>
</html >