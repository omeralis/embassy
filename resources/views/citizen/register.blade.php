@extends('citizen.header')

 
 

    
  <body>
    <main class="d-flex w-100">
      <div class="container d-flex flex-column">
        <div class="row vh-100">
          <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">
  
              <div class="d-flex justify-content-center py-4">
                <a href="/" class="logo d-flex align-items-center w-auto">
                  <img src="{{ asset('css/front/assets/img/logosd.png') }}" alt="">
                  <span class="d-none d-lg-block"> </span>
                </a>
              </div> 

  
              <div class="card">
                <div class="card-body">
                  <div class="m-sm-3">
                    <form action="{{ url('/register') }}" method="POST" class="row g-3 needs-validation" novalidate>
                      @csrf  

                      <div class="col-12">
                        <label for="yourUsername" class="form-label form-control-lg">  الاسم   </label>
                        <div class="input-group has-validation">
                           
                          <input type="text" id="name" name="name" required  class="form-control form-control-lg"   >
                          <div class="invalid-feedback"> </div>
                        </div>
                      </div>

                      

                      <div class="col-12">
                        <label for="yourUsername" class="form-label form-control-lg">  رقم الجوال   </label>
                        <div class="input-group has-validation">
                           
                          <input type="text" id="phone_number" name="phone_number" required  class="form-control form-control-lg"   >
                          <div class="invalid-feedback"> </div>
                        </div>
                      </div>


                      <div class="col-12">
                        <label for="yourUsername" class="form-label form-control-lg">رقم الهوية</label>
                        <div class="input-group has-validation">
                           
                          <input type="text" id="igama_number" name="igama_number" required  class="form-control form-control-lg"   >
                          <div class="invalid-feedback"> </div>
                        </div>
                      </div>
  
                      <div class="col-12">
                        <label for="yourPassword" class="form-label">كلمة المرور</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                        <div class="invalid-feedback">إدخل كلمة المرور</div>
                      </div>
  
  
                      @if ($errors->any())
                          <div>
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
  
  
                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                          <label class="form-check-label" for="rememberMe"> تذكرني</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">دخول</button>
                      </div>
                      <div class="col-12">
                        <p class="small mb-0">ليس لديك حساب؟<a href="/register">  إنشاء حساب</a></p>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              {{-- <div class="text-center mb-3">  Don't have an account? <a href="pages-sign-up.html">Sign up</a>   </div> --}}
            </div>
          </div>
        </div>
      </div>
    </main>
  
    <script src=" {{ asset('css/adminkit-dev/static/js/app.js') }}"></script>
  
  </body>
  
  </html>