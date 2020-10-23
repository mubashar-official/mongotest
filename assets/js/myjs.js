 $(document).ready(function () {
    $('.forgot-pass').click(function(event) {
      $(".pr-wrap").toggleClass("show-pass-reset");
    }); 
    
    $('.pass-reset-submit').click(function(event) {
      $(".pr-wrap").removeClass("show-pass-reset");
    }); 
});

// folder reg_manager page std_reg.php 
function registration() {		
							var years= document.getElementById("years").value;
							var pro = document.getElementById("program");
							var pro_id = pro.options[pro.selectedIndex].value;
							var roll= document.getElementById("roll").value;
							var regs= pro_id+"-"+years+"-"+roll;
							document.getElementById("reg").value=regs;								
								
						}
