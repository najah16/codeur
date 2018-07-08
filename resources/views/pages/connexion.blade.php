@extends('layouts.master')
@section('banner')
               <div class="page_banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="banner-heading"></div>    
                            </div>  
                        </div>
                    </div>
                </div>
@stop
@section('main-content')
    <main id="maincontent">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="page-tab">
                        <div id="form">
                            <div id="userform">
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li class="active border-right"><a href="#login"  role="tab" data-toggle="tab">Connexion</a></li>
                                    <li><a href="#signup" role="tab" data-toggle="tab">Inscription</a></li>
                                </ul>
                                <div class="tab-content">
                                <div class="tab-pane fade active in" id="login">
                                	<h3>Connectez vous avec vos comptes:</h3>
                                    <div class="row">
                                       <div class="social_button col-md-6 col-sm-6 text-center">
                                            <a href="#" class="facebook btn-block"><i class="fa fa-facebook-square"></i> Faceboook</a>
                                       </div> 
                                        <div class="social_button col-md-6 col-sm-6 text-center">
                                            <a href="#" class="facebook twitter btn-block"><i class="fa fa-twitter-square"></i> Twiiter</a>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="social_button col-md-6 col-sm-6 text-center">
                                            <a href="#" class="facebook google btn-block"><i class="fa fa-google-plus-square"></i>  Google+</a>
                                       </div> 
                                        <div class="social_button col-md-6 col-sm-6 text-center">
                                            <a href="#" class="facebook linked btn-block"><i class="fa fa-linkedin-square"></i> Linked In</a>
                                       </div>
                                    </div>
                                    <form id="login">
                                        <div class="form-group">
                                            <label> E-mail</label>
                                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
                                            <div class="search_icon"><span class="ti-user"></span></div>
                                        </div>
                                        <div class="form-group">
                                            <label> Mot de passe </label>
                                            <input type="password" class="form-control" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
                                            <div class="search_icon"><span class="ti-pin"></span></div>
                                        </div>
                                        <div class="mrgn-30-top">
                                            <button type="submit" class="btn btn-larger btn-block"/>Connexion</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="signup">
                                	<h3>Connectez vous avec vos comptes:</h3>
                                    <div class="row">
                                       <div class="social_button col-md-6 col-sm-6 text-center">
                                            <a href="#" class="facebook btn-block"><i class="fa fa-facebook-square"></i> Faceboook</a>
                                       </div> 
                                        <div class="social_button col-md-6 col-sm-6 text-center">
                                            <a href="#" class="facebook twitter btn-block"><i class="fa fa-twitter-square"></i>  Twiiter</a>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="social_button col-md-6 col-sm-6 text-center">
                                            <a href="#" class="facebook google btn-block"><i class="fa fa-google-plus-square"></i> Google+</a>
                                       </div> 
                                        <div class="social_button col-md-6 col-sm-6 text-center">
                                            <a href="#" class="facebook linked btn-block"><i class="fa fa-linkedin-square"></i>  Linked In</a>
                                       </div>
                                    </div>
                                    <form id="signup">
                                    	 <div class="form-group">
                                            <label>Je cherche un:</label>
                                            <select class="form-control">
                                            	<option>Freelancer</option>
                                            	<option>Un projet à réaliser</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" id="first_name" required data-validation-required-message="Please enter your name." autocomplete="off">
                                            <div class="search_icon"><span class="ti-user"></span></div>
                                        </div>
                                        <div class="form-group">
                                            <label> Email </label>
                                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
                                            <div class="search_icon"><span class="ti-email"></span></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Mot de passe </label>
                                            <input type="password" class="form-control" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
                                            <div class="search_icon"><span class="ti-pin"></span></div>
                                        </div>
                                        <div class="form-group">
                                            <label> Confirmation</label>
                                            <input type="password" class="form-control" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
                                            <div class="search_icon"><span class="ti-pin"></span></div>
                                        </div>
                                        <div class="mrgn-30-top">
                                            <button type="submit" class="btn btn-larger btn-block"/>Inscription</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div> 
        </div>
    </main>
@stop