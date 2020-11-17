<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
  xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="date=no">
  <meta name="format-detection" content="telephone=no">

  <style type="text/css">
    body {
      margin: 0;
      padding: 0;
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%;
      background-color: #ffffff;
    }

    header {
      background-color: #008001;
      padding: 10px;
      color: #ffffff;
      text-align: center;
    }

    header a {
      color: #ffffff;
      text-decoration: none;
      text-align: center;
    }

    .logo {
      font-size: 40px;
      font-style: italic;
      font-weight: 900;
      font-family: Helvetica, Arial, sans-serif;
    }

    .contenuto {
      padding: 20px;
      text-align: left;
      color: #333333;
      font-family: Helvetica, Arial, sans-serif;
      font-size: 14px;
      line-height: 20px;
    }

    footer {
      font-family: Helvetica, Arial, sans-serif;
      font-size: 12px;
      line-height: 16px;
      color: #aaaaaa;
      padding: 20px;
      background-color: #008001;
      text-align: center;
    }

  </style>
</head>

<body style="margin:0; padding:0;" bgcolor="#ffffff" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <header>
    <a href="https://www.cristianogroup.com/" style="text-decoration: none; color: #ffffff;"><span class="logo"
        style="font-size: 28px; font-weight: 900; font-family:Helvetica, Arial, sans-serif; text-align: center;">Cristiano Group SRL</span></a>
  </header>

  <section class="contenuto" style="padding: 20px; text-align: left; color:#333333; font-family:Helvetica, Arial, sans-serif; font-size:14px; line-height:20px;">
    Ciao <?= $name ?>,<br>
    grazie per averci contattato, presto prenderemo in carico la tua mail e ti invieremo una risposta.<br />
    Qui in basso ti riportiamo il messaggio ricevuto.<p>
      Nome: <?= $name ?><br />
      E-mail: <?= $email ?><br />
      Telefono: <?= $phone ?><br />
      Messaggio: <?= $message ?><br />
    </p>
  </section>
  <section style="padding: 0 20px 20px 20px; text-align: left; color:#333333; font-family:Helvetica, Arial, sans-serif; font-size:12px; line-height:20px;">
  <i>A presto<br />
    cristianogroup.com
  </i>
  </section>
  <footer style="font-family:Helvetica, Arial, sans-serif; font-size:12px; line-height:16px; color:#ffffff; padding: 20px;
        background-color: #008001; text-align: center;">
    <span>&copy; © Copyright 2020 Cristiano Group SRL<script>
        document.write(new Date().getFullYear());

      </script> | Traversa I di Via Roma n. 8 - 81030 Teverola CE - P.IVA 03621640618</span>
  </footer>
</body>

</html>
