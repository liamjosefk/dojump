<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center mb-5" href="{{route('home')}}">
        <div class="sidebar-brand-text mx-3">
            <br>
           <span class="mb-5">
                DoJump
           </span>
            <br>
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Website
    </div>



    <!-- Nav Item - Pages Collapse Menu -->
{{--    <li class="nav-item {{ Request::is('admin/messages*') ? 'active' : '' }}">--}}
{{--        <a class="nav-link {{ Request::is(['admin/dashboard*', 'admin/reviews*', 'admin/projects*', 'admin/donations*', 'admin/mailchimp*', 'admin/image-gallery*', 'admin/users*']) ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseMessage" aria-expanded="true" aria-controls="collapseMessage">--}}
{{--            <i class="fas fa-fw fa-envelope"></i>--}}
{{--            <span>Messages</span>--}}
{{--        </a>--}}
{{--        <div id="collapseMessage" class="collapse {{ Request::is('admin/messages*') ? 'show' : '' }}" aria-labelledby="headingMessage" data-parent="#accordionSidebar">--}}
{{--            <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                <h6 class="collapse-header">Message Menu:</h6>--}}
{{--                <a class="collapse-item {{ Request::is('admin/messages*') ? 'active' : '' }}" href="{{route('message.index')}}">View Messages</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </li>--}}

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('admin/projects*') ? 'active' : '' }}">
        <a class="nav-link {{ Request::is(['admin/dashboard*', 'admin/reviews*', 'admin/messages*', 'admin/donations*', 'admin/mailchimp*', 'admin/image-gallery*', 'admin/users*']) ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapsePortfolio" aria-expanded="true" aria-controls="collapsePortfolio">
            <i class="fas fa-fw fa-film"></i>
            <span>Portfolio</span>
        </a>
        <div id="collapsePortfolio" class="collapse {{ Request::is('admin/projects*') ? 'show' : '' }}" aria-labelledby="headingPortfolio" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Stage Menu:</h6>
                <a class="collapse-item {{ Request::is('admin/projects/stage*') ? 'active' : '' }}" href="{{route('project.index')}}">View Projects</a>
                <a class="collapse-item" href="#" data-toggle="modal" data-target="#addProjectModal">Add Project</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('admin/image-gallery*') ? 'active' : '' }}">
        <a class="nav-link {{ Request::is(['admin/dashboard*', 'admin/reviews*', 'admin/messages*', 'admin/projects*', 'admin/donations*', 'admin/mailchimp*', 'admin/users*']) ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseImage" aria-expanded="true" aria-controls="collapseImage">
            <i class="fas fa-fw fa-image"></i>
            <span>Image Gallery</span>
        </a>
        <div id="collapseImage" class="collapse {{ Request::is('admin/image-gallery*') ? 'show' : '' }}" aria-labelledby="headingImage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gallery Menu:</h6>
                <a class="collapse-item {{ Request::is('admin/image-gallery/view*') ? 'active' : '' }}" href="{{route('image.index')}}">View Images</a>
                <a class="collapse-item" href="#" data-toggle="modal" data-target="#addImageModal">Add Image</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('admin/mailchimp*') ? 'active' : '' }}">
        <a class="nav-link {{ Request::is(['admin/dashboard*', 'admin/reviews*', 'admin/messages*', 'admin/projects*', 'admin/donations*', 'admin/image-gallery*', 'admin/users*']) ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseMailChimp" aria-expanded="true" aria-controls="collapseMailChimp">
            <i class="fas fa-fw fa-rss-square"></i>
            <span>MailChimp</span>
        </a>
        <div id="collapseMailChimp" class="collapse {{ Request::is('admin/mailchimp*') ? 'show' : '' }}" aria-labelledby="headingMailChimp" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">MailChimp Menu:</h6>
                <a class="collapse-item {{ Request::is('admin/mailchimp*') ? 'active' : '' }}" href="{{route('lead.index')}}">Emails Submitted</a>
                <a class="collapse-item" href="#" data-toggle="modal" data-target="#addEmailModal">Add Email</a>
                <a class="collapse-item" href="https://login.mailchimp.com/?locale=en&experiments=pact-2585-shorten-free-trial%3Apact-2585-variant-2&env=prod&referral=mailchimp.com%252F" target="_blank">
                    Go to MailChimp
                    <i class="fa fa-chevron-right animate-chevron"></i>
                </a>
            </div>
        </div>
    </li>



    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('admin/donations*') ? 'active' : '' }}">
        <a class="nav-link {{ Request::is(['admin/dashboard*', 'admin/reviews*', 'admin/messages*', 'admin/projects*', 'admin/mailchimp*', 'admin/image-gallery*', 'admin/users*']) ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseDonation" aria-expanded="true" aria-controls="collapseDonation">
            <i class="fas fa-fw fa-money-bill"></i>
            <span>Donations</span>
        </a>
        <div id="collapseDonation" class="collapse {{ Request::is('admin/donations*') ? 'show' : '' }}" aria-labelledby="headingDonation" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Donation Menu:</h6>
                <a class="collapse-item {{ Request::is('admin/donations*') ? 'active' : '' }}" href="{{route('donation.index')}}">All Donations</a>
{{--                <a class="collapse-item" href="#" data-toggle="modal" data-target="#addDonationModal">Add Donation</a>--}}
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
{{--    <li class="nav-item {{ Request::is('admin/reviews*') ? 'active' : '' }}">--}}
{{--        <a class="nav-link {{ Request::is(['admin/dashboard*', 'admin/messages*', 'admin/donations*', 'admin/projects*', 'admin/mailchimp*', 'admin/image-gallery*', 'admin/users*']) ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseReview" aria-expanded="true" aria-controls="collapseReview">--}}
{{--            <i class="fas fa-fw fa-pen"></i>--}}
{{--            <span>Reviews</span>--}}
{{--        </a>--}}
{{--        <div id="collapseReview" class="collapse {{ Request::is('admin/reviews*') ? 'show' : '' }}" aria-labelledby="headingReview" data-parent="#accordionSidebar">--}}
{{--            <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                <h6 class="collapse-header">Review Menu:</h6>--}}
{{--                <a class="collapse-item {{ Request::is('admin/reviews*') ? 'active' : '' }}" href="{{route('review.index')}}">All Reviews</a>--}}
{{--                <a class="collapse-item" href="#" data-toggle="modal" data-target="#addReviewModal">Add Review</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </li>--}}





    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('admin/users*') ? 'active' : '' }}">
        <a class="nav-link {{ Request::is(['admin/dashboard*', 'admin/messages*', 'admin/portfolio*', 'admin/donations*', 'admin/mailchimp*', 'admin/image-gallery*']) ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
            <i class="fas fa-fw fa-user"></i>
            <span>Users</span>
        </a>
        <div id="collapseUsers" class="collapse {{ Request::is('admin/users*') ? 'show' : '' }}" aria-labelledby="headingUsers" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User Menu:</h6>
                <a class="collapse-item {{ Request::is('admin/users*') ? 'active' : '' }}" href="{{route('user.index')}}">View Users</a>
                <a class="collapse-item" href="#" data-toggle="modal" data-target="#addUserModal">Add User</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('admin/websites*') ? 'active' : '' }}">
        <a class="nav-link {{ Request::is(['admin/dashboard*', 'admin/users*', 'admin/messages*', 'admin/portfolio*', 'admin/donations*', 'admin/mailchimp*', 'admin/image-gallery*']) ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseWebsite" aria-expanded="true" aria-controls="collapseWebsite">
            <i class="fas fa-fw fa-external-link-alt"></i>
            <span>Website</span>
        </a>
        <div id="collapseWebsite" class="collapse {{ Request::is('admin/websites*') ? 'show' : '' }}" aria-labelledby="headingWebsite" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Website Links:</h6>
                <a class="collapse-item"
                   href="https://sso.godaddy.com/?app=ssl-ccp&path=/"
                   target="_blank">
                    Domain / Hosting
                    <i class="fa fa-chevron-right animate-chevron"></i>
                </a>
                <a class="collapse-item"
                   href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fanalytics.google.com%2Fanalytics%2Fweb%2F%23&followup=https%3A%2F%2Fanalytics.google.com%2Fanalytics%2Fweb%2F&ifkv=ARpgrqfmr9sOl6BDiWwUxvqE0oxOBaHslB7WsLCDStVBiwrpMfsj7qw09uXhylVf6moZeX0mP_XmYg&passive=1209600&service=analytics&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S-533354674%3A1726541615753050&ddm=0"
                   target="_blank">
                    Google Analytics
                    <i class="fa fa-chevron-right animate-chevron"></i>
                </a>
            </div>
        </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>