<?php include 'header.php'; ?>

<body>
  <header id="header">
    <h1><a href="../">Grese Hyseni</a></h1>
    <!-- .opened class will be added to #nav using a jquery funciton, to open the menu after clicking the menu button -->
    <nav id="nav">
      <ul class="menu">
        <li><a href="../">Home</a></li>
        <li><a href="../resume/">Resume</a></li>
        <li><a href="../portfolio/">Portfolio</a></li>
      </ul>
      <ul class="network">
        <li><a class="facebook" href="#"></a></li>
        <li><a class="linkedin" href="#"></a></li>
      </ul>
    </nav>
    <!-- .close class will be added using jquery function to change the shape of the menu icon to X after menu is opened -->
    <button id="show-nav">
      <span class="button-line"></span>
    </button>
  </header>
  <main id="main" class="portfolio">
    <h2 class="page-title">Portfolio</h2>
    <ul class="portfolio-entries">
      <li class="portfolio-entry content">
        <img src="../images/project5.PNG" alt="Expense Manager project screenshot" />
        <a href="#">
          <h3>Expense manager </h3>
        </a>
        <p>
          Web application developed in with express.js and bootstrap, that allows user to register daily expenses and get an insight of those ecpenses using filters and charts.Backend testing with mocha.js.
          Developed in team as part of a shcool project in Web Application Developement in Illinois Institute of Technology.
        </p>
        <p>
          <a target="_blank" href="http://economico.herokuapp.com" title="Economoco">Live</a>,
          <a target="_blank" href="https://github.com/IIT-Web-Application-Development/economico" title="Github Repository">GitHub</a>
        </p>
        <ul>
          <li>
            Front-end
          </li>
        </ul>
      </li>
      <li class="portfolio-entry content">
        <img src="../images/project6.PNG" alt="Trouble Ticket System project screenshot" />
        <a href="#">
          <h3>Trouble Ticket System </h3>
        </a>
        <p>
          Desktop application developed in Java, with JavaFX for GUI. It's a basic system that allows user (simple or admin) to register and keep history of tickets handling a certain problem
           and assigned to a certain user, department and category.
        </p>
        <p>
          <a target="_blank" href="https://github.com/ghyseni/trouble-ticket-system" title="GitHub Repository">GitHub</a>
        </p>
        <ul>
          <li>

          </li>
        </ul>
      </li>
    </ul>
  </main>

<?php include '../footer.php'?>
