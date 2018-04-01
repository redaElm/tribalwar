!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Material Login Form</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="{{ asset('css/stylelogin.css')}}">

  
</head>

<body>

  

<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">تسجيل الدخول</h1>
    <form>
      <div class="input-container">
        <input type="#{type}" id="#{label}" required="required"/>
        <label for="#{label}">البريد الالكتروني</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" required="required"/>
        <label for="#{label}">كلمة المرور</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>تسجيل الدخول</span></button>
      </div>
      <div class="footer">
        او تسجيل الدخول عن طريق
        <a href="#" class=""></a>
      </div>
    </form>
  </div>


  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">التسجيل
      <div class="close"></div>
    </h1>
    <form>
      <div class="input-container">
        <input type="#{type}" id="#{label}" required="required"/>
        <label for="#{label}">البريد الالكتروني</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" required="required"/>
        <label for="#{label}">كلمة المرور</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" required="required"/>
        <label for="#{label}">اعادة كلمة المرور</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>التسجيل</span></button>
      </div>
    </form>

    <div class="">
        <span>or</span>
        <a href=""></a>
      </div>
  </div>
</div>




  <script src="{{ asset('js/jquery-2.2.4.min.js')}}"></script>
  <script  src="{{ asset('js/login.js')}}"></script>




</body>

</html>
