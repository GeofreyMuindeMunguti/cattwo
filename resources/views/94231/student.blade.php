<!DOCTYPE html>
<html>
<head>
	<title>StudentsPage</title>
</head>
<style type="text/css">
	.form-student {
    margin:10px auto;
    max-width: 400px;
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-student li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
}
.form-student label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-student input[type=text], 
.form-student input[type=date],
.form-student input[type=datetime],
.form-student input[type=number],
.form-student input[type=search],
.form-student input[type=time],
.form-student input[type=url],
.form-student input[type=email],
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
.form-student input[type=text]:focus, 
.form-student input[type=date]:focus,
.form-student input[type=datetime]:focus,
.form-student input[type=number]:focus,
.form-student input[type=search]:focus,
.form-student input[type=time]:focus,
.form-student input[type=url]:focus,
.form-student input[type=email]:focus,
.form-student textarea:focus, 
.form-student select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}
.form-student .field-divided{
    width: 49%;
}

.form-student .field-long{
    width: 100%;
}
.form-student .field-select{
    width: 100%;
}
.form-student .field-textarea{
    height: 100px;
}
.form-student input[type=submit], .form-student input[type=button]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
}
.form-student input[type=submit]:hover, .form-student input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-student .required{
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
		<h2 align="center">Register student</h2>
        @if(session()->has('message'))
        {{session()->get('message')}}
        @endif
	<form action="student" method="post">
         {{csrf_field()}}
<ul class="form-student">
      <li>
    <label align="left">Student Number </label>
    <input type="text" name="student_number" class="field-long" />
    </li>
     <li>
    <label align="left">Full Name </label>
    <input type="text" name="full_name" class="field-long" />
    </li>
     <li>
    <label align="left">Address</label>
    <input type="text" name="address" class="field-long" />
    </li>
    <label align="left">Date Of Birth</label>
    <input type="date" name="date_of_birth" class="field-long" />
    </li>
    
    <li>
    
    <li>
        <input type="submit" value="Register" /><br>
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