<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">
</head>
<body>

    <!-- Main Container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <!-- Login Container -->
            <div class="row border rounded-5 p-3 bg-white shadow box-area">
                <!-- Left Box  -->
                <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
                    <div class="featured-image mb-3">
                        <img src="{{asset('assets/images/K3.png')}}" class="img-fluid" alt="" style="width: 250px;">
                    </div>
                    <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Connecte Toi</p>
                    <small class="text-white text-wrap text-center font-15" style="width: 17rem;font-family: 'Courier New', Courier, monospace;"> Rejoignez nous pour une experience immersive</small>

                </div>
                <!-- Right Box -->
                <div class="col-md-6 right-box">
                    <div class="row align-items-center">
                        <div class="header-text mb-4">
                            <h2 >Bienvenue sur Tasks</h2>
                            <p class="">Gerer vos projets sur tous les aspects</p>
                        </div>
                        <form action="{{route('login')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="input-group mb-3">
                                    <input type="text" name="name" class="form-control form-control-lg bg-light fs-6" placeholder="Votre Identifiant">
                                </div>
                                <div class="input-group mb-1">
                                    <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Votre Mot de Passe">
                                </div>
                                <div class="input-group mb-5 d-flex justify-content-between">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="formCheck">
                                        <label for="formCheck" class="form-check-label text-secondary"><small>Se Souvenir de moi</small></label>
                                    </div>
                                    <div class="forget">
                                        <small><a href="">Mot de passe Oublié ?</a></small>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Se Connecter</button>
                                </div>

                                {{-- <div class="input-group mb-3">
                                    <button type="submit" class="btn btn-lg btn-light w-100 fs-6"><img src="{{asset('assets/images/google.png')}}" width="70" class="me-2" alt="">Connecter via Google</button>
                                </div> --}}

                        </form>

                        {{-- <div class="row d-flex justify-content-center align-items-center">
                            <small>Pas de Compte? <a href="register.html"> Créer un compte </a></small>
                        </div> --}}


                    </div>
                </div>
            </div>
    </div>
    
</body>
</html>