<!DOCTYPE html>
<html>
<head>
	<title>Quotes</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="google-site-verification" content="uza6Gh8xbuNXozz7q8MICSSLrgnoLzioHvqTE2tclI4" />
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
		<link rel="stylesheet" type="text/css" href="sass/style.css?v=<?php echo time(); ?>">
		<script type="text/javascript" href="css/style.js"></script>
</head>
<body>
<div class="MainDiv">
	<div class="CenterDiv">
		<i id="fas" class="fas fa-quote-left"></i>
		<p id="msg">.......</p>
		<div class="d-flex AuthorDiv">
			<p>By</p><p id="author">......</p>
		</div>
		<div class="TweetDiv">
			
		</div>
		<label id="btn" onclick="newc()">New Quotes</label>
		<i id="tweeter" class="fab fa-twitter" onclick="twe()"></i>

	</div>
	<div class="fb-share-button" 
		data-href="http://garejakirit.great-site.net/mypf/" 
		data-layout="button_count">
	</div>
		
</div>
<script>
	const fauthor = document.getElementById("author");
	const fmsg = document.getElementById("msg");
	const btn = document.getElementById("tweeter");
	let text = "";
	let author = "";
	const ran = ()=>{
		n = Math.floor(Math.random() * 1642);
		return n ;
	} 
	
	const newc = ()=>{
		/*fetch(key).then((apidata)=>{*/
			fetch("https://type.fit/api/quotes").then((apidata)=>{
					return apidata.json();
				})
			.then((data)=>{
				ran();
				
				 text = data[n].text;
				 author = data[n].author;
				fmsg.innerHTML = text ;
				//console.log(author);
				if (data[n].author == null) {
					fauthor.innerHTML= "Unknown";
				}
				else{
					fauthor.innerHTML= author;
				}
				/*console.log(text);*/
			});
	}
	newc();
	const twe = () =>{
		let tp = `https://twitter.com/intent/tweet?text=${text}\t By. \t${author}` ;
		window.open(tp);
	}

(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyDnw-LUXK-dpO1u-NDXyzEFksYugW9p4MA",
    authDomain: "quotes-kirit.firebaseapp.com",
    projectId: "quotes-kirit",
    storageBucket: "quotes-kirit.appspot.com",
    messagingSenderId: "122450279894",
    appId: "1:122450279894:web:8248aa016df277c9fab877",
    measurementId: "G-0BWDBCCV8M"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

</body>
</html>