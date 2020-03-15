<!DOCTYPE html>
  <html>
  <head>

  <!--Bootstrap CSS-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="css/aboutpage.css">
    <!-- Custom JS -->
    <script src="js/script.js"></script>
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://xyz.api.here.com/maps/latest/xyz-maps-common.min.js" type="text/javascript" charset="UTF-8" ></script>
  <script src="https://xyz.api.here.com/maps/latest/xyz-maps-core.min.js" type="text/javascript" charset="UTF-8" ></script>
  <script src="https://xyz.api.here.com/maps/latest/xyz-maps-display.min.js" type="text/javascript" charset="UTF-8" ></script>
  <!-- include this if you want to use an MVT basemap -->
  <script src="https://xyz.api.here.com/maps/latest/xyz-maps-plugins.min.js" type="text/javascript" charset="UTF-8" ></script>
  </head>

  <body>
  <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="homepage.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href=""><i class="fa fa-fw fa-envelope"></i> Messages</a>
        <a href=""><i class="fa fa-fw fa-bell"></i> Notifications</a>
        <a href=""><i class="fa fa-fw fa-cogs"></i> Settings</a>
    </div>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">

        <button class="openbtn bg-dark" onclick="openNav()">&#9776; <b style="font-size: 18px;">Menu</b> </button>

        <a class="navbar-brand" style="margin-left:25%;" href="#">
            <img class="rounded-circle" style="width: 50px;height: 50px" src="images/Uni_Logo.png" alt="Logo"
                style="width:40px;">
        </a>

        <a class="navbar-brand" href="#">Uni-Review</a>

        

        <!-- Links -->
        <ul class="navbar-nav" style="margin-left:35%;">
            <li class="nav-item">
                <a class="nav-link" href="homepage.php"><i class="fa fa-fw fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=><i class="fa fa-fw fa-user-circle"></i> Logout</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" style="margin-right: 2%"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-cogs"></i>
                    Settings</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="userprofile.php">User Profile</a>
                    <a class="dropdown-item" href="aboutpage.php">About</a>
                    <a class="dropdown-item" href=""> Contact Us</a>
                </div>
            </li>
        </ul>
    </nav>


    <!--Main Body Start-->
  <div style="width: 1020px; height: 440px" id="map"></div>





<script type="application/javascript">
  //specify your credentials to spaces
  var YOUR_ACCESS_TOKEN = "HVWr2SeyaGTYJSxORR0uVOFSYjT5G2XC2HbBZuMUV8w"; // <--- TODO: Replace this with your token

  // configure layers
  var layers = [
          new here.xyz.maps.layers.TileLayer({
          name: 'Image Layer',
                min: 1,
                max: 20,
                provider: new here.xyz.maps.providers.ImageProvider({
            name: 'Live Map',
              url : 'https://{SUBDOMAIN_INT_1_4}.mapcreator.tilehub.api.here.com/tilehub/wv_livemap_bc/png/sat/256/{QUADKEY}?access_token='+YOUR_ACCESS_TOKEN
          }),

          style:{
    styleGroups: {
      lineStyle: [
        
        {zIndex:0, type:"Text", textRef:"North south Uni", fill:"#3D272B"}
      ]
    },
    // decide per feature which style to use
    assign: function(feature, zoomlevel){
        console.log(properties.name)
      return "linkStyle";
        }
    }
    })
  ]

  

 

  // setup the Map Display
  window.display = new  here.xyz.maps.Map( document.getElementById("map"), {
      zoomLevel : 19, 
      center: {
          longitude: 90.426028, latitude: 23.815333
      },
      // add layers to display
      layers: layers
  });

   // customize the styles that can be used
  
    

</script>





  </body>
  