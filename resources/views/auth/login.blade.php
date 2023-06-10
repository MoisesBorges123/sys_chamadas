@extends('layouts.guest.unauth')
@section('css')
@endsection
@section('body')
<div class="page">
			<div class="page-content">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="">
								<div class="text-white">
									<div class="card-body">
										<form method="POST" action="{{ route('logon') }}">
											@csrf
										<h2 class="display-4 mb-2 font-weight-bold error-text text-center"><strong>SALA DE AULA</strong></h2>
										<h4 class="text-white-80 mb-7 text-center">Conectar a sua plataforma de chamadas.</h4>
										<div class="row">
											<div class="col-9 d-block mx-auto">
												<div class="input-group mb-4">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="fe fe-user"></i>
														</div>
													</div>
													<input type="text" class="form-control" name='login' placeholder="Usuário">
												</div>
												<div class="input-group mb-4">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="fe fe-lock"></i>
														</div>
													</div>
													<input type="password" class="form-control" name='password' placeholder="Senha">
												</div>
												<div class="row">
													<div class="col-12">
														<button type="submit" class="btn  btn-secondary btn-block px-4">Entrar...</button>
													</div>
													
												</div>
											</div>
										</div>
										
									</form>
									</div>
									
								</div>
							</div>
						</div>
						<div class="col-md-6 d-none d-md-flex align-items-center">
							<img src="{{URL::asset('assets/images/system/login/sign_in.svg')}}" style='width:70%' alt="img">
						</div>
					</div>
				</div>
			</div>
        </div>
@endsection
@section('js')
@endsection