<div>
  <div class="sidebar">
    <div class="logo-details">
      <i class='icon de code'></i>
        <div class="logo_name">Volley</div>
        <i class='text-light fa-solid fa-volleyball' id="btn" ></i>
      </div>
    <ul class="nav-list">
      <li>
          <a href="/back/equipe">
            <i class='fa-solid fa-users' ></i>
            <span class="links_name">Equipe</span>
          </a>
          <span class="tooltip">Equipe</span>
      </li>
      <li>
          <a href="/back/joueur">
            <i class='fa-solid fa-user'></i>
            <span class="links_name">Joueur</span>
          </a>
          <span class="tooltip">Joueur</span>
      </li>
    </ul>
  </div>
  <section class="home-section">
      @yield('content')
  </section>

  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace(" fa-bars", " fa-chevron-left");//replacing the iocns class
   }else {
     closeBtn.classList.replace(" fa-chevron-left"," fa-bars");//replacing the iocns class
   }
  }
  </script>

</div>