<div class="sidebar sidebar-mobile" id="open-profile-sidebar">
    <div class="sidebar-content">

        <div class="sidebar-header clearfix d-lg-none">
            <button type="button" class="close toggle-show p-3"
                    data-show="open-profile-sidebar" aria-label="Close">
                <i class="icon icon-cross font-size-lg"></i>
            </button>
        </div>

        <!-- Profile account links -->
        <div class="mb-4 px-4 p-lg-0">
            <ul class="list-group list-group-clean">

                <li class="list-group-item text-muted d-flex justify-content-between align-items-center">
                    <label class="pre-label">Account</label>
                </li>

                <li class="list-group-item  active">
                    <a href="{{ route('profile-users') }}">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>
                                <i class="icon icon-user mr-2"></i>
                                <span>Profile account</span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="list-group-item ">
                    <a href="{{ route('profile.payment') }}">
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="icon icon-cart mr-2"></i>
                                <span>Paymnet methods</span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="list-group-item ">
                    <a href="{{ route('profile.notifications') }}">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>
                                <i class="icon icon-alarm mr-2"></i>
                                <span>Notifications</span>
                            </span>
                        </div>
                    </a>
                </li>

            </ul>

        </div>

        <!-- Profile dashboard links -->

        <div class="mb-4 px-4 p-lg-0">
            <ul class="list-group list-group-clean">

                <li class="list-group-item text-muted d-flex justify-content-between align-items-center">
                    <label class="pre-label">Dashboard</label>
                </li>

                <li class="list-group-item ">
                    <a href="{{ route('profile.orders') }}">
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="icon icon-cart mr-2"></i>
                                <span>Chat</span>
                            </span>
                            <span class="badge  badge-pill">125</span>
                        </div>
                    </a>
                </li>

                <li class="list-group-item ">
                    <a href="{{ route('profile.whishlist') }}">
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="icon icon-heart mr-2"></i>
                                <span>Projects</span>
                            </span>
                            <span class="badge  badge-pill">9</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Profile reset -->

        <div class="mb-4 px-4 p-lg-0">
            <ul class="list-group list-group-clean">

                <li class="list-group-item text-muted d-flex justify-content-between align-items-center">
                    <label class="pre-label">Access</label>
                </li>

                <li class="list-group-item ">
                    <a href="{{ route('profile.reset-password') }}">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>
                                <i class="icon icon-lock mr-2"></i>
                                <span>Reset password</span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="list-group-item">
                    <a href="{{ route('logout') }}">
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="icon icon-enter-down mr-2"></i>
                                <span>Sign out</span>
                            </span>
                        </div>
                    </a>
                </li>

            </ul>

        </div>
    </div>
</div>
