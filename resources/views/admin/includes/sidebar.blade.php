<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('/')}}admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin: {{\Illuminate\Support\Facades\Auth::user()->name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon"></i>
                        <p>
                            Home Page
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('slider.create')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-danger"></i>
                                <p>Add New Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('slider.index')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-danger"></i>
                                <p>Manage Slider</p>
                            </a>
                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('student.create')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-info"></i>
                                <p>Add Student Info</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('student.index')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-info"></i>
                                <p>Manage Older Student </p>
                            </a>
                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('project.create')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-warning"></i>
                                <p>Add Photos/Gallery/Project</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('project.index')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-warning"></i>
                                <p>Manage Gallery/Project</p>
                            </a>
                        </li>

                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('text.create')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-success"></i>
                                <p>Add New Text</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('text.index')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-success"></i>
                                <p>Manage older Text </p>
                            </a>
                        </li>

                    </ul>


                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Testimonial Page
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('testimonial.create')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add New Testimonial</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('testimonial.index')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Manage Testimonial</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            About Page
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('about.create')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-danger"></i>
                                <p>Add about Florence</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('about.index')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-danger"></i>
                                <p>Manage About</p>
                            </a>
                        </li>

                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('florence.create')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Group Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('florence.index')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Manage Group Member</p>
                            </a>
                        </li>

                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('goal.create')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-warning"></i>
                                <p>Add Some Goal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('goal.index')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-warning"></i>
                                <p>Manage Goal List</p>
                            </a>
                        </li>

                    </ul>

                </li>



                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Course Page
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('course.create')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add New Course</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('course.index')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Manage Course List</p>
                            </a>
                        </li>

                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('content.create')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-info"></i>
                                <p>Add New Content</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('content.index')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-info"></i>
                                <p>Manage Content</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Blog Page
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('blog.create')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-success"></i>
                                <p>Add New Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('blog.index')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-success"></i>
                                <p>Manage Blog List</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Address (footer)
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('address.create')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-danger"></i>
                                <p>Add New Address</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('address.index')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-danger"></i>
                                <p>Manage Address List</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Publication Page
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('notice.create')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-danger"></i>
                                <p>Add New Notice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('notice.index')}}" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-danger"></i>
                                <p>Manage Notice List</p>
                            </a>
                        </li>

                    </ul>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>