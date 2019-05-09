<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a onclick="home()"  class="pull-left pointer"><img src="img/spacex_logo_white.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarColor01">
            <ul class="navbar-nav">
                <li id="home-button" class="nav-item"  onclick="home()" >
                    <a class="nav-link" >Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li id="about-button" class="nav-item">
                    <a class="nav-link"  onclick="about()" >About</a>
                </li>
                <li id="rockets-button" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  id="navbardrop" data-toggle="dropdown">
                      Rockets
                    </a>
                    <div onclick="rockets()" class="dropdown-menu">
                      <a onclick="starhopper()" class="dropdown-item" >Starhopper</a>
                      <a onclick="starship()" class="dropdown-item" >Starship</a>
                      <a onclick="booster()" class="dropdown-item" >Superheavy Booster</a>
                      <a onclick="falcon9()" class="dropdown-item" >Falcon9</a>
                    </div>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#myModal" >Contact</a>
                </li>

                <li class="nav-item">
                    <a id="beyond-button"  class="nav-link"  onclick="beyond()" >Beyond</a>
                </li>

            </ul>

        </div>
    </nav>
