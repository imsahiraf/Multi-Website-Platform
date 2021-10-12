<!doctype html>
<!-- Code by Webdevtrick (https://webdevtrick.com) -->
<html>
<head><title>Search Availability of Domain...</title>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="style.css">
 <style>
    .container{
  width: 80%;
  position: absolute;
  top: 30%;
  left: 30%;
  
}
#custom-search-input{
    padding: 3px;
    border: solid 1px #E4E4E4;
    border-radius: 6px;
    background-color: #fff;
 display: inline-block;
}
#custom-search-input input{
    border: 0;
    box-shadow: none;
}
#custom-search-input button{
    margin: 2px 0 0 0;
    background: none;
    box-shadow: none;
    border: 0;
    color: #666666;
    padding: 0 8px 0 10px;
    border-left: solid 1px #ccc;
}
#custom-search-input button:hover{
    border: 0;
    box-shadow: none;
    border-left: solid 1px #ccc;
}
#custom-search-input .glyphicon-search{
    font-size: 23px;
}
h1{
 color:red;
}
h2{
 color:green;
}
    </style>
</head>
 
<body>
 
<div class="container">
 <div class="row">
        <div class="col-md-6">
     <h3>Check Domain Name Availability</h3>
 <form action="" method="GET">
            <div id="custom-search-input">
                <div class="input-group col-md-24" >
                    <input type="text" name="domain" class="form-control input-lg" placeholder="Example.com or Example.in etc." />
 <span class="input-group-btn">
                        <button type="submit" class="glyphicon glyphicon-search"></button>
                            
                        
                    </span>
                </div>
            </div>
 </form>
 <?php
 error_reporting(0);
 if(isset($_GET['domain'])){
 $domain = $_GET['domain'];
 $godaddycheck = 'https://in.godaddy.com/domains/searchresults.aspx?checkAvail=1&tmskey=&domainToCheck='.$domain.'';
 $namecomcheck = 'https://www.name.com/domain/search/'.$domain.'';
 $registercomcheck = 'http://www.register.com/domain/search/wizard.rcmx?searchDomainName='.$domain.'&searchPath=Default&searchTlds=';
 if ( gethostbyname($domain) != $domain ) {
  echo "<h1>Already Registered!</h1>";
 }
 else {
  echo "<h3>$domain</h3><h2><br>Not Taken, you can register it.
  </h2>";
 }
 }
?>
        </div>
 </div>
</div>
 
</body>
 
</html>