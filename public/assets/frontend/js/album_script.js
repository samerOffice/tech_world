const panels = document.querySelectorAll('.panel')

panels.forEach((panel) => {
    panel.addEventListener('mouseover', () => {

        removeActiveClasses()
        panel.classList.add('active')
        // panel.classList.remove('ss')

    })
})

function removeActiveClasses() {
    panels.forEach(panel => {
        panel.classList.remove('active')
    })
}


// web design hover
$("#web_design").hover(
  function () {   
     
     $('#web_design_text').css("display", "block");
     $('#web_design_text').addClass("show_first_item");
     $('#web_design_text').removeClass("hidden_display");    
  },
  function () {
   $('#web_design_text').addClass("hidden_display");
  }
);


// web application hover
$("#web_app").hover(
  function () {
    $('#web_design_text').css("display", "none");
     $('#web_app_text').removeClass("hidden_display");   
  },
  function () {
    $('#web_app_text').addClass("hidden_display");
  }
);


// customer software hover
$("#cus_soft").hover(
  function () {
     $('#web_design_text').css("display", "none");
     $('#cus_soft_text').removeClass("hidden_display");    
  },
  function () {
    $('#cus_soft_text').addClass("hidden_display");
  }
);


// graphics design hover
$("#graphics_design").hover(
  function () {
     $('#web_design_text').css("display", "none");
     $('#graphics_design_text').removeClass("hidden_display");    
  },
  function () {
    $('#graphics_design_text').addClass("hidden_display");
  }
);



// digital market hover
$("#digital_market").hover(
  function () {
     $('#web_design_text').css("display", "none");
     $('#digital_market_text').removeClass("hidden_display");    
  },
  function () {
    $('#digital_market_text').addClass("hidden_display");
  }
);




// business content hover
$("#business_content").hover(
  function () {
     $('#web_design_text').css("display", "none");
     $('#business_content_text').removeClass("hidden_display");    
  },
  function () {
    $('#business_content_text').addClass("hidden_display");
  }
);







