<!DOCTYPE html>
<html>
<head>
	<title>FeesPage</title>
</head>
<style type="text/css">
	.form-fees {
    margin:10px auto;
    max-width: 400px;
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-fees li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
}
.form-fees label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-fees input[type=text], 
.form-fees input[type=date],
.form-fees input[type=datetime],
.form-fees input[type=number],
.form-fees input[type=search],
.form-fees input[type=time],
.form-fees input[type=url],
.form-fees input[type=email],
textarea, 
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;  
}
.form-fees input[type=text]:focus, 
.form-fees input[type=date]:focus,
.form-fees input[type=datetime]:focus,
.form-fees input[type=number]:focus,
.form-fees input[type=search]:focus,
.form-fees input[type=time]:focus,
.form-fees input[type=url]:focus,
.form-fees input[type=email]:focus,
.form-fees textarea:focus, 
.form-fees select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}
.form-fees .field-divided{
    width: 49%;
}
.form-fees .field-long{
    width: 100%;
}
.form-fees .field-select{
    width: 100%;
}
.form-fees .field-textarea{
    height: 100px;
}
.form-fees input[type=submit], .form-fees input[type=button]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
}
.form-fees input[type=submit]:hover, .form-fees input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-fees .required{
    color:red;
}
.alert{
    color: red;
}
div{
	background-color: lightblue;
	 width: 500px;
    margin: auto;
    border: 3px solid #73AD21;
}
button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
</style>
<body align="center">

<div>
 <h2 align="center">Click To View Fees Payment</h2>

 
    <a href="/checkFees/Fees"><button>Search</button></a>

		<h2 align="center">Record Fees Payment</h2>
        @if(session()->has('message'))
        {{session()->get('message')}}
        @endif
	<form action="fees" method="post">
         {{csrf_field()}}
     <ul class="form-fees">
     <li>
    <label align="left">Student Number  </span></label>
    <input type="text" name="student_number" class="field-long" />
    </li>
    <li>
    
    <label align="left">Full Name </span></label>
    <input type="text" name="full_name" class="field-long" />
    </li>
 
     <li>
    <label align="left">Date Of Payment  </span></label>
    <input type="date" name="date_of_payment" class="field-long" />
    </li>
    <li>
    <label align="left">Amount  </span></label>
    <input type="number" name="amount" class="field-long" />
    </li>
     
    <li>
        <input type="submit" value="Submit" /><br>
    </li>
     @if ($errors->any())
    <div class="alert" style="width: 60%">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</ul>
 
</form>
<a href="/"><button>Home</button>
</div>
</body>
</html>