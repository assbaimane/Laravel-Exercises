           <!-- banner -->
           <section class="banner_main">
              <div class="container-fluid">
                 <div class="row d_flex">
                    <div class="col-md-6">
                       <div class="text-bg">
                          <h1>{{ $titres[0]->titre }}</h1>
                          <p>{{ $users[0]->paragraph }}</p>
                          <a href="#">{{ $users[0]->button }}</a>
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="text-img">
                          <figure><img src={{ $users[0]->img }} alt="#"/></figure>
                       </div>
                    </div>
                 </div>
              </div>
           </section>
        </div> <!-- Head_top div closing -->
     </header>
     <!-- end banner -->