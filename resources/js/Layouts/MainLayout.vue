<template>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <Link :href="route('home')" class="logo d-flex align-items-center">
                <img src="storage/assets/img/logo.png" alt="" />
                <span class="d-none d-lg-block">NextHome</span>
            </Link>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link nav-icon"
                        href="#"
                        data-bs-toggle="dropdown"
                    >
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">1</span> </a
                    ><!-- End Messages Icon -->

                    <ul
                        class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages"
                    >
                        <li class="dropdown-header">
                            You have 1 new messages
                            <a href="#"
                                ><span
                                    class="badge rounded-pill bg-primary p-2 ms-2"
                                    >View all</span
                                ></a
                            >
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img
                                    src="storage/assets/img/messages-3.jpg"
                                    alt=""
                                    class="rounded-circle"
                                />
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>
                                        Velit asperiores et ducimus soluta
                                        repudiandae labore officia est ut...
                                    </p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>
                    </ul>
                    <!-- End Messages Dropdown Items -->
                </li>
                <!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3" v-if="currentUser">
                    <a
                        class="nav-link nav-profile d-flex align-items-center pe-0"
                        href="#"
                        data-bs-toggle="dropdown"
                    >
                        <img
                            src="storage/assets/img/profile-img.jpg"
                            alt="Profile"
                            class="rounded-circle"
                        />
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{
                            currentUser.name
                        }}</span> </a
                    ><!-- End Profile Iamge Icon -->

                    <ul
                        class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile"
                    >
                        <li class="dropdown-header">
                            <h6>{{ currentUser.name }}</h6>
                            <span>{{ currentUser.email }}</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a
                                class="dropdown-item d-flex align-items-center"
                                href="#"
                            >
                                <i class="bi bi-gear"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a
                                class="dropdown-item d-flex align-items-center"
                                href="#"
                            >
                                <i class="bi bi-key"></i>
                                <span>Change Password</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <Link
                                class="dropdown-item d-flex align-items-center"
                                :href="route('logout')"
                                method="PUT"
                                as="button"
                            >
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </Link>
                        </li>
                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <li class="nav-item pe-3" v-else>
                    <Link :href="route('login')">Login</Link>
                </li>
                <!-- End Profile Nav -->
            </ul>
        </nav>
        <!-- End Icons Navigation -->
    </header>

    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <Link class="nav-link" :href="route('home')">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </Link>
            </li>
            <!-- End Dashboard Nav -->

            <li class="nav-heading">Admin Section</li>

            <li class="nav-item">
                <a
                    class="nav-link collapsed"
                    data-bs-target="#masters-nav"
                    data-bs-toggle="collapse"
                    href="#"
                >
                    <i class="bi bi-menu-button-wide"></i><span>Masters</span
                    ><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul
                    id="masters-nav"
                    class="nav-content collapse"
                    data-bs-parent="#sidebar-nav"
                >
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Roles</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Masters Nav -->

            <li class="nav-heading">User Section</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="bi bi-people"></i>
                    <span>Employee</span>
                </a>
            </li>
            <!-- End Employee Nav -->
        </ul>
    </aside>

    <main id="main" class="main">
        <div
            class="alert alert-success alert-dismissible fade show"
            role="alert"
            v-if="successMsg"
        >
            {{ successMsg }}
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close"
            ></button>
        </div>
        <!-- End of Job Success Flash Alert -->
        <div
            class="alert alert-danger alert-dismissible fade show"
            role="alert"
            v-if="errorMsg"
        >
            {{ errorMsg }}
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close"
            ></button>
        </div>
        <!-- End of Job Fail Flash Alert -->

        <slot />
    </main>

    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong
            >. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer>
    <!-- End Footer -->

    <a
        href="#"
        class="back-to-top d-flex align-items-center justify-content-center"
        ><i class="bi bi-arrow-up-short"></i
    ></a>
</template>

<script setup>
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";
import { Link } from "@inertiajs/vue3";

const successMsg = computed(() => usePage().props.flash.success);
const errorMsg = computed(() => usePage().props.flash.error);
const currentUser = computed(() => usePage().props.currentUser);
</script>
