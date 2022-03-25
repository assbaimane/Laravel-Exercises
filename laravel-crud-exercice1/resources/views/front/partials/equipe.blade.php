      <!-- business -->
      <div class="business">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <span>{{ $titres[1]->soustitre }}</span>
                    <h2>{{ $titres[1]->titre }}</h2>
                    <p>{{ $titres[1]->description }}</p>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-md-10 offset-md-1">
                 <div class="row">
                    <div class="col-md-12">
                       <div class="business_box ">
                          <figure><img src={{ $equipes[0]->img }} alt="#"/></figure>
                          <p>{{ $equipes[0]->paragraph }}</p>
                          <a class="read_more" href="#">{{ $equipes[0]->button }}</a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- end business -->