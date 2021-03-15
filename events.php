<?php
 // Opens database connection
 require_once 'assets/config/db.php';
 // Gets information from database
 require_once 'assets/functions/select.php';
?>

<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<title>DIY Community</title>
	<!--Bootstrap core css-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!--Font awesome core css-->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!--Custom styles-->
	<link rel="stylesheet" href="assets/css/album.css?<?php echo hash_file('md5', './assets/css/album.css'); ?>">
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Noto Serif' rel='stylesheet' >
</head>

	
<body> 
  
   <!-- JAVASCRIPT LÄNKAD, SKA LIGGA I BODY INTE I HEAD -->
    <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
  
  
<div class="container">
      <nav class="navbar fixed-top navbar-light bg-light">
      <div class= nav navbar-left>
			<a class="navbar-brand ml-5" href="index.php">
          <img src="assets/images/logo.png" height="100" alt="DIY logo">
        </a>
			<li class="nav-item mt-4">
        <a class="nav-link" href="DIY.php">DIY's</a>
      </li>
      <li class="nav-item mt-4">
        <a class="nav-link" href="events.php">Events</a>
      </li>
				</div>
				<div class="nav navbar-right mr-5">
				<button type="button" class="btn btn-primary btn-sm mr-3"data-toggle="modal" data-target="#signupModal"type="submit"><i class="far fa-heart mr-1"></i>JOIN US</button>
				<button type="button" class="btn btn-primary btn-sm mr-3" data-toggle="modal" data-target="#loginModal"type="submit "><i class="fas fa-sign-in-alt mr-1"></i>LOGIN</button>
				<button type="button" class="btn btn-primary btn-sm mr-3"type="submit"><i class="fas fa-search mr-1"></i>SEARCH</button>
      </nav>		
				</div>	
    
 <header class= "events">
   <div class="boxed mt-3">
<h1>
 EVENTS
   </h1>
   </div>
</header>  
    <br>
 <div class="create">
   <button type="button10" width: 40px; class="btn btn-outline-dark"> HOME / <span style="font-weight:900">EVENTS</span></button>
   <button type="button10" class="btn btn-outline-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
  <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
</svg> CREATE </button>
    </div>
    <br>
    <h6>
      EVENTS BY CATEGORY
    </h6>
        <button type="button1" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brush" viewBox="0 0 16 16">
  <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.117 8.117 0 0 1-3.078.132 3.658 3.658 0 0 1-.563-.135 1.382 1.382 0 0 1-.465-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.393-.197.625-.453.867-.826.094-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.2-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.175-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.247-.013-.574.05-.88.479a11.01 11.01 0 0 0-.5.777l-.104.177c-.107.181-.213.362-.32.528-.206.317-.438.61-.76.861a7.127 7.127 0 0 0 2.657-.12c.559-.139.843-.569.993-1.06a3.121 3.121 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.591 1.927-5.566 4.66-7.302 6.792-.442.543-.796 1.243-1.042 1.826a11.507 11.507 0 0 0-.276.721l.575.575zm-4.973 3.04l.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043l.002.001h-.002z"/>
</svg>&nbsp;ART</button>
         <button type="button1" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
  <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
</svg>&nbsp;BEAUTY</button>
     <button type="button1" href="food.php" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-straw" viewBox="0 0 16 16">
  <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0l-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z"/>
</svg>&nbsp;DRINKS</button>
   <button type="button1" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-egg-fried" viewBox="0 0 16 16">
  <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z"/>
</svg>&nbsp;FOOD</button>
               <button type="button1" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hammer" viewBox="0 0 16 16">
  <path d="M9.972 2.508a.5.5 0 0 0-.16-.556l-.178-.129a5.009 5.009 0 0 0-2.076-.783C6.215.862 4.504 1.229 2.84 3.133H1.786a.5.5 0 0 0-.354.147L.146 4.567a.5.5 0 0 0 0 .706l2.571 2.579a.5.5 0 0 0 .708 0l1.286-1.29a.5.5 0 0 0 .146-.353V5.57l8.387 8.873A.5.5 0 0 0 14 14.5l1.5-1.5a.5.5 0 0 0 .017-.689l-9.129-8.63c.747-.456 1.772-.839 3.112-.839a.5.5 0 0 0 .472-.334z"/>
</svg>&nbsp;HANDCRAFT</button>
     <button type="button1" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flower1" viewBox="0 0 16 16">
  <path d="M6.174 1.184a2 2 0 0 1 3.652 0A2 2 0 0 1 12.99 3.01a2 2 0 0 1 1.826 3.164 2 2 0 0 1 0 3.652 2 2 0 0 1-1.826 3.164 2 2 0 0 1-3.164 1.826 2 2 0 0 1-3.652 0A2 2 0 0 1 3.01 12.99a2 2 0 0 1-1.826-3.164 2 2 0 0 1 0-3.652A2 2 0 0 1 3.01 3.01a2 2 0 0 1 3.164-1.826zM8 1a1 1 0 0 0-.998 1.03l.01.091c.012.077.029.176.054.296.049.241.122.542.213.887.182.688.428 1.513.676 2.314L8 5.762l.045-.144c.248-.8.494-1.626.676-2.314.091-.345.164-.646.213-.887a4.997 4.997 0 0 0 .064-.386L9 2a1 1 0 0 0-1-1zM2 9l.03-.002.091-.01a4.99 4.99 0 0 0 .296-.054c.241-.049.542-.122.887-.213a60.59 60.59 0 0 0 2.314-.676L5.762 8l-.144-.045a60.59 60.59 0 0 0-2.314-.676 16.705 16.705 0 0 0-.887-.213 4.99 4.99 0 0 0-.386-.064L2 7a1 1 0 1 0 0 2zm7 5l-.002-.03a5.005 5.005 0 0 0-.064-.386 16.398 16.398 0 0 0-.213-.888 60.582 60.582 0 0 0-.676-2.314L8 10.238l-.045.144c-.248.8-.494 1.626-.676 2.314-.091.345-.164.646-.213.887a4.996 4.996 0 0 0-.064.386L7 14a1 1 0 1 0 2 0zm-5.696-2.134l.025-.017a5.001 5.001 0 0 0 .303-.248c.184-.164.408-.377.661-.629A60.614 60.614 0 0 0 5.96 9.23l.103-.111-.147.033a60.88 60.88 0 0 0-2.343.572c-.344.093-.64.18-.874.258a5.063 5.063 0 0 0-.367.138l-.027.014a1 1 0 1 0 1 1.732zM4.5 14.062a1 1 0 0 0 1.366-.366l.014-.027c.01-.02.021-.048.036-.084a5.09 5.09 0 0 0 .102-.283c.078-.233.165-.53.258-.874a60.6 60.6 0 0 0 .572-2.343l.033-.147-.11.102a60.848 60.848 0 0 0-1.743 1.667 17.07 17.07 0 0 0-.629.66 5.06 5.06 0 0 0-.248.304l-.017.025a1 1 0 0 0 .366 1.366zm9.196-8.196a1 1 0 0 0-1-1.732l-.025.017a4.951 4.951 0 0 0-.303.248 16.69 16.69 0 0 0-.661.629A60.72 60.72 0 0 0 10.04 6.77l-.102.111.147-.033a60.6 60.6 0 0 0 2.342-.572c.345-.093.642-.18.875-.258a4.993 4.993 0 0 0 .367-.138.53.53 0 0 0 .027-.014zM11.5 1.938a1 1 0 0 0-1.366.366l-.014.027c-.01.02-.021.048-.036.084a5.09 5.09 0 0 0-.102.283c-.078.233-.165.53-.258.875a60.62 60.62 0 0 0-.572 2.342l-.033.147.11-.102a60.848 60.848 0 0 0 1.743-1.667c.252-.253.465-.477.629-.66a5.001 5.001 0 0 0 .248-.304l.017-.025a1 1 0 0 0-.366-1.366zM14 9a1 1 0 0 0 0-2l-.03.002a4.996 4.996 0 0 0-.386.064c-.242.049-.543.122-.888.213-.688.182-1.513.428-2.314.676L10.238 8l.144.045c.8.248 1.626.494 2.314.676.345.091.646.164.887.213a4.996 4.996 0 0 0 .386.064L14 9zM1.938 4.5a1 1 0 0 0 .393 1.38l.084.035c.072.03.166.064.283.103.233.078.53.165.874.258a60.88 60.88 0 0 0 2.343.572l.147.033-.103-.111a60.584 60.584 0 0 0-1.666-1.742 16.705 16.705 0 0 0-.66-.629 4.996 4.996 0 0 0-.304-.248l-.025-.017a1 1 0 0 0-1.366.366zm2.196-1.196l.017.025a4.996 4.996 0 0 0 .248.303c.164.184.377.408.629.661A60.597 60.597 0 0 0 6.77 5.96l.111.102-.033-.147a60.602 60.602 0 0 0-.572-2.342c-.093-.345-.18-.642-.258-.875a5.006 5.006 0 0 0-.138-.367l-.014-.027a1 1 0 1 0-1.732 1zm9.928 8.196a1 1 0 0 0-.366-1.366l-.027-.014a5 5 0 0 0-.367-.138c-.233-.078-.53-.165-.875-.258a60.619 60.619 0 0 0-2.342-.572l-.147-.033.102.111a60.73 60.73 0 0 0 1.667 1.742c.253.252.477.465.66.629a4.946 4.946 0 0 0 .304.248l.025.017a1 1 0 0 0 1.366-.366zm-3.928 2.196a1 1 0 0 0 1.732-1l-.017-.025a5.065 5.065 0 0 0-.248-.303 16.705 16.705 0 0 0-.629-.661A60.462 60.462 0 0 0 9.23 10.04l-.111-.102.033.147a60.6 60.6 0 0 0 .572 2.342c.093.345.18.642.258.875a4.985 4.985 0 0 0 .138.367.575.575 0 0 0 .014.027zM8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
</svg>&nbsp;PLANTS/GARDENING</button>
    <button type="button1" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gift" viewBox="0 0 16 16">
  <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z"/>
</svg>&nbsp;GIFT IDEAS</button>
        <button type="button1" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-palette" viewBox="0 0 16 16">
  <path d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
  <path d="M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8zm-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284l.028.008c.346.105.658.199.953.266.653.148.904.083.991.024C14.717 9.38 15 9.161 15 8a7 7 0 1 0-7 7z"/>
</svg>&nbsp;GRAPHICS/ILLUSTRATIONS</button> 
				 <button type="button1" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
           </svg>&nbsp;RENOVATIONS/INTERIOR</button>

    <div class="upcoming-events">
       <h4>
  UPCOMING EVENTS
      </h4>
      <br>
<div class="card-deck">
<div class="card" style="width: 18rem;">
	<img src="assets/images/decor.jpg"  class="card-img-top" alt="green">
  <div class="card-body">
    <p class="card-text">EASY TABLE SETTING TIPS!</p>
        <p class="card-under">&nbsp;&nbsp;STARTS IN: 3H 2M&nbsp;&nbsp;</p>
  </div>
</div>
			
<div class="card" style="width: 18rem;">
	<img src="assets/images/tapas.jpg"  class="card-img-top" alt="green">
  <div class="card-body">
    <p class="card-text">SWEDISH TAPAS</p>
            <p class="card-under">&nbsp;&nbsp;STARTS IN: 6H 24M&nbsp;&nbsp;</p>
  </div>
</div>
			
<div class="card" style="width: 18rem;">
	<img src="assets/images/food.jpg"  class="card-img-top" alt="green">
  <div class="card-body">
    <p class="card-text">VEGGIE POKEBOWL</p>
                <p class="card-under">&nbsp;&nbsp;STARTS IN: 12H 14M&nbsp;&nbsp;</p>
  </div>
</div>
			
<div class="card" style="width: 18rem;">
	<img src="assets/images/leather.jpg"  class="card-img-top" alt="green">
  <div class="card-body">
    <p class="card-text">LEATHER TREATMENT</p>
                    <p class="card-under">&nbsp;&nbsp;STARTS IN: 24H 14M&nbsp;&nbsp;</p>
  </div>
</div>
    </div>
			</div>
        
    <div class="upcoming-events">
  <h4>
  RECENT EVENTS
      </h4>
      <br>
<div class="card-deck">
<div class="card" style="width: 18rem;">
	<img src="assets/images/advanced.jpg"  class="card-img-top" alt="green">
  <div class="card-body">
    <p class="card-text">MAKE YOUR OWN BLANKET! </p>
                        <p class="card-under">&nbsp;&nbsp;3H 45M AGO&nbsp;&nbsp;</p>
  </div>
</div>
			
<div class="card" style="width: 18rem;">
	<img src="assets/images/home.jpg"  class="card-img-top" alt="green">
  <div class="card-body">
    <p class="card-text">HOMEMADE CLOTHINGHANGER</p>
                            <p class="card-under">&nbsp;&nbsp;6H 5M AGO&nbsp;&nbsp;</p>
  </div>
</div>
			
<div class="card" style="width: 18rem;">
	<img src="assets/images/learning.jpg"  class="card-img-top" alt="green">
  <div class="card-body">
    <p class="card-text">TYPOGRAPHY PRACTICE</p>
                                <p class="card-under">&nbsp;&nbsp;12H 43M AGO&nbsp;&nbsp;</p>
  </div>
</div>
			
<div class="card" style="width: 18rem;">
	<img src="assets/images/flower.jpg"  class="card-img-top" alt="green">
  <div class="card-body">
    <p class="card-text">MAKING BOUQUETS</p>
                                    <p class="card-under">&nbsp;&nbsp;16H 50M AGO&nbsp;&nbsp;</p>
  </div>
</div>
    </div>
			</div>
  
  <!-- LOGIN MODAL -->
    
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">        
        <div class="form-title text-left">
          <h4>Login</h4>
        </div>
        <div class="d-flex flex-column text-left">
          <form>
            <div class="form-group">
                   <label class="control-label requiredField" for="email1">
       EMAIL ADRESS
      </label>
              <input type="email" class="form-control" id="email1"placeholder="Your email address...">
            
            </div>
            <div class="form-group">
                  <label class="control-label requiredField" for="password1">
       PASSWORD
      </label>
              <input type="password" class="form-control" id="password1" placeholder="Your password...">
            </div>
            <button type="button" class="btn btn-primary btn-sm mr-3">Login</button>
          </form>
        </div>
         <img class="modal-image" src="assets/images/logo.png" height="100" alt="DIY logo">
      </div>
       <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Not a member yet? <a href="#a" class="nav-link"> Sign Up!</a></div>
      </div>
    </div>
     
  </div>
</div>
    
    
 <!-- LOGIN MODAL -->

    
    
 <!-- SIGNUP MODAL -->

    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">        
        <div class="form-title text-left">
          <h4>Sign Up</h4>
        </div>
        <div class="d-flex flex-column text-left">
          <form>
            <div class="form-group">
                   <label class="control-label requiredField" for="email1">
       EMAIL ADRESS
      </label>
              <input type="email" class="form-control" id="email1"placeholder="Your email address...">
            
            </div>
            <div class="form-group">
                  <label class="control-label requiredField" for="password1">
       PASSWORD
      </label>
              <input type="password" class="form-control" id="password1" placeholder="Your password...">
            </div>
            <button type="button" class="btn btn-primary btn-sm mr-3">Sign Up</button>
          </form>
        </div>
         <img class="modal-image" src="assets/images/logo.png" height="100" alt="DIY logo">
      </div>
       <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Already a member? <a href="#loginModal" class="nav-link"> Login</a></div>
      </div>
    </div>
     
  </div>
</div>
     <!-- SIGNUP MODAL -->
  
</body>
       <!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">
  
  <!-- Footer Links -->
  <div class="container text-center text-md-left">
 
    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">
       <!-- Grid column -->
      
      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">DIY COMMUNITY</h6>
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">GET TO KNOW US</h6>
        <p>
          <a class="footer-link" href="#!">About</a>
        </p>
        <p>
          <a class="footer-link" href="#!">Contact Us</a>
        </p>
        <p>
          <a class="footer-link" href="#!">FAQ's</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful Links</h6>
        <p>
          <a class="footer-link" href="#!">Your Account</a>
        </p>
        <p>
          <a class="footer-link" href="#!">Lorem</a>
        </p>
        <p>
          <a class="footer-link" href="#!">Help</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <a href="index.php">
          <img class="footer-logo" src="assets/images/DIY.png" height="200" alt="DIY logo">
        </a>
      </div>
       
      </div>
      <!-- Grid column -->

    </div>
</footer>
<!-- Footer -->
</html>