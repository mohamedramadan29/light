
(function ($) {
    "use strict";
    if (window.location.href.indexOf("index") > -1) { 
        $("#index").addClass("active"); 
      }

      if (window.location.href.indexOf("about_us") > -1) { 
        $("#about_us").addClass("active"); 
      }
      if (window.location.href.indexOf("services") > -1) { 
        $("#services").addClass("active"); 
      }
      if (window.location.href.indexOf("contact_us") > -1) { 
        $("#contact_us").addClass("active"); 
      }

    })(jQuery);