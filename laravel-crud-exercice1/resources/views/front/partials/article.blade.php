      <!-- Article -->
      <div class="section">
        <div class="container">
           <div id="" class="Article">
              <div class="row">
                 <div class="col-md-12">
                    <div class="titlepage">
                       <h2>{{ $titres[3]->titre }}</h2>
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-md-3">
                    <div class="Article_box">
                       <i><img src={{ $articles[0]->img }} alt="#"/></i>
                    </div>
                 </div>
                 <div class="col-md-9">
                    <div class="Article_box">
                       <h4>{{ $articles[0]->name }}</h4>
                       <p>{{ $articles[0]->paragraph }}
                       </p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
    
     <!-- end Article -->