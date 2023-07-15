<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_home') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_home') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('admin/home') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_home') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Dashboard"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>


            <li class="{{ Request::is('admin/settings') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_settings') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="settings"><i class="fas fa-hand-point-right"></i> <span>Settings</span></a></li>

            <li class="nav-item dropdown {{ Request::is('admin/home-page')||Request::is('admin/faq-page')||Request::is('admin/blog-page')||Request::is('admin/term-page')||Request::is('admin/privacy-page')||Request::is('admin/contact-page')||Request::is('admin/job-category-page')||Request::is('admin/pricing-page')||Request::is('admin/other-page') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Page Settings</span></a>
                <ul class="dropdown-menu">

                    <li class="{{ Request::is('admin/home-page') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_home_page') }}"><i class="fas fa-angle-right"></i>Home</a></li>

                    {{-- <li class="{{ Request::is('admin/faq-page') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_faq_page') }}"><i class="fas fa-angle-right"></i>FAQ</a></li>

                    <li class="{{ Request::is('admin/blog-page') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_blog_page') }}"><i class="fas fa-angle-right"></i>Blog</a></li>

                    <li class="{{ Request::is('admin/term-page') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_term_page') }}"><i class="fas fa-angle-right"></i>Terms of Use</a></li>

                    <li class="{{ Request::is('admin/privacy-page') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_privacy_page') }}"><i class="fas fa-angle-right"></i>Privacy Policy</a></li>

                    <li class="{{ Request::is('admin/contact-page') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_contact_page') }}"><i class="fas fa-angle-right"></i>Contact</a></li>

                    <li class="{{ Request::is('admin/job-category-page') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_job_category_page') }}"><i class="fas fa-angle-right"></i>Job Category</a></li>

                    <li class="{{ Request::is('admin/pricing-page') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_pricing_page') }}"><i class="fas fa-angle-right"></i>Pricing</a></li>

                    <li class="{{ Request::is('admin/other-page') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_other_page') }}"><i class="fas fa-angle-right"></i>Others</a></li> --}}




                </ul>
            </li>


            {{-- ////////////////////////////// job section ////////////////////////////////////// --}}

            {{-- <li class="nav-item dropdown {{ Request::is('admin/job-category/*')||Request::is('admin/job-location/*')||Request::is('admin/job-type/*')||Request::is('admin/job-experience/*')||Request::is('admin/job-gender/*')||Request::is('admin/job-salary/*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Job Section</span></a>
                <ul class="dropdown-menu">

                    <li class="{{ Request::is('admin/job-category/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_job_category') }}"><i class="fas fa-angle-right"></i>Job Category</a></li>

                    <li class="{{ Request::is('admin/job-location/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_job_location') }}"><i class="fas fa-angle-right"></i>Job Location</a></li>

                    <li class="{{ Request::is('admin/job-type/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_job_type') }}"><i class="fas fa-angle-right"></i>Job Type</a></li>

                    <li class="{{ Request::is('admin/job-experience/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_job_experience') }}"><i class="fas fa-angle-right"></i>Job Experience</a></li>

                    <li class="{{ Request::is('admin/job-gender/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_job_gender') }}"><i class="fas fa-angle-right"></i>Job Gender</a></li>

                    <li class="{{ Request::is('admin/job-salary/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_job_salary') }}"><i class="fas fa-angle-right"></i>Job Salary</a></li>


                </ul>
            </li> --}}



            {{-- ////////////////////////////// company section ////////////////////////////////////// --}}

            {{-- <li class="nav-item dropdown {{ Request::is('admin/company-location/*')||Request::is('admin/company-industry/*')||Request::is('admin/company-size/*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Company Section</span></a>
                <ul class="dropdown-menu">

                    <li class="{{ Request::is('admin/company-location/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_company_location') }}"><i class="fas fa-angle-right"></i>Company Location</a></li>

                    <li class="{{ Request::is('admin/company-industry/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_company_industry') }}"><i class="fas fa-angle-right"></i>Company Industry</a></li>

                    <li class="{{ Request::is('admin/company-size/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_company_size') }}"><i class="fas fa-angle-right"></i>Company Size</a></li>

                </ul>
            </li> --}}


             {{-- ////////////////////////////// subscribers section ////////////////////////////////////// --}}

             {{-- <li class="nav-item dropdown {{ Request::is('admin/all-subscribers')||Request::is('admin/subscribers-send-email') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Subscriber Section</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/all-subscribers') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_all_subscribers') }}"><i class="fas fa-angle-right"></i> All Subscribers</a></li>
                    <li class="{{ Request::is('admin/subscribers-send-email') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_subscribers_send_email') }}"><i class="fas fa-angle-right"></i> Send Email to Subscribers</a></li>
                </ul>
            </li> --}}


            {{-- //////////////////////////////////////////////////////////////////////////// --}}

            {{-- <li class="{{ Request::is('admin/why-choose/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_why_choose_item') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Why Choose Items"><i class="fas fa-hand-point-right"></i> <span>Why Choose Items</span></a></li> --}}

            {{-- <li class="{{ Request::is('admin/testimonial/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_testimonial') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Testimonials"><i class="fas fa-hand-point-right"></i> <span>Testimonials</span></a></li> --}}

            <li class="{{ Request::is('admin/Achievement/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_Achievement') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Achievements"><i class="fas fa-hand-point-right"></i> <span>Achievements</span></a></li>

            <li class="{{ Request::is('admin/Team/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_Team') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Team"><i class="fas fa-hand-point-right"></i> <span>Teams</span></a></li>

            <li class="{{ Request::is('admin/About/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_About') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="About"><i class="fas fa-hand-point-right"></i> <span>Abouts</span></a></li>

            <li class="{{ Request::is('admin/Social/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_Social') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Social"><i class="fas fa-hand-point-right"></i> <span>Socials</span></a></li>

            <li class="{{ Request::is('admin/Activity/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_Activity') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Activites"><i class="fas fa-hand-point-right"></i> <span>Activites</span></a></li>


            <li class="{{ Request::is('admin/all-contacts') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_all_contacts') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Contacts"><i class="fas fa-hand-point-right"></i> <span>Contacts</span></a></li>

            <li class="{{ Request::is('admin/all-activites') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_all_activites') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Activites"><i class="fas fa-hand-point-right"></i> <span>Activites</span></a></li>

            <li class="{{ Request::is('admin/sport-activites') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_sport_activites') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="sport_activites"><i class="fas fa-hand-point-right"></i> <span>Sport Activites</span></a></li>

            <li class="{{ Request::is('admin/all-social-search') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_all_social_search') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="all_social_search"><i class="fas fa-hand-point-right"></i> <span>Applications Search</span></a></li>






            {{-- <li class="{{ Request::is('admin/faq/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_faq') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="FAQ"><i class="fas fa-hand-point-right"></i> <span>FAQ</span></a></li> --}}

            {{-- <li class="{{ Request::is('admin/package/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_package') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="package"><i class="fas fa-hand-point-right"></i> <span>Package</span></a></li> --}}

            {{-- <li class="{{ Request::is('admin/advertisement') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_advertisement_page') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Advertisment"><i class="fas fa-hand-point-right"></i> <span>Advertisment</span></a></li> --}}

            {{-- <li class="{{ Request::is('admin/banner') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_banner_page') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Banners"><i class="fas fa-hand-point-right"></i> <span>Banners</span></a></li> --}}

        </ul>
    </aside>
</div>
