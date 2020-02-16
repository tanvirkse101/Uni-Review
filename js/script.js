 /* Set the width of the sidebar to 150px and the left margin of the page content to 150px */
 function openNav() {
     document.getElementById("mySidebar").style.width = "200px";
 }
 /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
 function closeNav() {
     document.getElementById("mySidebar").style.width = "0";
 }

 function openTab(evt, _tabName) {
     // Declare all variables
     var i, tabcontent, tablinks;

     // Get all elements with class="tabcontent" and hide them
     tabcontent = document.getElementsByClassName("tabcontent");
     for (i = 0; i < tabcontent.length; i++) {
         tabcontent[i].style.display = "none";
     }

     // Get all elements with class="tablinks" and remove the class "active"
     tablinks = document.getElementsByClassName("tablinks");
     for (i = 0; i < tablinks.length; i++) {
         tablinks[i].className = tablinks[i].className.replace(" active", "");
     }

     // Show the current tab, and add an "active" class to the button that opened the tab
     document.getElementById(_tabName).style.display = "block";
     evt.currentTarget.className += " active";

 }