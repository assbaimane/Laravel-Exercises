<div>
  <div class="sidebar">
    <div class="logo-details">
      <i class='icon de code'></i>
        <div class="logo_name">CodingSchool</div>
        <i class='text-light fa-bars' id="btn" ></i>
        {{-- text-light fa-solid  fa-bars --}}
      </div>
    <ul class="nav-list">
      {{-- <li>
         <i class='text-light fa-solid fa-magnifying-glass'></i>
         <input type="text" placeholder="...">
         <span class="tooltip">Search</span>
      </li> --}}
      <li>
        <a href="/titre">
          <i class='fa-solid fa-medal'></i>
          <span class="links_name">Titre</span>
        </a>
         <span class="tooltip">Titre</span>
      </li>
      <li>
       <a href="/nav">
         <i class='fa-solid fa-computer-mouse' ></i>
         <span class="links_name">Navigation</span>
       </a>
       <span class="tooltip">Navigation</span>
     </li>
     <li>
       <a href="/home">
         <i class='fa-solid fa-house' ></i>
         <span class="links_name">Home</span>
       </a>
       <span class="tooltip">Home</span>
     </li>
     <li>
       <a href="/features">
         <i class='fa-solid fa-list-check' ></i>
         <span class="links_name">Features</span>
       </a>
       <span class="tooltip">Features</span>
     </li>
     <li>
       <a href="/portfolio">
         <i class='fa-solid fa-tasks-alt' ></i>
         <span class="links_name">Portfolio</span>
       </a>
       <span class="tooltip">Portfolio</span>
     </li>
     <li>
       <a href="/testimonial">
        <i class="fas fa-comment-alt"></i>
         <span class="links_name">Testimonial</span>
       </a>
       <span class="tooltip">Testimonial</span>
     </li>
     <li>
       <a href="/footer">
         <i class='fa-solid fa-shoe-prints' ></i>
         <span class="links_name">Footer</span>
       </a>
       <span class="tooltip">Footer</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <!--<img src="profile.jpg" alt="profileImg">-->
           <div class="name_job">
             <div class="name">Imane</div>
             <div class="job">Web designer à MG</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
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