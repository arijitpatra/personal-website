$(document).ready(function(){
    $("#resume").click(function(){
        $("#result").load("resume.php").addClass("content");
        $("#about").empty();
    });
    $("#me").click(function(){
        $("#about").load("about.php").addClass("content");
        $("#result").empty();
    });
    $("#contact").click(function(){
        $("#result").load("contact.php").addClass("content");
        $("#about").empty();
    });

    $("#photo").click (function (e) {
    	$("#result").empty();
    	$(".photo-redirection").addClass("text-center").show();
        $("#about").empty();

  var counter = 10;

  setInterval(function() {
    counter--;
    if (counter >= 0) {
      $("#count").text(counter);
      
    }
    // Display 'counter' wherever you want to display it.
    if (counter === 0) {
        
        clearInterval(counter);
    }

  }, 1000);



   e.preventDefault(); //will stop the link href to call the blog page

   setTimeout(function () {
       window.location.href = "http://www.arijitpatra.yolasite.com/photo-gallery.php"; //will redirect to your blog page (an ex: blog.html)
    }, 10000); //will call the function after 2 secs.

	});
});