<div class="tab-content elevage">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
          <div class="content-body">
  <section id="basic-vertical-layouts">
    <div>
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            <div class="mb-2 content-header-left col-md-9 col-12">
                <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="float-left mb-0 content-header-title">Elevage</h2>
                    <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Forms</a>
                        </li>
                        <li class="breadcrumb-item active"><a href="#">Form Layouts</a>
                        </li>
                    </ol>
                    </div>
                </div>
                </div>
            </div>
            </div>
              <div class="content-body">
      <section id="basic-vertical-layouts">
        <div class="row">
          <div class="col-lg-12 col-md-6 col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Agriculture form</h4>
              </div>
              <div class="card-body">
                <form class="form form-vertical">
                  <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                          <label for="first-name-vertical">Id user</label>
                          <input
                            type="text"
                            id="first-name-vertical"
                            class="form-control"
                            name="user_id"
                            value={{$user->id}}
                            placeholder="First project"
                          />
                        </div>
                      </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label for="first-name-vertical">Nom projet</label>
                        <input
                          type="text"
                          id="first-name-vertical"
                          class="form-control"
                          name="nom_projet"
                          placeholder="First project"
                        />
                      </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="contact-info-vertical">Type Culture</label>
                            <select name="typecultures_id" class="form-control @error('speculation_id') is-invalid @enderror">
                                <option>Choisir le type de culture</option>
                                @foreach ($typeCultures as $key => $value)
                                    <option value="{{ $key }}"
                                        {{ $key == 1 ? 'selected' : '' }}>
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                            @error('speculation_id') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="contact-info-vertical">Spéculation</label>
                            <p id="test"></p>
                            <select name="speculation_id" class="form-control @error('speculation_id') is-invalid @enderror">
                                <option>Choisir la spéculation</option>

                                @foreach ($speculations as $key => $value)

                                    <option value="{{ $key }}"
                                        {{ $key == 1 ? 'selected' : '' }}>
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                            @error('speculation_id') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="contact-info-vertical">Variété</label>
                            <select name="variete_id" class="form-control @error('speculation_id') is-invalid @enderror">
                                <option>Choisir la variété</option>
                                @foreach ($varietes as $key => $value)
                                    <option value="{{ $key }}"
                                        {{ $key == 1 ? 'selected' : '' }}>
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                            @error('speculation_id') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="contact-info-vertical">Sols</label>
                            <select name="sol_id" class="form-control @error('speculation_id') is-invalid @enderror">
                                <option>Choisir le type de sol</option>
                                @foreach ($sols as $key => $value)
                                    <option value="{{ $key }}"
                                        {{ $key == 1 ? 'selected' : '' }}>
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                            @error('speculation_id') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                      <button type="reset" class="mr-1 btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-outline-secondary">Reset</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          {{-- <div class="col-md-6 col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Conseils</h4>
              </div>
              <div class="card-body">
                <form class="form form-vertical">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label for="first-name-icon">First Name</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i data-feather="user"></i></span>
                          </div>
                          <input
                            type="text"
                            id="first-name-icon"
                            class="form-control"
                            name="fname-icon"
                            placeholder="First Name"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label for="email-id-icon">Email</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i data-feather="mail"></i></span>
                          </div>
                          <input
                            type="email"
                            id="email-id-icon"
                            class="form-control"
                            name="email-id-icon"
                            placeholder="Email"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label for="contact-info-icon">Mobile</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i data-feather="smartphone"></i></span>
                          </div>
                          <input
                            type="number"
                            id="contact-info-icon"
                            class="form-control"
                            name="contact-icon"
                            placeholder="Mobile"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label for="password-icon">Password</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i data-feather="lock"></i></span>
                          </div>
                          <input
                            type="password"
                            id="password-icon"
                            class="form-control"
                            name="contact-icon"
                            placeholder="Password"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck4" />
                          <label class="custom-control-label" for="customCheck4">Remember me</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button type="reset" class="mr-1 btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-outline-secondary">Reset</button>
                    </div>
                  </div>
                </form>
                <h1>Partie conseil</h1>
              </div>
            </div>
          </div> --}}
        </div>
  </section>


</section>
</div>
</div>
</div>
