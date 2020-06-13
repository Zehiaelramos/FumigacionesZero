<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
              font-family: "Lato", sans-serif;
            }

            .sidenav {
              height: 100%;
              width: 50px;
              position: fixed;
              z-index: 1;
              top: 0;
              left: 0;
              background-color: #111;
              overflow-x: hidden;
              transition: 0.5s;
              padding-top: 50px;
            }

            .sidenav a {
              padding: 6px 12px;
              text-decoration: none;
              font-size: 25px;
              color: #818181;
              display: block;
              transition: 0.3s;
            }

            .sidenav a:hover {
              color: #f1f1f1;
              background: gray;
            }

            .sidenav .closebtn {
              position: absolute;
              top: 0;
              font-size: 36px;
              display: none;
            }

            .sidenav .openbtn {
              position: absolute;
              top: 0;
              font-size: 26px;
            }

            @media screen and (max-height: 450px) {
              .sidenav {padding-top: 15px;}
              .sidenav a {font-size: 18px;}
            }
        </style>
    </head>
    <body>
        <div id="mySidenav" class="sidenav">
          <a id="close" href="#" class="closebtn" onclick="closeNav()">&times;</a>
          <a id="open" href="#" class="openbtn" onclick="openNav()">&#9776;</a>
          <a href="#" style="font-size:20px;">Home</a>
          <a href="#" style="font-size:20px;">About</a>
          <a href="#" style="font-size:20px;">Services</a>
          <a href="#" style="font-size:20px;">Clients</a>
          <a href="#" style="font-size:20px;">Contact</a>
        </div>

{{--         <h2 style="padding-left:50px;">Animated Sidenav Example</h2>
        <p style="padding-left:50px;">
            Click on the element below to open the side navigation menu.
        </p>
        <span
            style="font-size:24px;cursor:pointer;padding-left:50px;" 
            onclick="openNav()"
            >&#9776; open
        </span> --}}

        <script>
            function openNav() {
              document.getElementById("mySidenav").style.width = "150px";
              document.getElementById("close").style.display = "inline";
              document.getElementById("open").style.display = "none";
            }

            function closeNav() {
              document.getElementById("mySidenav").style.width = "50px";
              document.getElementById("close").style.display = "none";
              document.getElementById("open").style.display = "inline";
            }
        </script>
    </body>
</html>
