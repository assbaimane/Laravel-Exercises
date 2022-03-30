<div>
  <div class="sidebar">
    <div class="logo-details">
      <i class='icon de code'></i>
        <div class="logo_name">CodingSchool</div>
        <i class='text-light fa-solid fa-laptop-code' id="btn" ></i>
      </div>
    <ul class="nav-list">
      <li>
          <a href="/user">
            <i class='fa-solid fa-paintbrush-pencil' ></i>
            <span class="links_name">User</span>
          </a>
          <span class="tooltip">User</span>
      </li>
      <li>
          <a href="/album">
            <i class='fa-solid fa-medal'></i>
            <span class="links_name">Album</span>
          </a>
          <span class="tooltip">Album</span>
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
  // let searchBtn = document.querySelector(".fa-magnifying-glass");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  // searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
  //   sidebar.classList.toggle("open");
  //   menuBtnChange(); //calling the function(optional)
  // });

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