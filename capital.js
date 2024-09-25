const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");
    toggle.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    })
    searchBtn.addEventListener("click", () => {
      sidebar.classList.remove("close");
    })
    
    document.getElementById("submit").addEventListener("click", function() {
        search();
      });
      
      document.getElementById("searchInput").addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
          search();
        }
      });
      

    
    
      
      
      
      
      
      
      