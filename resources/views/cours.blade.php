@include('includes.header')

<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.html">Home</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Our Courses</li>
        </ul>
        <p class="text-lighten mb-0">postgres://rqvvkwrgnvqqjb:4e987622b5ed3374be6c0579e3fe072d5bb6aa67b456e2f135157c9ae5c447ae@ec2-54-163-34-107.compute-1.amazonaws.com:5432/dbl86oivksen3p
            Host
ec2-54-163-34-107.compute-1.amazonaws.com
Database
dbl86oivksen3p
User
rqvvkwrgnvqqjb
Port
5432
Password
4e987622b5ed3374be6c0579e3fe072d5bb6aa67b456e2f135157c9ae5c447ae
URI
postgres://rqvvkwrgnvqqjb:4e987622b5ed3374be6c0579e3fe072d5bb6aa67b456e2f135157c9ae5c447ae@ec2-54-163-34-107.compute-1.amazonaws.com:5432/dbl86oivksen3p
Heroku CLI
heroku pg:psql postgresql-clear-44423 --app summitogo

            Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- courses -->
<section class="section">
  <div class="container">
    <!-- course list -->
<div class="row justify-content-center">
 
  <!-- course item -->
 @foreach ($cours as $cour)
 <div class="col-lg-4 col-sm-6 mb-5">
  <div class="card p-0 border-primary rounded-0 hover-shadow">
    <img class="card-img-top rounded-0" src="images/courses/course-4.jpg" alt="course thumb">
    <div class="card-body">
      <ul class="list-inline mb-2">
        <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
        <li class="list-inline-item"><a class="text-color" href="{{url::to('cours-single')}}">Humanities</a></li>
      </ul>
      <a href="{{url::to('cours-single')}}">
        <h4 class="card-title">{{ $cour->titre }}</h4>
      </a>
      <p class="card-text mb-4"> {{ $cour->contenu }}</p>
      <a href="{{url::to('cours-single')}}" class="btn btn-primary btn-sm">{{ $cour->niveau }}</a>
    </div>
  </div>
</div>
 @endforeach

</section>
<!-- /courses -->

