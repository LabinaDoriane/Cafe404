<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="javascript.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <title>Café404</title>
</head>

<body>
  <nav class="navbar  navbar-light bg-dark ">
    <img src="cafe404.png" width="100" height="80" class="d-inline-block align-top" alt="">
    <div class="row">
      <p class="navbar-brand text-light text-center" href="#">
        Tableau de bord
      </p>
      <p class="navbar-brand text-light text-center" id="date" href="#"> </p>
    </div>
    <div class="col-1"></div>
    </div>

  </nav>

  <div class="row d-flex justify-content-around mt-3">

    <div class="card  d-flex justify-center mt-3" style="width: 18rem;">
      <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-laptop -center"  fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z" />
        <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z" />
      </svg>
      <div class="card-body">
        <h5 class="card-title">Ordinateur de bureau 1</h5>
        <p class="card-text" id="utilisation">Disponible</p>

        <button type="button" class="bouton" data-toggle="modal" data-target="#exampleModal"data-whatever="@mdo"
         id="situation">Disponible</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ordinateur de bureau </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nom de l'utilisateur</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Temps de réservation</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <div class="btn-group">
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Temps de reserve
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" onclick= "timer1()" href="#">10min</a>
                    <a class="dropdown-item" onclick= "timer2()"  href="#">20min</a>
                    <a class="dropdown-item" onclick= "timer3()" href="#">30min</a>
                    <a class="dropdown-item" onclick= "timer4()"  href="#"> 1H</a>
                    <a class="dropdown-item" onclick= "timer5()"  href="#"> 2H</a>
                    <a class="dropdown-item" onclick= "timer6()" href="#">3H</a>
                    <div class="dropdown-divider"></div>
                  </div>
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"  
                onclick="defaut(); defaut();">Annuler</button>
                <button type="button" class="btn btn-primary" 
                 onclick="couleur(); myFunction();" >Enregistrer</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card  d-flex justify-center mt-3" style="width: 18rem;">
      <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-laptop -center"  fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z" />
        <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z" />
      </svg>
      <div class="card-body">
        <h5 class="card-title">Ordinateur de bureau 2</h5>
        <p class="card-text" id="utilisation">Disponible</p>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
          data-whatever="@mdo" onclick="myFunction()"id="">Reserver un Ordinateur</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ordinateur de bureau </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nom de l'utilisateur</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Temps de réservation</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card  d-flex justify-center mt-3" style="width: 18rem;">
      <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-laptop -center"  fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z" />
        <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z" />
      </svg>
      <div class="card-body">
        <h5 class="card-title">Ordinateur de bureau 3</h5>
        <p class="card-text" id="utilisation">Disponible</p>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
          data-whatever="@mdo" onclick="myFunction()"id="">Reserver un Ordinateur</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ordinateur de bureau </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nom de l'utilisateur</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Temps de réservation</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card  d-flex justify-center mt-3" style="width: 18rem;">
      <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-laptop -center"  fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z" />
        <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z" />
      </svg>
      <div class="card-body">
        <h5 class="card-title">Ordinateur de bureau 4</h5>
        <p class="card-text" id="utilisation">Disponible</p>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
          data-whatever="@mdo" onclick="myFunction()"id="">Reserver un Ordinateur</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ordinateur de bureau </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nom de l'utilisateur</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Temps de réservation</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row d-flex justify-content-around mt-3">

    <div class="card  d-flex justify-center mt-3" style="width: 18rem;">
      <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-laptop -center"  fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z" />
        <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z" />
      </svg>
      <div class="card-body">
        <h5 class="card-title">Ordinateur de bureau 5</h5>
        <p class="card-text" id="utilisation">Disponible</p>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
          data-whatever="@mdo" onclick="myFunction()"id="">Reserver un Ordinateur</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ordinateur de bureau </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nom de l'utilisateur</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Temps de réservation</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card  d-flex justify-center mt-3" style="width: 18rem;">
      <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-laptop -center"  fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z" />
        <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z" />
      </svg>
      <div class="card-body">
        <h5 class="card-title">Ordinateur de bureau 6</h5>
        <p class="card-text" id="utilisation">Disponible</p>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
          data-whatever="@mdo" onclick="myFunction()"id="">Reserver un Ordinateur</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ordinateur de bureau </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nom de l'utilisateur</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Temps de réservation</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card  d-flex justify-center mt-3" style="width: 18rem;">
      <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-laptop -center"  fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z" />
        <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z" />
      </svg>
      <div class="card-body">
        <h5 class="card-title">Ordinateur de bureau 7</h5>
        <p class="card-text" id="utilisation">Disponible</p>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
          data-whatever="@mdo" onclick="myFunction()"id="">Reserver un Ordinateur</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ordinateur de bureau </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nom de l'utilisateur</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Temps de réservation</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card  d-flex justify-center mt-3" style="width: 18rem;">
      <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-laptop -center"  fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z" />
        <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z" />
      </svg>
      <div class="card-body">
        <h5 class="card-title">Ordinateur de bureau 8</h5>
        <p class="card-text" id="utilisation">Disponible</p>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
          data-whatever="@mdo" onclick="myFunction()"id="">Reserver un Ordinateur</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ordinateur de bureau </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nom de l'utilisateur</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Temps de réservation</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row d-flex justify-content-around mt-3">

    <div class="card  d-flex justify-center mt-3" style="width: 18rem;">
      <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-laptop -center"  fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z" />
        <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z" />
      </svg>
      <div class="card-body">
        <h5 class="card-title">Ordinateur de bureau 9</h5>
        <p class="card-text" id="utilisation">Disponible</p>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
          data-whatever="@mdo" onclick="myFunction()"id="">Reserver un Ordinateur</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ordinateur de bureau </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nom de l'utilisateur</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Temps de réservation</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card  d-flex justify-center mt-3" style="width: 18rem;">
      <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-laptop -center"  fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z" />
        <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z" />
      </svg>
      <div class="card-body">
        <h5 class="card-title">Ordinateur de bureau 10</h5>
        <p class="card-text" id="utilisation">Disponible</p>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
          data-whatever="@mdo" onclick="myFunction()"id="">Reserver un Ordinateur</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ordinateur de bureau 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nom de l'utilisateur</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Temps de réservation</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card  d-flex justify-center mt-3" style="width: 18rem;">
      <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-laptop -center"  fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z" />
        <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z" />
      </svg>
      <div class="card-body">
        <h5 class="card-title">Ordinateur de bureau 11</h5>
        <p class="card-text" id="utilisation">Disponible</p>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
          data-whatever="@mdo" onclick="myFunction()"id="">Reserver un Ordinateur</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ordinateur de bureau 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nom de l'utilisateur</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Temps de réservation</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card  d-flex justify-center mt-3" style="width: 18rem;">
      <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-laptop -center"  fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z" />
        <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z" />
      </svg>
      <div class="card-body">
        <h5 class="card-title">Ordinateur de bureau 12</h5>
        <p class="card-text" id="utilisation">Disponible</p>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
          data-whatever="@mdo" onclick="myFunction()"id="">Reserver un Ordinateur</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ordinateur de bureau 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nom de l'utilisateur</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Temps de réservation</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>