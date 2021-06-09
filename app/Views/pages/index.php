<?php
echo '
   
<body onload="boot()" style="background-image:url(https://blog.apnic.net/wp-content/uploads/2015/09/home1.jpg)">
    <main>
        <div class="container">
            <div class="center">
                <header>
                    <p id="mainheader"></p>
                </header>
                <main>
                    <div class="row">
                        <div class="col-sm"><button type="button" onclick="window.location.href="'; echo base_url(); echo '/profile/">Profile</button></div>
                        <div class="col-sm"><button type="button" onclick="window.location.href="hometown/">Hometown</button></div>
                        <div class="col-sm"><button type="button" onclick="window.location.href="food/">Food</button></div>
                        <div class="col-sm"><button type="button" onclick="window.location.href="tourist/">Tourist</button></div>
                    </div>
                </main>
            </div>
        </div>
    </main>
'
?>