<header class="main-header header" id="myHeader">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ route('home') }}">
            {{-- logo --}}
            <img src="{{ asset('images/logo.jpg') }}" alt="oneitech Logo">
            {{-- <img src="" alt="Knowledgehut Logo"> --}}
        </a>
        <a href="javascript:void(0)" class="navbar-toggler d-block d-xl-none" data-toggle="collapse"
            data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="f-icons f-navbar-toggler-icon"></i>
        </a>
        <div class="search-courses ml-auto d-block d-xl-none">
            <div class="dropdown open">
                <a href="javascript:void(0)" class="search-btn" data-toggle="dropdown" role="button"
                    aria-haspopup="true" aria-expanded="true"><i class="f-icons f-search-icon"></i></a>
            </div>
        </div>
        <div class="navbar-nav ml-auto nav-course-menu course-menu">
            <div class="nav-item courses-hover">
                <a class="nav-link" href="javascript:void(0)"><i class="f-icons f-new-course-icon"></i>
                    Courses</a>
            </div>
        </div>
        <div class="collapse navbar-collapse d-none d-xl-block">
            <ul class="navbar-nav ml-auto nav-course-menu header-user-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}"> Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Help</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ route('faqs') }}" rel="nofollow">FAQ</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('contact-us') }}">Contact Us</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.html">
                        <!--                             <div class="cart-fill"></div>
                           -->
                        <div class="cart-fill header-cart-item" style="display: none;"></div>
                        <i class="f-icons f-black-cart-icon"></i>
                    </a>
                </li>
                <li class="nav-item header-not-logged-item">
                    @if (!auth()->user())
                        <a class="btn btn-black" href="{{ route('login') }}" rel="nofollow">Sign In</a>
                    @else
                        <form action="{{ route('logout') }}">
                            @csrf
                            <a class="btn btn-black" href="#" rel="nofollow">Sign Out</a>
                        </form>
                    @endif
                </li>
                <li class="nav-item profile header-logged-item" style="display: none;">
                    <a class="nav-link d-flex justify-content-center align-items-center header-logged-a-cf"
                        href="javascript:void(0)">
                        {{-- user photo --}}
                        <img src="" alt="profile" height="40" witdth="40">
                        <i class="f-icons f-black-down-arrow-icon"></i>
                    </a>
                    <ul class="dropdown-menu clearfix" role="menu">
                        <li><a class="dropdown-item" href="{{ route('home') }}">Refer and Earn</a></li>
                        <li><a class="dropdown-item" href="{{ route('home') }}">Payment History</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div class="mobile-sidebar">
        <div class="navbar-collapse collapse d-block d-xl-none" id="navbar-collapse">
            <div>
                <div class="d-block d-xl-none mobile-sidebar-header clearfix">
                    Menu
                    <a href="javascript:void(0);" class="nav-close"><i class="f-icons f-black-close-icon"></i>
                    </a>
                </div>
            </div>
            <div class="mobile-sidebar-body" id="accordionone">
                <div class="mobile-sidebar-list course-accordionone">
                    <a class="mobile-sidebar-link collapsed" href="#course-dropdown" id="navbarDropdown9" role="button"
                        data-toggle="collapse" aria-haspopup="true" aria-expanded="false"> <i
                            class="f-icons f-new-course-icon"></i> Courses </a>
                    <ul class="collapse panel-collapse category-list" id="course-dropdown"
                        aria-labelledby="navbarDropdown9" data-parent="#accordionone" role="tabpanel">
                        <li class="category-link" id="category-0">
                            <a class="collapsed panel-heading category-heading" href="#course-category-0"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">Agile Methodology</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-0"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="agile-management/csm-certification-training.html">Certified
                                        ScrumMaster<sup>®</sup> (CSM)</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="agile-management/cspo-certification-training.html">Certified Scrum
                                        Product Owner<sup>®</sup>(CSPO) Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="agile-management/leading-safe-certification-training.html">Leading
                                        SAFe<sup>®</sup> 5.1</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="agile-management/psm-certification-training.html">Professional Scrum
                                        Master™(PSM)</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="agile-management/psmll-certification-training.html">Professional Scrum
                                        Master™ level II (PSM II) Training</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="agile-management/safe-40-scrum-master-with-ssm-certification-training.html">SAFe<sup>®</sup>5
                                        Scrum Master with SSM Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="agile-management/advanced-certified-scrummaster-training.html">Advanced
                                        Certified ScrumMaster™ (A-CSM™)</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="agile-management/advanced-certified-scrum-product-owner-training.html">Advanced
                                        Certified Scrum Product Owner℠ (A-CSPO℠)</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="agile-management/pmi-acp-certification-training.html">PMI-ACP®
                                        Certification Training</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="agile-management/safe-product-manager-product-owner-training.html">SAFe
                                        Product Owner Product Manager Certification (POPM)</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="agile-management/professional-scrum-product-owner-pspo-training.html">Professional
                                        Scrum Product Owner™(PSPO)</a>
                                </li>
                                <li class="course-list view-all-courses">
                                    <a class="course-link" href="agile-management.html">View all courses</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-1">
                            <a class="collapsed panel-heading category-heading" href="#course-category-1"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">Project Management</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-1"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/project-management/pmp-certification-training">PMP<sup>®</sup>
                                        Certification Course</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="project-management/prince2-foundation-and-practitioner-certification-training.html">PRINCE2<sup>®</sup>
                                        Foundation and Practitioner Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/project-management/prince2-foundation-certification-training">PRINCE2<sup>®</sup>
                                        Foundation Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="project-management/prince2-practitioner-certification-training.html">PRINCE2<sup>®</sup>
                                        Practitioner</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="project-management/change-management-training.html">Change
                                        Management</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="project-management/project-management-techniques-training.html">Project
                                        Management Techniques</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="project-management/capm-certification-training.html">CAPM<sup>®</sup></a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="project-management/pgmp-certification-training.html">Program
                                        Management Professional (PgMP)<sup>®</sup> Certification Training</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="project-management/pfmp-certification-training.html">PfMP<sup>®</sup>
                                        Certification Course</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="project-management/oracle-primavera-p6-v8-training.html">Oracle
                                        Primavera P6 V18.8</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="project-management/microsoft-project-2013-training.html">Microsoft<sup>®</sup>
                                        Project 2013</a>
                                </li>
                                <li class="course-list view-all-courses">
                                    <a class="course-link" href="project-management.html">View all courses</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-2">
                            <a class="collapsed panel-heading category-heading" href="#course-category-2"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">Data Science</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-2"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="data-science/data-science-with-python-certification-training.html">Data
                                        Science with Python Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="data-science/python-for-data-science-certification-training.html">Python
                                        for Data Science</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/data-science/machine-learning-with-python-certification-training">Machine
                                        Learning with Python</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="data-science/introduction-to-data-science-certification-training.html">Introduction
                                        to Data Science certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="data-science/data-science-bootcamp-training.html">Data Science Career
                                        Track Bootcamp</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/data-science/data-science-with-r-certification-training">Data
                                        Science with R</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/data-science/machine-learning-with-r-certification-training">Machine
                                        Learning with R</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/data-science/deep-learning-certification-training">Deep
                                        Learning</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/data-science/r-for-data-science-certification-training">R
                                        for Data Science Certification </a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/data-science/learn-natural-language-processing-with-python-nlp-course">Natural
                                        Language Processing (NLP)</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/data-science/learn-artificial-intelligence-introduction">Introduction
                                        to Artificial Intelligence (AI)</a>
                                </li>
                                <li class="course-list view-all-courses">
                                    <a class="course-link" href="https://www.knowledgehut.com/data-science">View
                                        all courses</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-3">
                            <a class="collapsed panel-heading category-heading" href="#course-category-3"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">DevOps</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-3"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/devops/devops-foundation-certification-training">DevOps
                                        Foundation Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/devops/docker-with-kubernetes-training">Docker
                                        with Kubernetes</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/devops/kubernetes-training">Kubernetes</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/devops/docker-training">Docker</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/devops/devops-training">DevOps</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/devops/devOps-leader-training">DevOps
                                        Leader</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/devops/jenkins-training">Jenkins</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/devops/openstack-training">OpenStack</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/devops/ansible-training">Ansible
                                        Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/devops/chef-training">Chef</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/devops/puppet-training">Puppet</a>
                                </li>
                                <li class="course-list view-all-courses">
                                    <a class="course-link" href="https://www.knowledgehut.com/devops">View all
                                        courses</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-4">
                            <a class="collapsed panel-heading category-heading" href="#course-category-4"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">Cloud Computing</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-4"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/cloud-computing/aws-solution-architect-certification-training">AWS
                                        Certified Solutions Architect- Associate Training</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/cloud-computing/aws-certified-cloud-practitioner-certification-training">AWS
                                        Cloud Practitioner</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/cloud-computing/aws-developer-associate-certification-training">AWS
                                        Developer Associate</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/cloud-computing/aws-technical-essentials-certification-training">AWS
                                        Technical Essentials</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/cloud-computing/aws-sysops-administrator-associate-certification-training">AWS
                                        SysOps Associate Administrator</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/cloud-computing/microsoft-azure-fundamentals-certification-training">Microsoft
                                        Azure Fundamentals</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-5">
                            <a class="collapsed panel-heading category-heading" href="#course-category-5"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">IT Service Management</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-5"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-service-management/togaf-prep-course">TOGAF<sup>®</sup>
                                        Prep Course (Level 1 and Level 2 Combined)</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-service-management/itil-foundation-certification-training">ITIL®
                                        V4 Foundation Certification Training</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-service-management/itil-practitioner">ITIL®Practitioner</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-service-management/itil-intermediate-service-strategy-training">ITIL®Intermediate
                                        Service Strategy</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-service-management/itil-intermediate-servicetransition-training">ITIL®Intermediate
                                        Service Transition</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-service-management/itil-intermediate-continual-service-improvement-training">ITIL®Intermediate
                                        Continual Service Improvement</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-service-management/itil-intermediate-service-operation-training">ITIL®
                                        Intermediate Service Operation</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-service-management/itil-intermediate-service-design-training">ITIL®
                                        Intermediate Service Design</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-service-management/itil-managing-across-the-lifecycle">ITIL<sup>®</sup>
                                        Managing Across the Lifecycle</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-service-management/itil-intermediate-operational-support-and-analysis-osa">ITIL®
                                        Intermediate Operational Support and Analysis (OSA)</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-service-management/itil-intermediate-planning-protection-and-optimization-ppo">ITIL®
                                        Intermediate Planning, Protection and Optimization (PPO)</a>
                                </li>
                                <li class="course-list view-all-courses">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-service-management">View all
                                        courses</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-6">
                            <a class="collapsed panel-heading category-heading" href="#course-category-6"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">Web Development</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-6"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/web-development/fullstack-development-bootcamp-training">Full
                                        Stack Development Career Track Bootcamp</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/web-development/front-end-development-bootcamp-training">Front-end
                                        Development Bootcamp</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/web-development/react-js">React</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/web-development/node-js-training">Node
                                        JS</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/web-development/angular-js-training">Angular</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/web-development/javaj2ee-and-soa-training">Java/J2EE
                                        and SOA</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/web-development/javascript">JavaScript</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/web-development/php-and-mysql-training">PHP
                                        and MySQL</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/web-development/mongodb-developer-course">MongoDB
                                        Developer Course</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/web-development/front-end-web-development-training">Front
                                        End Web Development</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/web-development/mongodb-administrator">MongoDB
                                        Administrator</a>
                                </li>
                                <li class="course-list view-all-courses">
                                    <a class="course-link" href="https://www.knowledgehut.com/web-development">View
                                        all courses</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-7">
                            <a class="collapsed panel-heading category-heading" href="#course-category-7"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">Programming</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-7"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/programming/python-programming-certification-training">Python
                                        Programming</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/programming/python-deep-dive-training">Advanced
                                        Python Course</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/programming/r-programming-language-certification-training">R
                                        Programming Language Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/programming/r-deep-dive-training">Advanced
                                        R Course</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/programming/java-training">Java</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/programming/java-deep-dive-training">Java
                                        Deep Dive</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/programming/scala-training">Scala</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/programming/advanced-scala">Advanced
                                        Scala</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/programming/c-sharp">C#</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/programming/microsoft-net-framework-training">Microsoft
                                        .Net Framework Training</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/programming/matlab-training">MATLAB
                                        Training</a>
                                </li>
                                <li class="course-list view-all-courses">
                                    <a class="course-link" href="https://www.knowledgehut.com/programming">View
                                        all courses</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-8">
                            <a class="collapsed panel-heading category-heading" href="#course-category-8"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">BI And Visualization</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-8"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/business-intelligence-and-visualization/tableau-training">Tableau</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/business-intelligence-and-visualization/data-visualisation-with-tableau">Data
                                        Visualisation with Tableau</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/business-intelligence-and-visualization/microsoft-power-bi-training">Microsoft
                                        Power BI</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/business-intelligence-and-visualization/tibco-spotfire-training">TIBCO
                                        Spotfire</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/business-intelligence-and-visualization/data-visualization-with-qlikview">Data
                                        Visualization with QlikView</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/business-intelligence-and-visualization/sisense-bi">Sisense
                                        BI</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-9">
                            <a class="collapsed panel-heading category-heading" href="#course-category-9"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">Big Data</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-9"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/big-data/hadoop-administration-training">Hadoop
                                        Administration Course</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/big-data/big-data-and-hadoop-training">Big
                                        Data and Hadoop Course</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/big-data/big-data-analytics-training">Big
                                        Data Analytics Course</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/big-data/apache-spark-and-scala-training">Apache
                                        Spark and Scala</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/big-data/apache-storm-training">Apache
                                        Storm</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/big-data/apache-kafka-training">Apache
                                        Kafka</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/big-data/machine-learning-with-apache-mahout">Machine
                                        Learning with Apache Mahout</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/big-data/comprehensive-pig">Comprehensive
                                        Pig</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/big-data/comprehensive-hive">Comprehensive
                                        Hive</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-10">
                            <a class="collapsed panel-heading category-heading" href="#course-category-10"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">Mobile App Development</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-10"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/mobile-app-development/android-development-training">Android
                                        Development</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/mobile-app-development/ios-development-training">IOS
                                        Development</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/mobile-app-development/react-native">React
                                        Native</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/mobile-app-development/ionic-training">Ionic</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/mobile-app-development/xamarin-studio">Xamarin
                                        Studio</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/mobile-app-development/xamarin-training">Xamarin
                                        Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/mobile-app-development/opengl">OpenGL</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/mobile-app-development/nativescript-for-mobile-app-development">NativeScript
                                        for Mobile App Development</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-11">
                            <a class="collapsed panel-heading category-heading" href="#course-category-11"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">Software Testing</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-11"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/software-testing/selenium-essentials">Selenium
                                        Essentials</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/software-testing/istqb-foundation-training">ISTQB<sup>®</sup>
                                        Foundation</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/software-testing/istqb-certified-advanced-level-security-tester-training">ISTQB®
                                        Certified Advanced Level Security Tester</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/software-testing/istqb-certified-advanced-level-test-manager-training">ISTQB®
                                        Certified Advanced Level Test Manager</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/software-testing/istqb-certified-advanced-level-test-analyst-training">ISTQB®
                                        Certified Advanced Level Test Analyst</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/software-testing/istqb-advanced-level-technical-test-analyst-training">ISTQB®
                                        Advanced Level Technical Test Analyst</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/software-testing/silk-test-workbench">Silk
                                        Test–Workbench</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/software-testing/automation-testing-using-testcomplete">Automation
                                        Testing using TestComplete</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/software-testing/cucumber-training">Cucumber</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/software-testing/functional-testing-using-ranorex-training">Functional
                                        Testing Using Ranorex</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/software-testing/teradata">Teradata</a>
                                </li>
                                <li class="course-list view-all-courses">
                                    <a class="course-link" href="https://www.knowledgehut.com/software-testing">View
                                        all courses</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-12">
                            <a class="collapsed panel-heading category-heading" href="#course-category-12"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">Business Management</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-12"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/business-management/business-case-writing-training">Business
                                        Case Writing</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/business-management/cbap-certification-training">Certified
                                        Business Analysis Professional™ (CBAP<sup>®</sup>)Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/business-management/certification-of-competency-in-business-analysis-certification-training">CCBA<sup>®</sup>
                                        Prep Course</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/business-management/pmi-pba-certification-training">PMI-PBA®
                                        Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/business-management/entry-certificate-in-business-analysisecba-training">Entry
                                        Certificate in Business Analysis™ (ECBA)™</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/business-management/agile-business-analysis-training">Agile
                                        Business Analysis</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/business-management/IREB-certified-professional-for-requirements-engineering-training">IREB
                                        Certified Professional for Requirements Engineering</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-13">
                            <a class="collapsed panel-heading category-heading" href="#course-category-13"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">Quality Management</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-13"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/quality-management/lean-six-sigma-black-belt-certification-training">Lean
                                        Six Sigma Black Belt Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/quality-management/lean-six-sigma-green-belt-certification-training">Lean
                                        Six Sigma Green Belt Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/quality-management/lean-six-sigma-yellow-belt-certification-training">Lean
                                        Six Sigma Yellow Belt Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/quality-management/cmmi-training">CMMI<sup>®</sup>V1.3</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-14">
                            <a class="collapsed panel-heading category-heading" href="#course-category-14"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">IT Security</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-14"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-security/certified-ethical-hacker-v10-training">Certified
                                        Ethical Hacker (CEH V10) Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-security/cisa-certification-training">CISA<sup>®</sup></a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-security/cism-training">CISM<sup>®</sup></a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-security/cissp-training">CISSP<sup>®</sup></a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-security/CIPP-E-certification-training">CIPP/E-Certification
                                        training</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-security/cobit-5-foundation-training">COBIT<sup>®</sup>5</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-security/pci-data-security-standard-training">PCI
                                        - Data Security Standard</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/it-security/introduction-to-forensic-training">Introduction
                                        to Forensic</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-15">
                            <a class="collapsed panel-heading category-heading" href="#course-category-15"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">Digital Marketing</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-15"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/digital-marketing-courses/digital-marketing-training">Digital
                                        Marketing</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/digital-marketing-courses/search-engine-optimization">Search
                                        Engine Optimization</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/digital-marketing-courses/pay-per-click-advertising">Pay
                                        Per Click Advertising</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/digital-marketing-courses/web-analytics">Web
                                        Analytics</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/digital-marketing-courses/social-media">Social
                                        Media</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/digital-marketing-courses/content-marketing">Content
                                        Marketing</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/digital-marketing-courses/e-mail-marketing">E-mail
                                        Marketing</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/digital-marketing-courses/display-advertising">Display
                                        Advertising</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/digital-marketing-courses/conversion-optimization">Conversion
                                        Optimization</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/digital-marketing-courses/mobile-marketing">Mobile
                                        Marketing</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-16">
                            <a class="collapsed panel-heading category-heading" href="#course-category-16"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">Risk Management</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-16"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/risk-management/introduction-to-the-european-union-general-data-protection-regulation-training">Introduction
                                        to the European Union General Data Protection Regulation</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/risk-management/frm-level-1-certification-training">FRM<sup>®</sup>
                                        Level 1 Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/risk-management/frm-level-2-certification-training">FRM<sup>®</sup>Level
                                        2 Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/risk-management/risk-management-and-internal-controls-training">RISK
                                        MANAGEMENT AND INTERNAL CONTROLS</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/risk-management/dataprotection-associate">Data
                                        Protection-Associate</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-17">
                            <a class="collapsed panel-heading category-heading" href="#course-category-17"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">Finance</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-17"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/finance/credit-risk-management-training">Credit
                                        Risk Management</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/finance/budget-analysis-and-forecasting-training">Budget
                                        Analysis and Forecasting</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/finance/ifrs-for-smes-training">IFRS for
                                        SMEs</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/finance/diploma-in-international-financial-reporting-training">Diploma
                                        In International Financial Reporting</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/finance/certificate-in-international-financial-reporting-training">Certificate
                                        in International Financial Reporting</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/finance/corporate-governance">Corporate
                                        Governance</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/finance/finance-for-non-finance-managers-training">Finance
                                        for Non-Finance Managers</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/finance/financial-modeling-with-excel-training">Financial
                                        Modeling with Excel</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/finance/auditing-and-assurance-training">Auditing
                                        and Assurance</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-18">
                            <a class="collapsed panel-heading category-heading" href="#course-category-18"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">Database</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-18"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/database/mysql">MySQL</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/database/redis">Redis</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/database/postgresql">PostgreSQL</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/database/master-neo4j-graph-database">Master
                                        Neo4J Graph Database</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/database/mariadb-for-developers">MariaDB
                                        For Developers</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/database/hbase">Hbase</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-19">
                            <a class="collapsed panel-heading category-heading" href="#course-category-19"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">Soft Skills Training</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-19"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/soft-skills-training/conflict-management">Conflict
                                        Management</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/soft-skills-training/communication-training">Communication</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/soft-skills-training/communication-skills-mastery-training">Communication
                                        Skills Mastery</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/soft-skills-training/communication-skills-intensive-training">Communication
                                        Skills Intensive</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/soft-skills-training/international-certificate-in-advanced-leadership-skills">International
                                        Certificate In Advanced Leadership Skills</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/soft-skills-training/soft-skills-communication">Soft
                                        Skills - Communication</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/soft-skills-training/soft-skills-for-corporate-career-growth">Soft
                                        Skills for Corporate Career Growth</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/soft-skills-training/soft-skills-leadership">Soft
                                        Skills Leadership</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/soft-skills-training/building-team-trust-workshop">Building
                                        Team Trust Workshop</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-20">
                            <a class="collapsed panel-heading category-heading" href="#course-category-20"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">CompTIA</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-20"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/comptia-courses/comptia-a-certification-training">CompTIA
                                        A+ Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/comptia-courses/comptia-cloud-essentials-certification-training">CompTIA
                                        Cloud Essentials Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/comptia-courses/comptia-cloud-certification">CompTIA
                                        Cloud+ Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/comptia-courses/comptia-mobility-certification">CompTIA
                                        Mobility+ Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/comptia-courses/comptia-network-certification">CompTIA
                                        Network+ Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/comptia-courses/comptia-security-certification">CompTIA
                                        Security+ Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/comptia-courses/comptia-server-certification">CompTIA
                                        Server+ Certification</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/comptia-courses/comptia-project-certification">CompTIA
                                        Project+ Certification</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-link" id="category-21">
                            <a class="collapsed panel-heading category-heading" href="#course-category-21"
                                id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                aria-expanded="false">Other</a>
                            <ul class="collapse panel-collapse course-category" id="course-category-21"
                                aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/other-courses/ms-excel-2010-training">MS
                                        Excel 2010</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/other-courses/advanced-excel-2013-training">Advanced
                                        Excel 2013</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/other-courses/IoT">IoT</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/other-courses/xbrl-training">XBRL</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/other-courses/certified-supply-chain-professional">Certified
                                        Supply Chain Professional</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/other-courses/software-estimation-and-measurement-using-ifpug-fpa">Software
                                        Estimation and Measurement Using IFPUG FPA</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/other-courses/software-size-estimation-and-measurement-using-ifpug-fpa-and-snap">Software
                                        Size Estimation and Measurement using IFPUG FPA & SNAP</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/other-courses/leading-and-delivering-world-class-product-management-training">Leading
                                        and Delivering World Class Product Development Course</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/other-courses/product-management-and-product-marketing-for-telecoms-it-and-software">Product
                                        Management and Product Marketing for Telecoms IT and Software</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/other-courses/foundation-certificate-in-marketing-training">Foundation
                                        Certificate in Marketing</a>
                                </li>
                                <li class="course-list">
                                    <a class="course-link"
                                        href="https://www.knowledgehut.com/other-courses/flow-measurement-and-custody-transfer-training">Flow
                                        Measurement and Custody Transfer Training Course</a>
                                </li>
                                <li class="course-list view-all-courses">
                                    <a class="course-link" href="https://www.knowledgehut.com/other-courses">View
                                        all courses</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!--                 <div class="mobile-sidebar-footer">
                  <a href="https://prism.knowledgehut.com/" class="btn">Sign In</a>
                  </div>
                  -->
            <div class="mobile-sidebar-footer header-not-logged-item">
                <a href="index-1.htm" class="btn">Sign In</a>
            </div>
        </div>
    </div>
</header>
