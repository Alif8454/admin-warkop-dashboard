<?php $this->extend("layouts/main") ?>
<?php $this->section("content") ?>

          
            <div class="row gap-20 masonry pos-r">
              <h4 class="c-grey-900">UI Elements</h4>
              <div class="masonry-sizer col-md-6"></div>
              <div class="masonry-item col-md-6">
                <div class="bgc-white p-20 bd">
                  <h6 class="c-grey-900">Alerts</h6>
                  <div class="mT-30">
                    <div class="alert alert-primary" role="alert">
                      This is a primary alertâ€”check it out!
                    </div>
                    <div class="alert alert-secondary" role="alert">
                      This is a secondary alertâ€”check it out!
                    </div>
                    <div class="alert alert-success" role="alert">
                      This is a success alertâ€”check it out!
                    </div>
                    <div class="alert alert-danger" role="alert">
                      This is a danger alertâ€”check it out!
                    </div>
                    <div class="alert alert-warning" role="alert">
                      This is a warning alertâ€”check it out!
                    </div>
                    <div class="alert alert-info" role="alert">
                      This is a info alertâ€”check it out!
                    </div>
                    <div class="alert alert-light" role="alert">
                      This is a light alertâ€”check it out!
                    </div>
                    <div class="alert alert-dark" role="alert">
                      This is a dark alertâ€”check it out!
                    </div>
                  </div>
                </div>
              </div>
              <div class="masonry-item col-md-6">
                <div class="bgc-white p-20 bd">
                  <h6 class="c-grey-900">Buttons</h6>
                  <div class="mT-30">
                    <div class="gap-10 peers">
                      <div class="peer">
                        <button type="button" class="btn cur-p btn-primary btn-color">Primary</button>
                      </div>
                      <div class="peer">
                        <button type="button" class="btn cur-p btn-secondary btn-color">Secondary</button>
                      </div>
                      <div class="peer">
                        <button type="button" class="btn cur-p btn-success btn-color">Success</button>
                      </div>
                      <div class="peer">
                        <button type="button" class="btn cur-p btn-danger btn-color">Danger</button>
                      </div>
                      <div class="peer">
                        <button type="button" class="btn cur-p btn-warning">Warning</button>
                      </div>
                      <div class="peer">
                        <button type="button" class="btn cur-p btn-info btn-color">Info</button>
                      </div>
                      <div class="peer">
                        <button type="button" class="btn cur-p btn-light">Light</button>
                      </div>
                      <div class="peer">
                        <button type="button" class="btn cur-p btn-dark btn-color">Dark</button>
                      </div>
                    </div>

                    <div class="w-100 gap-10 peers mY-20">
                      <div class="peer">
                        <button type="button" class="btn cur-p btn-outline-primary">Primary</button>
                      </div>
                      <div class="peer">
                        <button type="button" class="btn cur-p btn-outline-secondary">Secondary</button>
                      </div>
                      <div class="peer">
                        <button type="button" class="btn cur-p btn-outline-success">Success</button>
                      </div>
                      <div class="peer">
                        <button type="button" class="btn cur-p btn-outline-danger">Danger</button>
                      </div>
                      <div class="peer">
                        <button type="button" class="btn cur-p btn-outline-warning">Warning</button>
                      </div>
                      <div class="peer">
                        <button type="button" class="btn cur-p btn-outline-info">Info</button>
                      </div>
                      <div class="peer">
                        <button type="button" class="btn cur-p btn-outline-light">Light</button>
                      </div>
                      <div class="peer">
                        <button type="button" class="btn cur-p btn-outline-dark">Dark</button>
                      </div>
                    </div>

                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                      <div class="btn-group me-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-success btn-color">1</button>
                        <button type="button" class="btn btn-success btn-color">2</button>
                        <button type="button" class="btn btn-success btn-color">3</button>
                        <button type="button" class="btn btn-success btn-color">4</button>
                      </div>
                      <div class="btn-group me-2" role="group" aria-label="Second group">
                        <button type="button" class="btn btn-success btn-color">5</button>
                        <button type="button" class="btn btn-success btn-color">6</button>
                        <button type="button" class="btn btn-success btn-color">7</button>
                      </div>
                      <div class="btn-group" role="group" aria-label="Third group">
                        <button type="button" class="btn btn-success btn-color">8</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="masonry-item col-md-6">
                <div class="bgc-white p-20 bd">
                  <h6 class="c-grey-900">Dropdowns</h6>
                  <div class="mT-30">
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>

                    <!-- Example split danger button -->
                    <div class="btn-group mT-20">
                      <button type="button" class="btn btn-danger btn-color">Action</button>
                      <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="masonry-item col-md-6">
                <div class="bgc-white p-20 bd">
                  <h6 class="c-grey-900">List Group</h6>
                  <div class="mT-30">
                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        The current link item
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                      <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                      <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                      <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="masonry-item col-md-6">
                <div class="bgc-white p-20 bd">
                  <h6 class="c-grey-900">Modal</h6>
                  <div class="mT-30">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-color" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
              <div class="masonry-item col-md-6">
                <div class="bgc-white p-20 bd">
                  <h6 class="c-grey-900">Popover</h6>
                  <div class="mT-30">
                    <button type="button" class="btn btn-lg btn-danger btn-color" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
                  </div>
                </div>
              </div>
              <div class="masonry-item col-md-6">
                <div class="bgc-white p-20 bd">
                  <h6 class="c-grey-900">Progress</h6>
                  <div class="mT-30">
                    <!-- Progress Bars -->
                    <div class="layers">
                      <div class="layer w-100">
                        <h5 class="mB-5">100k</h5>
                        <small class="fw-600 c-grey-700">Visitors From USA</small>
                        <span class="pull-right c-grey-600 fsz-sm">50%</span>
                        <div class="progress mT-10">
                          <div class="progress-bar bgc-deep-purple-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="visually-hidden">50% Complete</span></div>
                        </div>
                      </div>
                      <div class="layer w-100 mT-15">
                        <h5 class="mB-5">1M</h5>
                        <small class="fw-600 c-grey-700">Visitors From Europe</small>
                        <span class="pull-right c-grey-600 fsz-sm">80%</span>
                        <div class="progress mT-10">
                          <div class="progress-bar bgc-green-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="visually-hidden">80% Complete</span></div>
                        </div>
                      </div>
                      <div class="layer w-100 mT-15">
                        <h5 class="mB-5">450k</h5>
                        <small class="fw-600 c-grey-700">Visitors From Australia</small>
                        <span class="pull-right c-grey-600 fsz-sm">40%</span>
                        <div class="progress mT-10">
                          <div class="progress-bar bgc-light-blue-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:40%;"> <span class="visually-hidden">40% Complete</span></div>
                        </div>
                      </div>
                      <div class="layer w-100 mT-15">
                        <h5 class="mB-5">1B</h5>
                        <small class="fw-600 c-grey-700">Visitors From India</small>
                        <span class="pull-right c-grey-600 fsz-sm">90%</span>
                        <div class="progress mT-10">
                          <div class="progress-bar bgc-blue-grey-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="visually-hidden">90% Complete</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="masonry-item col-md-6">
                <div class="bgc-white p-20 bd">
                  <h6 class="c-grey-900">Tootips</h6>
                  <div class="mT-30">
                    <button type="button" class="btn btn-primary btn-color" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                      Tooltip on top
                    </button>
                    <button type="button" class="btn btn-secondary btn-color" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
                      Tooltip on right
                    </button>
                    <button type="button" class="btn btn-success btn-color" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                      Tooltip on bottom
                    </button>
                    <button type="button" class="btn btn-danger btn-color" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
                      Tooltip on left
                    </button>
                  </div>
                </div>
              </div>
              
              <!-- Additional Bootstrap 5 Components -->
              <div class="masonry-item col-md-6">
                <div class="bgc-white p-20 bd">
                  <h6 class="c-grey-900">Button Sizes</h6>
                  <div class="mT-30">
                    <button type="button" class="btn btn-primary btn-lg btn-color mR-10">Large button</button>
                    <button type="button" class="btn btn-secondary btn-lg mR-10">Large button</button>
                    <br><br>
                    <button type="button" class="btn btn-primary btn-color mR-10">Default button</button>
                    <button type="button" class="btn btn-secondary mR-10">Default button</button>
                    <br><br>
                    <button type="button" class="btn btn-primary btn-sm btn-color mR-10">Small button</button>
                    <button type="button" class="btn btn-secondary btn-sm mR-10">Small button</button>
                  </div>
                </div>
              </div>
              
              <div class="masonry-item col-md-6">
                <div class="bgc-white p-20 bd">
                  <h6 class="c-grey-900">Badges</h6>
                  <div class="mT-30">
                    <h5>Example heading <span class="badge bg-primary">New</span></h5>
                    <h5>Example heading <span class="badge bg-secondary">2</span></h5>
                    <h5>Example heading <span class="badge bg-success">Success</span></h5>
                    <h5>Example heading <span class="badge bg-danger">Danger</span></h5>
                    <h5>Example heading <span class="badge bg-warning text-dark">Warning</span></h5>
                    <h5>Example heading <span class="badge bg-info">Info</span></h5>
                    <h5>Example heading <span class="badge bg-light text-dark">Light</span></h5>
                    <h5>Example heading <span class="badge bg-dark">Dark</span></h5>
                  </div>
                </div>
              </div>
              
              <div class="masonry-item col-md-6">
                <div class="bgc-white p-20 bd">
                  <h6 class="c-grey-900">Accordion</h6>
                  <div class="mT-30">
                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Accordion Item #1
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            This is the first item's accordion body. It is shown by default, until the collapse plugin adds the appropriate classes.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            This is the second item's accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="masonry-item col-md-6">
                <div class="bgc-white p-20 bd">
                  <h6 class="c-grey-900">Cards</h6>
                  <div class="mT-30">
                    <div class="card" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="masonry-item col-md-6">
                <div class="bgc-white p-20 bd">
                  <h6 class="c-grey-900">List Groups</h6>
                  <div class="mT-30">
                    <ul class="list-group">
                      <li class="list-group-item">An item</li>
                      <li class="list-group-item">A second item</li>
                      <li class="list-group-item">A third item</li>
                      <li class="list-group-item">A fourth item</li>
                      <li class="list-group-item">And a fifth one</li>
                    </ul>
                    <br>
                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action active">
                        The current link item
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                      <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                      <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="masonry-item col-md-6">
                <div class="bgc-white p-20 bd">
                  <h6 class="c-grey-900">Spinners</h6>
                  <div class="mT-30">
                    <div class="spinner-border text-primary" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-secondary" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-success" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-danger" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-warning" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-info" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-light" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-dark" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                    <br><br>
                    <div class="spinner-grow text-primary" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-secondary" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-success" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-danger" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          
        


        
<?php $this->endSection() ?>
<?php $this->section("scripts") ?>
<script>
      window.addEventListener('load', function load() {
        const loader = document.getElementById('loader');
        setTimeout(function() {
          loader.classList.add('fadeOut');
        }, 300);
      });
    </script>

<?php $this->endSection() ?>





