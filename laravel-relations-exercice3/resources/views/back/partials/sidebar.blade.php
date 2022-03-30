<div>
  <div class="sidebar">
    <div class="logo-details">
      <i class='icon de code'></i>
        <div class="logo_name">CodingSchool</div>
        <i class='text-light fa-solid fa-laptop-code' id="btn" ></i>
      </div>
    <ul class="nav-list">
      <li>
          <a href="/equipe">
            <i class='fa-solid fa-paintbrush-pencil' ></i>
            <span class="links_name">Equipe</span>
          </a>
          <span class="tooltip">Equipe</span>
      </li>
      <li>
          <a href="/joueur">
            <i class='fa-solid fa-medal'></i>
            <span class="links_name">Joueur</span>
          </a>
          <span class="tooltip">Joueur</span>
      </li>
      <li>
        <a href="/role">
          <i class='fa-solid fa-medal' ></i>
          <span class="links_name">Role</span>
        </a>
        <span class="tooltip">Role</span>
      </li>
      <li>
          <a href="/photo">
            <i class='fa-solid fa-medal' ></i>
            <span class="links_name">Photo</span>
          </a>
          <span class="tooltip">Photo</span>
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