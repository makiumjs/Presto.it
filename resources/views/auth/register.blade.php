<x-layout>
  <x-slot name='title'>{{__('ui.reg')}}</x-slot>
  
  
  <div class="container-fluid bg-register min-vh-100 ">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="padding-top mb-4 fw-bold">{{__('ui.reg')}}</h1>           
      </div>
      <div class="col-11 col-md-6 col-lg-4 offset-md-2 offset-lg-4 form-box d-flex justify-content-center pt-4 pb-5 mx-auto mb-5">
        <div class="register-form-container">
          {{-- Alert errors --}}
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>   
                @endif
                {{-- form --}}
                <form action="{{route('register')}}" method="POST">
                    @csrf
                        <h5 class="mt-3 fw-bold">{{__('ui.reg-name')}}</h5>
                        <div class="form-floating mb-3">
                          <input type="text" id="registerTitle" class="form-control input-register"  aria-describedby="emailHelp" name="name" placeholder="Nome e Cognome" value={{old('name')}}>
                          <label for="registerTitle" class="form-label text-black-50">{{__('ui.reg-name')}}</label>
                        </div>
                        <h5 class="mt-3 fw-bold">{{__('ui.reg-email')}}</h5>
                        <div class="form-floating mb-3">
                          <input type="email" id="registerEmail"  class="form-control input-register" name="email" placeholder="name@example.com" value={{old('email')}}>
                          <label for="registerEmail" class="form-label text-black-50">{{__('ui.reg-email')}}</label>
                        </div>
                        <h5 class="mt-3 fw-bold">{{__('ui.reg-pass')}}</h5>
                        <div class="form-floating mb-3">
                          <input type="password" id="registerPassword" class="form-control input-register" name="password" placeholder="exemple">
                          <label  for="registerPassword" class="form-label text-black-50">{{__('ui.reg-pass')}}</label>
                        </div>
                        <h5 class="mt-3 fw-bold">{{__('ui.reg-confirm')}}</h5>
                        <div class="form-floating mb-3">
                          <input type="password" id="registerPasswordConf" class="form-control input-register" name="password_confirmation" placeholder="exemple">
                          <label for="registerPasswordConf" class="form-label text-black-50" >{{__('ui.reg-confirm')}}</label>
                        </div>
                        <button type="submit" class="form-btn w-100">{{__('ui.reg')}}</button>
                </form>
              </div>
            </div>
        </div>
    </div>
</x-layout>
