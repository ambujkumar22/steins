<!DOCTYPE html>
<html>
    <head>

        <title>index stiens gate is best</title>
        <link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
        <style type="text/css">

            body{
              background: #111;
            }


            .fly-in-text {
                list-style: none;
                position: absolute;
                left:50%;
                top: 45%;
                transform: translateX(-50%) translateY(-50%);
            }
            .fly-in-text li {
                display: inline-block;
                margin-right: 50px;
                font-family: Open sans, Arial;
                color: #2b2b2b;
                text-shadow: 4px 4px 0px rgba(0,0,0,0.1);
                font-weight: 300;
                font-size: 4em;
                color: #fff;
                opacity: 1;
                transition: all 1.5s ease;
            }
            .fly-in-text li:last-child {
                margin-right: 0;
            }
            .fly-in-text.hidden li {
                opacity: 0;
            }
            .fly-in-text.hidden li:nth-child(1) { transform: translateX(-200px) translateY(-200px); }
            .fly-in-text.hidden li:nth-child(2) { transform: translateX(20px) translateY(100px); }
            .fly-in-text.hidden li:nth-child(3) { transform: translateX(-150px) translateY(-80px); }
            .fly-in-text.hidden li:nth-child(4) { transform: translateX(10px) translateY(-200px); }
            .fly-in-text.hidden li:nth-child(5) { transform: translateX(-300px) translateY(200px); }
            .fly-in-text.hidden li:nth-child(6) { transform: translateX(20px) translateY(-20px); }
            .fly-in-text.hidden li:nth-child(7) { transform: translateX(30px) translateY(200px); }
            /*button start*/
            button.getstarted {
              color: #fff;
              font-family: Open Sans, Arial;
              text-transform: uppercase;
              font-weight: bolder;
              position: absolute;
              background-color: #000;
              top: 80%;
              left:43%;
              padding: 10px 50px;
              border: 2px solid #fff;
              border-radius: 2px;
              font-size: 1em;
              opacity: 0.5;
            }
            button.getstarted:hover {
              color: #fff;
              transition-duration: 0.3s;
              border: 2px solid #fff;
              opacity: 1;
              cursor: pointer;
            }
            /*button end*/
        </style>
    </head>
    <body>

<div class="welcome">
  <ul class="fly-in-text hidden">
      <li>W</li>
      <li>E</li>
      <li>L</li>
      <li>C</li>
      <li>O</li>
      <li>M</li>
      <li>E</li>
</div>

        </ul>
<a href="Log_in.php"><button type="button" class="getstarted" name="getstarted">Get Started</button></a>

    </body>
    <script src="jQuery/jquery.js"></script>
    <script type="text/javascript">

        $(function() {

            setTimeout(function() {
                $('.fly-in-text').removeClass('hidden');
            }, 500);

        });

    </script>
</html>
