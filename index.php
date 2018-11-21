<!DOCTYPE HTML>

<html>
<head>
    <title>IFSC Finder</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="google-signin-client_id" content="1050625197148-sjajlgjub5bifrtf67h94cfchiudjq3n.apps.googleusercontent.com">
    <link rel="stylesheet" href="semantic.min.css" />
    <style>
        td{
            background-color: #fff;

        }
        ::-webkit-scrollbar {
            display: none;
        }

        #top_piks_foryou img{
            width:100px;
        }
        #categories_id1 img,#categories_id2 img,#categories_id3 img{
            width:70px
        }

        #top_categories img{
            height: 70px;
        }
    </style>
    <script src="jquery-3.3.1.min.js" type="text/javascript"></script>
    <script>
         var content = [];
        var names=[];
        var citys=[];
        var address=[];
        var branch=[];
        var id=[];
        var ifsc=[];
        var state=[];
		var cards=[];
       var len;
		function calVal(){
		     var name=document.getElementById("name").value;
		 var city=document.getElementById("city").value;
$.ajax('https://rakeshkp.in/ekart/api/get_bank.php', {
                type: 'POST',
                data: { products:'products',name:name,city:city }, //Submission 
                success: function (data, status, xhr) {
                    len=Object.keys(data).length;
                    console.log(data);
                    for(var i=0;i<Object.keys(data).length;i++) {

                         names[i]=data[i]['name'];
                            citys[i]=data[i]['city'];
                            address[i]=data[i]['address'];
							branch[i]=data[i]['branch'];
							id[i]=data[i]['id'];
                            ifsc[i]=data[i]['ifsc'];
                            state[i]=data[i]['state'];
                            address[i]=data[i]['address'];
					cards[i]="<table class=\"ui celled table\">\n" +
                        "  <thead>\n" +
                        "    <tr><th>Name</th>\n" +
                        "    <th>Bank Id</th>\n" +

                        "    <th>Branch</th>\n" +
                        "    <th>IFSC</th>\n" +
                        "    <th>City</th>\n" +
                        "    <th>State</th>\n" +
                        "    <th>Address</th>\n" +

                        "  </tr></thead>\n" +
                        "  <tbody>\n" +
                        "    <tr>\n" +
                        "      <td data-label=\"Name\">"+names[i]+"</td>\n" +
                        "      <td data-label=\"Name\">"+id[i]+"</td>\n" +
                        "      <td data-label=\"Name\">"+branch[i]+"</td>\n" +
                        "      <td data-label=\"Name\">"+ifsc[i]+"</td>\n" +
                        "      <td data-label=\"Name\">"+citys[i]+"</td>\n" +
                        "      <td data-label=\"Name\">"+state[i]+"</td>\n" +
                        "      <td data-label=\"Name\">"+address[i]+"</td>\n" +

                        "    </tr>\n" +
                        "  </tbody>\n" +
                        "</table>";
                    }
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    console.log('error');
                },
                complete: function (jqXhr, textStatus, errorMessage) {
                    console.log(errorMessage);
					  $("#contents").empty();
                       for(var i=0;i<len;i++){
                           $("#contents").append(cards[i]);
                       }
                }
            });
}
function calVal1(){
		     var ifsc=document.getElementById("ifsc").value;	
            $.ajax('https://rakeshkp.in/ekart/api/get_bank1.php', {
                type: 'POST',  // http method
                data: { products:'products',ifsc:ifsc },  // data to submit
                success: function (data, status, xhr) {
                    len=Object.keys(data).length;
                    console.log(data);
                    for(var i=0;i<Object.keys(data).length;i++) {

                         names[i]=data[i]['name'];
                            citys[i]=data[i]['city'];
                            address[i]=data[i]['address'];
							branch[i]=data[i]['branch'];
							id[i]=data[i]['id'];
                            ifsc[i]=data[i]['ifsc'];
                            state[i]=data[i]['state'];
                            address[i]=data[i]['address'];
						

					cards[i]="<table class=\"ui celled table\">\n" +
                        "  <thead>\n" +
                        "    <tr><th>Name</th>\n" +
                        "    <th>Bank Id</th>\n" +

                        "    <th>Branch</th>\n" +
                        "    <th>IFSC</th>\n" +
                        "    <th>City</th>\n" +
                        "    <th>State</th>\n" +
                        "    <th>Address</th>\n" +

                        "  </tr></thead>\n" +
                        "  <tbody>\n" +
                        "    <tr>\n" +
                        "      <td data-label=\"Name\">"+names[i]+"</td>\n" +
                        "      <td data-label=\"Name\">"+id[i]+"</td>\n" +
                        "      <td data-label=\"Name\">"+branch[i]+"</td>\n" +
                        "      <td data-label=\"Name\">"+ifsc[i]+"</td>\n" +
                        "      <td data-label=\"Name\">"+citys[i]+"</td>\n" +
                        "      <td data-label=\"Name\">"+state[i]+"</td>\n" +
                        "      <td data-label=\"Name\">"+address[i]+"</td>\n" +

                        "    </tr>\n" +
                        "  </tbody>\n" +
                        "</table>";



                       

                    }
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    console.log('error');
                },
                complete: function (jqXhr, textStatus, errorMessage) {
                    console.log(errorMessage);
					  $("#contents1").empty();
                       for(var i=0;i<len;i++){
                           $("#contents1").append(cards[i]);
                       }

                }
            });
}
    </script>
</head>
<h1 align="center"> Bank Application REST</h1>
<body class="landing" >
<form class="ui fluid form">
  <div class="field">
    <input type="text" placeholder="Bank Name" id="name">

  </div>
  <div class="ui divider"></div>
  <div class="field">

    <input type="text"  placeholder="Bank City" id="city">
  </div>
  <div class="ui divider"></div>
 
</form>
 <button class="ui button" onclick="calVal()" >Get</button>
<div id="contents">
</div>
<i> please use SBI as bank and bangalore as City because of some time inconvinice only some are added</i>
<h5>Details </h5>
<form class="ui fluid form">
  <div class="field">
    <input type="text" placeholder="IFSC CODE" id="ifsc">
  </div>
</form>
 <button class="ui button" onclick="calVal1()" >Get</button>
 <i>please use 123456 as ifsc code</i>
<div id="contents1">
</div>
</body>
</html>