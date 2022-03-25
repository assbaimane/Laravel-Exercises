<!-- Projects -->
<div class="projects">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <span>{{ $titres[2]->soustitre }}</span>
                    <h2>{{ $titres[2]->titre }}</h2>
                    <p>{{ $titres[2]->description }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="projects_box ">
                            <figure><img src={{ $voitures[0]->img }} alt="#" /></figure>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="projects_box ">
                            <p>{{ $voitures[0]->paragraph }}</p>
                            <a class="read_more" href="#">{{ $voitures[0]->button }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end projects -->