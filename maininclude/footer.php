    <!--Start footer-->
    <footer class="container-fluid bg-dark text-center p-2">
        <small class="text-white">Copyright &copy; 2022 || Designed by Cao Nhu Thuan
            <a class="nav-link " data-toggle="modal" data-target="#adminLoginModalCenter" href="#" href="#">Admin Login</a>
        </small>
    </footer>
    <!--End footer-->

    <!--Start student registration modal-->
    
    <!-- Modal -->
    <div class="modal fade" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stuRegModalCenterLabel">Student registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!-- Start Student registration from -->
            <form id="stuRegForm">
                <div class="form-group">
                    <i class="fa-solid fa-user"></i>
                    <label class="pl-2 font-weight-bold" for="stuname">Name</label>
                    <small id="statusMsg1"></small>
                    <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname"> 
                </div>

                <div class="form-group">
                    <i class="fa-solid fa-envelope"></i>
                    <label class="pl-2 font-weight-bold" for="stuemail">Email</label>
                     <small id="statusMsg2"></small>
                    <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail"> 
                </div>
 
                <div class="form-group">
                    <i class="fa-solid fa-lock"></i>
                    <label class="pl-2 font-weight-bold" for="stupass">New Password</label>
                    <small id="statusMsg3"></small>
                    <input type="password" class="form-control" placeholder="New Password" name="stupass" id="stupass"> 
                </div>
            </form>
            <!-- End Student registration form-->
            </div>
            <div class="modal-footer">
                <span id="successMsg"></span>
                <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>   
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
    </div>

    <!--End student registration modal-->

    <!--Start student login modal-->
    
    <!-- Modal -->
    <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!-- Start Student login form-->
            <form id="stuLoginForm">
                <div class="form-group">
                    <i class="fa-solid fa-envelope"></i>
                    <label class="pl-2 font-weight-bold" for="stuLogemail">Email</label>
                    <input type="text" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail"> 
                </div>
                
                <div class="form-group">
                    <i class="fa-solid fa-lock"></i>
                    <label class="pl-2 font-weight-bold" for="stuLogpass">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass"> 
                </div>
            </form>
            <!-- End Student login form-->
            </div>
            <div class="modal-footer">
                <small id="statusLogMsg"></small>
                <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                
            </div>
            </div>
        </div>
    </div>

    <!--End student login modal-->


    <!--Start admin login modal-->
    
    <!-- Modal -->
    <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!-- Start admin login form-->
            <form id="adminLoginForm">
                <div class="form-group">
                    <i class="fa-solid fa-envelope"></i>
                    <label class="pl-2 font-weight-bold" for="adminLogemail">Email</label>
                    <small id="statusAdminLogMsg"></small>
                    <input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail"> 
                </div>

                <div class="form-group">
                    <i class="fa-solid fa-lock"></i>
                    <label class="pl-2 font-weight-bold" for="adminLogpass">Password</label>
                    
                    <input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass"> 
                </div>
            </form>
            <!-- End admin login form-->
            </div>
            <div class="modal-footer">
                <span id="successMsg"></span>
                <button type="button" class="btn btn-primary" onclick="checkAdminLogin()" id="adminLogin">Login</button>   
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
    </div>

    <!--End admin login modal-->

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/all.min.js"></script>

    <script type="text/javascript" src="js/admin.js"></script>
    <script type="text/javascript" src="js/myjs.js"></script>

    <script src="https://kit.fontawesome.com/a4e9d2dc97.js" crossorigin="anonymous"></script>
</html>