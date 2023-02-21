<div id="layoutSidenav_nav">
  <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
      <div class="nav">
        <a class="nav-link" href="index.php">
          <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
          Dashboard
        </a>
        <li class="nav-item">
          <a href="" id="nav-edit_employee" class="nav-link nav-edit" aria-expanded="true">
            <i class="sb-nav-link-icon fas fa-users"></i>
              Employees
              <i class="ps-2 fas fa-angle-down"></i>
          </a>
          <ul class="nav nav-treeview" id="nav-employees" style="display: none;">
            <li class="nav-item">
              <a href="#" class="nav-link tree-item">
                <i class="sb-nav-link-icon fas fa-angle-right nav-icon"></i>
                Add New
              </a>
            </li>
            <li class="nav-item">
              <a href="employees.php" class="nav-link tree-item">
                <i class="sb-nav-link-icon fas fa-angle-right nav-icon"></i>
                List
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link nav-edit" aria-expanded="true">
            <i class="sb-nav-link-icon fas fa-users"></i>
              Payroll
              <i class="ps-2 right fas fa-angle-down"></i>
          </a>
          <ul class="nav nav-treeview" id="nav-employees" style="display: none;">
            <li class="nav-item">
              <a href="#" class="nav-link tree-item">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Add New</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link tree-item">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>List</p>
              </a>
            </li>
          </ul>
        </li>
      </div>
    </div>
    <div class="sb-sidenav-footer">
      <div class="small">Logged in as:</div>
      Admin <strong>
        <?php echo $_SESSION['auth_user']['user_fname']; ?>
      </strong>
    </div>
  </nav>
</div>


<script>
  
var dropdowns = document.querySelectorAll('.nav-edit');
for (var i = 0; i < dropdowns.length; i++) {
  var dropdown = dropdowns[i];
  dropdown.nextElementSibling.style.display = 'none';

  dropdown.addEventListener('click', function(event) {
    event.preventDefault();
    var dropdownMenu = this.nextElementSibling;
    if (dropdownMenu.style.display === 'none') {
      dropdownMenu.style.display = 'block';
      
      var navLinks = document.querySelectorAll('.nav-link');
      for (var j = 0; j < navLinks.length; j++) {
        var navLink = navLinks[j];
        navLink.classList.remove('active');
      }
      this.classList.add('active');
      
    } else {
      dropdownMenu.style.display = 'none';
    }
  });
}
</script>